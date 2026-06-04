<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Parses and loads configuration variables from a local .env file.
 */
function load_env() {
    $path = __DIR__ . '/.env';
    if (!file_exists($path)) {
        return;
    }
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $line = trim($line);
        if (strpos($line, '#') === 0 || strpos($line, ';') === 0) {
            continue;
        }
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);
            $value = trim($value, '"\'');
            if (!array_key_exists($name, $_SERVER) && !array_key_exists($name, $_ENV)) {
                putenv("{$name}={$value}");
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
load_env();

/**
 * Sends an email using SMTP (Hostinger) and PHPMailer.
 *
 * @param string $to Recipient email address
 * @param string $subject Email subject
 * @param string $message HTML content of the email
 * @param string|null $reply_to_email Applicant/Inquirer email to set Reply-To
 * @param string|null $reply_to_name Applicant/Inquirer name
 * @param string|null $attachment_path Path to local attachment file
 * @param string|null $attachment_name Custom display name for attachment
 * @return bool True on success, false on failure
 */
function send_smtp_mail($to, $subject, $message, $reply_to_email = null, $reply_to_name = null, $attachment_path = null, $attachment_name = null) {
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = getenv('SMTP_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = getenv('SMTP_USER');
        $mail->Password   = getenv('SMTP_PASS');
        
        $encryption       = getenv('SMTP_ENCRYPTION') ?: 'tls';
        $mail->SMTPSecure = (strtolower($encryption) == 'ssl') ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = getenv('SMTP_PORT') ?: 587;

        // Sender & Recipient
        $from_email       = getenv('SMTP_FROM_EMAIL');
        $from_name        = getenv('SMTP_FROM_NAME') ?: 'Codelock Solutions';
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to);

        // Reply-To header so clicking Reply goes directly to the submitter
        if ($reply_to_email) {
            $mail->addReplyTo($reply_to_email, $reply_to_name ?: '');
        }

        // Attachments
        if ($attachment_path && file_exists($attachment_path)) {
            $mail->addAttachment($attachment_path, $attachment_name ?: '');
        }

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $mail->ErrorInfo);
        return false;
    }
}

/**
 * Builds a beautiful dark-themed HTML email matching the website's brand aesthetics.
 *
 * @param string $title Main headline
 * @param string $subtitle Explanatory subtitle
 * @param array $fields Associative array of fields (Label => Value)
 * @return string HTML email content
 */
function build_email_html($title, $subtitle, $fields) {
    $fields_html = '';
    foreach ($fields as $label => $value) {
        $clean_value = trim($value);
        if ($clean_value === '') {
            continue;
        }

        // Format links, emails, or text
        if (filter_var($clean_value, FILTER_VALIDATE_URL)) {
            $formatted_value = '<a href="' . htmlspecialchars($clean_value) . '" target="_blank">' . htmlspecialchars($clean_value) . '</a>';
        } elseif (filter_var($clean_value, FILTER_VALIDATE_EMAIL)) {
            $formatted_value = '<a href="mailto:' . htmlspecialchars($clean_value) . '">' . htmlspecialchars($clean_value) . '</a>';
        } else {
            $formatted_value = nl2br(htmlspecialchars($clean_value));
        }
        
        $fields_html .= '<tr>';
        $fields_html .= '<td class="info-label">' . htmlspecialchars($label) . '</td>';
        $fields_html .= '<td class="info-value">' . $formatted_value . '</td>';
        $fields_html .= '</tr>';
    }

    $year = date('Y');
    $timestamp = date('d-M-Y h:i:s A T');
    $template = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <style>
        body {
            /* background-color: #f5f7f4; */
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #2e322b;
            -webkit-font-smoothing: antialiased;
        }
        .wrapper {
            width: 100%;
            /* background-color: #f5f7f4; */
            padding: 40px 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #e2e6e1;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(114, 137, 72, 0.06);
        }
        .header {
            background: linear-gradient(135deg, #ffffff 0%, #f9faf9 100%);
            padding: 30px 40px;
            text-align: center;
            border-bottom: 1px solid #e2e6e1;
        }
        .logo {
            max-height: 45px;
            width: auto;
        }
        .content {
            padding: 40px;
        }
        .title {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 10px 0;
            color: #2e3524;
            letter-spacing: 0.5px;
        }
        .subtitle {
            font-size: 14px;
            color: #626a5c;
            margin: 0 0 30px 0;
            line-height: 1.5;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .info-table tr {
            border-bottom: 1px solid #edf0ec;
        }
        .info-table tr:last-child {
            border-bottom: none;
        }
        .info-label {
            padding: 16px 0;
            font-size: 11px;
            font-weight: 700;
            color: #728948;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 35%;
            vertical-align: top;
        }
        .info-value {
            padding: 16px 0;
            font-size: 15px;
            color: #2e322b;
            vertical-align: top;
            line-height: 1.5;
            word-break: break-all;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .info-value a {
            color: inherit !important;
            text-decoration: underline;
            font-weight: 600;
            word-break: break-all;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        .info-value a:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #f9faf9;
            padding: 25px 40px;
            text-align: center;
            border-top: 1px solid #e2e6e1;
        }
        .footer-text {
            font-size: 12px;
            color: #84897f;
            margin: 0;
            line-height: 1.6;
            text-align: center;
        }
        @media only screen and (max-width: 600px) {
            .wrapper {
                padding: 10px 0 !important;
            }
            .container {
                width: 100% !important;
                margin: 0 auto !important;
                border-radius: 16px !important;
            }
            .header {
                padding: 20px 20px !important;
            }
            .content {
                padding: 20px 20px !important;
            }
            .footer {
                padding: 20px 20px !important;
                text-align: center !important;
            }
            .footer-text {
                text-align: center !important;
            }
            .title {
                font-size: 20px !important;
            }
            .info-table, .info-table tbody, .info-table tr, .info-table td {
                display: block !important;
                width: 100% !important;
            }
            .info-table tr {
                padding: 12px 0 !important;
                border-bottom: 1px solid #edf0ec !important;
            }
            .info-table tr:last-child {
                border-bottom: none !important;
            }
            .info-label {
                width: 100% !important;
                padding: 0 0 4px 0 !important;
            }
            .info-value {
                width: 100% !important;
                padding: 0 !important;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <img src="https://codelocksolutions.in/images/logo.png" alt="CodeLock Solutions Logo" class="logo">
            </div>
            <div class="content">
                <h2 class="title">{$title}</h2>
                <p class="subtitle">{$subtitle}</p>
                <table class="info-table">
                    {$fields_html}
                </table>
            </div>
            <div class="footer">
                <p class="footer-text">
                    This is an automated system notification from <strong>CodeLock Solutions</strong>.<br>
                    &copy; {$year} CodeLock Solutions. All rights reserved.<br>
                    <span style="font-size: 10px; color: #a4a99f; display: block; margin-top: 8px;">Sent at: {$timestamp}</span>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
HTML;

    return $template;
}

