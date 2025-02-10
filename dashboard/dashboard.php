<?php
// Example of PHP code to include some necessary functionality, like authentication or session checking
// session_start();
// if (!isset($_SESSION['user_logged_in'])) {
//     header("Location: login.php");
//     exit();
// }

// Dummy data for rooms and rental status (You can replace this with actual database data)
$rooms = [
    ['id' => 1, 'room_number' => '101', 'status' => 'Occupied', 'renter' => 'John Doe', 'price' => 500],
    ['id' => 2, 'room_number' => '102', 'status' => 'Available', 'renter' => '', 'price' => 450],
    ['id' => 3, 'room_number' => '103', 'status' => 'Occupied', 'renter' => 'Jane Smith', 'price' => 550],
    ['id' => 4, 'room_number' => '104', 'status' => 'Available', 'renter' => '', 'price' => 400],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Rental Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

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

        .sidebar .header {
            font-size: 22px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }

        .dashboard-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .room-list {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .room-list th, .room-list td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .room-list th {
            background-color: #4CAF50;
            color: white;
        }

        .room-list tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="header">Room Rental Dashboard</div>
    <a href="dashboard.php">Dashboard</a>
    <a href="manage_rooms.php">Manage Rooms</a>
    <a href="bookings.php">Bookings</a>
    <a href="reports.php">Reports</a>
    <a href="logout.php">Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="dashboard-title">Room Rental System Dashboard</div>

    <table class="room-list">
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Status</th>
                <th>Renter</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room) : ?>
                <tr>
                    <td><?php echo $room['room_number']; ?></td>
                    <td><?php echo $room['status']; ?></td>
                    <td><?php echo $room['renter'] ?: 'N/A'; ?></td>
                    <td>$<?php echo $room['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Room Rental System | All Rights Reserved</p>
</div>

</body>
</html>
