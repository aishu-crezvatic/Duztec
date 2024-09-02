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
<!--                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-house"></i>
                                <span class="nav-text">Category</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/category">View Category</a></li>
                                <li><a href="<?php echo base_url() ?>admin/wayam_madhe_ky_wachal">Wayam Madhe Ky Wachal H&A</a></li>
                                <li><a href="<?php echo base_url() ?>admin/about_wayam">About Wayam Home</a></li>
                                <li><a href="<?php echo base_url() ?>admin/bapat_sir_intro">Bapat Sir Intro Home</a></li>
                                <li><a href="<?php echo base_url() ?>admin/salagar_mandal">Salagar Mandal Home</a></li>
                            </ul>
                        </li>-->
<!--                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-store"></i>
                                <span class="nav-text">Sub Category</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/sub_category">View Sub Category</a></li>
                                <li><a href="<?php echo base_url() ?>admin/about_hero">About Hero Section</a></li>
                                <li><a href="<?php echo base_url() ?>admin/bapat_sir_intro_about_us">Bapat sir intro aboutus page</a></li>
                                <li><a href="<?php echo base_url() ?>admin/about_aboutus_page">About section on aboutus page</a></li>
                                <li><a href="<?php echo base_url() ?>admin/wayam_sahitik">Wayam Sahitik</a></li>
                                <li><a href="<?php echo base_url() ?>admin/award">Award</a></li>
                                <li><a href="<?php echo base_url() ?>admin/contact_us">Contact Us</a></li>
                            </ul>
                        </li>-->
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
                        
<!--                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-store"></i>
                                <span class="nav-text">Product</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/product">Product</a></li>
                                <li><a href="<?php echo base_url() ?>admin/about_hero">About Hero Section</a></li>
                                <li><a href="<?php echo base_url() ?>admin/bapat_sir_intro_about_us">Bapat sir intro aboutus page</a></li>
                                <li><a href="<?php echo base_url() ?>admin/about_aboutus_page">About section on aboutus page</a></li>
                                <li><a href="<?php echo base_url() ?>admin/wayam_sahitik">Wayam Sahitik</a></li>
                                <li><a href="<?php echo base_url() ?>admin/award">Award</a></li>
                                <li><a href="<?php echo base_url() ?>admin/contact_us">Contact Us</a></li>
                            </ul>
                        </li>-->
                    <?php
                    }
                    ?>

                    <?php
                    if ($userData['type'] == 1 || $userData['type'] == 2) {
                    ?>
                        <li>
                            <hr>
                            -----------------------
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-store"></i>
                                
                                <span class="nav-text">Orders</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/orders">Customer List</a></li>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>

                    <?php
                    if ($userData['type'] == 1) {
                    ?>
                        
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span class="nav-text">Event</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/event">Spardha ani Nikal</a></li>
                                <li><a href="<?php echo base_url() ?>admin/bb_spardha_hero">BB Header Section</a></li>
                                <li><a href="<?php echo base_url() ?>admin/why_participate_in_bb">Why participate in BB</a></li>
                                <!-- <li><a href="<?php echo base_url() ?>admin/who_can_participate_in_bb">Who can participate in BB</a></li> -->
                                <li><a href="<?php echo base_url() ?>admin/parent_testimonial_bb">parent</a></li>
                                <li><a href="<?php echo base_url() ?>admin/student_testimonial_bb">Student</a></li>
                                <li><a href="<?php echo base_url() ?>admin/format_of_competition_bb">Format of competition BB</a></li>
                                <li><a href="<?php echo base_url() ?>admin/bb_compitation_faq">BB FAQ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-trophy"></i>
                                <span class="nav-text">By Membership</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/v_vichar_v_vikas">vachnatun vichar vicharatun vikas</a></li>
                                <li><a href="<?php echo base_url() ?>admin/darjedar_sahitya">Darjedar sahitya</a></li>
                                <li><a href="<?php echo base_url() ?>admin/how_to_become_member">How to become member</a></li>
                                <li><a href="<?php echo base_url() ?>admin/gift_for_kids">Gift For Kids</a></li>
                                <li><a href="<?php echo base_url() ?>admin/membership_faq">Membership FAQ</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-trophy"></i>
                                <span class="nav-text">Footer</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url() ?>admin/footerTagline">Footer Tagline</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-music"></i>
                                <span class="nav-text">Audio Story</span>
                            </a>
                            <ul aria-expanded="false">
                                <ul aria-expanded="false">
                                    <li><a href="<?php echo base_url() ?>admin/audio/category">Category</a></li>
                                    <li><a href="<?php echo base_url() ?>admin/audio">Audio</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="fa-solid fa-trophy"></i>
                                <span class="nav-text">Anka</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="<?php echo base_url(); ?>admin/anka/view">View List</a></li>
                            </ul>
                        </li>
                    <?php
                    }

                    ?>
                </ul>
                <div class="copyright">
                    <p><strong>Crezvatic CRM Dashboard</strong> © 2022 All Rights Reserved</p>
                    <p>Made with <span class="heart"></span> by Team <a href="http://crezvatic.com/">Crezvatic</a></p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->