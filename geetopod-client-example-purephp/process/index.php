<?php
global $g_online, $g_uri;

if ($g_uri == '/') {
    g_theme('index.php');
} else if ($g_uri == '/s/work.html') {
    g_theme('work.php');
} else if ($g_uri == '/s/contact.html') {
    g_theme('contact.php');
} else if ($g_uri == '/s/shop.html') {
    g_theme('shop.php');
} else if ($g_uri == '/s/shop.html') {
    g_theme('shop.php');
} else if ($g_uri == '/s/blog.html') {
    g_theme('blog.php');
} else if ($g_uri == '/s/services.html') {
    g_theme('services.php');
} else if ($g_uri == '/s/work-grid-without-text.html') {
    g_theme('work-grid-without-text.php');
} else if ($g_uri == '/s/work-grid.html') {
    g_theme('work-grid.php');
} else {
    g_theme('index.php');
}

?>