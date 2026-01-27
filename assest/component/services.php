<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assest/css/style.css">
</head>

<body>

    <section class="services-section py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Our Services</h2>
                <p class="text-muted">
                    Comprehensive digital solutions to help your business succeed online
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">

                <?php
                include './admin/config.php';
                $select = mysqli_query($conn, "SELECT * FROM `home_services`");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="icon-box">
                                <!-- <i class="bi bi-code-slash"></i> -->
                                <img src="admin/<?= $row['image']; ?>" alt="Logo" class="navbar-logo" />
                            </div>
                            <h5><?= $row['title']; ?></h5>
                            <p>
                                <?= $row['para']; ?>
                            </p>
                        </div>
                    </div>

                <?php } ?>

                <!-- Card 2 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h5>Website Design & Development</h5>
                        <p>
                            Modern, responsive websites that look great on all devices.
                            We create websites that convert visitors into customers.
                        </p>
                    </div>
                </div> -->

                <!-- Card 3 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Web Application Development</h5>
                        <p>
                            Powerful web applications built with cutting-edge technologies.
                            From simple tools to complex enterprise solutions.
                        </p>
                    </div>
                </div> -->

                <!-- Card 4 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="bi bi-search"></i>
                        </div>
                        <h5>SEO Services</h5>
                        <p>
                            Improve your search engine rankings and drive organic traffic
                            to your website with our proven SEO strategies.
                        </p>
                    </div>
                </div> -->

                <!-- Card 5 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <h5>Digital Marketing</h5>
                        <p>
                            Comprehensive digital marketing services to grow your online
                            presence and reach your target audience effectively.
                        </p>
                    </div>
                </div> -->

                <!-- Card 6 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <h5>Social Media Marketing</h5>
                        <p>
                            Engage with your audience on social media platforms.
                            We create compelling content and manage your social presence.
                        </p>
                    </div>
                </div> -->

            </div>

            <!-- Button -->
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-warning btn-lg px-5">
                    View All Services
                </a>
            </div>

        </div>
    </section>

</body>

</html>