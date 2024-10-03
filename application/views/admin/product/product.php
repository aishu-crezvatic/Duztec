<!--**********************************Header & sidebar start***********************************-->
<?php
$this->load->view('admin/layout/header');
$this->load->view('admin/layout/sidebar');
?>
<style>
    .page_type_specific{
        display: none;
    }
</style>
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
                        <h5 class="modal-title">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/product/create" enctype="multipart/form-data">
                            <div class="form-group">

                                <label>Name*</label>

                                <input name="name" type="text" class="form-control editModalTitle" placeholder="Enter Name">

                            </div>
                            <!--<div class="form-group col-12">-->
                            <div class="form-group">
                                <label>Category</label>
                                <select name="c_id" class="form-control default-select" id="sel1">
                                    <?php
                                    // unset($data['category'][0]);
                                    foreach ($categories as $category) {
                                        ?>
                                        <option value="<?php echo $category['c_id'] ?>"><?php echo $category['name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sub Category</label>
                                <select name="sc_id" class="form-control default-select" id="sel1">
                                    <option value="0" selected><?php echo 'Not Sub Category'; ?></option>
                                    <?php
                                    // unset($data['category'][0]);
                                    foreach ($sub_categories as $sub_category) {
                                        ?>
                                        <option value="<?php echo $sub_category['sc_id'] ?>"><?php echo $sub_category['name'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Page Type</label>
                                <select name="page_type" class="form-control default-select" id="page_type">
                                    <?php
                                    // unset($data['category'][0]);
                                    foreach ($page_types as $key => $val) {
                                        if ($key == '1') {
                                            ?>
                                            <option value="<?php echo $key ?>" selected><?php echo $val ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $key ?>"><?php echo $val ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <?php
//                            $page_type = 1;
//                            switch ($page_type) {
//                                case 1:
                                    ?>
                                    <div class="page_type_specific" id="page_type_1">
                                        <div class="form-group">
                                            <label>Advantages Title</label>
                                            <input name="advantages_title" type="text" class="form-control" placeholder="Enter advantages title">
                                        </div>
                                        <div class="form-group">
                                            <label>Advantages 1</label>
                                            <input name="advantages_1" type="text" class="form-control" placeholder="Enter advantages 1">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 1 para</label>
                                            <input name="advantages1_para" type="text" class="form-control" placeholder="Enter advantages 1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Advantages 2</label>
                                            <input name="advantages_2" type="text" class="form-control" placeholder="Enter advantages 2">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 2 para</label>
                                            <input name="advantages2_para" type="text" class="form-control" placeholder="Enter advantages 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Advantages 3</label>
                                            <input name="advantages_3" type="text" class="form-control" placeholder="Enter advantages 3">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 3 para</label>
                                            <input name="advantages3_para" type="text" class="form-control" placeholder="Enter advantages 3 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Advantages 4</label>
                                            <input name="advantages_4" type="text" class="form-control" placeholder="Enter advantages 4">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 4 para</label>
                                            <input name="advantages4_para" type="text" class="form-control" placeholder="Enter advantages 4 para">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Diversity Matrix</label>
                                            <textarea name="product_diversity_matrix" class="summernote"></textarea>
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 2:
                                    ?>
                                    <div class="page_type_specific" id="page_type_2">
                                        <div class="form-group">
                                            <label>Advantages 1</label>
                                            <input name="advantages_1" type="text" class="form-control" placeholder="Enter advantages 1">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 1 para</label>
                                            <input name="advantages1_para" type="text" class="form-control" placeholder="Enter advantages 1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Advantages 2</label>
                                            <input name="advantages_2" type="text" class="form-control" placeholder="Enter advantages 2">
                                        </div>
                                        <div class="form-group">
                                            <label>advantages 2 para</label>
                                            <input name="advantages2_para" type="text" class="form-control" placeholder="Enter advantages 2 para">
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 3:
                                    ?>
                                    <div class="page_type_specific" id="page_type_3">
                                        <div class="form-group">
                                            <label>Key Features</label>
                                            <input name="key_features" type="text" class="form-control" placeholder="Enter key features">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1</label>
                                            <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1 Para</label>
                                            <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2</label>
                                            <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2 Para</label>
                                            <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3</label>
                                            <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3 Para</label>
                                            <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4</label>
                                            <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4 Para</label>
                                            <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose</label>
                                            <input name="why_choose" type="text" class="form-control" placeholder="Enter key why choose">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 1</label>
                                            <input name="why_choose1" type="text" class="form-control" placeholder="Enter why choose 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 1 Para</label>
                                            <input name="why_choose1_para" type="text" class="form-control" placeholder="Enter why choose 1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 2</label>
                                            <input name="why_choose2" type="text" class="form-control" placeholder="Enter why choose 2">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 2 Para</label>
                                            <input name="why_choose2_para" type="text" class="form-control" placeholder="Enter why choose 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 3</label>
                                            <input name="why_choose3" type="text" class="form-control" placeholder="Enter why choose 3">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose 3 Para</label>
                                            <input name="why_choose3_para" type="text" class="form-control" placeholder="Enter why choose 3 para">
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 4:
                                    ?>
                                    <div class="page_type_specific" id="page_type_4">    
                                        <div class="form-group">
                                            <label>Key Features</label>
                                            <input name="key_features" type="text" class="form-control" placeholder="Enter key features">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1</label>
                                            <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1 Para</label>
                                            <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2</label>
                                            <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2 Para</label>
                                            <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3</label>
                                            <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3 Para</label>
                                            <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4</label>
                                            <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4 Para</label>
                                            <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Why Choose</label>
                                            <input name="why_choose" type="text" class="form-control" placeholder="Enter key why choose">
                                        </div>
                                        <!--                                    <div class="form-group">
                                                                                <label>Why Choose 1</label>
                                                                                <input name="why_choose1" type="text" class="form-control" placeholder="Enter why choose 1">
                                                                            </div>-->
                                        <div class="form-group">
                                            <label>Why Choose 1 Para</label>
                                            <input name="why_choose1_para" type="text" class="form-control" placeholder="Enter why choose 1 para">
                                        </div>
                                        <!--                                    <div class="form-group">
                                                                                <label>Why Choose 2</label>
                                                                                <input name="why_choose2" type="text" class="form-control" placeholder="Enter why choose 2">
                                                                            </div>-->
                                        <div class="form-group">
                                            <label>Why Choose 2 Para</label>
                                            <input name="why_choose2_para" type="text" class="form-control" placeholder="Enter why choose 2 para">
                                        </div>
                                        <!--                                    <div class="form-group">
                                                                                <label>Why Choose 3</label>
                                                                                <input name="why_choose3" type="text" class="form-control" placeholder="Enter why choose 3">
                                                                            </div>-->
                                        <div class="form-group">
                                            <label>Why Choose 3 Para</label>
                                            <input name="why_choose3_para" type="text" class="form-control" placeholder="Enter why choose 3 para">
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 5:
                                    ?>
                                    <div class="page_type_specific" id="page_type_5">
                                        <div class="form-group">
                                            <label>Technology</label>
                                            <input name="technology" type="text" class="form-control" placeholder="Enter technology">
                                        </div>
                                        <div class="form-group">
                                            <label>Benefits</label>
                                            <textarea name="benefits" class="summernote"></textarea>
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 6:
                                    ?>
                                    <div class="page_type_specific" id="page_type_6">
                                        <div class="form-group">
                                            <label>Key Features</label>
                                            <input name="key_features" type="text" class="form-control" placeholder="Enter key features">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1</label>
                                            <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1 Para</label>
                                            <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2</label>
                                            <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2 Para</label>
                                            <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3</label>
                                            <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3 Para</label>
                                            <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4</label>
                                            <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4 Para</label>
                                            <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Need Title</label>
                                            <input name="need_title" type="text" class="form-control" placeholder="Enter key need title">
                                        </div>
                                        <div class="form-group">
                                            <label>Need Para</label>
                                            <input name="need_para" type="text" class="form-control" placeholder="Enter key need para">
                                        </div>
                                        <div class="form-group">
                                            <label>key Features Title</label>
                                            <input name="key_features_title" type="text" class="form-control" placeholder="Enter key features title">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features Para</label>
                                            <input name="key_features_para" type="text" class="form-control" placeholder="Enter key features para">
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Title</label>
                                            <input name="choose_title" type="text" class="form-control" placeholder="Enter choose title">
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Para</label>
                                            <input name="choose_para" type="text" class="form-control" placeholder="Enter choose para">
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                case 7:
                                    ?>
                                    <div class="page_type_specific" id="page_type_7">
                                        <div class="form-group">
                                            <label>Key Features</label>
                                            <input name="key_features" type="text" class="form-control" placeholder="Enter key features">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1</label>
                                            <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 1 Para</label>
                                            <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2</label>
                                            <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 2 Para</label>
                                            <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3</label>
                                            <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 3 Para</label>
                                            <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4</label>
                                            <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 4 Para</label>
                                            <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 5</label>
                                            <input name="key_features5" type="text" class="form-control" placeholder="Enter key features 5">
                                        </div>
                                        <div class="form-group">
                                            <label>Key Features 5 Para</label>
                                            <input name="key_features5_para" type="text" class="form-control" placeholder="Enter key features 5 para">
                                        </div>
                                    </div>
                                    <?php
//                                    echo "Foo\n";
//                                    break;
//                                default:
//                                    echo "Bar\n";
//                                    break;
//                            }
                            ?>

                            <!--</div>-->
                            <!--                            <div class="form-group">
                                                            <label>Name</label>
                                                            <input name="name" type="text" class="form-control" placeholder="Enter Name">
                                                        </div>-->
                            <!--                            <div class="form-group">
                                                            <label>Price (₹)</label>
                                                            <div class="input-group mb-3  input-info">
                                                                <input name="price" type="number" class="form-control">
                                                                <div class="input-group-append">
                                                                    <span style="background: #4f63ae;" class="input-group-text">₹</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Discount (%)</label>
                                                            <div class="input-group mb-3  input-info">
                                                                <input name="discount" type="number" class="form-control">
                                                                <div class="input-group-append">
                                                                    <span style="background: #4f63ae;" class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                        </div>-->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="summernote"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Conclusion</label>
                                <textarea name="conclusion" class="summernote"></textarea>
                            </div>

                            <div class="form-group border rounded p-2">
                                <!--<label class="text-black font-w500">Upload Image for mobile size (500*400px)</label>-->
                                <label class="text-black font-w500">Upload Images</label>
                                <!--<img style="width:100%;" id="editModalMobileImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">-->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <!--required-->
                                        <input name="images[]" type="file" class="custom-file-input" > 
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border rounded p-2">
                                <!--<label class="text-black font-w500">Upload Image for mobile size (500*400px)</label>-->
                                <label class="text-black font-w500">Upload Videos</label>
                                <!--<img style="width:100%;" id="editModalMobileImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">-->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <!--required-->
                                        <input name="videos[]" type="file" class="custom-file-input" > 
                                        <label class="custom-file-label selected">Choose File</label>
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
                        <h5 class="modal-title">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url() ?>admin/product/edit" enctype="multipart/form-data">
                            <div class="form-group">
                                <input name="id" type="text" value="1" id="editModalId" hidden>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for laptop size (1100*300px)</label>
                                <img style="width:100%;" id="editModalLaptopImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image0" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for Tablet size (700*300px)</label>
                                <img style="width:100%;" id="editModalTabletImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image1" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border rounded p-2">
                                <label class="text-black font-w500">Upload Image for mobile size (500*400px)</label>
                                <img style="width:100%;" id="editModalMobileImage" class="my-2 border rounded" src="http://localhost/wayam/uploads/1st.jpg" alt="banner">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="image2" type="file" class="custom-file-input" required>
                                        <label class="custom-file-label selected">Choose File</label>
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
                    <form method="POST" action="<?php echo base_url() ?>admin/product/delete" enctype="multipart/form-data">
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
                <a href="javascript:void(0)" class="btn btn-primary w-100 m-0" data-toggle="modal" data-target="#addOrderModalside">+ New Product</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                                <table id="example3" class="display min-w850 dataTable no-footer" role="grid" aria-describedby="example3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 152.594px;">Sr No</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Sub Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Page Type</th>
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Name</th>-->
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 182.703px;">Description</th>-->
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Price (₹)</th>-->
                                            <!--<th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Discount (%)</th>-->
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 94.2344px;">Created Date</th>
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
    <!--                                                <td>
                                                <?php
//                                                    $Images = explode(",", $row['image']);
//                                                    $Image = $row['category_image'];
//                                                    foreach ($Images as $baseimg) {
                                                ?>
                                                    <img style="width: 50px;" src="<?php //echo base_url() . "uploads/category" . $Image      ?>" alt="image">
                                                <?php
//                                                    }
                                                ?>
                                                </td>-->
                                                <td><?php echo $row['name'] ?></td>
                                                <td>
                                                    <?php
                                                    foreach ($categories as $category) {
                                                        if ($row['c_id'] == $category['c_id']) {
                                                            echo $category['name'];
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    foreach ($sub_categories as $sub_category) {
                                                        if ($row['sc_id'] == $sub_category['sc_id']) {
                                                            echo $sub_category['name'];
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $row['page_type'] ?></td>
                                                <!--<td><?php //echo $row['description'];       ?></td>-->
                                                <!--<td><?php // echo strlen($row['description']) > 50 ? substr($row['description'], 0, 100) . '...' : $row['description']       ?></td>-->
                                                <!--<td><?php // echo $row['price']        ?></td>-->
                                                <!--<td><?php // echo $row['discount']        ?></td>-->
                                                <td>
                                                    <div class="col-sm-9">
                                                        <input data-id="<?php echo $row['p_id'] ?>" onclick="switchProduct(<?php echo $row['p_id'] ?>)" class="switch switchProduct" type="checkbox" <?php echo $row['status'] == 1 ? 'checked' : '' ?> />
                                                    </div>
                                                </td>
                                                <td><?php echo date('d/m/Y', strtotime($row['created_date'])) ?></td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo base_url() ?>admin/product/edit/<?php echo $row['p_id'] ?>" data-id="<?php echo $row['p_id'] ?>" class="btn btn-primary shadow btn-xs sharp mr-1 editbtn"><i class="fa fa-pencil"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteOrderModalside" data-id="<?php echo $row['p_id'] ?>" class="btn btn-danger shadow btn-xs sharp deletebtn"><i class="fa fa-trash"></i></a>
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
    $(document).ready(function () {
//    console.log( "ready!" );
//alert();
        $('#page_type_1').css('display','block');
    });
    
    $("#page_type").change(function(){
//        alert("The text has been changed.");
               var id = $(this).val();
        $('.page_type_specific').css('display','none');
        $('#page_type_'+id).css('display','block');
    });
    function switchProduct(id) {
//        var id = $(this).attr("data-id");
        $.post(
                base_url + "admin/product/status", {
                    data: id
                },
                function (response) {
                    console.log(response);
                }
        );
    }
//    $(".switchProduct").click(function () {
//        var id = $(this).attr("data-id");
//        $.post(
//                base_url + "admin/product/status", {
//                    data: id
//                },
//                function (response) {
//                    console.log(response);
//                }
//        );
//    });
</script>