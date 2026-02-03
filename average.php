<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG System - Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
        }
        .sidebar h2 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar li {
            margin: 15px 0;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: #4CAF50;
        }
        .main {
            margin-left: 250px;
            flex: 1;
            padding: 20px;
            background: #f4f4f4;
            min-height: 100vh;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card h3 {
            color: #2196F3;
            margin-bottom: 10px;
        }
        .progress-bar {
            background: #e0e0e0;
            border-radius: 5px;
            height: 10px;
            margin: 10px 0;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            background: #4CAF50;
            border-radius: 5px;
        }
        .overview {
            margin-bottom: 30px;
        }
        .overview h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>SDG Dashboard</h2>
        <ul>
            <li><a href="#dashboard">Dashboard</a></li>
            <li><a href="management.html">Management</a></li>
            <li><a href="settings.html">Settings</a></li>
            <li><a href="login.html">Logout</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="overview">
            <h1>Admin Dashboard</h1>
            <p>Welcome to the SDG Management System. Monitor progress across all 17 Sustainable Development Goals.</p>
        </div>
        <div class="dashboard-grid">
            <div class="card">
                <h3>Goal 1: No Poverty</h3>
                <p>Progress: 75%</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%;"></div>
                </div>
                <p>Target: Reduce poverty by 50% by 2030.</p>
            </div>
            <div class="card">
                <h3>Goal 2: Zero Hunger</h3>
                <p>Progress: 60%</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 60%;"></div>
                </div>
                <p>Target: End hunger and ensure food security.</p>
            </div>
            <div class="card">
                <h3>Goal 3: Good Health</h3>
                <p>Progress: 70%</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 70%;"></div>
                </div>
                <p>Target: Ensure healthy lives for all.</p>
            </div>
            <!-- Add more cards for Goals 4-17 as needed -->
            <div class="card">
                <h3>Overall SDG Progress</h3>
                <p>Global Average: 68%</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 68%; background: #2196F3;"></div>
                </div>
                <p>Based on UN reports.</p>
            </div>
        </div>
    </div>
</body>
</html>