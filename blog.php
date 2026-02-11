

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="assest/css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- -------header--------- -->
    <?php include 'assest/component/header.php' ?>

    <!-- ------------Banner------------------ -->
    <section>
        <div class="blog-banner">
            <div class="blog-banner-image">
                <div class="bg-black"></div>
                <div class="blog-banner-header">
                    <h1>GRAND BLOG </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------- Blog Main Container------------------- -->

    <section class="blog-section py-5">
        <div class="container">

            <!-- ===== Header Row ===== -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-9">
                    <span class="section-subtitle">
                        <span class="dot"></span> Latest Blog & Update
                    </span>
                    <h2 class="section-title">
                        Stay Updated With the <br>
                        Latest Trends & Solutions
                    </h2>
                </div>

                <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
                    <a href="#" class="btn btn-success all-post-btn">
                        ALL POST <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <!-- ===== Blog Cards ===== -->
            <div class="row g-4">
                <?php
                include 'admin/config.php';
                $select = mysqli_query($conn, "SELECT * FROM `main_blogs`");
                while ($row = mysqli_fetch_assoc($select)) {
                ?>
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <img src="admin/<?= $row['image']; ?>" class="img-fluid" alt="">
                            <div class="blog-content">
                                <h5><?= $row['title'] ?></h5>
                                <p><?= $row['para1'] ?></p>

                                <a href="blog_all.php?page=<?= $row['link'] ?>" class="read-more">
                                    READ MORE <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>

                            <div class="blog-footer"><?= $row['blog_date'] ?></div>
                        </div>
                    </div>

                <?php } ?>

                <!-- Card 2 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <img src="assest/image/banner/Digital-Banner.jpg" class="img-fluid" alt="">
                        <div class="blog-content">
                            <h5>Best Practices for Maintaining a Sterile Environment</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse ut vestibulum eros. Aenean et posuere turpis.
                            </p>

                            <a href="#" class="read-more">
                                READ MORE <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="blog-footer">
                            October 2, 2025 &nbsp; • &nbsp; No comments
                        </div>
                    </div>
                </div> -->

                <!-- Card 3 -->
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <img src="assest/image/banner/Digital-Banner.jpg" class="img-fluid" alt="">
                        <div class="blog-content">
                            <h5>Building Safer Facilities with Reliable Cleanroom Products</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse ut vestibulum eros. Aenean et posuere turpis.
                            </p>

                            <a href="#" class="read-more">
                                READ MORE <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="blog-footer">
                            October 2, 2025 &nbsp; • &nbsp; No comments
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <!-- ------------footer------------ -->
    <?php include 'assest/component/footer.php' ?>

    <!-- -----------Review System----------- -->


</body>

</html>