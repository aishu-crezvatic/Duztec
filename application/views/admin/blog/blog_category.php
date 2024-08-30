<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

<div class="content-body">
    <h1 class="mb-4">Blog Categories Management</h1>

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
                <strong>Category List</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($categories) && is_array($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($category['bc_id']); ?></td>
                                    <td><?php echo htmlspecialchars($category['name']); ?></td>
                                    <td><?php echo nl2br(htmlspecialchars(substr($category['description'] ?? 'No description', 0, 150))); ?></td>
                                    <td><?php echo $category['status'] == 1 ? 'Active' : 'Inactive'; ?></td>
                                    <td class="d-flex">
                                        <a href="<?php echo site_url('admin/blogcategory/edit/' . $category['bc_id']); ?>"
                                            class="btn btn-warning btn-sm"> <i class="fas fa-pen"></i></a>
                                        <a href="<?php echo site_url('admin/blogcategory/delete/' . $category['bc_id']); ?>"
                                            class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');"> <i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No records found</td>
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
                <strong><?php echo $edit_mode ? 'Edit Category' : 'Add New Category'; ?></strong>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('admin/blogcategory/' . ($edit_mode ? 'update' : 'store')); ?>" method="post">
                    <?php if ($edit_mode): ?>
                        <input type="hidden" name="bc_id" value="<?php echo htmlspecialchars($category['bc_id'] ?? ''); ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo htmlspecialchars($edit_mode ? ($category['name'] ?? '') : ''); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="5"
                            required><?php echo htmlspecialchars($edit_mode ? ($category['description'] ?? '') : ''); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="1" <?php echo ($edit_mode && ($category['status'] ?? '') == '1') ? 'selected' : ''; ?>>Active</option>
                            <option value="0" <?php echo ($edit_mode && ($category['status'] ?? '') == '0') ? 'selected' : ''; ?>>Inactive</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="btn btn-primary"><?php echo $edit_mode ? 'Update Category' : 'Add Category'; ?></button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('description');

        // Initialize toggling functionality
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
        window.location.href = "<?php echo site_url('admin/blogcategory'); ?>";
    }
</script>

<?php $this->load->view('admin/layout/footer'); ?>
