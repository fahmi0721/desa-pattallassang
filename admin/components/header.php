<?php
include('cek_session.php');
include('../config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Desa Pattallassang</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root { --primary-color: #00BFFF; }
        body { background-color: #f8f9fa; font-family: 'Inter', sans-serif; }
        .sidebar { min-height: 100vh; background: #ffffff; border-right: 1px solid #e9ecef; width: 260px; position: fixed; z-index: 1000; }
        .nav-link { color: #555; padding: 12px 20px; border-radius: 8px; margin: 4px 15px; transition: 0.3s; display: block; text-decoration: none; }
        .nav-link:hover, .nav-link.active { background: rgba(0, 191, 255, 0.1); color: var(--primary-color); font-weight: 600; }
        .main-content { margin-left: 260px; padding: 40px; width: calc(100% - 260px); }
        .stat-card { border: none; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.03); }
    </style>
</head>
<body>