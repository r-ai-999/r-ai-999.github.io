<?php
header("Content-Type: text/plain");

// ---- Input ----
$url = isset($_POST["url"]) ? trim($_POST["url"]) : "";

if ($url === "") {
    echo "Error: No URL provided.";
    exit;
}

// ---- Validate ----
if (!filter_var($url, FILTER_VALIDATE_URL)) {
    echo "Error: Invalid URL format.";
    exit;
}

echo "Received URL: $url\n";
echo "Backend connection will be added in Phase 5.\n";
echo "This confirms the scanner is wired up correctly.";
