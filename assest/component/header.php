<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Creator | Header </title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm py-2">
        <div class="container">
            <!-- Logo -->
            <!-- <a class="navbar-brand fw-bold logo-text" href="../index.php">
                <span class="logo-orange">Digital</span>
                <span class="logo-purple">Creators</span>
            </a> -->
            <?php
             include './admin/config.php';
            $select = mysqli_query($conn, "SELECT * FROM `logoimage`");
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                    <img src="admin/<?= $row['image']; ?>" alt="Logo" class="navbar-logo" />
                </a>
            <?php } ?>

            <!-- Mobile Toggle Button -->
            <button
                class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active nav-custom" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-custom" href="#">Contact</a>
                    </li>

                    <!-- Button -->
                    <li class="nav-item mt-3 mt-lg-0">
                        <a href="#" class="btn quote-btn px-4 py-2">
                            Get Quote
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>