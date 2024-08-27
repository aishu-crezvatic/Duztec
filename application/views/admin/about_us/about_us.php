<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<!--**********************************Content body start****************************-->
<div class="content-body">
    <h1 class="mb-4">About Us Information</h1>

    <!-- Toggle Button -->
    <button id="toggleButton" onclick="toggleEditMode(true)" class="btn btn-primary mb-3">Edit</button>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <!-- Display Mode -->
    <div id="displayMode">
        <div class="card">
            <div class="card-header">
                <strong>About Us Information</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Hero Banner Image:</strong><br>
                        <?php if (isset($data[0]['hero_banner_image']) && !empty($data[0]['hero_banner_image'])): ?>
                            <img src="<?php echo base_url('uploads/' . $data[0]['hero_banner_image']); ?>" alt="Banner Image" class="img-fluid" style="max-width: 75%; height: auto;">
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Hero Banner Text:</strong>
                        <p><?php echo isset($data[0]['hero_banner_text']) ? htmlspecialchars($data[0]['hero_banner_text']) : 'No text available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Image:</strong><br>
                        <?php if (isset($data[0]['about_image']) && !empty($data[0]['about_image'])): ?>
                            <img src="<?php echo base_url('uploads/' . $data[0]['about_image']); ?>" alt="About Image" class="img-fluid" style="max-width: 75%; height: auto;">
                        <?php else: ?>
                            <p>No image available.</p>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Title:</strong>
                        <p><?php echo isset($data[0]['about_title']) ? htmlspecialchars($data[0]['about_title']) : 'No title available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>About Description:</strong>
                        <p><?php echo isset($data[0]['about_desc']) ? htmlspecialchars($data[0]['about_desc']) : 'No description available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Vision:</strong>
                        <p><?php echo isset($data[0]['vision']) ? htmlspecialchars($data[0]['vision']) : 'No vision available'; ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <strong>Mission:</strong>
                        <p><?php echo isset($data[0]['mission']) ? htmlspecialchars($data[0]['mission']) : 'No mission available'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Mode -->
    <div id="editMode" style="display: none;">
        <div class="card">
            <div class="card-header">
                <strong>Edit About Us Information</strong>
            </div>
            <div class="card-body">
                <form id="aboutForm" action="<?php echo site_url('admin/about_us/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <strong>Hero Banner Image:</strong><br>
                            <?php if (isset($data[0]['hero_banner_image']) && !empty($data[0]['hero_banner_image'])): ?>
                                <img src="<?php echo base_url('uploads/' . $data[0]['hero_banner_image']); ?>" alt="Current Banner" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                            <?php endif; ?>
                            <input type="file" class="form-control mb-2" name="hero_banner_image">
                            <input type="hidden" name="existing_hero_banner_image" value="<?php echo isset($data[0]['hero_banner_image']) ? htmlspecialchars($data[0]['hero_banner_image']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Hero Banner Text:</strong>
                            <textarea class="form-control" name="hero_banner_text"><?php echo isset($data[0]['hero_banner_text']) ? htmlspecialchars($data[0]['hero_banner_text']) : ''; ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Image:</strong><br>
                            <?php if (isset($data[0]['about_image']) && !empty($data[0]['about_image'])): ?>
                                <img src="<?php echo base_url('uploads/' . $data[0]['about_image']); ?>" alt="Current About Image" class="img-fluid mb-3" style="max-width: 100%; height: auto;">
                            <?php endif; ?>
                            <input type="file" class="form-control mb-2" name="about_image">
                            <input type="hidden" name="existing_about_image" value="<?php echo isset($data[0]['about_image']) ? htmlspecialchars($data[0]['about_image']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Title:</strong>
                            <input type="text" class="form-control" name="about_title" value="<?php echo isset($data[0]['about_title']) ? htmlspecialchars($data[0]['about_title']) : ''; ?>">
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>About Description:</strong>
                            <textarea class="form-control" name="about_desc"><?php echo isset($data[0]['about_desc']) ? htmlspecialchars($data[0]['about_desc']) : ''; ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Vision:</strong>
                            <textarea class="form-control" name="vision"><?php echo isset($data[0]['vision']) ? htmlspecialchars($data[0]['vision']) : ''; ?></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <strong>Mission:</strong>
                            <textarea class="form-control" name="mission"><?php echo isset($data[0]['mission']) ? htmlspecialchars($data[0]['mission']) : ''; ?></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" onclick="toggleEditMode(false)" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--**********************************Content body End***********************************-->

<!--**********************************footer Start***********************************-->
<?php $this->load->view('admin/layout/footer'); ?>
<!--**********************************footer End***********************************-->

<script>
function toggleEditMode(editMode) {
    document.getElementById('displayMode').style.display = editMode ? 'none' : 'block';
    document.getElementById('editMode').style.display = editMode ? 'block' : 'none';
    document.getElementById('toggleButton').textContent = editMode ? 'Cancel' : 'Edit';
    document.getElementById('toggleButton').setAttribute('onclick', editMode ? 'toggleEditMode(false)' : 'toggleEditMode(true)');
}
</script>
