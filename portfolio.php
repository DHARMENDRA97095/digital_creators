<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portfolio Digital Creators</title>
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
                Portfolio <span>Digital Creators</span>
            </h2>
            <p class="about-text">
                Explore our portfolio of completed projects showcasing our expertise in web development, software solutions, and digital marketing.
            </p>
        </div>
    </section>

    <!-- -------------- Our Portfolio ------------ -->
    <section class="container py-5">

        <!-- 🔹 Filter Buttons -->
        <div class="text-center mb-5">
            <div class="filter-btns d-inline-flex gap-2 flex-wrap justify-content-center">
                <button class="btn active" data-filter="all">All</button>
                <button class="btn" data-filter="website">Website</button>
                <button class="btn" data-filter="software">Software</button>
                <button class="btn" data-filter="marketing">Marketing</button>
            </div>
        </div>

        <!-- 🔹 Cards -->
        <div class="row g-4 projects">

            <?php
            include 'admin/config.php';
            $select = mysqli_query($conn, "SELECT * FROM `portfolio`");
            while ($row = mysqli_fetch_assoc($select)) {
            ?>

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 project" data-category="<?= $row['data_category']; ?>">
                    <div class="project-card">
                        <img src="admin/<?= $row['image']; ?>" alt="Portfolio images" />
                        <div class="card-body">
                            <span class="badge website"><?= $row['badge']; ?></span>
                            <h5><?= $row['title'] ?></h5>
                            <p><?= $row['para'] ?></p>
                            <div class="tags">
                                <span><?= $row['tag1']; ?></span><span><?= $row['tag2']; ?></span><span><?= $row['tag3']; ?></span><span><?= $row['tag4']; ?></span><span><?= $row['tag5']; ?></span>
                            </div>
                            <a href="<?= $row['link'] ?>" class="details">View Project Details ↗</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Card 2 -->
            <!-- <div class="col-lg-4 col-md-6 project" data-category="website">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" alt="">
                    <div class="card-body">
                        <span class="badge website">Website</span>
                        <h5>Corporate Website</h5>
                        <p>Professional corporate site with CMS and optimization.</p>
                        <div class="tags">
                            <span>WordPress</span><span>PHP</span><span>CSS</span><span>JS</span>
                        </div>
                        <a href="#" class="details">View Project Details ↗</a>
                    </div>
                </div>
            </div> -->

            <!-- Card 3 -->
            <!-- <div class="col-lg-4 col-md-6 project" data-category="software">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4" alt="">
                    <div class="card-body">
                        <span class="badge software">Software</span>
                        <h5>E-commerce Website</h5>
                        <p>Secure e-commerce platform with payment integration.</p>
                        <div class="tags">
                            <span>React</span><span>Node</span><span>MongoDB</span><span>Stripe</span>
                        </div>
                        <a href="#" class="details">View Project Details ↗</a>
                    </div>
                </div>
            </div> -->

            <!-- Card 4 : Marketing -->
            <!-- <div class="col-lg-4 col-md-6 project" data-category="marketing">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Marketing Project">
                    <div class="card-body">
                        <span class="badge marketing">Marketing</span>
                        <h5>Digital Marketing Campaign</h5>
                        <p>Result-driven digital marketing strategy to boost brand visibility.</p>
                        <div class="tags">
                            <span>SEO</span>
                            <span>Google Ads</span>
                            <span>Meta Ads</span>
                            <span>Analytics</span>
                        </div>
                        <a href="#" class="details">View Project Details ↗</a>
                    </div>
                </div>
            </div> -->

            <!-- Card 5 : Marketing -->
            <!-- <div class="col-lg-4 col-md-6 project" data-category="marketing">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Marketing Project">
                    <div class="card-body">
                        <span class="badge marketing">Marketing</span>
                        <h5>Digital Marketing Campaign</h5>
                        <p>Result-driven digital marketing strategy to boost brand visibility.</p>
                        <div class="tags">
                            <span>SEO</span>
                            <span>Google Ads</span>
                            <span>Meta Ads</span>
                            <span>Analytics</span>
                        </div>
                        <a href="#" class="details">View Project Details ↗</a>
                    </div>
                </div>
            </div> -->

            <!-- Card 6 -->
            <!-- <div class="col-lg-4 col-md-6 project" data-category="software">
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1556740749-887f6717d7e4" alt="">
                    <div class="card-body">
                        <span class="badge software">Software</span>
                        <h5>E-commerce Website</h5>
                        <p>Secure e-commerce platform with payment integration.</p>
                        <div class="tags">
                            <span>React</span><span>Node</span><span>MongoDB</span><span>Stripe</span>
                        </div>
                        <a href="#" class="details">View Project Details ↗</a>
                    </div>
                </div>
            </div> -->


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
    <script src="assest/js/script.js"></script>
</body>

</html>