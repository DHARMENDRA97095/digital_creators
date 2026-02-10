<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* -----------------Header----------------- */
        header {
            width: 100%;
            height: 50px;
            line-height: 50px;
            background: #c71c41;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
        }

        .header-content ul {
            display: flex;
        }

        .header-content ul li {
            margin-right: 30px;
            list-style: none;
        }

        .header-content ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .menu-btn {
            font-size: 20px;
            cursor: pointer;
        }

        /* Layout */
        .wraper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #1e1e2f;
            transition: all 0.3s ease;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li a {
            display: block;
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li a.active,
        .sidebar ul li a:hover {
            background: #0d6efd;
        }

        /* Sidebar hide */
        .sidebar.hide {
            margin-left: -250px;
        }

        /* Working panel */
        .working-panel {
            flex: 1;
            padding: 20px;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                height: 100%;
                z-index: 1000;
            }
        }
    </style>

</head>

<body>
    <!-- ------------------------------ Header Section-----------------------  -->
    <section>
        <header>
            <div class="container-fluid">
                <div class="header-content">
                    <div class="side-head">
                        <span class="text-white">Admin Pannel</span> &nbsp;
                        <i class="fas fa-bars menu-btn text-white"></i>
                    </div>
                    <div class="header-nav">
                        <ul>
                            <li><a href="#"><i class="fas fa-home"></i> Order</a></li>
                            <li><a href="#">Purches</a></li>
                            <li><a href="#">Users</a></li>
                            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

    </section>

    <!-- ------------------------------ Admin Dashboard --------------- -->
    <div class="wraper">
        <section class="sidebar">
            <ul class="nav-bar">
                <li><a href="#" data-page="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#" data-page="admin_page"><i class="fas fa-tachometer-alt"></i> Header & Footer Logo</a></li>
                <li><a href="#" data-page="home_services"><i class="fas fa-dolly-flatbed"></i> Home Services</a></li>
                <li><a href="#" data-page="main_blogs"><i class="fas fa-cogs"></i> Main Blog</a></li>
                <li><a href="#" data-page="who_we"><i class="fas fa-cogs"></i> About Me</a></li>
                <li><a href="#" data-page="team"><i class="fas fa-shopping-basket"></i> Team</a></li>
                <!-- <li><a href="#"><i class="fas fa-truck"></i> Order</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-truck-loading"></i> Delivery</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-images"></i> Slider Image</a></li> -->
                <!-- <li><a href="#"><i class="fas fa-cogs"></i> Setting</a></li> -->
                <li><a href="#"><i class="fas fa-id-badge"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </section>
        <section class="working-panel">
            <?php #include "ckeditor.php" ?>
            <div class="container-fluid">
                <!-- <h1 class="display-4">Welcome to Dashboard</h1> -->
                <div id="content-area">
                    <?php
                    $page = $_GET['page'] ?? 'dashboard';

                    $allowedPages = ['dashboard','admin_page','home_services', 'main_blogs','who_we','team', 'settings'];

                    if (in_array($page, $allowedPages)) {
                        include __DIR__ . "/pages/$page.php";
                    } else {
                        echo "<h3>Page not found</h3>";
                    }
                    ?>
                </div>

                <hr>


            </div>
        </section>
    </div>

    <!-- --------------- JS File --------------- -->
    <!-- <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../bootstrap.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        // Sidebar Toggle
        const menuBtn = document.querySelector(".menu-btn");
        const sidebar = document.querySelector(".sidebar");
        const navLinks = document.querySelectorAll(".nav-bar li a");

        menuBtn.addEventListener("click", () => {
            sidebar.classList.toggle("hide");
        });

        // Active Menu Highlight
        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                navLinks.forEach((item) => item.classList.remove("active"));
                link.classList.add("active");
            });
        });

        // Auto close sidebar on mobile after click
        if (window.innerWidth <= 768) {
            navLinks.forEach((link) => {
                link.addEventListener("click", () => {
                    sidebar.classList.add("hide");
                });
            });
        }

        // ************************************************************************************

        document.querySelectorAll(".nav-bar a").forEach((link) => {
            link.addEventListener("click", function(e) {
                e.preventDefault();

                const page = this.dataset.page;

                fetch("Dashboard.php?page=" + page)
                    .then((res) => res.text())
                    .then((html) => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, "text/html");

                        document.querySelector("#content-area").innerHTML =
                            doc.querySelector("#content-area").innerHTML;
                    });
            });
        });
    </script>
</body>

</html>