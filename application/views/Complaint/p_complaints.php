<?php

if ((empty($this->session->userdata('username')))) {

    redirect(base_url());

}



$ss = $this->session->userdata('userid');

$se = $this->session->userdata('username');

$emp = $this->session->userdata('name');

///////////////////////////

$city = $this->session->userdata('cityid');

$tierid = $this->session->userdata('tierid');

$group = $this->session->userdata('groupid');



?>

<!DOCTYPE html>

<!--

Author: Keenthemes

Product Name: Metronic

Product Version: 8.2.0

Purchase: https://1.envato.market/EA4JP

Website: http://www.keenthemes.com

Contact: support@keenthemes.com

Follow: www.twitter.com/keenthemes

Dribbble: www.dribbble.com/keenthemes

Like: www.facebook.com/keenthemes

License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.

-->

<html lang="en">

<!--begin::Head-->



<head>

    <base href="" />

    <title>KP Cities Improvement Project</title>

    <meta charset="utf-8" />

    <meta name="description"

        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />

    <meta name="keywords"

        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:locale" content="en_US" />

    <meta property="og:type" content="article" />

    <meta property="og:title"

        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />

    <meta property="og:url" content="https://keenthemes.com/metronic" />

    <meta property="og:site_name" content="Keenthemes | Metronic" />

    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

    <link rel="shortcut icon" href="<?php echo base_url() ?>demo47/dist/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->

    <link href="<?php echo base_url() ?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.css"

        rel="stylesheet" type="text/css" />

    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->

    <link href="<?php echo base_url() ?>demo47/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"

        type="text/css" />

    <link href="<?php echo base_url() ?>demo47/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Stylesheets Bundle-->

    

        </script>



    

        





</head>

<!--end::Head-->

<!--begin::Body-->


