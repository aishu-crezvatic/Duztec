<!--**********************************
            Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <!-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+ New Event</a> -->
        <ul class="metismenu" id="menu">
            <li><a href="<?php echo base_url() ?>admin" class="ai-icon" aria-expanded="false">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <?php
            $userData = $this->db->select('*')->from('admin_login')->where('email', $this->session->userdata('adminEmail'))->get()->row_array();

            ?>
            <?php
            if ($userData['type'] == 1) {
                ?>

                <li><a href="<?php echo base_url() ?>admin/category" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Category</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/sub_category" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Sub category</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/home" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Home Page</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/contact_us" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Contact Us</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/about_us" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">About Us</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/gallery" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Gallery</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/sector" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Sector</span>
                    </a>
                </li>
                <li><a href="<?php echo base_url() ?>admin/product" class="ai-icon" aria-expanded="false">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="nav-text">Product</span>
                    </a>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-blog"></i>
                        <span class="nav-text">Blogs</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="<?php echo base_url() ?>admin/blogcategory">Category</a></li>
                        <li><a href="<?php echo base_url() ?>admin/blog">Blogs</a></li>
                    </ul>
                </li>


                <?php
            }
            ?>

        </ul>
        <div class="copyright">
            <p><strong>Crezvatic CRM Dashboard</strong> © 2022 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by Team <a href="http://crezvatic.com/" target="blank">Crezvatic</a></p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
***********************************-->