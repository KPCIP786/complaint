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
  <head><base href="../../"/>
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
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

                    Total Complaints

                    </h3>

                  <!--end::Title-->



                </div>

                <!--end::Page title-->

                

              </div>

              <!--end::Toolbar wrapper-->

            </div>

            <!--end::Toolbar container-->

          </div>

          <!--end::Toolbar-->
 <!--begin::Main-->
          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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
        <div class="card card-flush h-md-100">
           <!--begin::Header-->
      
                <!--begin::Body-->
                      
              <div class="card-body ">
            <!--begin::Table container-->
            <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="table-responsive">
                        <table class="table table-bordered align-middle table-stripped" id="kt_inbox_listing">
                            <thead>
                              <tr>
                                                            
                                                            <!-- <th>Applicant Name</th>
                                                            <th>Applicant Mobile</th> -->
                                                            <th>Complaint ID</th>
                                                            <th>Subproject Name</th>
                                                            <th>Project Detail</th>
                                                            <th>Applicant Name</th>
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
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id  AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id order by gcd.complaint_detail_id DESC")->result();

                    // SELECT ga.applicant_id,ga.applicant_name,ga.applicant_mobile,gcd.complaint_date,gcd.complaint_category_id,gcc.cc_id,gcc.cc_name,gcd.complaint_detail,gcd.complaint_title,gcd.sub_project_id,ps.subproject_name,gcd.source_id,s.source_name,gcd.zone_id,gzt.zone_name,gcd.uc_id,gut.uc_name,gcd.nc_id,gnt.nc_name,u.user_id,gcd.user_id,gcd.tier_id,t.tier_name,gcd.status_id,gs.status_name
                  foreach($results as $item){?>
                 <tr class="gradeX">
                        
                        <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><?php
$city_nameee = $item->city_name;
preg_match_all('/(?<=\b)\w/iu',$city_nameee,$matches);
$firstLetters=mb_strtoupper(implode('',$matches[0]));

                         echo $firstLetters."-".$item->complaint_detail_id;?></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><?php echo $item->applicant_name?></td>
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

else {
          $h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id  AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id And u.city_id=$city order by gcd.complaint_detail_id DESC")->result();
                  
                  foreach($results as $item){?>
                 <tr class="gradeX">
                        
                       <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><?php
$city_nameee = $item->city_name;
preg_match_all('/(?<=\b)\w/iu',$city_nameee,$matches);
$firstLetters=mb_strtoupper(implode('',$matches[0]));

                         echo $firstLetters."-".$item->complaint_detail_id;?></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><?php echo $item->applicant_name?></td>
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
                            </table>
                            <?php echo $pagination_links ?>
                          </div>
                              <!--end::Table body--></div>

                    

              

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
