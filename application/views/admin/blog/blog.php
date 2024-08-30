<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Blog Management</h1>

    <!-- Toggle Button -->
    <button id="toggleButton" onclick="toggleEditMode(<?php echo $edit_mode ? 'false' : 'true'; ?>)"
        class="btn btn-primary mb-3">
        <?php echo $edit_mode ? 'Cancel' : 'Add New'; ?>
    </button>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- Display Mode -->
    <div id="displayMode" <?php echo $edit_mode ? 'style="display: none;"' : ''; ?>>
    <div class="card">
        <div class="card-header">
            <strong>Blog List</strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($blogs) && is_array($blogs)): ?>
                        <?php foreach ($blogs as $blog): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($blog['b_id']); ?></td>
                                <td><?php echo htmlspecialchars($blog['title']); ?></td>
                                <td><?php echo htmlspecialchars($blog['category_name'] ?? 'Unknown'); ?></td>
                                <td>
                                    <div class="description-preview">
                                        <?php echo nl2br(htmlspecialchars(substr($blog['description'] ?? 'No description', 0, 150))); ?>
                                        <?php if (strlen($blog['description'] ?? '') > 150): ?>
                                            <a href="#" class="read-more" data-blog-id="<?php echo $blog['b_id']; ?>">Read More</a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td><?php echo $blog['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
                                <td class="d-flex">
                                    <a href="<?php echo site_url('admin/blog/edit_blog/' . $blog['b_id']); ?>"
                                        class="btn btn-warning btn-sm"> <i class="fas fa-pen"></i></a>
                                    <a href="<?php echo site_url('admin/blog/delete_blog/' . $blog['b_id']); ?>"
                                        class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"> <i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No records found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Edit/Add Mode -->
    <div id="editMode" <?php echo $edit_mode ? '' : 'style="display: none;"'; ?>>
        <div class="card">
            <div class="card-header">
                <strong><?php echo $edit_mode ? 'Edit Blog' : 'Add New Blog'; ?></strong>
            </div>
            <div class="card-body">
            <form action="<?php echo site_url('admin/blog/' . ($edit_mode ? 'update_blog' : 'store')); ?>" method="post" enctype="multipart/form-data">
            <?php if ($edit_mode): ?>
                        <input type="hidden" name="b_id" value="<?php echo htmlspecialchars($current_blog['b_id'] ?? ''); ?>">
                        <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($current_blog['b_image'] ?? ''); ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="bc_id">Category:</label>
                        <select class="form-control" id="bc_id" name="bc_id" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo $category['bc_id']; ?>"
                                    <?php echo $edit_mode && ($current_blog['bc_id'] ?? '') == $category['bc_id'] ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="<?php echo htmlspecialchars($edit_mode ? ($current_blog['title'] ?? '') : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            required><?php echo htmlspecialchars($edit_mode ? ($current_blog['description'] ?? '') : ''); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="b_image">Image:</label>
                        <input type="file" class="form-control" id="b_image" name="b_image">
                        <?php if ($edit_mode && ($current_blog['b_image'] ?? '')): ?>
                            <img src="<?php echo base_url('uploads/' . ($current_blog['b_image'] ?? '')); ?>" class="img-fluid"
                                style="max-width: 100px;">
                        <?php endif; ?>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1" <?php echo ($edit_mode && ($current_blog['status'] ?? '') == '1') ? 'selected' : ''; ?>>Active</option>
                            <option value="0" <?php echo ($edit_mode && ($current_blog['status'] ?? '') == '0') ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="btn btn-primary"><?php echo $edit_mode ? 'Update Blog' : 'Add Blog'; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');

    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.read-more').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var blogId = this.getAttribute('data-blog-id');
                var preview = this.previousElementSibling;
                
                fetch("<?php echo site_url('admin/blog/get_description/'); ?>" + blogId)
                    .then(response => response.text())
                    .then(data => {
                        preview.innerHTML = data;
                        this.style.display = 'none';
                    });
            });
        });
    });

    function toggleEditMode(isEdit) {
        document.getElementById('editMode').style.display = isEdit ? '' : 'none';
        document.getElementById('displayMode').style.display = isEdit ? 'none' : '';
        document.getElementById('toggleButton').textContent = isEdit ? 'Cancel' : 'Add New';
        document.getElementById('toggleButton').setAttribute('onclick', isEdit ? 'cancelEdit()' : 'toggleEditMode(true)');
    }

    function cancelEdit() {
        window.location.href = "<?php echo site_url('admin/blog'); ?>";
    }
</script>

<?php $this->load->view('admin/layout/footer'); ?>
