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

                <a href="<?php echo base_url('admin/product') ?>" class="btn btn-warning w-100 m-0"><i class="fa-solid fa-arrow-left-long"></i> Back</a>

            </div>



            <div class="col-12">

                <div class="card">

                    <div class="card-header">

                        <h4 class="card-title">Edit Product</h4>

                    </div>

                    <div class="card-body">

                        <form method="POST" action="<?php echo base_url() ?>admin/product/update" enctype="multipart/form-data">

                            <input name="p_id" type="text" value="<?php echo $data['p_id'] ?>" id="blogeditModalId" hidden>
                            
                            <div class="form-group">

                                <label>Name*</label>

                                <input name="name" type="text" class="form-control editModalTitle" placeholder="Enter Name" value="<?php echo $data['name'] ?>">

                            </div>
                            <!--<input name="c_id" type="text" value="<?php //echo $data['c_id'] ?>" id="blogeditModalId" hidden>-->
                            <div class="form-group col-12">
                                        <label>Category</label>
                                        <select name="c_id" class="form-control default-select" id="sel1">
                                            <?php
                                            // unset($data['category'][0]);
                                            foreach ($categories as $category) {
                                                if($data['c_id'] == $category['c_id']){
                                            ?>
                                                <option value="<?php echo $category['c_id'] ?>" selected><?php echo $category['name'] ?></option>
                                            <?php
                                            }else{
                                            ?>
                                                 <option value="<?php echo $category['c_id'] ?>"><?php echo $category['name'] ?></option>
                                            <?php
                                            }
                                            }
                                            ?>
                                        </select>
                                    </div>
                            <div class="form-group col-12">
                                        <label>Sub Category</label>
                                        <select name="c_id" class="form-control default-select" id="sel1">
                                            <?php
                                            // unset($data['category'][0]);
                                            foreach ($sub_categories as $sub_category) {
                                                if($data['sc_id'] == $sub_category['sc_id']){
                                            ?>
                                                <option value="<?php echo $sub_category['sc_id'] ?>" selected><?php echo $sub_category['name'] ?></option>
                                            <?php
                                            }else{
                                            ?>
                                                 <option value="<?php echo $sub_category['sc_id'] ?>"><?php echo $sub_category['name'] ?></option>
                                            <?php
                                            }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                <label>Page Type</label>
                                <select name="page_type" class="form-control default-select" id="page_type">
                                    <?php
                                    // unset($data['category'][0]);
                                    foreach ($page_types as $key => $val) {
                                        if($data['page_type'] == $key){
                                        ?>
                                        <option value="<?php echo $key ?>" selected><?php echo $val ?></option>
                                         <?php
                                            }else{
                                            ?>
                                        <option value="<?php echo $key ?>"><?php echo $val ?></option>
                                        <?php
                                            }
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            <?php
//                            $page_type = 2;
//                            $page_type = $data['page_type'];
//                            switch ($page_type) {
//                                case 1:
                                    ?>
                            <div class="page_type_specific" id="page_type_1">
                                    <div class="form-group">
                                        <label>Advantages Title</label>
                                        <input name="advantages_title" type="text" class="form-control" placeholder="Enter advantages title" value="<?php echo $data['advantages_title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Advantages 1</label>
                                        <input name="advantages_1" type="text" class="form-control" placeholder="Enter advantages 1" value="<?php echo $data['advantages_1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 1 para</label>
                                        <input name="advantages1_para" type="text" class="form-control" placeholder="Enter advantages 1 para" value="<?php echo $data['advantages1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Advantages 2</label>
                                        <input name="advantages_2" type="text" class="form-control" placeholder="Enter advantages 2" value="<?php echo $data['advantages_2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 2 para</label>
                                        <input name="advantages2_para" type="text" class="form-control" placeholder="Enter advantages 2 para" value="<?php echo $data['advantages2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Advantages 3</label>
                                        <input name="advantages_3" type="text" class="form-control" placeholder="Enter advantages 3" value="<?php echo $data['advantages_3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 3 para</label>
                                        <input name="advantages3_para" type="text" class="form-control" placeholder="Enter advantages 3 para" value="<?php echo $data['advantages3_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Advantages 4</label>
                                        <input name="advantages_4" type="text" class="form-control" placeholder="Enter advantages 4" value="<?php echo $data['advantages_4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 4 para</label>
                                        <input name="advantages4_para" type="text" class="form-control" placeholder="Enter advantages 4 para" value="<?php echo $data['advantages4_para'] ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Product Diversity Matrix</label>
                                        <textarea name="product_diversity_matrix" class="summernote"><?php echo $data['product_diversity_matrix'] ?></textarea>
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
                                        <input name="advantages_1" type="text" class="form-control" placeholder="Enter advantages 1" value="<?php echo $data['advantages_1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 1 para</label>
                                        <input name="advantages1_para" type="text" class="form-control" placeholder="Enter advantages 1 para" value="<?php echo $data['advantages1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Advantages 2</label>
                                        <input name="advantages_2" type="text" class="form-control" placeholder="Enter advantages 2" value="<?php echo $data['advantages_2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>advantages 2 para</label>
                                        <input name="advantages2_para" type="text" class="form-control" placeholder="Enter advantages 2 para" value="<?php echo $data['advantages2_para'] ?>">
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
                                        <input name="key_features" type="text" class="form-control" placeholder="Enter key features" value="<?php echo $data['key_features'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1</label>
                                        <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1" value="<?php echo $data['key_features1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1 Para</label>
                                        <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para" value="<?php echo $data['key_features1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2</label>
                                        <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2" value="<?php echo $data['key_features2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2 Para</label>
                                        <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para" value="<?php echo $data['key_features2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3</label>
                                        <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3" value="<?php echo $data['key_features3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3 Para</label>
                                        <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para" value="<?php echo $data['key_features3_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4</label>
                                        <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4" value="<?php echo $data['key_features4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4 Para</label>
                                        <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para" value="<?php echo $data['key_features4_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose</label>
                                        <input name="why_choose" type="text" class="form-control" placeholder="Enter key why choose" value="<?php echo $data['why_choose'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 1</label>
                                        <input name="why_choose1" type="text" class="form-control" placeholder="Enter why choose 1" value="<?php echo $data['why_choose1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 1 Para</label>
                                        <input name="why_choose1_para" type="text" class="form-control" placeholder="Enter why choose 1 para" value="<?php echo $data['why_choose1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 2</label>
                                        <input name="why_choose2" type="text" class="form-control" placeholder="Enter why choose 2" value="<?php echo $data['why_choose2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 2 Para</label>
                                        <input name="why_choose2_para" type="text" class="form-control" placeholder="Enter why choose 2 para" value="<?php echo $data['why_choose2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 3</label>
                                        <input name="why_choose3" type="text" class="form-control" placeholder="Enter why choose 3" value="<?php echo $data['why_choose3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose 3 Para</label>
                                        <input name="why_choose3_para" type="text" class="form-control" placeholder="Enter why choose 3 para" value="<?php echo $data['why_choose3_para'] ?>">
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
                                        <input name="key_features" type="text" class="form-control" placeholder="Enter key features" value="<?php echo $data['key_features'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1</label>
                                        <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1" value="<?php echo $data['key_features1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1 Para</label>
                                        <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para" value="<?php echo $data['key_features1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2</label>
                                        <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2" value="<?php echo $data['key_features2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2 Para</label>
                                        <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para" value="<?php echo $data['key_features2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3</label>
                                        <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3" value="<?php echo $data['key_features3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3 Para</label>
                                        <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para" value="<?php echo $data['key_features3_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4</label>
                                        <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4" value="<?php echo $data['key_features4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4 Para</label>
                                        <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para" value="<?php echo $data['key_features4_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Why Choose</label>
                                        <input name="why_choose" type="text" class="form-control" placeholder="Enter key why choose" value="<?php echo $data['why_choose'] ?>">
                                    </div>
<!--                                    <div class="form-group">
                                        <label>Why Choose 1</label>
                                        <input name="why_choose1" type="text" class="form-control" placeholder="Enter why choose 1">
                                    </div>-->
                                    <div class="form-group">
                                        <label>Why Choose 1 Para</label>
                                        <input name="why_choose1_para" type="text" class="form-control" placeholder="Enter why choose 1 para" value="<?php echo $data['why_choose1_para'] ?>">
                                    </div>
<!--                                    <div class="form-group">
                                        <label>Why Choose 2</label>
                                        <input name="why_choose2" type="text" class="form-control" placeholder="Enter why choose 2">
                                    </div>-->
                                    <div class="form-group">
                                        <label>Why Choose 2 Para</label>
                                        <input name="why_choose2_para" type="text" class="form-control" placeholder="Enter why choose 2 para" value="<?php echo $data['why_choose2_para'] ?>">
                                    </div>
<!--                                    <div class="form-group">
                                        <label>Why Choose 3</label>
                                        <input name="why_choose3" type="text" class="form-control" placeholder="Enter why choose 3">
                                    </div>-->
                                    <div class="form-group">
                                        <label>Why Choose 3 Para</label>
                                        <input name="why_choose3_para" type="text" class="form-control" placeholder="Enter why choose 3 para" value="<?php echo $data['why_choose3_para'] ?>">
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
                                        <input name="technology" type="text" class="form-control" placeholder="Enter technology" value="<?php echo $data['technology'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Benefits</label>
                                        <textarea name="benefits" class="summernote"><?php echo $data['benefits'] ?></textarea>
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
                                        <input name="key_features" type="text" class="form-control" placeholder="Enter key features" value="<?php echo $data['key_features'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1</label>
                                        <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1" value="<?php echo $data['key_features1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1 Para</label>
                                        <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para" value="<?php echo $data['key_features1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2</label>
                                        <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2" value="<?php echo $data['key_features2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2 Para</label>
                                        <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para" value="<?php echo $data['key_features2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3</label>
                                        <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3" value="<?php echo $data['key_features3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3 Para</label>
                                        <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para" value="<?php echo $data['key_features3_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4</label>
                                        <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4" value="<?php echo $data['key_features4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4 Para</label>
                                        <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para" value="<?php echo $data['key_features4_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Need Title</label>
                                        <input name="need_title" type="text" class="form-control" placeholder="Enter key need title" value="<?php echo $data['need_title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Need Para</label>
                                        <input name="need_para" type="text" class="form-control" placeholder="Enter key need para" value="<?php echo $data['need_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>key Features Title</label>
                                        <input name="key_features_title" type="text" class="form-control" placeholder="Enter key features title" value="<?php echo $data['key_features_title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features Para</label>
                                        <input name="key_features_para" type="text" class="form-control" placeholder="Enter key features para" value="<?php echo $data['key_features_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Choose Title</label>
                                        <input name="choose_title" type="text" class="form-control" placeholder="Enter choose title" value="<?php echo $data['choose_title'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Choose Para</label>
                                        <input name="choose_para" type="text" class="form-control" placeholder="Enter choose para" value="<?php echo $data['choose_para'] ?>">
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
                                        <input name="key_features" type="text" class="form-control" placeholder="Enter key features" value="<?php echo $data['key_features'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1</label>
                                        <input name="key_features1" type="text" class="form-control" placeholder="Enter key features 1" value="<?php echo $data['key_features1'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 1 Para</label>
                                        <input name="key_features1_para" type="text" class="form-control" placeholder="Enter key features1 para" value="<?php echo $data['key_features1_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2</label>
                                        <input name="key_features2" type="text" class="form-control" placeholder="Enter key features 2" value="<?php echo $data['key_features2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 2 Para</label>
                                        <input name="key_features2_para" type="text" class="form-control" placeholder="Enter key features 2 para" value="<?php echo $data['key_features2_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3</label>
                                        <input name="key_features3" type="text" class="form-control" placeholder="Enter key features 3" value="<?php echo $data['key_features3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 3 Para</label>
                                        <input name="key_features3_para" type="text" class="form-control" placeholder="Enter key features 3 para" value="<?php echo $data['key_features3_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4</label>
                                        <input name="key_features4" type="text" class="form-control" placeholder="Enter key features 4" value="<?php echo $data['key_features4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 4 Para</label>
                                        <input name="key_features4_para" type="text" class="form-control" placeholder="Enter key features 4 para" value="<?php echo $data['key_features4_para'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 5</label>
                                        <input name="key_features5" type="text" class="form-control" placeholder="Enter key features 5" value="<?php echo $data['key_features5'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Key Features 5 Para</label>
                                        <input name="key_features5_para" type="text" class="form-control" placeholder="Enter key features 5 para" value="<?php echo $data['key_features5_para'] ?>">
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
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="summernote"><?php echo $data['description'] ?></textarea>
                            </div>
                            <div class="form-group">
                               <label>Conclusion</label>
                               <textarea name="conclusion" class="summernote"><?php echo $data['conclusion'] ?></textarea>
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


                            <div class="form-group">

                                <button type="submit" class="btn btn-primary btn-block">Update</button>

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
<script>
    $(document).ready(function () {
//    console.log( "ready!" );
//alert();
        var id = $("#page_type").val();
        $('#page_type_'+id).css('display','block');
    });
    
    $("#page_type").change(function(){
//        alert("The text has been changed.");
               var id = $(this).val();
        $('.page_type_specific').css('display','none');
        $('#page_type_'+id).css('display','block');
    });
</script>