<div id="cc">
<body  data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"

    data-kt-app-sidebar-fixed="false" data-kt-app-toolbar-enabled="true" class="app-default">

    <!--begin::Theme mode setup on page load-->

    <script>

    var defaultThemeMode = "light";

    var themeMode;

    if (document.documentElement) {

        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {

            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");

        } else {

            if (localStorage.getItem("data-bs-theme") !== null) {

                themeMode = localStorage.getItem("data-bs-theme");

            } else {

                themeMode = defaultThemeMode;

            }

        }

        if (themeMode === "system") {

            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";

        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);

    }

    </script>

    <!--end::Theme mode setup on page load-->

    <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="">      
                <!--begin::Header-->
                <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}" style="background-color:#F4F4F4; height:70px;border-bottom:1px solid #000;">
                    <!--begin::Header container-->
                    <div class="app-container container-xxl d-flex align-items-center justify-content-between" id="kt_app_header_container">
                        <div class="d-flex align-items-center">
                            <!--begin::Aside toggle-->
                            <button class="btn btn-icon btn-color-gray-800 btn-active-color-primary justify-content-start w-30px w-lg-40px me-lg-5" id="kt_app_sidebar_toggle">
                                <i class="ki-duotone ki-text-align-left fs-1 fs-lg-2x fw-bold">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--end::Aside toggle-->
                            
                        </div>
                        <!--begin::Header wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                            <!--begin::Menu wrapper-->
                            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                                    <!--begin:Menu item-->
                    <div class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                    <a href="<?php echo base_url()?>Complaint/dashboard"><span class="menu-title">Dashboard</span></a>
                    <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <!--end:Menu link-->
                    
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <a href="<?php echo base_url()?>Complaint/home"><span class="menu-title">Complaints</span></a>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        
                                    </div>
                                    <!--end:Menu item-->
                                    <?php if($group==1){ ?>
                                    <!--begin:Menu item-->
                                    <div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-title">Setting</span>
                                            
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>

                                    </div>
                                    <!--begin:Menu item-->
                                                                <div class="d-flex flex-wrap gap-2" style="margin-left:-25px;margin-top: 5px;">
                                                        
                                                        <!--begin::Filter-->
                                                        <div>
                                                            <a href="#" class="btn btn-sm btn-icon btn-light" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" style="background-color:#F4F4F4;">
                                                                <i class="ki-duotone ki-down fs-2"></i>
                                                            </a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true" style="">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_zone" class="menu-link px-3" data-kt-inbox-listing-filter="show_all">View Zone</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_tier" class="menu-link px-3" data-kt-inbox-listing-filter="show_read">View Tier</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_status" class="menu-link px-3" data-kt-inbox-listing-filter="show_unread">View Status</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_complaint_category" class="menu-link px-3" data-kt-inbox-listing-filter="show_starred">View Category</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_uc" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">View UC</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_nc" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">View NC</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?php echo base_url()?>Complaint/view_Source" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">View Source</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <!-- <div class="menu-item px-3">
                                                                    <a href="<?php //echo base_url()?>Complaint/page" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">page</a>
                                                                </div> -->
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Filter-->
                                                        
                                                    </div>
                                    <!--begin:Menu item-->
                                    <div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <a href="<?php echo base_url()?>Complaint/user_management"><span class="menu-title">User</span></a>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>
                                    </div>
                                    <?php } ?>
                                        <!--end:Menu link-->
                                        
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-50" style="margin-left:17%;">
                                <a href="#">
                                    <?php if($group==1){ ?>
                                    <img src="<?php echo base_url()?>img/logo.png"
             width="11%" /> <?php }else{?>
                <img src="<?php echo base_url()?>img/logo.png"
             width="9%" />
            <?php  
             } ?></a>
                                    
                                </a>
                            </div>
                            <!--end::Logo-->
                            <!--begin::Navbar-->
                            <div class="app-navbar flex-shrink-0">
                                <div class="d-flex align-items-center flex-wrap flex-lg-nowrap gap-4 gap-lg-10">
                                        
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center gap-2 gapl-lg-4">
                                            <!--begin::Secondary button-->
                                            <div class="m-0">
                                                <!--begin::Menu-->
                                <?php $result3 = $this->db->query("SELECT * FROM user As u where u.user_id=$ss")->row();
                                                 echo $result3->name.' ';
                                 ?><div class="symbol symbol-40px symbol-circle" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent">
                                    <img src="<?php echo base_url()?>/demo47/dist/assets/media/books/100.png" class="w-40px me-5" alt="">
                                </div> 
                                                
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_637de26a416ce" style="">
                                                    <!--begin::Header-->
                                                    <div class="px-4 py-3">
                                                        <div class="fs-5 text-dark fw-bold">Profile Setting</div>
                                                        
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-4">
                                                        <!--begin::Input group-->
                                                        
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div>
                                                        <ul>
                                                            <li>
                                                        <b style="font-size: 15px"><?php echo $se;?></b><br></li>
                                                        <li>
                                                        <a href="<?php echo base_url('Complaint/change_password/'.$ss)?>" class="text-black fw-bold">Change Password</a><br></li>
                                                        
                                                        <a href="<?php echo base_url()?>Complaint/logout" class="btn btn-primary">Sign Out</a>
                                                            <!--end::Options-->
                                                            </ul>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        
                                                        <!--end::Input group-->
                                                    
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Secondary button-->
                                            
                                        </div>
                                        <!--end::Actions-->
                                    </div>                              
                            

                            </div>
                            <!--end::Navbar-->
                        </div>
                        <!--end::Header wrapper-->
                    </div>
                    <br>
                    <!--end::Header container-->
                    
                </div>
                <!--end::Header-->
            <!--begin::Wrapper-->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    

                    
                    <!--begin::Sidebar-->
                    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
                        <!--begin::Sidebar wrapper-->
                        <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y mx-2 my-4" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-offset="5px">
                            <!--begin::Primary menu-->
                            <div id="kt_app_sidebar_menu" class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 px-2" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="<?php echo base_url()?>Complaint/dashboard">
                                        <span class="menu-icon">
                                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="<?php echo base_url()?>Complaint/home">
                                        <span class="menu-icon">
                                            <i class="fa fa-folder-open"></i>
                                        </span>
                                        <span class="menu-title">Complaints</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <?php if($group==1){ ?>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="<?php echo base_url()?>Complaint/user_management">
                                        <span class="menu-icon">
                                            <i class="fa fa-users"></i>
                                        </span>
                                        <span class="menu-title">User</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="fa fa-cogs"></i>
                                        </span>
                                        <span class="menu-title">Setting</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="<?php echo base_url()?>Complaint/view_zone">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Zone</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="<?php echo base_url()?>Complaint/view_tier">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Tier</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="<?php echo base_url()?>Complaint/view_status">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Status</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="view_complaint_category">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Category</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="view_uc">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View UC</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="<?php echo base_url()?>Complaint/view_nc">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View NC</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="view_source">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Source</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <?php } ?>
                                
                            </div>
                            <!--end::Primary menu-->
                        </div>
                        <!--end::Sidebar wrapper-->
                    </div>
                    <!--end::Sidebar-->

            <!--end::Sidebar-->
            
            <!--begin::Main-->

            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                <!--begin::Content wrapper-->

                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Toolbar-->

                    <div id="kt_app_toolbar" class="app-toolbar mt-lg-0 mt-lg-n5 pt-4 pt-lg-0 pb-3">

                        <!--begin::Toolbar container-->

                        <div id="kt_app_toolbar_container"

                            class="app-container container-xxl d-flex flex-stack flex-wrap">

                            <!--begin::Toolbar wrapper-->

                            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

                                <!--begin::Page title-->

                                <div class="page-title d-flex flex-column justify-content-center me-3">

                                    <!--begin::Title-->

                                    <h3

                                        class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">

                                        Complaint Detail

                                        </h3>

                                    <!--end::Title-->



                                </div>

                                <!--end::Page title-->

                                <!--begin::Actions-->

                                <div class="d-flex align-items-center gap-2 gap-lg-3">



                                    <a href="#" class="btn btn-flex btn-primary h-40px fs-7 fw-bold"

                                        data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Add

                                        Complaint

                                    </a>

                                </div>

                                <!--end::Actions-->

                            </div>

                            <!--end::Toolbar wrapper-->

                        </div>

                        <!--end::Toolbar container-->

                    </div>

                    <!--end::Toolbar-->
 <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" >
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                              <!--begin::Main-->

            
                    <!--begin::Row-->
                        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-12">
                    <!--begin::Table widget 14-->
                <div class="card card-flush h-md-100" >
             <!--begin::Header-->
            <div class="card-header pt-7" >
                <!--begin:::Tabs-->

                                    <ul

                                        class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                        
                                        <!--begin:::Tab item-->

                                        <li class="nav-item">

                                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"

                                                href="#kt_ecommerce_add_product_general">Pending</a>

                                        </li>

                                        <!--end:::Tab item-->

                                      <!--begin:::Tab item-->

                                        <li class="nav-item">

                                            <a class="nav-link text-active-primary pb-4" onclick="complaints()" data-bs-toggle="tab"

                                                href="#kt_ecommerce_add_product_complaints">Complaints</a>

                                        </li>

                                        
                                    </ul>

                                    <!--end:::Tabs-->
                        <!--begin::Toolbar-->
            <div class="card-toolbar">
        <!--begin::Menu-->
        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
        <span class="svg-icon svg-icon-2">
           <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">                                      
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>                                   <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                            </g>
                        </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>                           <!--begin::Nav-->
                        <div>
                    </div>
    <!--end::Nav--> 
            <!--begin::Menu 2-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
        </div>
                    <!--end::Menu item-->
                    <!--begin::Menu separator-->
                        <div class="separator mb-3 opacity-75"></div>
                    <!--end::Menu separator-->
                        <!--begin::Menu item-->
                    <div class="menu-item px-3">            
                        <a href="#" class="menu-link px-3" onClick="progress()">Progress</a>
                            </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" onClick="resolved()">Resolved</a>
                                </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3" onClick="rejected()">Rejected</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3" onClick="escalated()">Escalated</a>
                                </div>
                            <!--end::Menu item-->
                                                    <!--end::Menu item-->   
                                                    <?php if($group==1 || $group==2){?>
                            <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" onClick="tier1()" >Tier one</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" onClick="tier2()">Tier two</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" onClick="tier3()">Tier three</a>
                          </div>
                          <!--end::Menu item--> 
                          <?php  } ?>   
                    <!--begin::Menu separator-->
                        <div class="separator mt-3 opacity-75"></div>
                                       <!--end::Menu separator-->
                                                    
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                                </div>
                            <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                            
                            <div class="card-body pt-6">
                        <!--begin::Table container-->
                        

                                    <!--begin::Tab content-->
                                     <div id="tier_ch">
                                    <div class="tab-content">
     

     <!--begin::Tab pane-->

                                        <div class="tab-pane fade" id="kt_ecommerce_add_product_complaints"

                                            role="tab-panel">

                                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                                

    <table class="table table-bordered align-middle table-stripped" id="kt_customers_table"><!--begin::Table head-->
                                                            <thead>
                                                            <tr>
                                                            <th>Serial No </th>
                                                            <!-- <th>Applicant Name</th>
                                                            <th>Applicant Mobile</th> -->
                                                            <th>Subproject Name</th>
                                                            <th>Project Detail</th>
                                                            <th>Complaint Date</th>
                                                            <th>Complaint Category</th>
                                                            <th>Source</th>
                                                            <th>City</th>
                                                            <th>Tier</th>
                                                            <th>Zone</th>
                                                            <th>UC</th>
                                                            <th>NC</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                            </thead>
                                                            <!--end::Table head-->
                                                            <!--begin::Table body-->
                                                            <tbody>
                                                                <?php
               error_reporting(0);
               if ($group==1){
                $h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 OR gcd.tier_id=2 OR gcd.tier_id=3) AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id")->result();

                    // SELECT ga.applicant_id,ga.applicant_name,ga.applicant_mobile,gcd.complaint_date,gcd.complaint_category_id,gcc.cc_id,gcc.cc_name,gcd.complaint_detail,gcd.complaint_title,gcd.sub_project_id,ps.subproject_name,gcd.source_id,s.source_name,gcd.zone_id,gzt.zone_name,gcd.uc_id,gut.uc_name,gcd.nc_id,gnt.nc_name,u.user_id,gcd.user_id,gcd.tier_id,t.tier_name,gcd.status_id,gs.status_name
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $h;?></td>
                        <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                        <td><?php echo $item->tier_name?></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        <td><?php if($item->status_id==1){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php } elseif($item->status_id==2){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                                <?php } elseif($item->status_id==4){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-danger fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        }else{?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        } ?></td>
        
        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                            
          </tr>
  <?php
 $h++;
 }
}


               elseif($group==4 || $group==5) {
                $h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND t.tier_id=gcd.tier_id AND gcd.tier_id=$tierid AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=c.city_id AND u.city_id=$city")->result();
                  
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $h;?></td>
                       <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                        <td><?php echo $item->tier_name?></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        <td><?php if($item->status_id==1){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php } elseif($item->status_id==2){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                                    <?php } elseif($item->status_id==4){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-danger fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        }else{?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        } ?></td>
        
        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        
                                                       </tr>
                                                        <?php
 $h++;
 }
}else {
                $h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 or gcd.tier_id=2 or gcd.tier_id=3) AND  gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=c.city_id AND u.city_id=$city")->result();
                  
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $h;?></td>
                       <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                        <td><?php echo $item->tier_name?></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        <td><?php if($item->status_id==1){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php } elseif($item->status_id==2){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                                    <?php } elseif($item->status_id==4){?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-danger fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        }else{?>
                        <div class="text-gray-500 fw-semibold fs-6">
                                    <span class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name?></span></div>
                        <?php   
                        } ?></td>
        
        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        
                                                       </tr>
                                                        <?php
 $h++;
 }
}
  ?>
   <!-- modal -->

                                                            </tbody>
                                                            <!--end::Table body-->
                                                        </table>
                                                    <!--end::Table-->
