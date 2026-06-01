<?php
header("Content-Type: application/xml; charset=utf-8");

// Parse current dynamic host and strip www.
$raw_host = $_SERVER['HTTP_HOST'];
$clean_host = preg_replace('/^www\./i', '', $raw_host);
$base_url = "https://" . $clean_host;

// Read sitemap template
$template_path = __DIR__ . '/sitemap-template.xml';
if (file_exists($template_path)) {
    $content = file_get_contents($template_path);
    
    // Dynamically replace default domain with active dynamic domain
    $dynamic_content = str_replace('https://codelocksolutions.com', $base_url, $content);
    echo $dynamic_content;
} else {
    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
}
