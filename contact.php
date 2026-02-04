<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Digital Creatorss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
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
                Contact Us <span>Digital Creators</span>
            </h2>
            <p class="about-text">
                Have a project in mind? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>
    </section>

    <!-- ----------  Contact from ----------------------- -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- LEFT: Contact Form -->
                <div class="col-lg-6">
                    <h3 class="contact-title">Send Us a Message</h3>

                    <form action="contact_insert.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name *</label>
                            <input type="text" name="name" class="form-control" required placeholder="Your full name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control" required placeholder="digitalcreators1235@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="text" name="phone" class="form-control" required placeholder="+91 XXXXX-XXXXX">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Message *</label>
                            <textarea class="form-control" rows="5" name="message" required placeholder="Tell us about your project or inquiry..."></textarea>
                        </div>

                        <button type="submit" name="form_submit" class="btn-gradient">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- RIGHT: Contact Info -->
                <div class="col-lg-6">
                    <h3 class="contact-title">Contact Information</h3>

                    <p class="mb-4">
                        Digital Creatorss is an India-based software development and digital marketing
                        company. We're here to help you with all your digital needs.
                    </p>

                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h6>Location</h6>
                            <p>C-84, C-Block, Sec - 2, Noida, Uttar Pradesh, 201306</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h6>Phone</h6>
                            <p>+91 8851613806</p>
                            <p>+91 9311240888</p>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h6>Email</h6>
                            <p>info@digitalcreatorss.com</p>
                        </div>
                    </div>

                    <div class="business-hours">
                        <h6>Business Hours</h6>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-0">Saturday: 10:00 AM - 4:00 PM</p>
                    </div>
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