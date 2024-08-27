<?php

$url = "https://www.berliner-zeitung.de";
$content = file_get_contents($url);

$pattern = '/<a\s+[^>]*?href="([^"]+)"[^>]*?>\s*<h[1-6][^>]*?>([^<]+)<\/h[1-6]>\s*<\/a>/';

preg_match_all($pattern, $content, $matches);

include "view.php";