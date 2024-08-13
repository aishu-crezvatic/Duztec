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

            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">Add Blog</h5>

                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <form method="POST" action="<?php echo base_url() ?>admin/blog/create" enctype="multipart/form-data">

                            <div class="form-group">

                                <label class="text-black font-w500">Upload Image (400*200px)</label>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image" type="file" class="custom-file-input" required>

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                                <div class="form-group col-12">

                                    <label>Title*</label>

                                    <input name="title" type="text" class="form-control" placeholder="Enter Title">

                                </div>

                                <div class="form-group col-12">

                                    <label>Description*</label>

                                    <textarea name="description" class="summernote"></textarea>

                                </div>

                                <div class="form-group col-12">

                                    <label>Keyword (use comma for sepration)*</label>

                                    <input name="keyword" type="text" class="form-control" placeholder="trending, new blog, Study">

                                </div>

                                <div class="form-group col-12">

                                    <div class="form-group">

                                        <label>Category</label>

                                        <select name="category" class="form-control default-select" id="sel1">

                                            <?php

                                            // unset($data['category'][0]);

                                            foreach ($data['category'] as $category) {

                                            ?>

                                                <option  value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>

                                            <?php

                                            }

                                            ?>

                                        </select>

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

            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal-header">

                        <h5 class="modal-title">Edit Slider</h5>

                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>

                        </button>

                    </div>

                    <div class="modal-body">

                        <form method="POST" action="<?php echo base_url() ?>admin/blog/edit" enctype="multipart/form-data">

                            <input name="id" type="text" value="1" id="blogeditModalId">

                            <div class="form-group">

                                <label class="text-black font-w500">Upload Image (400*200px)</label>

                                <img style="width:100%;" id="blogeditModalImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image" type="file" class="custom-file-input" required>

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-12">

                                <label>Title*</label>

                                <input name="title" type="text" class="form-control editModalTitle" placeholder="Enter Title">

                            </div>

                            <div class="form-group col-12">

                                <label>Description*</label>

                                <textarea name="description" class="summernote editModalDescription"></textarea>

                            </div>

                            <div class="form-group col-12">

                                <label>Keyword (use comma for sepration)*</label>

                                <input name="keyword" type="text" class="form-control editModalKeyword" placeholder="trending, new blog, Study">

                            </div>

                            <div class="form-group col-12">

                                <div class="form-group">

                                    <label>Category</label>

                                    <select name="category" class="form-control default-select editModalCategory" id="sel1" value="Ghost Story">

                                        <?php

                                        // unset($data['category'][0]);

                                        foreach ($data['category'] as $category) {

                                        ?>

                                            <option value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>

                                        <?php

                                        }

                                        ?>

                                    </select>

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

                    <form method="POST" action="<?php echo base_url() ?>admin/slider/delete" enctype="multipart/form-data">

                        <div class="modal-body">

                            <input name="id" type="text" value="1" id="deleteModalId" hidden>



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

                <a href="<?php echo base_url('admin/audio') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>

            </div>



            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Edit Audio</h4>

                    </div>

                    <div class="card-body">

                        <?php

                        $audio = $data['audio'];

                        // var_dump($audio);

                        ?>

                        <form method="POST" action="<?php echo base_url() ?>admin/audio/updatestory" enctype="multipart/form-data">

                            <input name="id" type="text" value="<?php echo $audio['id'] ?>" id="blogeditModalId" hidden>

                            <div class="form-group">

                                <label class="text-black font-w500">Upload Image (400*200px)</label>

                                <div class="input-group">

                                    <img style="width:150px;" id="blogeditModalImage" class="my-2 border rounded" src="<?php echo base_url() . "uploads/" . $audio['image'] ?>" alt="banner">

                                </div>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="file0" type="file" class="custom-file-input">

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>



                                <label class="text-black font-w500">Upload Audio (mp3)</label>

                                <div class="input-group mb-3">

                                    <audio class="w-100" controls>

                                        <source src="<?php echo base_url() . "uploads/" . $audio['src'] ?>" type="audio/mpeg">

                                        Your browser does not support the audio element.

                                    </audio>

                                </div>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="file1" type="file" accept=".mp3" class="custom-file-input">

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-12">

                                <label>Name*</label>

                                <input name="name" type="text" class="form-control editModalTitle" placeholder="Enter Name" value="<?php echo $audio['title'] ?>" required>

                            </div>

                            <div class="form-group col-12">

                                <label>Description*</label>

                                <textarea name="description" class="summernote editModalDescription" required>

                                <?php echo $audio['description'] ?>

                                </textarea>

                            </div>



                            <div class="form-group col-12">

                                <div class="form-group">

                                    <label>Category</label>

                                    <select name="category" class="form-control default-select editModalCategory" id="sel1" required>

                                        <?php

                                        // unset($data['category'][0]);

                                        foreach ($data['category'] as $category) {

                                        ?>

                                            <option <?php echo $audio['category'] == $category['id'] ? 'selected' : '' ?> value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>

                                        <?php

                                        }

                                        ?>

                                    </select>

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

    </div>

</div>



<!--**********************************Content body End***********************************-->





<!--**********************************footer Start***********************************-->

<?php $this->load->view('admin/layout/footer'); ?>

<!--**********************************footer End***********************************-->