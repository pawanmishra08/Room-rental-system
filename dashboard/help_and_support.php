<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help and Support Sidebar</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* Sidebar Styles */
        .sidebar {
            height: 100%;
            width: 250px;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            color: white;
            font-family: Arial, sans-serif;
        }

        .sidebar a {
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .sidebar .active {
            background-color: #4CAF50;
        }

        .sidebar .header {
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .sidebar .help-section {
            margin-top: 20px;
        }

        .sidebar .help-section a {
            margin-bottom: 10px;
        }

        .sidebar .footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        .footer a {
            font-size: 14px;
            color: #ccc;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            color: white;
        }

        .footer i {
            margin: 0 10px;
            font-size: 20px;
            color: #ccc;
            transition: color 0.3s;
        }

        .footer i:hover {
            color: white;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="header">Help and Support</div>

    <div class="help-section">
        <a href="#" class="active">FAQ</a>
        <a href="#">Contact Support</a>
        <a href="#">Submit Feedback</a>
    </div>

    <div class="footer">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
    </div>
</div>

</body>
</html>
