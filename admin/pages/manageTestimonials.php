<?php require_once './config.php'; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 mb-0 text-gray-800">Manage Testimonials</h2>
    <button class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
        <i class="fas fa-plus"></i> Add New Testimonial
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Client Feedback List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle" width="100%">
                <thead class="bg-light">
                    <tr>
                        <th>Client</th>
                        <th>Review</th>
                        <th>Stars</th>
                        <th>Status (Approve)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC");
                    while ($row = mysqli_fetch_assoc($result)):
                    ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assest/image/clients/<?php echo $row['image_path']; ?>" class="rounded-circle me-2" width="40" height="40">
                                <div>
                                    <strong><?php echo $row['name']; ?></strong><br>
                                    <small class="text-muted"><?php echo $row['role']; ?></small>
                                </div>
                            </div>
                        </td>
                        <td><small><?php echo substr($row['content'], 0, 50); ?>...</small></td>
                        <td><span class="text-warning"><?php echo str_repeat('★', $row['stars']); ?></span></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input status-toggle" type="checkbox" 
                                       role="switch" data-id="<?php echo $row['id']; ?>" 
                                       <?php echo ($row['status'] == 1) ? 'checked' : ''; ?>>
                                <label class="form-check-label small">
                                    <?php echo ($row['status'] == 1) ? 'Approved' : 'Pending'; ?>
                                </label>
                            </div>
                        </td>
                        <td>
                            <a href="process/testimonial_actions.php?delete_id=<?php echo $row['id']; ?>" 
                               class="btn btn-sm btn-danger" onclick="return confirm('Delete karein?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addTestimonialModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client Feedback</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="process/testimonial_actions.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Client Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Role</label>
                            <input type="text" name="role" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Company</label>
                            <input type="text" name="company" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rating</label>
                            <select name="stars" class="form-select text-warning">
                                <option value="5">★★★★★ (5 Stars)</option>
                                <option value="4">★★★★ (4 Stars)</option>
                                <option value="3">★★★ (3 Stars)</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Client Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Testimonial Content</label>
                            <textarea name="content" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="save_testimonial" class="btn btn-primary">Save Review</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Status Toggle Logic via AJAX
document.querySelectorAll('.status-toggle').forEach(toggle => {
    toggle.addEventListener('change', function() {
        const id = this.dataset.id;
        const status = this.checked ? 1 : 0;
        const label = this.nextElementSibling;

        fetch('process/testimonial_actions.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `toggle_status=1&id=${id}&status=${status}`
        })
        .then(res => res.text())
        .then(data => {
            label.innerText = (status == 1) ? 'Approved' : 'Pending';
        });
    });
});
</script>