<?php
require_once __DIR__ . "/session_check.php";
require_role("admin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Practical 10</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            padding: 30px 15px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .header h1 {
            color: #dc3545;
            font-size: 22px;
        }
        .btn-logout {
            padding: 8px 16px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
        }
        .btn-logout:hover {
            background-color: #bd2130;
        }
        .welcome-card {
            background: #fff3cd;
            border: 1px solid #ffeeba;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        .welcome-card h2 {
            color: #856404;
            font-size: 18px;
            margin-bottom: 8px;
        }
        .grid-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 25px;
        }
        .info-card {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 15px;
            border-radius: 6px;
        }
        .info-card strong {
            display: block;
            color: #6c757d;
            font-size: 12px;
            margin-bottom: 4px;
            text-transform: uppercase;
        }
        .info-card span {
            font-size: 16px;
            color: #333;
        }
        .actions {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }
        .btn {
            display: inline-block;
            padding: 10px 18px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Admin Control Panel</h1>
        <a href="logout.php" class="btn-logout">Log Out</a>
    </div>

    <div class="welcome-card">
        <h2>Administrator Session: <?php echo htmlspecialchars($_SESSION["name"]); ?></h2>
        <p>Elevated Role-Based Access Granted. All administrative management functions unlocked.</p>
    </div>

    <div class="grid-info">
        <div class="info-card">
            <strong>Admin Username</strong>
            <span><?php echo htmlspecialchars($_SESSION["username"]); ?></span>
        </div>
        <div class="info-card">
            <strong>Admin Email</strong>
            <span><?php echo htmlspecialchars($_SESSION["email"]); ?></span>
        </div>
        <div class="info-card">
            <strong>Active Session ID</strong>
            <span style="font-family:monospace; font-size:12px;"><?php echo session_id(); ?></span>
        </div>
        <div class="info-card">
            <strong>Access Level</strong>
            <span style="color:#28a745; font-weight:bold;">Full Administrator Rights</span>
        </div>
    </div>

    <div class="actions">
        <a href="../practical11/index.php" class="btn">Manage Students (Practical 11)</a>
        <a href="../practical12/index.php" class="btn">Manage Events (Practical 12)</a>
        <a href="../practical14/index.php" class="btn">Admin Dashboard (Practical 14)</a>
    </div>
</div>

</body>
</html>
