<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Creator | Footer </title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <footer class="dc-footer pt-5 pb-4">
        <div class="container">
            <div class="row gy-4">

                <?php
                include './admin/config.php';
                $select = mysqli_query($conn, "SELECT * FROM `logoimage`");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <!-- About -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <h3 class="footer-title">Digital Creators</h3>
                        <!-- <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                            <img src="admin/<?= $row['image']; ?>" alt="Logo" class="navbar-logo" />
                        </a> -->
                        <p class="footer-text mt-3">
                            <?= $row['para']; ?>
                            <!-- Digital Creatorss is an India-based software development and digital marketing company providing custom software,
                            website development, and online marketing solutions. -->
                        </p>
                    <?php } ?>

                    <div class="footer-social mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="footer-heading">Quick Links</h4>
                        <ul class="footer-links mt-3">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="footer-heading">Our Services</h4>
                        <ul class="footer-links mt-3">
                            <li><a href="#">Software Development</a></li>
                            <li><a href="#">Website Development</a></li>
                            <li><a href="#">Web Applications</a></li>
                            <li><a href="#">SEO Services</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Social Media Marketing</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="footer-heading">Contact Us</h4>

                        <ul class="footer-contact mt-3">
                            <li>
                                <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
                                <span>C-84, C-Block, Sec - 2, Noida, Uttar Pradesh, 201306</span>
                            </li>
                            <li>
                                <span class="icon"><i class="bi bi-telephone-fill"></i></span>
                                <span>+91 8851613806</span>
                            </li>
                            <li>
                                <span class="icon"><i class="bi bi-telephone-fill"></i></span>
                                <span>+91 9311240888</span>
                            </li>
                            <li>
                                <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                                <span>info@digitalcreatorss.com</span>
                            </li>
                        </ul>
                    </div>

            </div>

            <hr class="footer-line my-4">

            <div class="text-center footer-bottom">
                © 2026 Digital Creatorss. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>