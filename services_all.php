<?php
include 'services_pages.php';

$slug = $_GET['page'] ?? 'web-development'; // default page

if (!isset($pages[$slug])) {
    include '404.php';
    exit;
}

$pageData = $pages[$slug];
$sections = $pageData['content'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Blog</title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="assest/css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- --------- Header---------- -->
    <?php include "assest/component/header.php" ?>

    <!-- -----------Banner-----------------  -->
    <section>
        <div class="single-blog-banner">
            <div class="single-blog-banner-image"
                style="background-image: url('<?php echo htmlspecialchars($pageData['banner-image']); ?>');">
                <div class="bg-black"></div>
                <div class="blog-banner-header">
                    <h1><?php echo htmlspecialchars($pageData['title']); ?></h1>
                </div>
            </div>
        </div>
    </section>


    <!-- --------------------- Blog Main Container ------------------- -->

    <div class="single-blog-main-container">
        <!-- ------------container 1------------- -->
        <div class="blog-main-container1">
            <?php foreach ($sections as $section): ?>
                <div class="blog-part-content">

                    <h2><?php echo htmlspecialchars($section['heading']); ?></h2>

                    <?php foreach ($section['para'] as $paragraph): ?>
                        <p><?php echo htmlspecialchars($paragraph); ?></p>
                    <?php endforeach; ?>

                    <?php if (!empty($section['image'])): ?>
                        <img src="<?php echo htmlspecialchars($section['image']); ?>" alt="">
                    <?php endif; ?>

                </div>
            <?php endforeach; ?>

            <!-- ------Blog Post 1---------- -->


        </div>
        <!-- --------container 2--------------- -->
        <div class="blog-main-container2">
            <!-- <div class="blog-part-Post"> -->
            <div class="container">

                <!-- ===== Latest Posts ===== -->
                <div class="sidebar-box">
                    <h4 class="sidebar-title">Latest Post</h4>

                    <div class="post-item">
                        <img src="assest/image/banner/Digital-Banner.jpg" alt="">
                        <div>
                            <h6>Essential Cleanroom Solutions For Hospitals And Clinics</h6>
                            <span><i class="fa-solid fa-calendar-days"></i> 02 Oct 2025</span>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="assest/image/banner/Digital-Banner.jpg" alt="">
                        <div>
                            <h6>Best Practices For Maintaining A Sterile Environment</h6>
                            <span><i class="fa-solid fa-calendar-days"></i> 02 Oct 2025</span>
                        </div>
                    </div>

                    <div class="post-item">
                        <img src="assest/image/banner/Digital-Banner.jpg" alt="">
                        <div>
                            <h6>Building Safer Facilities With Reliable Cleanroom Products</h6>
                            <span><i class="fa-solid fa-calendar-days"></i> 02 Oct 2025</span>
                        </div>
                    </div>
                </div>

                <!-- ===== CTA Box ===== -->
                <div class="cta-box">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Ut elit tellus, luctus nec ullamcorper mattis.
                    </p>
                    <a href="#" class="btn btn-outline-light">
                        Go to Blog <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- ===== Social Box ===== -->
                <div class="sidebar-box">
                    <h4 class="sidebar-title">Find Us On:</h4>

                    <div class="social-icons">
                        <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="twiter"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- --------- Footer---------- -->
    <?php include "assest/component/footer.php" ?>
</body>

</html>