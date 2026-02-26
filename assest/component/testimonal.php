<?php 
// 1. DATA/MODELS - Assuming these exist in your environment
include_once __DIR__ . '\..\..\db.php';
require_once __DIR__ . '\..\..\admin\assest\inc\functions.php';

/**
 * REPOSITORY/SERVICE LAYER
 * Principle: Single Responsibility
 * Why: Keeps data fetching separate from UI.
 */
$res = get_public_testimonials(6); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Happy Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #0d6efd;
            --star-color: #ffc107;
            --bg-light: #f8faff;
        }

        body { background-color: var(--bg-light); font-family: 'Inter', sans-serif; }

        .testimonial-section { padding: 80px 0; }
        
        /* FIXED CARD HEIGHT LOGIC */
        .testimonial-card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            transition: all 0.4s ease;
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%; /* All cards same height */
            display: flex;
            flex-direction: column;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            border-color: var(--primary-color);
            box-shadow: 0 20px 40px rgba(13,110,253,0.1) !important;
        }

        /* STAR RATING */
        .stars { color: var(--star-color); margin-bottom: 15px; font-size: 0.85rem; }
        .rating-value { color: #6b7280; font-weight: 600; margin-left: 5px; }

        /* LINE CLAMP (4 LINES MAX) */
        .testimonial-text { 
            color: #4b5563; 
            font-size: 0.95rem; 
            line-height: 1.6; 
            flex-grow: 1; /* Pushes footer to bottom */
            font-style: italic;
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Limit to 4 lines */
            -webkit-box-orient: vertical;  
            overflow: hidden;
            text-overflow: ellipsis; /* Adds the ... */
            margin-bottom: 20px;
        }

        .quote-icon { font-size: 1.2rem; color: var(--primary-color); opacity: 0.2; margin-bottom: 10px; }

        /* CLIENT FOOTER */
        .client-info { border-top: 1px solid #f3f4f6; pt: 20px; margin-top: auto; display: flex; align-items: center; padding-top: 15px; }
        .client-img { 
            width: 48px; height: 48px; 
            border-radius: 50%; 
            object-fit: cover; 
            border: 2px solid #fff;
            box-shadow: 0 0 0 2px var(--primary-color);
        }
        .client-name { font-weight: 700; font-size: 0.95rem; margin: 0; color: #1f2937; }
        .client-role { font-size: 0.8rem; color: var(--primary-color); font-weight: 500; }

        /* RATING INPUT STYLING */
        .rating-input { direction: rtl; display: inline-flex; }
        .rating-input input { display: none; }
        .rating-input label { color: #ddd; font-size: 2rem; cursor: pointer; transition: 0.2s; padding: 0 2px; }
        .rating-input input:checked ~ label, 
        .rating-input label:hover, 
        .rating-input label:hover ~ label { color: var(--star-color); }
        
        .form-control { border-radius: 12px; padding: 12px; border: 1px solid #e5e7eb; }
    </style>
</head>
<body>

<section class="testimonial-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill mb-3">Testimonials</span>
                <h2 class="fw-bold text-dark display-5">What our <span class="text-primary">Indian Clients</span> say</h2>
            </div>
            <div class="col-md-4 text-md-end">
                <button class="btn btn-primary rounded-pill px-4 py-2  shadow-sm" data-bs-toggle="modal" data-bs-target="#addReviewModal">
                    <i class="fas fa-pen-nib me-2"></i> Write a Review
                </button>
            </div>
        </div>

        <?php if(!empty($res['data'])): ?>
        <div class="row g-4">
            <?php foreach ($res['data'] as $row): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card testimonial-card border-0">
                    <div class="stars">
                        <?php 
                        $stars = (int)$row['stars'];
                        for($i=1; $i<=5; $i++) {
                            echo ($i <= $stars) ? '<i class="fas fa-star"></i>' : '<i class="far fa-star text-muted"></i>';
                        }
                        ?>
                        <span class="rating-value"><?php echo number_format($stars, 1); ?></span>
                    </div>

                    <i class="fas fa-quote-left quote-icon"></i>
                    
                    <div class="testimonial-text">
                        "<?php echo htmlspecialchars($row['content']); ?>"
                    </div>

                    <div class="client-info">
                        <img src="assest/image/clients/<?php echo $row['image_path']; ?>" 
                             class="client-img me-3" 
                             onerror="this.src='https://ui-avatars.com/api/?name=<?php echo urlencode($row['name']); ?>&background=random'">
                        <div>
                            <h6 class="client-name"><?php echo htmlspecialchars($row['name']); ?></h6>
                            <span class="client-role">
                                <?php echo htmlspecialchars($row['role']); ?> 
                                <span class="text-muted">@ <?php echo htmlspecialchars($row['company']); ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php if($res['total_pages'] > 1): ?>
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php echo ($res['current_page'] <= 1) ? 'disabled' : ''; ?>">
                    <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="?review_page=<?php echo $res['current_page']-1; ?>"><i class="fas fa-chevron-left"></i></a>
                </li>
                <?php for($i=1; $i<=$res['total_pages']; $i++): ?>
                    <li class="page-item <?php echo ($i == $res['current_page']) ? 'active' : ''; ?>">
                        <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="?review_page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php echo ($res['current_page'] >= $res['total_pages']) ? 'disabled' : ''; ?>">
                    <a class="page-link border-0 shadow-sm rounded-circle mx-1" href="?review_page=<?php echo $res['current_page']+1; ?>"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
        <?php endif; ?>

        <?php else: ?>
            <div class="text-center py-5">
                <p class="text-muted">No reviews yet. Be the first one!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<div class="modal fade" id="addReviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">
            <div class="modal-header border-0 pt-4 px-4">
                <h5 class="fw-bold">Submit Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="./admin/process/testimonial_submit.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <div class="text-center mb-4">
                        <div class="rating-input">
                            <input type="radio" name="stars" id="s5" value="5" required><label for="s5">★</label>
                            <input type="radio" name="stars" id="s4" value="4"><label for="s4">★</label>
                            <input type="radio" name="stars" id="s3" value="3"><label for="s3">★</label>
                            <input type="radio" name="stars" id="s2" value="2"><label for="s2">★</label>
                            <input type="radio" name="stars" id="s1" value="1"><label for="s1">★</label>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
                        <div class="col-md-6"><input type="text" name="role" class="form-control" placeholder="Role (e.g. CEO)"></div>
                        <div class="col-12"><input type="text" name="company" class="form-control" placeholder="Company"></div>
                        <div class="col-12"><textarea name="content" class="form-control" rows="4" placeholder="Feedback..." required></textarea></div>
                        <div class="col-12"><input type="file" name="image" class="form-control"></div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4">
                    <button type="submit" name="submit_review" class="btn btn-primary w-100 py-3 rounded-pill ">Submit for Approval</button>
                </div>
            </form>
        </div>
    </div>
</div>

