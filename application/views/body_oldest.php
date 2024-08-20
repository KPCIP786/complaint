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



<body >

													<table class="table table-bordered table-responsive align-middle mb-2" id="kt_inbox_listing" >
															<!--begin::Table head-->
															<thead>
															<tr>
                                                            <th>Serial No </th>
                                                            <th>Applicant Name</th>
                                                            <th>Applicant Mobile</th>
                                                            <th>Complaint Date</th>
                                                            <th>Complaint Category</th>
                                                            <th>Source</th>
                                                            <th>SubProject</th>
                                                            <th>Complaint Title</th>
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
			   if (($ss==1) || ($ss==2) || ($ss==3)){
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 OR gcd.tier_id=2 OR gcd.tier_id=3) AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();

                    // SELECT ga.applicant_id,ga.applicant_name,ga.applicant_mobile,gcd.complaint_date,gcd.complaint_category_id,gcc.cc_id,gcc.cc_name,gcd.complaint_detail,gcd.complaint_title,gcd.sub_project_id,ps.subproject_name,gcd.source_id,s.source_name,gcd.zone_id,gzt.zone_name,gcd.uc_id,gut.uc_name,gcd.nc_id,gnt.nc_name,u.user_id,gcd.user_id,gcd.tier_id,t.tier_name,gcd.status_id,gs.status_name
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $h;?></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->applicant_name?></a></td>
                        <td><?php echo $item->applicant_mobile?></td>
                        <td><?php echo $item->complaint_date?></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->subproject_name?></td>
                        <td><?php echo $item->complaint_title?></td>
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
<!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer py-2 py-lg-4">
              <!--begin::Footer container-->
              <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                  <span class="text-muted fw-semibold me-1">2023&copy;</span>
                  <a href="#" target="_blank" class="text-gray-800 text-hover-primary">KP Cities Improvement Project</a>
                </div>
                <!--end::Copyright-->
                <!--begin::Menu-->
                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">About</a>
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">Support</a>
                  </li>
                  <li class="menu-item">
                    <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
                  </li>
                </ul>
                <!--end::Menu-->
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
    
    
    <!--begin::Javascript-->
    <script>var hostUrl = "<?php echo base_url()?>demo47/dist/assets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?php echo base_url()?>demo47/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="<?php echo base_url()?>demo47/dist/assets/js/widgets.bundle.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/custom/widgets.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
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

  </body>
  <!--end::Body-->
</html>