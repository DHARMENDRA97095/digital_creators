<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Team Digital Creators</title>
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
                Team Of <span>Digital Creators</span>
            </h2>
            <p class="about-text">
                Comprehensive digital solutions tailored to help your business grow and succeed in the digital landscape.
            </p>
        </div>
    </section>

    <!-- ---------- Our Team ----------------------- -->

    <section class="py-5">
        <div class="container">
            <div class="row g-4">

                <?php
                include 'admin/config.php';
                $select = mysqli_query($conn, "SELECT * FROM `team`");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <!-- Profile 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="profile-card">
                            <img src="admin/<?= $row['image']; ?>" alt="Logo" class="profile-img" />
                            <h4><?= $row['name']; ?></h4>
                            <div class="profile-role"><?= $row['position']; ?></div>
                            <p class="profile-desc"><?= $row['description']; ?></p>
                            <!-- <div class="profile-info">
                                <p><strong>Phone:</strong> <span>+91 <?= $row['mobile'] ?></span></p>
                                <p><strong>Email:</strong> <span><?= $row['email'] ?></span></p>
                            </div> -->
                            <!-- <div class="mail-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div> -->
                        </div>
                    </div>
                <?php } ?>

                <!-- Profile 1 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="profile-card">
                        <img src="assest/image/director/Nikita_Maam.png" class="profile-img" alt="Neekita Kumari">
                        <h4>Neekita Kumari</h4>
                        <div class="profile-role">MBA (IT) – Sales & Management</div>
                        <p class="profile-desc">
                            Leading Digital Creatorss with vision and expertise in
                            software development, sales, and management.
                        </p>
                        <div class="profile-info">
                            <p><strong>Phone:</strong> <span>+91 8851613806</span></p>
                            <p><strong>Email:</strong> <span>director@digitalcreatorss.com</span></p>
                        </div>
                        <div class="mail-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>
                </div> -->


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