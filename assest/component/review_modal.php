<div class="text-center mt-5">
    <button type="button" class="btn btn-primary rounded-pill px-5 py-3 shadow-lg btn-review-trigger" data-bs-toggle="modal" data-bs-target="#submitReviewModal">
        <i class="fas fa-star-half-alt me-2 rotate-icon"></i> 
        <span class="fw-bold">Share Your Experience</span>
    </button>
</div>

<div class="modal fade" id="submitReviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0 shadow-2xl overflow-hidden" style="border-radius: 24px;">
            
            <div class="modal-header border-0 bg-gradient-primary p-4 text-white position-relative">
                <div class="header-content">
                    <h4 class="fw-bold mb-1">We Value Your Voice!</h4>
                    <p class="small mb-0 opacity-75">Your feedback helps us grow and serve you better.</p>
                </div>
                <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="process/public_review_action.php" method="POST" enctype="multipart/form-data" class="needs-validation">
                <div class="modal-body p-4 bg-light-subtle">
                    
                    <div class="rating-box text-center mb-4 p-3 rounded-4 bg-white shadow-sm">
                        <label class="form-label d-block fw-bold text-dark small text-uppercase tracking-wider mb-2">Overall Rating</label>
                        <div class="rating-input-wrapper d-flex justify-content-center flex-row-reverse">
                            <input type="radio" name="stars" value="5" id="star5" required><label for="star5" title="Amazing">★</label>
                            <input type="radio" name="stars" value="4" id="star4"><label for="star4" title="Good">★</label>
                            <input type="radio" name="stars" value="3" id="star3"><label for="star3" title="Average">★</label>
                            <input type="radio" name="stars" value="2" id="star2"><label for="star2" title="Bad">★</label>
                            <input type="radio" name="stars" value="1" id="star1"><label for="star1" title="Very Bad">★</label>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-input-group">
                                <label class="small fw-bold text-muted mb-1">Your Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-primary"><i class="far fa-user"></i></span>
                                    <input type="text" name="name" class="form-control border-start-0 ps-0" placeholder="John Doe" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-input-group">
                                <label class="small fw-bold text-muted mb-1">Designation</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 text-primary"><i class="fas fa-briefcase"></i></span>
                                    <input type="text" name="role" class="form-control border-start-0 ps-0" placeholder="CEO / Manager">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-input-group">
                                <label class="small fw-bold text-muted mb-1">Company Name <span class="fw-normal opacity-50">(Optional)</span></label>
                                <input type="text" name="company" class="form-control" placeholder="Acme Corp">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-input-group">
                                <label class="small fw-bold text-muted mb-1">Your Feedback</label>
                                <textarea name="content" class="form-control pt-2" placeholder="Tell us what you liked about our service..." style="height: 110px; resize: none;" required></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="upload-area p-3 border-2 border-dashed rounded-4 text-center bg-white">
                                <label for="formFile" class="form-label mb-0 cursor-pointer w-100">
                                    <i class="fas fa-cloud-upload-alt text-primary mb-2 fs-3"></i>
                                    <p class="small text-muted mb-0">Upload a professional photo <br><span class="extra-small text-primary">(Click to browse)</span></p>
                                    <input class="form-control d-none" type="file" id="formFile" name="image">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="submit" name="submit_public_review" class="btn btn-primary w-100 py-3 rounded-4 shadow-primary hover-lift d-flex align-items-center justify-content-center">
                        <span class="fw-bold">Submit Feedback</span>
                        <i class="fas fa-paper-plane ms-2 small"></i>
                    </button>
                    <p class="text-center w-100 x-small text-muted mt-2 mb-0">Note: Your review will be live after admin verification.</p>
                </div>
            </form>
        </div>
    </div>
</div>