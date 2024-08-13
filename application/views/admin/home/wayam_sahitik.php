<!--**********************************Header & sidebar start***********************************-->

<?php

$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>

<!--**********************************Header & sidebar end***********************************-->
<!--**********************************Content body start****************************-->

<div class="content-body">

    <!-- row -->

    <div class="container-fluid">

        <!-- Add Modal -->

        <div class="modal fade" id="addOrderModalside">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">Add sahitik</h5>

                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <form method="POST" action="<?php echo base_url() ?>admin/wayam_sahitik/create" enctype="multipart/form-data">

                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">Upload Image sahitik</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image" type="file" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.avif" required>

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">sahitik title</label>

                                <div class="input-group mb-3">

                                    <div class="custom-file">

                                        <input name="title" type="text" class="form-control" required>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">sahitik description</label>

                                <div class="input-group mb-3">

                                    <div class="custom-file">

                                        <input name="desc" type="text" class="form-control" required>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <button name="submit" type="submit" class="btn btn-primary btn-block">Create</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- Edit Modal -->

        <div class="modal fade" id="editOrderModalside">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">Edit sahitik detail</h5>

                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <form method="POST" action="<?php echo base_url() ?>admin/wayam_sahitik/edit" enctype="multipart/form-data">

                            <div class="form-group">

                                <input name="id" type="text" value="1" id="editModalIdw" hidden >

                            </div>

                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">Upload Image for sahitik</label>

                                <img style="width:100%;" id="sahitik_image" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image" type="file" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.avif">

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">sahitik Title</label>

                                <div class="input-group mb-3">

                                    <div class="custom-file">

                                        <input name="title" type="text" class="form-control" id="editModalTitlesahitik" required>

                                    </div>

                                </div>

                            </div>
                            <div class="form-group border rounded p-2">

                                <label class="text-black font-w500">sahitik Description</label>

                                <div class="input-group mb-3">

                                    <div class="custom-file">

                                        <input name="desc" type="text" class="form-control" id="editModalDescsahitik" required>

                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Update</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal -->

        <div class="modal fade" id="deleteOrderModalside">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">Are you sure you want to delete?</h5>

                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo base_url() ?>admin/wayam_sahitik/delete" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input name="id" type="text" value="1" id="deleteModalIdsahitik" hidden>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">Delete</button>
                                <button name="submit" type="submit" class="btn btn-outline-danger btn-block" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        <div class="row">
            <!-- alert section  -->

            <div class="col-12">

                <?php

                if (!empty($this->session->flashdata('success'))) {

                ?>

                    <div class="alert alert-success solid alert-dismissible fade show w-100 mx-">

                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">

                            <polyline points="9 11 12 14 22 4"></polyline>

                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>

                        </svg>

                        <strong>Success!</strong> <?php echo $this->session->flashdata('success') ?>

                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>

                        </button>

                    </div>

                <?php

                }

                ?>
                <?php

                if (!empty($this->session->flashdata('error'))) {

                ?>

                    <div class="alert alert-danger solid alert-dismissible fade show">

                        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">

                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>

                            <line x1="15" y1="9" x2="9" y2="15"></line>

                            <line x1="9" y1="9" x2="15" y2="15"></line>

                        </svg>

                        <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>

                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>

                        </button>

                    </div>

                <?php

                }
                ?>
            </div>
            <div class="col-12 mb-3">
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal" data-target="#addOrderModalside">+ Add new sahitik </a>
            </div>
            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">sahitik table</h4>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">

                                <table id="example3" class="display min-w850 dataTable no-footer" role="grid" aria-describedby="example3_info">

                                    <thead>

                                        <tr role="row">

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 152.594px;">Sr No</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Image</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Title</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Description</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Created At</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Status</th>

                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 84.9219px;">Action</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php

                                        // var_dump($data);

                                        $i = 1;

                                        foreach ($data as $row) {

                                        ?>

                                            <tr role="row" class="odd">

                                                <td><?php echo $i; ?></td>

                                                <td>

                                                    <img style="width: 200px;" class="sahitik_image_class" src="<?php echo base_url() . "assets/images/family/" . $row['sahitik_image'] ?>" alt="banner">

                                                </td>


                                                <td>

                                                    <p style="width: 200px;" class="sahitik_title" wtitle="<?php echo  $row['sahitik_title'] ?>" alt="sahitik_title"><?php echo  $row['sahitik_title'] ?>
                                                    <p>

                                                </td>
                                                <td>

                                                    <p style="width: 200px;" class="sahitik_desc" wdesc="<?php echo  $row['sahitik_desc'] ?>" alt="sahitik_desc"><?php echo  $row['sahitik_desc'] ?>
                                                    <p>

                                                </td>

                                                <td><?php echo date('d/m/Y', strtotime($row['created_at'])) ?></td>

                                                <td>

                                                    <div class="col-sm-9"> 
                                                        <input data-id="<?php echo $row['id'] ?>" class="switch switchSlider" type="checkbox" <?php echo $row['status'] == 1 ? 'checked' : '' ?> />

                                                    </div> 
                                                </td> 
                                                <td>

                                                    <div class="d-flex">

                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#editOrderModalside" data-id="<?php echo $row['id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1 sahitikeditbtn"><i class="fa fa-pencil"></i></a>

                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteOrderModalside" data-id="<?php echo $row['id'] ?>" class="btn btn-danger shadow btn-xs sharp sahitikdeletebtn"><i class="fa fa-trash"></i></a>

                                                    </div>

                                                </td>

                                            </tr>

                                        <?php

                                            $i = $i + 1;
                                        }

                                        ?>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!--**********************************Content body End***********************************-->





<!--**********************************footer Start***********************************-->

<?php $this->load->view('admin/layout/footer'); ?>

<!--**********************************footer End***********************************-->



<script>
    $(".switchSlider").click(function() {

        var id = $(this).attr("data-id");

        $.post(

            base_url + "admin/slider/status/" + id, {

                data: id

            },

            function(response) {

                console.log(response);

            }

        );

    });
</script>