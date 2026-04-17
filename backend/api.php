<?php

// =====================
// 📊 PROMETHEUS METRICS
// =====================
if ($_SERVER['REQUEST_URI'] == '/metrics') {
    header("Content-Type: text/plain");

    // Simple static metric (for demo)
    echo "# HELP http_requests_total Total HTTP Requests\n";
    echo "# TYPE http_requests_total counter\n";
    echo "http_requests_total 1\n";

    exit();
}


// =====================
// 🗂️ YOUR ORIGINAL LOGIC
// =====================

$file = "data.json";

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);

    $existing = [];
    if (file_exists($file)) {
        $existing = json_decode(file_get_contents($file), true);
    }

    $existing[] = $data;

    file_put_contents($file, json_encode($existing));
    echo "Saved";
}

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo "[]";
    }
}

?>
