<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');

    ?>
<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->



<div class="content-body">

    <div class="container mt-4">
        <h1>Gallery Management</h1>

        <!-- Alerts -->
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

        <!-- Add New Button -->
        <div class="mb-3">
            <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">+ Add New</button>
        </div>

        <!-- Gallery Table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image/Video</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item): ?>
                    <tr>
                        <td><?php echo $item['g_id']; ?></td>
                        <td>
                            <?php if ($item['is_video'] == 1): ?>
                                <video width="100" controls>
                                    <source src="<?php echo base_url('uploads/gallery/'. $item['img_video']); ?>"
                                        type="video/mp4">
                                </video>
                            <?php else: ?>
                                <img src="<?php echo base_url('uploads/gallery/' . $item['img_video']); ?>" width="100">
                            <?php endif; ?>
                        </td>
                        <td><?php echo $item['is_video'] == 1 ? 'Video' : 'Image'; ?></td>
                        <td><?php echo $item['status'] == 1 ? 'Active' : ($item['status'] == 0 ? 'Inactive' : 'Deleted'); ?>
                        </td>
                        <td><?php echo $item['created_date']; ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal"
                                data-id="<?php echo $item['g_id']; ?>" data-img-video="<?php echo $item['img_video']; ?>"
                                data-is-video="<?php echo $item['is_video']; ?>"
                                data-status="<?php echo $item['status']; ?>">
                                Edit
                            </button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"
                                data-id="<?php echo $item['g_id']; ?>">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Gallery Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data"
                    action="<?php echo base_url('admin/gallery/create'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Image/Video</label>
                            <input type="file" name="img_video" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="is_video" class="form-control">
                                <option value="0">Image</option>
                                <option value="1">Video</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Gallery Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data"
                    action="<?php echo base_url('admin/gallery/update'); ?>">
                    <div class="modal-body">
                        <input type="hidden" name="g_id" id="editId">
                        <div class="form-group">
                            <label>Upload Image/Video</label>
                            <input type="file" name="img_video" class="form-control">
                            <div id="editPreview"></div>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="is_video" id="editIsVideo" class="form-control">
                                <option value="0">Image</option>
                                <option value="1">Video</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="editStatus" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo base_url('admin/gallery/delete'); ?>">
                    <div class="modal-body">
                        <p>Are you sure you want to delete this item?</p>
                        <input type="hidden" name="id" id="deleteId">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!--**********************************Content body End***********************************-->
    <!--**********************************footer Start***********************************-->
    <?php $this->load->view('admin/layout/footer'); ?>
    <!--**********************************footer End***********************************-->



    <script>
    $(document).ready(function () {
        // Edit Modal Handling
        $('#editModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id');
            var imgVideo = button.data('img-video');
            var isVideo = button.data('is-video');
            var status = button.data('status');

            var modal = $(this);
            modal.find('#editId').val(id);
            modal.find('#editIsVideo').val(isVideo);
            modal.find('#editStatus').val(status);

            var previewHtml = '';
            if (isVideo == 1) {
                previewHtml = '<video width="100" controls><source src="' + "<?php echo base_url('uploads/gallery/'); ?>" + imgVideo + '" type="video/mp4"></video>';
            } else {
                previewHtml = '<img src="' + "<?php echo base_url('uploads/gallery/'); ?>" + imgVideo + '" width="100">';
            }
            modal.find('#editPreview').html(previewHtml);
        });

        // Delete Modal Handling
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract ID from data-* attributes

            var modal = $(this);
            modal.find('#deleteId').val(id); // Set the ID in the hidden input field
        });
    });
</script>