<div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_customers_table_length"><label><select name="kt_customers_table_length" aria-controls="kt_customers_table" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_customers_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_customers_table_previous"><a href="#" aria-controls="kt_customers_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_customers_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_customers_table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="kt_customers_table_next"><a href="#" aria-controls="kt_customers_table" data-dt-idx="5" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div>
                                              





                                            </div>

                                        </div>

                                        <!--end::Tab pane-->

                                        <!--begin::Tab pane-->

                                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"

                                            role="tab-panel">

                                            <div class="d-flex flex-column gap-7 gap-lg-10">

                                                

    <table class="table table-bordered align-middle table-stripped"
     >                  

        <!--begin::Table head-->

                            <thead>

                                <tr>

                                                            <th>Serial No </th>
<!-- <th>Applicant Name</th>
                                                            <th>Applicant Mobile</th> -->
                                                            <th>Subproject Name</th>
                                                            <th>Project Detail</th>
                                                            <th>Complaint Date</th>
                                                            <th>Complaint Category</th>
                                                            <th>Source</th>
                                                            <th>City</th>

                                                            <th>Status</th>

                                                            <th>Zone</th>

                                                            <th>UC</th>

                                                            <th>NC</th>

                                                            

                                                           

                                                            <th>Edit</th>

                                                        </tr>

                            </thead>

                        <!--end::Table head-->

                        <!--begin::Table body-->

                <tbody>

                <?php

                error_reporting(0);

                if ($group == 1) {

                    $h = 1;

                    $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id")->result();

                    foreach ($result1 as $item) { ?>

                         <tr class="gradeX">

                                <td><?php echo $h; ?></td>

                                 <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                                <td><button class="btn btn-danger">Pending</button> </td>

                                <td><?php echo $item->zone_name ?></td>

                                <td><?php echo $item->uc_name ?></td>

                                <td><?php echo $item->nc_name ?></td>

                        

        

                <td><a href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

               <img src="<?php echo base_url() ?>img/edit.png"

                     width="30px" height="30px" /> </a>

                                                                    </td>



       

                                                                    </tr>

                                                                <?php

                                                                $h++;

                    }

                } elseif ($group==4 || $group==5) {

                    $h = 1;

                    $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND gcd.user_id=$ss AND u.city_id=c.city_id")->result();

                    foreach ($result1 as $item) { ?>

                         <tr class="gradeX">

                                <td><?php echo $h; ?></td>

                                <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                        

                                <td><button class="btn btn-danger">Pending</button></td>

                                <td><?php echo $item->zone_name ?></td>

                                <td><?php echo $item->uc_name ?></td>

                                <td><?php echo $item->nc_name ?></td>

                        

        

                <td><a href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

               <img src="<?php echo base_url() ?>img/edit.png"

                     width="30px" height="30px" /> </a>

                                                                    </td>



       

                                                                    </tr>

                                                                <?php

                                                                $h++;

                    }

                } 
                else {

                    $h = 1;

                    $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND u.user_id=gcd.user_id AND u.city_id=$city AND u.city_id=c.city_id")->result();

                    foreach ($result1 as $item) { ?>

                         <tr class="gradeX">

                                <td><?php echo $h; ?></td>

                                <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>

                        

                                <td> 

                                    <button class="btn btn-danger">Pending</button>

                                    </td>

                                <td><?php echo $item->zone_name ?></td>

                                <td><?php echo $item->uc_name ?></td>

                                <td><?php echo $item->nc_name ?></td>

                       

                <td><a href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

               <img src="<?php echo base_url() ?>img/edit.png"

                     width="30px" height="30px" /> </a>

                                                                    </td>

                                                                    </tr>

                                                                <?php

                                                                $h++;

                    }

                }

                ?>   

