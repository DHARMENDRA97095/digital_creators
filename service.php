<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Servics Digital Creators</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/about.css">
    <link rel="stylesheet" href="assest/css/style.css">
</head>

<body>

    <!-- ----------- Header ------------------ -->
    <?php include "assest/component/header.php" ?>

    <!-- ------------- Banner ----------------  -->
    <section class="about-section">
        <div class="container text-center">
            <h2 class="about-title">
                Services <span>Digital Creators</span>
            </h2>
            <p class="about-text">
                Comprehensive digital solutions tailored to help your business grow and succeed in the digital landscape.
            </p>
        </div>
    </section>

    <!-- --------------- Services Container ---------------- -->

    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <?php
                include 'admin/config.php';
                $select = mysqli_query($conn, "SELECT * FROM `home_services`");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="icon-box">
                                <img src="admin/<?= $row['image']; ?>" alt="Logo" class="navbar-logo" />
                            </div>
                            <h4><?= $row['title']; ?></h4>
                            <p><?= $row['para'] ?></p>
                            <ul>
                                <li>Custom Application Development</li>
                                <li>API Integration</li>
                                <li>Database Design</li>
                                <li>Cloud Solutions</li>
                                <li>Maintenance & Support</li>
                            </ul>
                        </div>
                    </div>

                <?php } ?>

                <!-- Card 2 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon-box">
                            <img src="assets/images/website.png" alt="Website Development">
                        </div>
                        <h4>Website Design & Development</h4>
                        <p>
                            Modern, responsive websites that look great on all devices.
                            We create websites that convert visitors into customers.
                        </p>
                        <ul>
                            <li>Responsive Design</li>
                            <li>CMS Integration</li>
                            <li>E-commerce Solutions</li>
                            <li>Performance Optimization</li>
                            <li>SEO-Friendly Structure</li>
                        </ul>
                    </div>
                </div> -->


            </div>
        </div>
    </section>


    <!-- ----------- Services Show ---------------  -->
    <section class="software-section py-5">
        <div class="container py-3">
            <div class="row align-items-center g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h2 class="software-title mb-3">Software Development</h2>

                    <p class="software-text">
                        We develop custom software solutions that streamline your business
                        processes and improve efficiency. Our team specializes in creating
                        scalable applications using modern technologies.
                    </p>

                    <p class="software-text">
                        From desktop applications to cloud-based solutions, we deliver
                        software that meets your specific requirements and integrates
                        seamlessly with your existing systems.
                    </p>

                    <ul class="software-list">
                        <li>Custom Application Development</li>
                        <li>API Integration</li>
                        <li>Database Design</li>
                        <li>Cloud Solutions</li>
                        <li>Maintenance & Support</li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 text-center">
                    <img
                        src="assest/image/banner/service1.jpg"
                        alt="Software Development Code"
                        class="img-fluid software-image">
                </div>

            </div>
        </div>

        <div class="container py-3">
            <div class="row align-items-center g-5">

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 text-center">
                    <img
                        src="assest/image/banner/service1.jpg"
                        alt="Software Development Code"
                        class="img-fluid software-image">
                </div>

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h2 class="software-title mb-3">Software Development</h2>

                    <p class="software-text">
                        We develop custom software solutions that streamline your business
                        processes and improve efficiency. Our team specializes in creating
                        scalable applications using modern technologies.
                    </p>

                    <p class="software-text">
                        From desktop applications to cloud-based solutions, we deliver
                        software that meets your specific requirements and integrates
                        seamlessly with your existing systems.
                    </p>

                    <ul class="software-list">
                        <li>Custom Application Development</li>
                        <li>API Integration</li>
                        <li>Database Design</li>
                        <li>Cloud Solutions</li>
                        <li>Maintenance & Support</li>
                    </ul>
                </div>



            </div>
        </div>

        <div class="container py-3">
            <div class="row align-items-center g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <h2 class="software-title mb-3">Software Development</h2>

                    <p class="software-text">
                        We develop custom software solutions that streamline your business
                        processes and improve efficiency. Our team specializes in creating
                        scalable applications using modern technologies.
                    </p>

                    <p class="software-text">
                        From desktop applications to cloud-based solutions, we deliver
                        software that meets your specific requirements and integrates
                        seamlessly with your existing systems.
                    </p>

                    <ul class="software-list">
                        <li>Custom Application Development</li>
                        <li>API Integration</li>
                        <li>Database Design</li>
                        <li>Cloud Solutions</li>
                        <li>Maintenance & Support</li>
                    </ul>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 text-center">
                    <img
                        src="assest/image/banner/service2.jpg"
                        alt="Software Development Code"
                        class="img-fluid software-image">
                </div>

            </div>
        </div>

    </section>

    <!-- -------------- Get Started -------------- -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title">Ready to Grow Your Business?</h2>
            <p class="cta-text">
                Let's discuss how we can help you achieve your digital goals
            </p>

            <div class="cta-buttons">
                <a href="#" class="btn btn-light cta-btn-primary">
                    Get Started Today
                </a>
                <a href="#" class="btn btn-outline-light cta-btn-secondary">
                    View Our Work
                </a>
            </div>
        </div>
    </section>

    <!-- ----------- Footer ------------------ -->
    <?php include "assest/component/footer.php" ?>

</body>

</html>