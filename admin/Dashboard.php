<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: #f4f6f9;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #212529;
            padding-top: 20px;
        }

        .sidebar h2 {
            color: white;
            text-align: center;
            font-size: 22px;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #0d6efd;
            border-radius: 5px;
            margin: 0 10px;
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .section-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Hide all sections initially */
        .dashboard-section {
            display: none;
        }

        /* Show active */
        .dashboard-section.active {
            display: block;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>ADMIN PANEL</h2>

        <a href="#" class="menu-link active" onclick="showSection(event, 'home')">🏠 Dashboard</a>
        <a href="admin_page.php" class="menu-link" onclick="showSection(event, 'logo')">🎨 Logo & Content</a>
        <a href="#" class="menu-link" onclick="showSection(event, 'blog')">📝 Blog Dashboard</a>
        <a href="#" class="menu-link" onclick="showSection(event, 'users')">👥 Users</a>
        <a href="#" class="menu-link" onclick="showSection(event, 'settings')">⚙️ Settings</a>
    </div>

    <!-- Content Area -->
    <div class="content">

        <!-- Header -->
        <div class="mb-4">
            <h1 class="fw-bold">Admin Dashboard</h1>
            <p class="text-muted">Manage your website content & dashboard sections</p>
        </div>

        <!-- ✅ Sections -->
        <div id="home" class="dashboard-section active section-box">
            <h3>🏠 Welcome Dashboard</h3>
            <p>This is the Home Dashboard section.</p>
        </div>

        <div id="logo" class="dashboard-section section-box">
            <?php include "admin_page.php" ?>
        </div>

        <div id="blog" class="dashboard-section section-box">
            <?php include "home_services.php" ?>
        </div>

        <div id="users" class="dashboard-section section-box">
            <h3>👥 Users Dashboard</h3>
            <p>Manage user roles, status, admin/user permissions.</p>
        </div>

        <div id="settings" class="dashboard-section section-box">
            <h3>⚙️ Settings Dashboard</h3>
            <p>Site settings, profile, logout, etc.</p>
        </div>

    </div>

    <!-- JavaScript -->
    <script>
        function showSection(event, sectionId) {
            event.preventDefault();

            // Hide all sections
            const sections = document.querySelectorAll(".dashboard-section");
            sections.forEach(section => section.classList.remove("active"));

            // Show selected section
            document.getElementById(sectionId).classList.add("active");

            // Remove active class from all links
            const links = document.querySelectorAll(".menu-link");
            links.forEach(link => link.classList.remove("active"));

            // Add active class to clicked link
            event.target.classList.add("active");
        }
    </script>

</body>

</html>