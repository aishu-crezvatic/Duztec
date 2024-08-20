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

                <a href="<?php echo base_url('admin/blog') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>

            </div>



            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Edit Blog</h4>

                    </div>

                    <div class="card-body">

                        <?php

                        $blog = $data['blog'];

                        ?>

                        <form method="POST" action="<?php echo base_url() ?>admin/blog/update" enctype="multipart/form-data">

                            <input name="id" type="text" value="<?php echo $blog['id'] ?>" id="blogeditModalId" hidden>

                            <div class="form-group">

                                <label class="text-black font-w500">Upload Thumbnail (400*200px)</label>

                                <div class="input-group">

                                    <img style="width:150px;" id="blogeditModalImage" class="my-2 border rounded" src="<?php echo base_url() . "uploads/" . $blog['image'] ?>" alt="banner">

                                </div>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image0" type="file" class="custom-file-input">

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>



                                <label class="text-black font-w500">Upload Banner (400*200px)</label>

                                <div class="input-group">

                                    <img style="width:300px;" id="blogeditModalImage" class="my-2 border rounded" src="<?php echo base_url() . "uploads/" . $blog['banner'] ?>" alt="banner">

                                </div>

                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">

                                        <span class="input-group-text">Upload</span>

                                    </div>

                                    <div class="custom-file">

                                        <input name="image1" type="file" class="custom-file-input">

                                        <label class="custom-file-label selected">Choose File</label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group col-12">

                                <label>Title*</label>

                                <input name="title" type="text" class="form-control editModalTitle" placeholder="Enter Title" value="<?php echo $blog['title'] ?>">

                            </div>



                            <div class="form-group col-12">

                                <label>Url Title*</label>

                                <input name="url_title" type="text" class="form-control editModalTitle" placeholder="Enter Title" value="<?php echo $blog['url_title'] ?>">

                            </div>

                            <div class="form-group col-12">

                                <label>Meta Title*</label>

                                <input name="meta-title" type="text" class="form-control editModalTitle" placeholder="Enter Meta Title" value="<?php echo $blog['meta-title'] ?>">

                            </div>

                            <div class="form-group col-12">

                                <label>Meta Describtion*</label>

                                <input name="meta-description" type="text" class="form-control editModalTitle" placeholder="Enter Meta Title" value="<?php echo $blog['meta-description'] ?>">

                            </div>

                            <div class="form-group col-12">

                                <label>Short Description*</label>

                                <textarea name="short-description" class="summernote editModalDescription">

                                <?php echo $blog['short-description'] ?>

                                </textarea>

                            </div>

                            <div class="form-group col-12">

                                <label>Description*</label>

                                <textarea name="description" class="summernote editModalDescription">

                                <?php echo $blog['description'] ?>

                                </textarea>

                            </div>

                            <div class="form-group col-12">

                                <label>Keyword (use comma for sepration)*</label>

                                <input name="keyword" type="text" class="form-control editModalKeyword" placeholder="trending, new blog, Study" value="<?php echo $blog['keywords'] ?>">

                            </div>

                            <div class="form-group col-12">

                                <div class="form-group">

                                    <label>Category</label>

                                    

                                    <select multiple name="category[]" class="form-control default-select editModalCategory" id="sel1">

                                        <?php

                                        // unset($data['category'][0]);

                                        foreach ($data['category'] as $category) {

                                            $blogcategory = explode(',',$blog['category']);

                                            ?>

                                                <option <?php echo in_array($category['name'], $blogcategory) ? 'selected' : '' ?> value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?></option>

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