</tbody>                                                        <!--end::Table body-->

        </table>      

                                              





                                            </div>

                                        </div>

                                        <!--end::Tab pane-->

                                        





                                    </div>
                                    </div>

                                    <!--end::Main column-->

                            </form>

                            <!--end::Form-->

                        </div>

                        <!--end::Content container-->

                    </div>

                    <!--end::Content-->
        </div>
        <!--end::Table-->
                    </div>
                        <!--end: Card Body-->
                                            </div>
                                            <!--end::Table widget 14-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->
                                    
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    
                </div>

                <!--end::Content wrapper-->

                <!--begin::Footer-->

                <div id="kt_app_footer" class="app-footer py-2 py-lg-4">

                    <!--begin::Footer container-->

                    <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">

                        <!--begin::Copyright-->

                        <div class="text-dark order-2 order-md-1">

                            <span class="text-muted fw-semibold me-1">2023&copy;</span>

                            <a href="https://egrm.kpcip.pk/" target="_blank" class="text-gray-800 text-hover-primary">KP

                                Cities Improvement Project</a>

                        </div>

                        <!--end::Copyright-->

                        <!--begin::Menu-->



                    </div>

                    <!--end::Footer container-->

                </div>

                <!--end::Footer-->

            </div>

            <!--end:::Main-->

        </div>

        <!--end::Wrapper-->

    </div>

    <!--end::Page-->

    </div>

    <!--end::App-->



<!--begin::Modal - Create Campaign-->

    <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">

        <!--begin::Modal dialog-->

        <div class="modal-dialog modal-fullscreen p-9">

            <!--begin::Modal content-->

            <div class="modal-content modal-rounded">

                <!--begin::Modal header-->

                <div class="modal-header py-7 d-flex justify-content-between">

                    <!--begin::Modal title-->

                    <h2>Add Complaint</h2>

                    <!--end::Modal title-->

                    <!--begin::Close-->

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                        <i class="ki-duotone ki-cross fs-1">

                            <span class="path1"></span>

                            <span class="path2"></span>

                        </i>

                    </div>

                    <!--end::Close-->

                </div>

                <!--begin::Modal header-->

                <!--begin::Modal body-->

                <div class="modal-body scroll-y m-5">

                    <!--begin::Stepper-->

                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">

                    <form role="form" method="post" id="create_item"

                                                    enctype="multipart/form-data" action="<?php echo base_url() ?>Complaint/complaint_insert" autocomplete="off"

                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

<input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                        <table class="table gridexample">





                            <tr>

                                <h5 class="text-primary">Applicant info:</h5>

                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Name :</label></td>

                                <td>

                                    <input type="text" autofocus placeholder="Applicant name"  id="cc"

                                        class="form-control form-control-solid" name="applicant_name" tabindex="1"

                                        >

                                </td>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Mobile :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant Mobile"  id="cc"

                                        class="form-control form-control-solid" name="applicant_mobile" tabindex="1"

                                        ></td>



                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Address :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant Address"  id="cc"

                                        class="form-control form-control-solid" name="applicant_address" tabindex="1"

                                        ></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant CNIC :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant CNIC"  id="cc"

                                        class="form-control form-control-solid" name="applicant_cnic" tabindex="1"

                                        ></td>

                            </tr>

                            <tr>

                                <td>

                                    <h5 class="text-primary">Complaint info:</h5>

                                </td>

                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Date :</label></td>

                                <td><input type="date" autofocus placeholder=""  id="cc"

                                        class="form-control form-control-solid" name="complaint_date" tabindex="1"

                                        ></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Category :</label></td>

                                <td>

                                    <select name="cc_id" class="form-control form-control-solid" style="height: 41px;"

                                        >

                                        <option value="">Select Complaint Category</option>

                                        <?php $cc = $this->db->query("select * from grm_complaint_category")->result();

                                        foreach ($cc as $cc) {

                                            ?>

                                            <option value="<?php echo $cc->cc_id; ?>">

                                                <?php echo $cc->cc_name; ?>

                                            </option>

                                        <?php } ?>

                                    </select>

                                </td>

                            </tr>



                            <tr>





                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Title :</label></td>

                                <td><input type="text" autofocus placeholder="Complaint Title"  id="cc"

                                        class="form-control form-control-solid" name="complaint_title" tabindex="1"

                                        value="null"></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Detail :</label></td>

                                <td><textarea name="complaint_detail" class="form-control form-control-solid">Null</textarea ></td>

                                                            </tr>





                                                            <tr>

                                                            <td><label class="required fs-6 fw-semibold mb-2">Source :</label></td>

                                                           <td>

                <select name="source_id" class="form-control form-control-solid" style="height: 41px;" >

                <option value="0">Select Source</option>

        <?php $src = $this->db->query("select * from grm_source_tbl")->result();

        foreach ($src as $src) {

            ?>

                                                                    <option

                                                                        value="<?php echo $src->source_id; ?>">

                                                                        <?php echo $src->source_name; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                           </td>



                                                            <td></td>

                                                        </tr>



                                                        <tr>

                                                            <td><label for="ID1" class="required fs-6 fw-semibold mb-2">Subproject:</label></td>

                                                           <td colspan="4">

                <select name="subproject_id" class="form-control form-control-solid" id="ID1" style="height: 41px;" >

                <option value="" selected="selected">Select SubProject</option>

        <?php $ps = $this->db->query("select * from ppms_subproject where city_id=$city")->result();

        foreach ($ps as $ps) {

            ?>

                                                                    <option

                                                                        value="<?php echo $ps->subproject_id; ?>">

                                                                        <?php echo $ps->subproject_name . '/' . $ps->detail; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                           </td>

                                                       </tr>

                                                       <tr>

                                                           <td><label class="required fs-6 fw-semibold mb-2">NC:</label></td>

                                                             <td>

        <select name="nc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_uc_new(this.value)" >

                                              <option>Select NC</option>

                                    <?php $nc = $this->db->query("select * from grm_nc_tbl as gnt,grm_uc_tbl as gut where gnt.uc_id=gut.uc_id AND gnt.city_id=$city")->result();

                                    foreach ($nc as $nc) {

                                        ?>

                                                                    <option

                                                                        value="<?php echo $nc->nc_id; ?>">

                                                                        <?php echo $nc->nc_name.",UC-".$nc->uc_name; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                             </td>

                                                            <td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>

                                                             <td>

     <select name="uc_id" id="uc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_zone_new(this.value)"  >

                                              <option>Select UC</option>

                                                               

                                                            </select>

                                                             </td>

                                                         </tr>

                                                         <tr>

                                                                 

                                                                 <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>

                                                                  <td>

                             <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;"   >

                                                   <option>Select Zone</option>

                                                                     

                                                                 </select>

                                                                  </td>  

                                                                  <td><label class="required fs-6 fw-semibold mb-2">File:</label></td>

                                                                  <td>

                                                                      <input type="file" name="files[]" class="form-control form-control-solid" style="height: 41px;" multiple >

                                                                  </td>

                                                                  </tr>

                                                              <tr>

                                                                 <td><button type="submit"

                                                                         class="btn btn-block btn-outline btn-primary"

                                                                         id="add" name="add" tabindex="2">Save

                                                                         Record</button></td>     

                                               </tr>

                                                    </table>

                                                    

                                                </form>


                                                </div>

                    <!--end::Stepper-->

                </div>

                <!--begin::Modal body-->

            </div>

        </div>

    </div>

    <!--end::Modal - Create Campaign-->


        <!--begin::Javascript-->

        <script>

        var hostUrl = "<?php echo base_url() ?>demo47/dist/assets/plugins/global/plugins.bundle.js";

        </script>

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->

        <script src="<?php echo base_url() ?>demo47/dist/assets/plugins/global/plugins.bundle.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/scripts.bundle.js"></script>

        <!--end::Global Javascript Bundle-->

        <!--begin::Vendors Javascript(used for this page only)-->

        <script src="<?php echo base_url() ?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.js">

        </script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/plugins/custom/formrepeater/formrepeater.bundle.js">

        </script>

        <!--end::Vendors Javascript-->

        <!--begin::Custom Javascript(used for this page only)-->

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/apps/ecommerce/catalog/save-product.js">

        </script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/widgets.bundle.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/widgets.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/apps/chat/chat.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/utilities/modals/create-campaign.js"></script>

        <script src="<?php echo base_url() ?>demo47/dist/assets/js/custom/utilities/modals/users-search.js"></script>

        <!--end::Custom Javascript-->

        <script src="<?php echo base_url() ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>

        <link href="<?php echo base_url() ?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

    

        <!--end::Javascript-->

    

        <!--end::Vendors Javascript-->

        <!--begin::Custom Javascript(used for this page only)-->

        <script src="<?php echo base_url() ?>demo47/distassets/js/custom/apps/customers/list/export.js"></script>

        <script src="<?php echo base_url() ?>demo47/distassets/js/custom/apps/customers/list/list.js"></script>

        <script src="<?php echo base_url() ?>demo47/distassets/js/custom/apps/customers/add.js"></script>


</body>
</div>
<!--end::Body-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script>

   function get_uc_new(iddd){

                $.ajax(

                    {

                    method: "POST",

                    url: "<?php echo base_url('Welcome/get_uc_new') ?>",

                    data: {

                        id: iddd

                    },

                    datatype: "html",

                    success: function(data) {

                        $("#uc_id").html('<option value="">Select UC</option');

                        $("#uc_id").html(data);

                       



                    }

                }

                );

            }



</script>





<script>

   function get_zone_new(iddd){

                $.ajax(

                    {

                    method: "POST",

                    url: "<?php echo base_url('Welcome/get_zone_new') ?>",

                    data: {

                        id: iddd

                    },

                    datatype: "html",

                    success: function(data) {

                        $("#zone_id").html('<option value="">Select Zone</option');

                        $("#zone_id").html(data);

                       



                    }

                }

                );

            }



</script>

</html>





    
    
       <!--begin::Javascript-->
    <script>var hostUrl = <?php echo base_url()?>"assets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo base_url()?>assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="<?php echo base_url()?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?php echo base_url()?>assets/js/custom/apps/inbox/listing.js"></script>
    <script src="<?php echo base_url()?>assets/js/widgets.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/widgets.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function tier1(){
            $.ajax({
                url: "<?php echo base_url('Complaint/tier_one') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function tier2(){
            $.ajax({
                url: "<?php echo base_url('Complaint/tier_two') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function tier3(){
            $.ajax({
                url: "<?php echo base_url('Complaint/tier_three') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function progress(){
            $.ajax({
                url: "<?php echo base_url('Complaint/progress') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function resolved(){
            $.ajax({
                url: "<?php echo base_url('Complaint/resolved') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function escalated(){
            $.ajax({
                url: "<?php echo base_url('Complaint/escalated') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         function rejected(){
            $.ajax({
                url: "<?php echo base_url('Complaint/rejected') ?>",
                method: "POST",
                success : function(data){
                $("#tier_ch").html(data);
                }
            });
         }
         // function complaints(){
         //    $.ajax({
         //        url: "<?php echo base_url('Complaint/complaints') ?>",
         //        method: "POST",
         //        success : function(data){
         //        $("#cc").html(data);
         //        }
         //    });
         // }
    </script>

    

                                            