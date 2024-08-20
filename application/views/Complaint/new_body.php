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

<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url()?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--begin::Wrapper-->

		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

			<!--begin::Sidebar-->

			

			<!--end::Sidebar-->

			<!--begin::Main-->

			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">

				<!--begin::Content wrapper-->

				<div class="d-flex flex-column flex-column-fluid">

					<!--begin::Toolbar-->

					<div id="kt_app_toolbar" class="app-toolbar mt-lg-0 mt-lg-n5 pt-4 pt-lg-0 pb-4 pb-lg-8">

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

					<!--begin::Content-->

					<div id="kt_app_content" class="app-content flex-column-fluid">

						<!--begin::Content container-->

						<div id="kt_app_content_container" class="app-container container-xxl">

							<!--begin::Form-->

							<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"

								data-kt-redirect="../../demo47/dist/apps/ecommerce/catalog/products.html">



								<!--end::Aside column-->

								<!--begin::Main column-->

								<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

									<!--begin:::Tabs-->

									<ul

										class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">

										<!--begin:::Tab item-->

										<li class="nav-item">

											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"

												href="#kt_ecommerce_add_product_general">Complaints</a>

										</li>

										<!--end:::Tab item-->

										<!--begin:::Tab item-->

										<li class="nav-item">

											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"

												href="#kt_ecommerce_add_product_advanced">Tier 1 </a>

										</li>

										<!--end:::Tab item-->

										<!--begin:::Tab item-->

										<li class="nav-item">

											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"

												href="#t2">Tier 2</a>

										</li>

										<!--end:::Tab item-->



										<!--begin:::Tab item-->

										<li class="nav-item">

											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"

												href="#t3">Tier 3</a>

										</li>

										<!--end:::Tab item-->

									</ul>

									<!--end:::Tabs-->

									<!--begin::Tab content-->

									<div class="tab-content">

										<!--begin::Tab pane-->

										<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"

											role="tab-panel">

											<div class="d-flex flex-column gap-7 gap-lg-10">

												

	<table class="table table-bordered align-middle table-stripped" id="kt_customers_table">					

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

															<th>Action</th>

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

				if (($ss == 1) || ($ss == 2) || ($ss == 3)) {

					$h = 1;

					$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();

					foreach ($result1 as $item) { ?>

						 <tr class="gradeX">

								<td><?php echo $h; ?></td>

								<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>" class="text-dark"><?php echo $item->applicant_name ?></a></td>

								<td><?php echo $item->applicant_mobile ?></td>

								<td><?php echo $item->complaint_date ?></td>

								<td><?php echo $item->cc_name ?></td>

								<td><?php echo $item->source_name ?></td>

								<td><?php echo $item->subproject_name ?></td>

								<td><?php echo $item->complaint_title ?></td>

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

				} elseif ($ss == 13) {

					$h = 1;

					$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND gcd.user_id=$ss")->result();

					foreach ($result1 as $item) { ?>

						 <tr class="gradeX">

								<td><?php echo $h; ?></td>

								<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>" class="text-dark"><?php echo $item->applicant_name ?></a></td>



								<td><?php echo $item->applicant_mobile ?></td>



								<td><?php echo $item->complaint_date ?></td>

								<td><?php echo $item->cc_name ?></td>

								<td><?php echo $item->source_name ?></td>

								<td><?php echo $item->subproject_name ?></td>

					 

								<td><?php echo $item->complaint_title ?></td>

						

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

				} elseif ($ss == 14) {

					$h = 1;

					$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.tier_id=$ss")->result();

					foreach ($result1 as $item) { ?>

						 <tr class="gradeX">

								<td><?php echo $h; ?></td>

								<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>" class="text-dark"><?php echo $item->applicant_name ?></a></td>



								<td><?php echo $item->applicant_mobile ?></td>



								<td><?php echo $item->complaint_date ?></td>

								<td><?php echo $item->cc_name ?></td>

								<td><?php echo $item->source_name ?></td>

								<td><?php echo $item->subproject_name ?></td>

					

								<td><?php echo $item->complaint_title ?></td>

						

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

				} else {

					$h = 1;

					$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND u.user_id=gcd.user_id AND u.city_id=$city")->result();

					foreach ($result1 as $item) { ?>

						 <tr class="gradeX">

								<td><?php echo $h; ?></td>

								<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>" class="text-dark"><?php echo $item->applicant_name ?></a></td>



								<td><?php echo $item->applicant_mobile ?></td>



								<td><?php echo $item->complaint_date ?></td>

								<td><?php echo $item->cc_name ?></td>

								<td><?php echo $item->source_name ?></td>

								<td><?php echo $item->subproject_name ?></td>

								<td><?php echo $item->complaint_title ?></td>

						

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

</tbody>														<!--end::Table body-->

		</table>      

											  





											</div>

										</div>

										<!--end::Tab pane-->

										<!--begin::Tab pane-->

										<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced"

											role="tab-panel">

											<table class="table table-bordered align-middle table-stripped">

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

													if (($ss == 1) || ($ss == 2) || ($ss == 3)) {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();

														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>

																<td><?php echo $item->applicant_mobile ?></td>

																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>

																<td><?php echo $item->complaint_title ?></td>

																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>





															</tr>

															<?php

															$h++;

														}

													} else {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As un,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=t.tier_id AND 

                  	  gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=un.user_id AND un.city_id=$city")->result();



														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>



																<td><?php echo $item->applicant_mobile ?></td>



																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>

																<td><?php echo $item->complaint_title ?></td>



																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>

															</tr>

															<?php

															$h++;

														}

													}

													?>

												</tbody>

												<!--end::Table body-->

											</table>









										</div>

										<!--end::Tab content-->



										<!--begin::Tab pane-->

										<div class="tab-pane fade" id="t2" role="tab-panel">

											<table class="table table-bordered align-middle table-stripped">

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

													if (($ss == 1) || ($ss == 2) || ($ss == 3)) {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=2 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();

														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>

																<td><?php echo $item->applicant_mobile ?></td>

																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>

																<td><?php echo $item->complaint_title ?></td>

																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>





															</tr>

															<?php

															$h++;

														}

													} else {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As un,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=t.tier_id AND 

                      gcd.tier_id=2 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=un.user_id AND un.city_id=$city")->result();



														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>



																<td><?php echo $item->applicant_mobile ?></td>



																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>

																<td><?php echo $item->complaint_title ?></td>



																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>

															</tr>

															<?php

															$h++;

														}

													}

													?>

												</tbody>

												<!--end::Table body-->

											</table>

										</div>

										<!--end::Tab content-->



										<!--begin::Tab pane-->

										<div class="tab-pane fade" id="t3" role="tab-panel">

											<table class="table table-bordered align-middle table-stripped">

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

													if (($ss == 1) || ($ss == 2) || ($ss == 3)) {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=3 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();

														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>

																<td><?php echo $item->applicant_mobile ?></td>

																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>



																<td><?php echo $item->complaint_title ?></td>

																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>





															</tr>

															<?php

															$h++;

														}

													} else {

														$h = 1;

														$result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As un,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=t.tier_id AND 

                  	  gcd.tier_id=3 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=un.user_id AND un.city_id=$city")->result();



														foreach ($result1 as $item) { ?>

															<tr class="gradeX">

																<td><?php echo $h; ?></td>

																<td><a href="<?php echo base_url() ?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id; ?>"

																		class="text-dark"><?php echo $item->applicant_name ?></a>

																</td>



																<td><?php echo $item->applicant_mobile ?></td>



																<td><?php echo $item->complaint_date ?></td>

																<td><?php echo $item->cc_name ?></td>

																<td><?php echo $item->source_name ?></td>

																<td><?php echo $item->subproject_name ?></td>

																<td><?php echo $item->complaint_title ?></td>



																<td><?php echo $item->tier_name ?></td>

																<td><?php echo $item->zone_name ?></td>

																<td><?php echo $item->uc_name ?></td>

																<td><?php echo $item->nc_name ?></td>

																<td><?php if ($item->status_id == 1) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-warning fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php } elseif ($item->status_id == 2) { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-primary fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} else { ?>

																		<div class="text-gray-500 fw-semibold fs-6">

																			<span

																				class="badge badge-light-success fw-bold me-auto px-12 py-3"><?php echo $item->status_name ?></span>

																		</div>

																	<?php

																} ?>

																</td>



																<td><a

																		href="<?php echo base_url() ?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id; ?>">

																		<img src="<?php echo base_url() ?>img/edit.png"

																			width="30px" height="30px" /> </a>

																</td>

															</tr>

															<?php

															$h++;

														}

													}

													?>

												</tbody>

												<!--end::Table body-->

											</table>

										</div>

										<!--end::Tab content-->











									</div>

									<!--end::Main column-->

							</form>

							<!--end::Form-->

						</div>

						<!--end::Content container-->

					</div>

					<!--end::Content-->

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

	<!--begin::Drawers-->

	<!--begin::Activities drawer-->

	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"

		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"

		data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"

		data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

		<div class="card shadow-none border-0 rounded-0">

			<!--begin::Header-->

			<div class="card-header" id="kt_activities_header">

				<h3 class="card-title fw-bold text-dark">Activity Logs</h3>

				<div class="card-toolbar">

					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"

						id="kt_activities_close">

						<i class="ki-duotone ki-cross fs-1">

							<span class="path1"></span>

							<span class="path2"></span>

						</i>

					</button>

				</div>

			</div>

			<!--end::Header-->

			<!--begin::Body-->

			<div class="card-body position-relative" id="kt_activities_body">

				<!--begin::Content-->

				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"

					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"

					data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"

					data-kt-scroll-offset="5px">

					<!--begin::Timeline items-->

					<div class="timeline">

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

										<span class="path3"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile

										App” project:</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">

											<img src="assets/media/avatars/300-14.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

								<!--begin::Timeline details-->

								<div class="overflow-auto pb-5">

									<!--begin::Record-->

									<div

										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">

										<!--begin::Title-->

										<a href="../../demo47/dist/apps/projects/project.html"

											class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting

											with customer</a>

										<!--end::Title-->

										<!--begin::Label-->

										<div class="min-w-175px pe-2">

											<span class="badge badge-light text-muted">Application Design</span>

										</div>

										<!--end::Label-->

										<!--begin::Users-->

										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">

											<!--begin::User-->

											<div class="symbol symbol-circle symbol-25px">

												<img src="assets/media/avatars/300-2.jpg" alt="img" />

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div class="symbol symbol-circle symbol-25px">

												<img src="assets/media/avatars/300-14.jpg" alt="img" />

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div class="symbol symbol-circle symbol-25px">

												<div

													class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">

													A</div>

											</div>

											<!--end::User-->

										</div>

										<!--end::Users-->

										<!--begin::Progress-->

										<div class="min-w-125px pe-2">

											<span class="badge badge-light-primary">In Progress</span>

										</div>

										<!--end::Progress-->

										<!--begin::Action-->

										<a href="../../demo47/dist/apps/projects/project.html"

											class="btn btn-sm btn-light btn-active-light-primary">View</a>

										<!--end::Action-->

									</div>

									<!--end::Record-->

									<!--begin::Record-->

									<div

										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">

										<!--begin::Title-->

										<a href="../../demo47/dist/apps/projects/project.html"

											class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project

											Delivery Preparation</a>

										<!--end::Title-->

										<!--begin::Label-->

										<div class="min-w-175px">

											<span class="badge badge-light text-muted">CRM System Development</span>

										</div>

										<!--end::Label-->

										<!--begin::Users-->

										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">

											<!--begin::User-->

											<div class="symbol symbol-circle symbol-25px">

												<img src="assets/media/avatars/300-20.jpg" alt="img" />

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div class="symbol symbol-circle symbol-25px">

												<div

													class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">

													B</div>

											</div>

											<!--end::User-->

										</div>

										<!--end::Users-->

										<!--begin::Progress-->

										<div class="min-w-125px">

											<span class="badge badge-light-success">Completed</span>

										</div>

										<!--end::Progress-->

										<!--begin::Action-->

										<a href="../../demo47/dist/apps/projects/project.html"

											class="btn btn-sm btn-light btn-active-light-primary">View</a>

										<!--end::Action-->

									</div>

									<!--end::Record-->

								</div>

								<!--end::Timeline details-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-flag fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n2">

								<!--begin::Timeline heading-->

								<div class="overflow-auto pe-3">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that

										speak human workshop</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">

											<img src="assets/media/avatars/300-1.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-disconnect fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

										<span class="path3"></span>

										<span class="path4"></span>

										<span class="path5"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="mb-5 pe-3">

									<!--begin::Title-->

									<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New

										Incoming Project Files:</a>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">

											<img src="assets/media/avatars/300-23.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

								<!--begin::Timeline details-->

								<div class="overflow-auto pb-5">

									<div

										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">

										<!--begin::Item-->

										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">

											<!--begin::Icon-->

											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />

											<!--end::Icon-->

											<!--begin::Info-->

											<div class="ms-1 fw-semibold">

												<!--begin::Desc-->

												<a href="../../demo47/dist/apps/projects/project.html"

													class="fs-6 text-hover-primary fw-bold">Finance KPI App

													Guidelines</a>

												<!--end::Desc-->

												<!--begin::Number-->

												<div class="text-gray-400">1.9mb</div>

												<!--end::Number-->

											</div>

											<!--begin::Info-->

										</div>

										<!--end::Item-->

										<!--begin::Item-->

										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">

											<!--begin::Icon-->

											<img alt="../../demo47/dist/apps/projects/project.html" class="w-30px me-3"

												src="assets/media/svg/files/doc.svg" />

											<!--end::Icon-->

											<!--begin::Info-->

											<div class="ms-1 fw-semibold">

												<!--begin::Desc-->

												<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing

													Results</a>

												<!--end::Desc-->

												<!--begin::Number-->

												<div class="text-gray-400">18kb</div>

												<!--end::Number-->

											</div>

											<!--end::Info-->

										</div>

										<!--end::Item-->

										<!--begin::Item-->

										<div class="d-flex flex-aligns-center">

											<!--begin::Icon-->

											<img alt="../../demo47/dist/apps/projects/project.html" class="w-30px me-3"

												src="assets/media/svg/files/css.svg" />

											<!--end::Icon-->

											<!--begin::Info-->

											<div class="ms-1 fw-semibold">

												<!--begin::Desc-->

												<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>

												<!--end::Desc-->

												<!--begin::Number-->

												<div class="text-gray-400">20mb</div>

												<!--end::Number-->

											</div>

											<!--end::Icon-->

										</div>

										<!--end::Item-->

									</div>

								</div>

								<!--end::Timeline details-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">Task

										<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with

										<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin

										Dashboard project:

									</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">

											<img src="assets/media/avatars/300-14.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-pencil fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">

											<img src="assets/media/avatars/300-2.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

								<!--begin::Timeline details-->

								<div class="overflow-auto pb-5">

									<div

										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">

										<!--begin::Item-->

										<div class="overlay me-10">

											<!--begin::Image-->

											<div class="overlay-wrapper">

												<img alt="img" class="rounded w-150px"

													src="assets/media/stock/600x400/img-29.jpg" />

											</div>

											<!--end::Image-->

											<!--begin::Link-->

											<div class="overlay-layer bg-dark bg-opacity-10 rounded">

												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>

											</div>

											<!--end::Link-->

										</div>

										<!--end::Item-->

										<!--begin::Item-->

										<div class="overlay me-10">

											<!--begin::Image-->

											<div class="overlay-wrapper">

												<img alt="img" class="rounded w-150px"

													src="assets/media/stock/600x400/img-31.jpg" />

											</div>

											<!--end::Image-->

											<!--begin::Link-->

											<div class="overlay-layer bg-dark bg-opacity-10 rounded">

												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>

											</div>

											<!--end::Link-->

										</div>

										<!--end::Item-->

										<!--begin::Item-->

										<div class="overlay">

											<!--begin::Image-->

											<div class="overlay-wrapper">

												<img alt="img" class="rounded w-150px"

													src="assets/media/stock/600x400/img-40.jpg" />

											</div>

											<!--end::Image-->

											<!--begin::Link-->

											<div class="overlay-layer bg-dark bg-opacity-10 rounded">

												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>

											</div>

											<!--end::Link-->

										</div>

										<!--end::Item-->

									</div>

								</div>

								<!--end::Timeline details-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-sms fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">New case

										<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in

										Multi-platform Database Design project

									</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="overflow-auto pb-5">

										<!--begin::Wrapper-->

										<div class="d-flex align-items-center mt-1 fs-6">

											<!--begin::Info-->

											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

											<!--end::Info-->

											<!--begin::User-->

											<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>

											<!--end::User-->

										</div>

										<!--end::Wrapper-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-pencil fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mb-10 mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"

											data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">

											<img src="assets/media/avatars/300-4.jpg" alt="img" />

										</div>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

								<!--begin::Timeline details-->

								<div class="overflow-auto pb-5">

									<!--begin::Notice-->

									<div

										class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">

										<!--begin::Icon-->

										<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">

											<span class="path1"></span>

											<span class="path2"></span>

											<span class="path3"></span>

										</i>

										<!--end::Icon-->

										<!--begin::Wrapper-->

										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">

											<!--begin::Content-->

											<div class="mb-3 mb-md-0 fw-semibold">

												<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!

												</h4>

												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make

													sure the data integrity is OK</div>

											</div>

											<!--end::Content-->

											<!--begin::Action-->

											<a href="#"

												class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>

											<!--end::Action-->

										</div>

										<!--end::Wrapper-->

									</div>

									<!--end::Notice-->

								</div>

								<!--end::Timeline details-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

						<!--begin::Timeline item-->

						<div class="timeline-item">

							<!--begin::Timeline line-->

							<div class="timeline-line w-40px"></div>

							<!--end::Timeline line-->

							<!--begin::Timeline icon-->

							<div class="timeline-icon symbol symbol-circle symbol-40px">

								<div class="symbol-label bg-light">

									<i class="ki-duotone ki-basket fs-2 text-gray-500">

										<span class="path1"></span>

										<span class="path2"></span>

										<span class="path3"></span>

										<span class="path4"></span>

									</i>

								</div>

							</div>

							<!--end::Timeline icon-->

							<!--begin::Timeline content-->

							<div class="timeline-content mt-n1">

								<!--begin::Timeline heading-->

								<div class="pe-3 mb-5">

									<!--begin::Title-->

									<div class="fs-5 fw-semibold mb-2">New order

										<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow

										Planning & Budget Estimation

									</div>

									<!--end::Title-->

									<!--begin::Description-->

									<div class="d-flex align-items-center mt-1 fs-6">

										<!--begin::Info-->

										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>

										<!--end::Info-->

										<!--begin::User-->

										<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>

										<!--end::User-->

									</div>

									<!--end::Description-->

								</div>

								<!--end::Timeline heading-->

							</div>

							<!--end::Timeline content-->

						</div>

						<!--end::Timeline item-->

					</div>

					<!--end::Timeline items-->

				</div>

				<!--end::Content-->

			</div>

			<!--end::Body-->

			<!--begin::Footer-->

			<div class="card-footer py-5 text-center" id="kt_activities_footer">

				<a href="../../demo47/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View

					All Activities

					<i class="ki-duotone ki-arrow-right fs-3 text-primary">

						<span class="path1"></span>

						<span class="path2"></span>

					</i></a>

			</div>

			<!--end::Footer-->

		</div>

	</div>

	<!--end::Activities drawer-->

	<!--begin::Chat drawer-->

	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"

		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"

		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"

		data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

		<!--begin::Messenger-->

		<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">

			<!--begin::Card header-->

			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">

				<!--begin::Title-->

				<div class="card-title">

					<!--begin::User-->

					<div class="d-flex justify-content-center flex-column me-3">

						<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

						<!--begin::Info-->

						<div class="mb-0 lh-1">

							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>

							<span class="fs-7 fw-semibold text-muted">Active</span>

						</div>

						<!--end::Info-->

					</div>

					<!--end::User-->

				</div>

				<!--end::Title-->

				<!--begin::Card toolbar-->

				<div class="card-toolbar">

					<!--begin::Menu-->

					<div class="me-0">

						<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"

							data-kt-menu-placement="bottom-end">

							<i class="ki-duotone ki-dots-square fs-2">

								<span class="path1"></span>

								<span class="path2"></span>

								<span class="path3"></span>

								<span class="path4"></span>

							</i>

						</button>

						<!--begin::Menu 3-->

						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"

							data-kt-menu="true">

							<!--begin::Heading-->

							<div class="menu-item px-3">

								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>

							</div>

							<!--end::Heading-->

							<!--begin::Menu item-->

							<div class="menu-item px-3">

								<a href="#" class="menu-link px-3" data-bs-toggle="modal"

									data-bs-target="#kt_modal_users_search">Add Contact</a>

							</div>

							<!--end::Menu item-->

							<!--begin::Menu item-->

							<div class="menu-item px-3">

								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"

									data-bs-target="#kt_modal_invite_friends">Invite Contacts

									<span class="ms-2" data-bs-toggle="tooltip"

										title="Specify a contact email to send an invitation">

										<i class="ki-duotone ki-information fs-7">

											<span class="path1"></span>

											<span class="path2"></span>

											<span class="path3"></span>

										</i>

									</span></a>

							</div>

							<!--end::Menu item-->

							<!--begin::Menu item-->

							<div class="menu-item px-3" data-kt-menu-trigger="hover"

								data-kt-menu-placement="right-start">

								<a href="#" class="menu-link px-3">

									<span class="menu-title">Groups</span>

									<span class="menu-arrow"></span>

								</a>

								<!--begin::Menu sub-->

								<div class="menu-sub menu-sub-dropdown w-175px py-4">

									<!--begin::Menu item-->

									<div class="menu-item px-3">

										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"

											title="Coming soon">Create Group</a>

									</div>

									<!--end::Menu item-->

									<!--begin::Menu item-->

									<div class="menu-item px-3">

										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"

											title="Coming soon">Invite Members</a>

									</div>

									<!--end::Menu item-->

									<!--begin::Menu item-->

									<div class="menu-item px-3">

										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"

											title="Coming soon">Settings</a>

									</div>

									<!--end::Menu item-->

								</div>

								<!--end::Menu sub-->

							</div>

							<!--end::Menu item-->

							<!--begin::Menu item-->

							<div class="menu-item px-3 my-1">

								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"

									title="Coming soon">Settings</a>

							</div>

							<!--end::Menu item-->

						</div>

						<!--end::Menu 3-->

					</div>

					<!--end::Menu-->

					<!--begin::Close-->

					<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">

						<i class="ki-duotone ki-cross-square fs-2">

							<span class="path1"></span>

							<span class="path2"></span>

						</i>

					</div>

					<!--end::Close-->

				</div>

				<!--end::Card toolbar-->

			</div>

			<!--end::Card header-->

			<!--begin::Card body-->

			<div class="card-body" id="kt_drawer_chat_messenger_body">

				<!--begin::Messages-->

				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"

					data-kt-scroll-activate="true" data-kt-scroll-height="auto"

					data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"

					data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">

					<!--begin::Message(in)-->

					<div class="d-flex justify-content-start mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-start">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

								</div>

								<!--end::Avatar-->

								<!--begin::Details-->

								<div class="ms-3">

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>

									<span class="text-muted fs-7 mb-1">2 mins</span>

								</div>

								<!--end::Details-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"

								data-kt-element="message-text">How likely are you to recommend our company to your

								friends and family ?</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(in)-->

					<!--begin::Message(out)-->

					<div class="d-flex justify-content-end mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-end">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Details-->

								<div class="me-3">

									<span class="text-muted fs-7 mb-1">5 mins</span>

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>

								</div>

								<!--end::Details-->

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

								</div>

								<!--end::Avatar-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"

								data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve

								been subscribed to a repository on GitHub.</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(out)-->

					<!--begin::Message(in)-->

					<div class="d-flex justify-content-start mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-start">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

								</div>

								<!--end::Avatar-->

								<!--begin::Details-->

								<div class="ms-3">

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>

									<span class="text-muted fs-7 mb-1">1 Hour</span>

								</div>

								<!--end::Details-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"

								data-kt-element="message-text">Ok, Understood!</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(in)-->

					<!--begin::Message(out)-->

					<div class="d-flex justify-content-end mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-end">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Details-->

								<div class="me-3">

									<span class="text-muted fs-7 mb-1">2 Hours</span>

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>

								</div>

								<!--end::Details-->

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

								</div>

								<!--end::Avatar-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"

								data-kt-element="message-text">You’ll receive notifications for all issues, pull

								requests!</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(out)-->

					<!--begin::Message(in)-->

					<div class="d-flex justify-content-start mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-start">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

								</div>

								<!--end::Avatar-->

								<!--begin::Details-->

								<div class="ms-3">

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>

									<span class="text-muted fs-7 mb-1">3 Hours</span>

								</div>

								<!--end::Details-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"

								data-kt-element="message-text">You can unwatch this repository immediately by clicking

								here:

								<a href="https://keenthemes.com">Keenthemes.com</a>

							</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(in)-->

					<!--begin::Message(out)-->

					<div class="d-flex justify-content-end mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-end">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Details-->

								<div class="me-3">

									<span class="text-muted fs-7 mb-1">4 Hours</span>

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>

								</div>

								<!--end::Details-->

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

								</div>

								<!--end::Avatar-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"

								data-kt-element="message-text">Most purchased Business courses during this sale!</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(out)-->

					<!--begin::Message(in)-->

					<div class="d-flex justify-content-start mb-10">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-start">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

								</div>

								<!--end::Avatar-->

								<!--begin::Details-->

								<div class="ms-3">

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>

									<span class="text-muted fs-7 mb-1">5 Hours</span>

								</div>

								<!--end::Details-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"

								data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and

								goals. Food and drinks provided</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(in)-->

					<!--begin::Message(template for out)-->

					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-end">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Details-->

								<div class="me-3">

									<span class="text-muted fs-7 mb-1">Just now</span>

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>

								</div>

								<!--end::Details-->

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

								</div>

								<!--end::Avatar-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"

								data-kt-element="message-text"></div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(template for out)-->

					<!--begin::Message(template for in)-->

					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">

						<!--begin::Wrapper-->

						<div class="d-flex flex-column align-items-start">

							<!--begin::User-->

							<div class="d-flex align-items-center mb-2">

								<!--begin::Avatar-->

								<div class="symbol symbol-35px symbol-circle">

									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

								</div>

								<!--end::Avatar-->

								<!--begin::Details-->

								<div class="ms-3">

									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>

									<span class="text-muted fs-7 mb-1">Just now</span>

								</div>

								<!--end::Details-->

							</div>

							<!--end::User-->

							<!--begin::Text-->

							<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"

								data-kt-element="message-text">Right before vacation season we have the next Big Deal

								for you.</div>

							<!--end::Text-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Message(template for in)-->

				</div>

				<!--end::Messages-->

			</div>

			<!--end::Card body-->

			<!--begin::Card footer-->

			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">

				<!--begin::Input-->

				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"

					placeholder="Type a message"></textarea>

				<!--end::Input-->

				<!--begin:Toolbar-->

				<div class="d-flex flex-stack">

					<!--begin::Actions-->

					<div class="d-flex align-items-center me-2">

						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"

							data-bs-toggle="tooltip" title="Coming soon">

							<i class="ki-duotone ki-paper-clip fs-3"></i>

						</button>

						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"

							data-bs-toggle="tooltip" title="Coming soon">

							<i class="ki-duotone ki-cloud-add fs-3">

								<span class="path1"></span>

								<span class="path2"></span>

							</i>

						</button>

					</div>

					<!--end::Actions-->

					<!--begin::Send-->

					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>

					<!--end::Send-->

				</div>

				<!--end::Toolbar-->

			</div>

			<!--end::Card footer-->

		</div>

		<!--end::Messenger-->

	</div>

	<!--end::Chat drawer-->

	<!--begin::Chat drawer-->

	<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"

		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"

		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"

		data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

		<!--begin::Messenger-->

		<div class="card card-flush w-100 rounded-0">

			<!--begin::Card header-->

			<div class="card-header">

				<!--begin::Title-->

				<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>

				<!--end::Title-->

				<!--begin::Card toolbar-->

				<div class="card-toolbar">

					<!--begin::Close-->

					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">

						<i class="ki-duotone ki-cross fs-2">

							<span class="path1"></span>

							<span class="path2"></span>

						</i>

					</div>

					<!--end::Close-->

				</div>

				<!--end::Card toolbar-->

			</div>

			<!--end::Card header-->

			<!--begin::Card body-->

			<div class="card-body hover-scroll-overlay-y h-400px pt-5">

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

							<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 350</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">5</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-1.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

							<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 650</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">4</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-3.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

							<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 150</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">3</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-8.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

							<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 1450</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-26.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

							<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 650</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">7</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-21.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

							<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 720</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">6</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-34.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

				<!--begin::Separator-->

				<div class="separator separator-dashed my-6"></div>

				<!--end::Separator-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<!--begin::Wrapper-->

					<div class="d-flex flex-column me-3">

						<!--begin::Section-->

						<div class="mb-3">

							<a href="../../demo47/dist/apps/ecommerce/sales/details.html"

								class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

							<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>

						</div>

						<!--end::Section-->

						<!--begin::Section-->

						<div class="d-flex align-items-center">

							<span class="fw-bold text-gray-800 fs-5">$ 430</span>

							<span class="text-muted mx-2">for</span>

							<span class="fw-bold text-gray-800 fs-5 me-3">8</span>

							<a href="#"

								class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">

								<i class="ki-duotone ki-minus fs-4"></i>

							</a>

							<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">

								<i class="ki-duotone ki-plus fs-4"></i>

							</a>

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Wrapper-->

					<!--begin::Pic-->

					<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">

						<img src="assets/media/stock/600x400/img-27.jpg" alt="" />

					</div>

					<!--end::Pic-->

				</div>

				<!--end::Item-->

			</div>

			<!--end::Card body-->

			<!--begin::Card footer-->

			<div class="card-footer">

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<span class="fw-bold text-gray-600">Total</span>

					<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>

				</div>

				<!--end::Item-->

				<!--begin::Item-->

				<div class="d-flex flex-stack">

					<span class="fw-bold text-gray-600">Sub total</span>

					<span class="text-primary fw-bolder fs-5">$ 246.35</span>

				</div>

				<!--end::Item-->

				<!--end::Action-->

				<div class="d-flex justify-content-end mt-9">

					<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>

				</div>

				<!--end::Action-->

			</div>

			<!--end::Card footer-->

		</div>

		<!--end::Messenger-->

	</div>

	<!--end::Chat drawer-->

	<!--end::Drawers-->

	<!--begin::Scrolltop-->

	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">

		<i class="ki-duotone ki-arrow-up">

			<span class="path1"></span>

			<span class="path2"></span>

		</i>

	</div>

	<!--end::Scrolltop-->

	<!--begin::Modals-->

	<!--begin::Modal - Upgrade plan-->

	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">

		<!--begin::Modal dialog-->

		<div class="modal-dialog modal-xl">

			<!--begin::Modal content-->

			<div class="modal-content rounded">

				<!--begin::Modal header-->

				<div class="modal-header justify-content-end border-0 pb-0">

					<!--begin::Close-->

					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

						<i class="ki-duotone ki-cross fs-1">

							<span class="path1"></span>

							<span class="path2"></span>

						</i>

					</div>

					<!--end::Close-->

				</div>

				<!--end::Modal header-->

				<!--begin::Modal body-->

				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">

					<!--begin::Heading-->

					<div class="mb-13 text-center">

						<h1 class="mb-3">Upgrade a Plan</h1>

						<div class="text-muted fw-semibold fs-5">If you need more info, please check

							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.

						</div>

					</div>

					<!--end::Heading-->

					<!--begin::Plans-->

					<div class="d-flex flex-column">

						<!--begin::Nav group-->

						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">

							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"

								data-kt-plan="month">Monthly</button>

							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"

								data-kt-plan="annual">Annual</button>

						</div>

						<!--end::Nav group-->

						<!--begin::Row-->

						<div class="row mt-10">

							<!--begin::Col-->

							<div class="col-lg-6 mb-10 mb-lg-0">

								<!--begin::Tabs-->

								<div class="nav flex-column">

									<!--begin::Tab link-->

									<label

										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"

										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

										<!--end::Description-->

										<div class="d-flex align-items-center me-2">

											<!--begin::Radio-->

											<div

												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">

												<input class="form-check-input" type="radio" name="plan"

													checked="checked" value="startup" />

											</div>

											<!--end::Radio-->

											<!--begin::Info-->

											<div class="flex-grow-1">

												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup

												</div>

												<div class="fw-semibold opacity-75">Best for startups</div>

											</div>

											<!--end::Info-->

										</div>

										<!--end::Description-->

										<!--begin::Price-->

										<div class="ms-5">

											<span class="mb-2">$</span>

											<span class="fs-3x fw-bold" data-kt-plan-price-month="39"

												data-kt-plan-price-annual="399">39</span>

											<span class="fs-7 opacity-50">/

												<span data-kt-element="period">Mon</span></span>

										</div>

										<!--end::Price-->

									</label>

									<!--end::Tab link-->

									<!--begin::Tab link-->

									<label

										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"

										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

										<!--end::Description-->

										<div class="d-flex align-items-center me-2">

											<!--begin::Radio-->

											<div

												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">

												<input class="form-check-input" type="radio" name="plan"

													value="advanced" />

											</div>

											<!--end::Radio-->

											<!--begin::Info-->

											<div class="flex-grow-1">

												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced

												</div>

												<div class="fw-semibold opacity-75">Best for 100+ team size</div>

											</div>

											<!--end::Info-->

										</div>

										<!--end::Description-->

										<!--begin::Price-->

										<div class="ms-5">

											<span class="mb-2">$</span>

											<span class="fs-3x fw-bold" data-kt-plan-price-month="339"

												data-kt-plan-price-annual="3399">339</span>

											<span class="fs-7 opacity-50">/

												<span data-kt-element="period">Mon</span></span>

										</div>

										<!--end::Price-->

									</label>

									<!--end::Tab link-->

									<!--begin::Tab link-->

									<label

										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"

										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

										<!--end::Description-->

										<div class="d-flex align-items-center me-2">

											<!--begin::Radio-->

											<div

												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">

												<input class="form-check-input" type="radio" name="plan"

													value="enterprise" />

											</div>

											<!--end::Radio-->

											<!--begin::Info-->

											<div class="flex-grow-1">

												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise

													<span

														class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>

												</div>

												<div class="fw-semibold opacity-75">Best value for 1000+ team</div>

											</div>

											<!--end::Info-->

										</div>

										<!--end::Description-->

										<!--begin::Price-->

										<div class="ms-5">

											<span class="mb-2">$</span>

											<span class="fs-3x fw-bold" data-kt-plan-price-month="999"

												data-kt-plan-price-annual="9999">999</span>

											<span class="fs-7 opacity-50">/

												<span data-kt-element="period">Mon</span></span>

										</div>

										<!--end::Price-->

									</label>

									<!--end::Tab link-->

									<!--begin::Tab link-->

									<label

										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"

										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

										<!--end::Description-->

										<div class="d-flex align-items-center me-2">

											<!--begin::Radio-->

											<div

												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">

												<input class="form-check-input" type="radio" name="plan"

													value="custom" />

											</div>

											<!--end::Radio-->

											<!--begin::Info-->

											<div class="flex-grow-1">

												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom

												</div>

												<div class="fw-semibold opacity-75">Requet a custom license</div>

											</div>

											<!--end::Info-->

										</div>

										<!--end::Description-->

										<!--begin::Price-->

										<div class="ms-5">

											<a href="#" class="btn btn-sm btn-success">Contact Us</a>

										</div>

										<!--end::Price-->

									</label>

									<!--end::Tab link-->

								</div>

								<!--end::Tabs-->

							</div>

							<!--end::Col-->

							<!--begin::Col-->

							<div class="col-lg-6">

								<!--begin::Tab content-->

								<div class="tab-content rounded h-100 bg-light p-10">

									<!--begin::Tab Pane-->

									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">

										<!--begin::Heading-->

										<div class="pb-5">

											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

											<div class="text-muted fw-semibold">Optimal for 10+ team size and new

												startup</div>

										</div>

										<!--end::Heading-->

										<!--begin::Body-->

										<div class="pt-1">

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active

													Users</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30

													Project Integrations</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance

													Module</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting

													Module</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network

													Platform</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud

													Space</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

										</div>

										<!--end::Body-->

									</div>

									<!--end::Tab Pane-->

									<!--begin::Tab Pane-->

									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">

										<!--begin::Heading-->

										<div class="pb-5">

											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

											<div class="text-muted fw-semibold">Optimal for 100+ team size and grown

												company</div>

										</div>

										<!--end::Heading-->

										<!--begin::Body-->

										<div class="pt-1">

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active

													Users</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30

													Project Integrations</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network

													Platform</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center">

												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud

													Space</span>

												<i class="ki-duotone ki-cross-circle fs-1">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

										</div>

										<!--end::Body-->

									</div>

									<!--end::Tab Pane-->

									<!--begin::Tab Pane-->

									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">

										<!--begin::Heading-->

										<div class="pb-5">

											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

											<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise

											</div>

										</div>

										<!--end::Heading-->

										<!--begin::Body-->

										<div class="pt-1">

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active

													Users</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30

													Project Integrations</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network

													Platform</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud

													Space</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

										</div>

										<!--end::Body-->

									</div>

									<!--end::Tab Pane-->

									<!--begin::Tab Pane-->

									<div class="tab-pane fade" id="kt_upgrade_plan_custom">

										<!--begin::Heading-->

										<div class="pb-5">

											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

											<div class="text-muted fw-semibold">Optimal for corporations</div>

										</div>

										<!--end::Heading-->

										<!--begin::Body-->

										<div class="pt-1">

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited

													Users</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited

													Project Integrations</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting

													Module</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center mb-7">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network

													Platform</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

											<!--begin::Item-->

											<div class="d-flex align-items-center">

												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud

													Space</span>

												<i class="ki-duotone ki-check-circle fs-1 text-success">

													<span class="path1"></span>

													<span class="path2"></span>

												</i>

											</div>

											<!--end::Item-->

										</div>

										<!--end::Body-->

									</div>

									<!--end::Tab Pane-->

								</div>

								<!--end::Tab content-->

							</div>

							<!--end::Col-->

						</div>

						<!--end::Row-->

					</div>

					<!--end::Plans-->

					<!--begin::Actions-->

					<div class="d-flex flex-center flex-row-fluid pt-12">

						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>

						<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

							<!--begin::Indicator label-->

							<span class="indicator-label">Upgrade Plan</span>

							<!--end::Indicator label-->

							<!--begin::Indicator progress-->

							<span class="indicator-progress">Please wait...

								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

							<!--end::Indicator progress-->

						</button>

					</div>

					<!--end::Actions-->

				</div>

				<!--end::Modal body-->

			</div>

			<!--end::Modal content-->

		</div>

		<!--end::Modal dialog-->

	</div>

	<!--end::Modal - Upgrade plan-->

	<!--begin::Modal - View Users-->

	<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">

		<!--begin::Modal dialog-->

		<div class="modal-dialog mw-650px">

			<!--begin::Modal content-->

			<div class="modal-content">

				<!--begin::Modal header-->

				<div class="modal-header pb-0 border-0 justify-content-end">

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

				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

					<!--begin::Heading-->

					<div class="text-center mb-13">

						<!--begin::Title-->

						<h1 class="mb-3">Browse Users</h1>

						<!--end::Title-->

						<!--begin::Description-->

						<div class="text-muted fw-semibold fs-5">If you need more info, please check out our

							<a href="#" class="link-primary fw-bold">Users Directory</a>.

						</div>

						<!--end::Description-->

					</div>

					<!--end::Heading-->

					<!--begin::Users-->

					<div class="mb-15">

						<!--begin::List-->

						<div class="mh-375px scroll-y me-n7 pe-7">

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma

											Smith

											<span class="badge badge-light fs-8 fw-semibold ms-2">Art

												Director</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">smith@kpmg.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$23,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody

											Macy

											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing

												Analytic</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">melody@altbox.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$50,500</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max

											Smith

											<span class="badge badge-light fs-8 fw-semibold ms-2">Software

												Enginer</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">max@kt.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$75,900</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean

											Bean

											<span class="badge badge-light fs-8 fw-semibold ms-2">Web

												Developer</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">sean@dellito.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$10,500</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian

											Cox

											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX

												Designer</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">brian@exchange.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$20,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela

											Collins

											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of

												Marketing</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">mik@pex.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$9,300</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis

											Mitcham

											<span class="badge badge-light fs-8 fw-semibold ms-2">Software

												Arcitect</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">f.mit@kpmg.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$15,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia

											Wild

											<span class="badge badge-light fs-8 fw-semibold ms-2">System

												Admin</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">olivia@corpmail.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$23,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil

											Owen

											<span class="badge badge-light fs-8 fw-semibold ms-2">Account

												Manager</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">owen.neil@gmail.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$45,800</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan

											Wilson

											<span class="badge badge-light fs-8 fw-semibold ms-2">Web

												Desinger</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">dam@consilting.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$90,500</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma

											Bold

											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate

												Finance</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">emma@intenso.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$5,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana

											Crown

											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer

												Relationship</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">ana.cf@limtel.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$70,000</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

							<!--begin::User-->

							<div class="d-flex flex-stack py-5">

								<!--begin::Details-->

								<div class="d-flex align-items-center">

									<!--begin::Avatar-->

									<div class="symbol symbol-35px symbol-circle">

										<span class="symbol-label bg-light-info text-info fw-semibold">A</span>

									</div>

									<!--end::Avatar-->

									<!--begin::Details-->

									<div class="ms-6">

										<!--begin::Name-->

										<a href="#"

											class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert

											Doe

											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing

												Executive</span></a>

										<!--end::Name-->

										<!--begin::Email-->

										<div class="fw-semibold text-muted">robert@benko.com</div>

										<!--end::Email-->

									</div>

									<!--end::Details-->

								</div>

								<!--end::Details-->

								<!--begin::Stats-->

								<div class="d-flex">

									<!--begin::Sales-->

									<div class="text-end">

										<div class="fs-5 fw-bold text-dark">$45,500</div>

										<div class="fs-7 text-muted">Sales</div>

									</div>

									<!--end::Sales-->

								</div>

								<!--end::Stats-->

							</div>

							<!--end::User-->

						</div>

						<!--end::List-->

					</div>

					<!--end::Users-->

					<!--begin::Notice-->

					<div class="d-flex justify-content-between">

						<!--begin::Label-->

						<div class="fw-semibold">

							<label class="fs-6">Adding Users by Team Members</label>

							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>

						</div>

						<!--end::Label-->

						<!--begin::Switch-->

						<label class="form-check form-switch form-check-custom form-check-solid">

							<input class="form-check-input" type="checkbox" value="" checked="checked" />

							<span class="form-check-label fw-semibold text-muted">Allowed</span>

						</label>

						<!--end::Switch-->

					</div>

					<!--end::Notice-->

				</div>

				<!--end::Modal body-->

			</div>

			<!--end::Modal content-->

		</div>

		<!--end::Modal dialog-->

	</div>

	<!--end::Modal - View Users-->

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



						<table class="table gridexample">





							<tr>

								<h5 class="text-primary">Applicant info:</h5>

							</tr>

							<tr>

								<td><label class="required fs-6 fw-semibold mb-2">Applicant Name :</label></td>

								<td>

									<input type="text" autofocus placeholder="Applicant name" required id="cc"

										class="form-control form-control-solid" name="applicant_name" tabindex="1"

										required>

								</td>

								<td><label class="required fs-6 fw-semibold mb-2">Applicant Mobile :</label></td>

								<td><input type="text" autofocus placeholder="Applicant Mobile" required id="cc"

										class="form-control form-control-solid" name="applicant_mobile" tabindex="1"

										required></td>



							</tr>

							<tr>

								<td><label class="required fs-6 fw-semibold mb-2">Applicant Address :</label></td>

								<td><input type="text" autofocus placeholder="Applicant Address" required id="cc"

										class="form-control form-control-solid" name="applicant_address" tabindex="1"

										required></td>

								<td><label class="required fs-6 fw-semibold mb-2">Applicant CNIC :</label></td>

								<td><input type="text" autofocus placeholder="Applicant CNIC" required id="cc"

										class="form-control form-control-solid" name="applicant_cnic" tabindex="1"

										required></td>

							</tr>

							<tr>

								<td>

									<h5 class="text-primary">Complaint info:</h5>

								</td>

							</tr>

							<tr>

								<td><label class="required fs-6 fw-semibold mb-2">Complaint Date :</label></td>

								<td><input type="date" autofocus placeholder="" required id="cc"

										class="form-control form-control-solid" name="complaint_date" tabindex="1"

										required></td>

								<td><label class="required fs-6 fw-semibold mb-2">Complaint Category :</label></td>

								<td>

									<select name="cc_id" class="form-control form-control-solid" style="height: 41px;"

										required>

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

								<td><input type="text" autofocus placeholder="Complaint Title" required id="cc"

										class="form-control form-control-solid" name="complaint_title" tabindex="1"

										required></td>

								<td><label class="required fs-6 fw-semibold mb-2">Complaint Detail :</label></td>

								<td><textarea name="complaint_detail" class="form-control form-control-solid"></textarea required></td>

															</tr>





															<tr>

															<td><label class="required fs-6 fw-semibold mb-2">Source :</label></td>

														   <td>

				<select name="source_id" class="form-control form-control-solid" style="height: 41px;" required>

				<option value="">Select Source</option>

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

				<select name="subproject_id" class="form-control form-control-solid" id="ID1" style="height: 41px;" required>

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

		<select name="nc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_uc_new(this.value)" required>

											  <option>Select NC</option>

									<?php $nc = $this->db->query("select * from grm_nc_tbl where city_id=$city")->result();

									foreach ($nc as $nc) {

										?>

																	<option

																		value="<?php echo $nc->nc_id; ?>">

																		<?php echo $nc->nc_name; ?>

																	</option>

																<?php } ?>

															</select>

															 </td>

															<td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>

															 <td>

	 <select name="uc_id" id="uc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_zone_new(this.value)"  required>

											  <option>Select UC</option>

															   

															</select>

															 </td>

														 </tr>

														 <tr>

																 

																 <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>

																  <td>

							 <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;"   required>

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

	<!--begin::Modal - Users Search-->

	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">

		<!--begin::Modal dialog-->

		<div class="modal-dialog modal-dialog-centered mw-650px">

			<!--begin::Modal content-->

			<div class="modal-content">

				<!--begin::Modal header-->

				<div class="modal-header pb-0 border-0 justify-content-end">

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

				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

					<!--begin::Content-->

					<div class="text-center mb-13">

						<h1 class="mb-3">Search Users</h1>

						<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>

					</div>

					<!--end::Content-->

					<!--begin::Search-->

					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"

						data-kt-search-enter="enter" data-kt-search-layout="inline">

						<!--begin::Form-->

						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">

							<!--begin::Hidden input(Added to disable form autocomplete)-->

							<input type="hidden" />

							<!--end::Hidden input-->

							<!--begin::Icon-->

							<i

								class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">

								<span class="path1"></span>

								<span class="path2"></span>

							</i>

							<!--end::Icon-->

							<!--begin::Input-->

							<input type="text" class="form-control form-control-lg form-control-solid px-15"

								name="search" value="" placeholder="Search by username, full name or email..."

								data-kt-search-element="input" />

							<!--end::Input-->

							<!--begin::Spinner-->

							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"

								data-kt-search-element="spinner">

								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>

							</span>

							<!--end::Spinner-->

							<!--begin::Reset-->

							<span

								class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"

								data-kt-search-element="clear">

								<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">

									<span class="path1"></span>

									<span class="path2"></span>

								</i>

							</span>

							<!--end::Reset-->

						</form>

						<!--end::Form-->

						<!--begin::Wrapper-->

						<div class="py-5">

							<!--begin::Suggestions-->

							<div data-kt-search-element="suggestions">

								<!--begin::Heading-->

								<h3 class="fw-semibold mb-5">Recently searched:</h3>

								<!--end::Heading-->

								<!--begin::Users-->

								<div class="mh-375px scroll-y me-n7 pe-7">

									<!--begin::User-->

									<a href="#"

										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

										<!--begin::Avatar-->

										<div class="symbol symbol-35px symbol-circle me-5">

											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />

										</div>

										<!--end::Avatar-->

										<!--begin::Info-->

										<div class="fw-semibold">

											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>

											<span class="badge badge-light">Art Director</span>

										</div>

										<!--end::Info-->

									</a>

									<!--end::User-->

									<!--begin::User-->

									<a href="#"

										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

										<!--begin::Avatar-->

										<div class="symbol symbol-35px symbol-circle me-5">

											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>

										</div>

										<!--end::Avatar-->

										<!--begin::Info-->

										<div class="fw-semibold">

											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>

											<span class="badge badge-light">Marketing Analytic</span>

										</div>

										<!--end::Info-->

									</a>

									<!--end::User-->

									<!--begin::User-->

									<a href="#"

										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

										<!--begin::Avatar-->

										<div class="symbol symbol-35px symbol-circle me-5">

											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

										</div>

										<!--end::Avatar-->

										<!--begin::Info-->

										<div class="fw-semibold">

											<span class="fs-6 text-gray-800 me-2">Max Smith</span>

											<span class="badge badge-light">Software Enginer</span>

										</div>

										<!--end::Info-->

									</a>

									<!--end::User-->

									<!--begin::User-->

									<a href="#"

										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

										<!--begin::Avatar-->

										<div class="symbol symbol-35px symbol-circle me-5">

											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />

										</div>

										<!--end::Avatar-->

										<!--begin::Info-->

										<div class="fw-semibold">

											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>

											<span class="badge badge-light">Web Developer</span>

										</div>

										<!--end::Info-->

									</a>

									<!--end::User-->

									<!--begin::User-->

									<a href="#"

										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">

										<!--begin::Avatar-->

										<div class="symbol symbol-35px symbol-circle me-5">

											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

										</div>

										<!--end::Avatar-->

										<!--begin::Info-->

										<div class="fw-semibold">

											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>

											<span class="badge badge-light">UI/UX Designer</span>

										</div>

										<!--end::Info-->

									</a>

									<!--end::User-->

								</div>

								<!--end::Users-->

							</div>

							<!--end::Suggestions-->

							<!--begin::Results(add d-none to below element to hide the users list by default)-->

							<div data-kt-search-element="results" class="d-none">

								<!--begin::Users-->

								<div class="mh-375px scroll-y me-n7 pe-7">

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='0']"

													value="0" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma

													Smith</a>

												<div class="fw-semibold text-muted">smith@kpmg.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='1']"

													value="1" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-danger text-danger fw-semibold">M</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody

													Macy</a>

												<div class="fw-semibold text-muted">melody@altbox.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1" selected="selected">Guest</option>

												<option value="2">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='2']"

													value="2" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max

													Smith</a>

												<div class="fw-semibold text-muted">max@kt.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='3']"

													value="3" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean

													Bean</a>

												<div class="fw-semibold text-muted">sean@dellito.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='4']"

													value="4" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian

													Cox</a>

												<div class="fw-semibold text-muted">brian@exchange.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='5']"

													value="5" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-warning text-warning fw-semibold">C</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela

													Collins</a>

												<div class="fw-semibold text-muted">mik@pex.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='6']"

													value="6" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis

													Mitcham</a>

												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='7']"

													value="7" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-danger text-danger fw-semibold">O</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia

													Wild</a>

												<div class="fw-semibold text-muted">olivia@corpmail.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='8']"

													value="8" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-primary text-primary fw-semibold">N</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil

													Owen</a>

												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1" selected="selected">Guest</option>

												<option value="2">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='9']"

													value="9" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan

													Wilson</a>

												<div class="fw-semibold text-muted">dam@consilting.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='10']"

													value="10" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-danger text-danger fw-semibold">E</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma

													Bold</a>

												<div class="fw-semibold text-muted">emma@intenso.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='11']"

													value="11" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana

													Crown</a>

												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1" selected="selected">Guest</option>

												<option value="2">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='12']"

													value="12" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert

													Doe</a>

												<div class="fw-semibold text-muted">robert@benko.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='13']"

													value="13" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John

													Miller</a>

												<div class="fw-semibold text-muted">miller@mapple.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='14']"

													value="14" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-success text-success fw-semibold">L</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy

													Kunic</a>

												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2" selected="selected">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='15']"

													value="15" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan

													Wilder</a>

												<div class="fw-semibold text-muted">ethan@loop.com.au</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1" selected="selected">Guest</option>

												<option value="2">Owner</option>

												<option value="3">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

									<!--begin::Separator-->

									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>

									<!--end::Separator-->

									<!--begin::User-->

									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">

										<!--begin::Details-->

										<div class="d-flex align-items-center">

											<!--begin::Checkbox-->

											<label class="form-check form-check-custom form-check-solid me-5">

												<input class="form-check-input" type="checkbox" name="users"

													data-kt-check="true" data-kt-check-target="[data-user-id='16']"

													value="16" />

											</label>

											<!--end::Checkbox-->

											<!--begin::Avatar-->

											<div class="symbol symbol-35px symbol-circle">

												<span

													class="symbol-label bg-light-danger text-danger fw-semibold">M</span>

											</div>

											<!--end::Avatar-->

											<!--begin::Details-->

											<div class="ms-5">

												<a href="#"

													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody

													Macy</a>

												<div class="fw-semibold text-muted">melody@altbox.com</div>

											</div>

											<!--end::Details-->

										</div>

										<!--end::Details-->

										<!--begin::Access menu-->

										<div class="ms-2 w-100px">

											<select class="form-select form-select-solid form-select-sm"

												data-control="select2" data-hide-search="true">

												<option value="1">Guest</option>

												<option value="2">Owner</option>

												<option value="3" selected="selected">Can Edit</option>

											</select>

										</div>

										<!--end::Access menu-->

									</div>

									<!--end::User-->

								</div>

								<!--end::Users-->

								<!--begin::Actions-->

								<div class="d-flex flex-center mt-15">

									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"

										class="btn btn-active-light me-3">Cancel</button>

									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add

										Selected Users</button>

								</div>

								<!--end::Actions-->

							</div>

							<!--end::Results-->

							<!--begin::Empty-->

							<div data-kt-search-element="empty" class="text-center d-none">

								<!--begin::Message-->

								<div class="fw-semibold py-10">

									<div class="text-gray-600 fs-3 mb-2">No users found</div>

									<div class="text-muted fs-6">Try to search by username, full name or email...</div>

								</div>

								<!--end::Message-->

								<!--begin::Illustration-->

								<div class="text-center px-5">

									<img src="assets/media/illustrations/sketchy-1/1.png" alt=""

										class="w-100 h-200px h-sm-325px" />

								</div>

								<!--end::Illustration-->

							</div>

							<!--end::Empty-->

						</div>

						<!--end::Wrapper-->

					</div>

					<!--end::Search-->

				</div>

				<!--end::Modal body-->

			</div>

			<!--end::Modal content-->

		</div>

		<!--end::Modal dialog-->

	</div>

	<!--end::Modal - Users Search-->

	<!--begin::Modal - Invite Friends-->

	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">

		<!--begin::Modal dialog-->

		<div class="modal-dialog mw-650px">

			<!--begin::Modal content-->

			<div class="modal-content">

				<!--begin::Modal header-->

				<div class="modal-header pb-0 border-0 justify-content-end">

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

				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">

					<!--begin::Heading-->

					<div class="text-center mb-13">

						<!--begin::Title-->

						<h1 class="mb-3">Invite a Friend</h1>

						<!--end::Title-->

						<!--begin::Description-->

						<div class="text-muted fw-semibold fs-5">If you need more info, please check out

							<a href="#" class="link-primary fw-bold">FAQ Page</a>.

						</div>

						<!--end::Description-->

					</div>

					<!--end::Heading-->

					<!--begin::Google Contacts Invite-->

					<div class="btn btn-light-primary fw-bold w-100 mb-8">

						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite

						Gmail Contacts

					</div>

					<!--end::Google Contacts Invite-->

					<!--begin::Separator-->

					<div class="separator d-flex flex-center mb-8">

						<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>

					</div>

					<!--end::Separator-->

					<!--begin::Textarea-->

					<textarea class="form-control form-control-solid mb-8" rows="3"

						placeholder="Type or paste emails here"></textarea>

									<!--end::Textarea-->

									<!--begin::Users-->

									<div class="mb-10">

										<!--begin::Heading-->

										<div class="fs-6 fw-semibold mb-2">Your Invitations</div>

										<!--end::Heading-->

										<!--begin::List-->

										<div class="mh-300px scroll-y me-n7 pe-7">

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-6.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma

															Smith</a>

														<div class="fw-semibold text-muted">smith@kpmg.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-danger text-danger fw-semibold">M</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody

															Macy</a>

														<div class="fw-semibold text-muted">melody@altbox.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1" selected="selected">Guest</option>

														<option value="2">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-1.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max

															Smith</a>

														<div class="fw-semibold text-muted">max@kt.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-5.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean

															Bean</a>

														<div class="fw-semibold text-muted">sean@dellito.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-25.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian

															Cox</a>

														<div class="fw-semibold text-muted">brian@exchange.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-warning text-warning fw-semibold">C</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela

															Collins</a>

														<div class="fw-semibold text-muted">mik@pex.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-9.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis

															Mitcham</a>

														<div class="fw-semibold text-muted">f.mit@kpmg.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-danger text-danger fw-semibold">O</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia

															Wild</a>

														<div class="fw-semibold text-muted">olivia@corpmail.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-primary text-primary fw-semibold">N</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil

															Owen</a>

														<div class="fw-semibold text-muted">owen.neil@gmail.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1" selected="selected">Guest</option>

														<option value="2">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-23.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan

															Wilson</a>

														<div class="fw-semibold text-muted">dam@consilting.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-danger text-danger fw-semibold">E</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma

															Bold</a>

														<div class="fw-semibold text-muted">emma@intenso.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-12.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana

															Crown</a>

														<div class="fw-semibold text-muted">ana.cf@limtel.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1" selected="selected">Guest</option>

														<option value="2">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-info text-info fw-semibold">A</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert

															Doe</a>

														<div class="fw-semibold text-muted">robert@benko.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-13.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John

															Miller</a>

														<div class="fw-semibold text-muted">miller@mapple.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<span

															class="symbol-label bg-light-success text-success fw-semibold">L</span>

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy

															Kunic</a>

														<div class="fw-semibold text-muted">lucy.m@fentech.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2" selected="selected">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div

												class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-21.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan

															Wilder</a>

														<div class="fw-semibold text-muted">ethan@loop.com.au</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1" selected="selected">Guest</option>

														<option value="2">Owner</option>

														<option value="3">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

											<!--begin::User-->

											<div class="d-flex flex-stack py-4">

												<!--begin::Details-->

												<div class="d-flex align-items-center">

													<!--begin::Avatar-->

													<div class="symbol symbol-35px symbol-circle">

														<img alt="Pic" src="assets/media/avatars/300-9.jpg" />

													</div>

													<!--end::Avatar-->

													<!--begin::Details-->

													<div class="ms-5">

														<a href="#"

															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis

															Mitcham</a>

														<div class="fw-semibold text-muted">f.mit@kpmg.com</div>

													</div>

													<!--end::Details-->

												</div>

												<!--end::Details-->

												<!--begin::Access menu-->

												<div class="ms-2 w-100px">

													<select class="form-select form-select-solid form-select-sm"

														data-control="select2"

														data-dropdown-parent="#kt_modal_invite_friends"

														data-hide-search="true">

														<option value="1">Guest</option>

														<option value="2">Owner</option>

														<option value="3" selected="selected">Can Edit</option>

													</select>

												</div>

												<!--end::Access menu-->

											</div>

											<!--end::User-->

										</div>

										<!--end::List-->

									</div>

									<!--end::Users-->

									<!--begin::Notice-->

									<div class="d-flex flex-stack">

										<!--begin::Label-->

										<div class="me-5 fw-semibold">

											<label class="fs-6">Adding Users by Team Members</label>

											<div class="fs-7 text-muted">If you need more info, please check budget

												planning</div>

										</div>

										<!--end::Label-->

										<!--begin::Switch-->

										<label class="form-check form-switch form-check-custom form-check-solid">

											<input class="form-check-input" type="checkbox" value="1"

												checked="checked" />

											<span class="form-check-label fw-semibold text-muted">Allowed</span>

										</label>

										<!--end::Switch-->

									</div>

									<!--end::Notice-->

					</div>

					<!--end::Modal body-->

				</div>

				<!--end::Modal content-->

			</div>

			<!--end::Modal dialog-->

		</div>

		<!--end::Modal - Invite Friend-->

		<!--end::Modals-->

		<!--begin::Javascript-->

		<script>

		var hostUrl = "assets/";

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

							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-xl-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
											<!--begin::Card-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card body-->
												<div class="card-body pt-15">
													<!--begin::Summary-->
													<div class="d-flex flex-center flex-column mb-5">
														<!--begin::Avatar-->
														<div class="symbol symbol-100px symbol-circle mb-7">
															<img src="assets/media/avatars/300-1.jpg" alt="image" />
														</div>
														<!--end::Avatar-->
														<!--begin::Name-->
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">Max Smith</a>
														<!--end::Name-->
														<!--begin::Position-->
														<div class="fs-5 fw-semibold text-muted mb-6">Software Enginer</div>
														<!--end::Position-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap flex-center">
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-75px">6,900</span>
																	<i class="ki-duotone ki-arrow-up fs-3 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<div class="fw-semibold text-muted">Earnings</div>
															</div>
															<!--end::Stats-->
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">130</span>
																	<i class="ki-duotone ki-arrow-down fs-3 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<div class="fw-semibold text-muted">Tasks</div>
															</div>
															<!--end::Stats-->
															<!--begin::Stats-->
															<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
																<div class="fs-4 fw-bold text-gray-700">
																	<span class="w-50px">500</span>
																	<i class="ki-duotone ki-arrow-up fs-3 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</div>
																<div class="fw-semibold text-muted">Hours</div>
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Info-->
													</div>
													<!--end::Summary-->
													<!--begin::Details toggle-->
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
														<span class="ms-2 rotate-180">
															<i class="ki-duotone ki-down fs-3"></i>
														</span></div>
														<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
															<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
														</span>
													</div>
													<!--end::Details toggle-->
													<div class="separator separator-dashed my-3"></div>
													<!--begin::Details content-->
													<div id="kt_customer_view_details" class="collapse show">
														<div class="py-5 fs-6">
															<!--begin::Badge-->
															<div class="badge badge-light-info d-inline">Premium user</div>
															<!--begin::Badge-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Account ID</div>
															<div class="text-gray-600">ID-45453423</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Billing Email</div>
															<div class="text-gray-600">
																<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
															</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Billing Address</div>
															<div class="text-gray-600">101 Collin Street,
															<br />Melbourne 3000 VIC
															<br />Australia</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Language</div>
															<div class="text-gray-600">English</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Upcoming Invoice</div>
															<div class="text-gray-600">54238-8693</div>
															<!--begin::Details item-->
															<!--begin::Details item-->
															<div class="fw-bold mt-5">Tax ID</div>
															<div class="text-gray-600">TX-8674</div>
															<!--begin::Details item-->
														</div>
													</div>
													<!--end::Details content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Connected Accounts-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<div class="card-title">
														<h3 class="fw-bold m-0">Connected Accounts</h3>
													</div>
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-semibold">
																<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
																<a href="#" class="me-1">privacy policy</a>and
																<a href="#">terms of use</a>.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--begin::Items-->
													<div class="py-2">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
																	<div class="fs-6 fw-semibold text-muted">Plan properly your workflow</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_google"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
																	<div class="fs-6 fw-semibold text-muted">Keep eye on on your Repositories</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_github"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
														<div class="separator separator-dashed my-5"></div>
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<div class="d-flex">
																<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
																<div class="d-flex flex-column">
																	<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
																	<div class="fs-6 fw-semibold text-muted">Integrate Projects Discussions</div>
																</div>
															</div>
															<div class="d-flex justify-content-end">
																<!--begin::Switch-->
																<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<!--begin::Input-->
																	<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
																	<!--end::Input-->
																	<!--begin::Label-->
																	<span class="form-check-label fw-semibold text-muted" for="kt_modal_connected_accounts_slack"></span>
																	<!--end::Label-->
																</label>
																<!--end::Switch-->
															</div>
														</div>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<div class="card-footer border-0 d-flex justify-content-center pt-0">
													<button class="btn btn-sm btn-light-primary">Save Changes</button>
												</div>
												<!--end::Card footer-->
											</div>
											<!--end::Connected Accounts-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-15">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_customer_view_overview_events_and_logs_tab">Events & Logs</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_customer_view_overview_statements">Statements</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item ms-auto">
													<!--begin::Action menu-->
													<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
													<i class="ki-duotone ki-down fs-2 me-0"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Create invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link flex-stack px-5">Create payments
															<span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
															<a href="#" class="menu-link px-5">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Apps</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-5">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																			<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
																		</label>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-3"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link px-5">Reports</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5 my-1">
															<a href="#" class="menu-link px-5">Account Settings</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-5">
															<a href="#" class="menu-link text-danger px-5">Delete customer</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--end::Menu-->
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Payment Records</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Filter-->
																<button type="button" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_payment">
																<i class="ki-duotone ki-plus-square fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>Add payment</button>
																<!--end::Filter-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
																<thead class="border-bottom border-gray-200 fs-7 fw-bold">
																	<tr class="text-start text-muted text-uppercase gs-0">
																		<th class="min-w-100px">Invoice No.</th>
																		<th>Status</th>
																		<th>Amount</th>
																		<th class="min-w-100px">Date</th>
																		<th class="text-end min-w-100px pe-4">Actions</th>
																	</tr>
																</thead>
																<tbody class="fs-6 fw-semibold text-gray-600">
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">8598-4008</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$1,200.00</td>
																		<td>14 Dec 2020, 8:43 pm</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">2425-2191</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$79.00</td>
																		<td>01 Dec 2020, 10:12 am</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">4858-2210</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$5,500.00</td>
																		<td>12 Nov 2020, 2:01 pm</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">1396-1858</a>
																		</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>$880.00</td>
																		<td>21 Oct 2020, 5:54 pm</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">4527-6047</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$7,650.00</td>
																		<td>19 Oct 2020, 7:32 am</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">8357-1793</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$375.00</td>
																		<td>23 Sep 2020, 12:38 am</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">3168-3340</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">Successful</span>
																		</td>
																		<td>$129.00</td>
																		<td>11 Sep 2020, 3:18 pm</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">7253-2477</a>
																		</td>
																		<td>
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td>$450.00</td>
																		<td>03 Sep 2020, 1:08 am</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<a href="#" class="text-gray-600 text-hover-primary mb-1">4590-1903</a>
																		</td>
																		<td>
																			<span class="badge badge-light-warning">Pending</span>
																		</td>
																		<td>$8,700.00</td>
																		<td>01 Sep 2020, 4:58 pm</td>
																		<td class="pe-0 text-end">
																			<a href="#" class="btn btn-sm btn-light image.png btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																			<!--begin::Menu-->
																			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="../../demo47/dist/apps/customers/view.html" class="menu-link px-3">View</a>
																				</div>
																				<!--end::Menu item-->
																				<!--begin::Menu item-->
																				<div class="menu-item px-3">
																					<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																				</div>
																				<!--end::Menu item-->
																			</div>
																			<!--end::Menu-->
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2 class="fw-bold mb-0">Payment Methods</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																<i class="ki-duotone ki-plus-square fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>Add new method</a>
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div id="kt_customer_view_payment_method" class="card-body pt-0">
															<!--begin::Option-->
															<div class="py-0" data-kt-customer-payment-method="row">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
																		<!--begin::Arrow-->
																		<div class="me-3 rotate-90">
																			<i class="ki-duotone ki-right fs-3"></i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center">
																				<div class="text-gray-800 fw-bold">Mastercard</div>
																				<div class="badge badge-light-primary ms-5">Primary</div>
																			</div>
																			<div class="text-muted">Expires Dec 2024</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Toolbar-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Edit-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																			<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
																				<i class="ki-duotone ki-pencil fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</a>
																		<!--end::Edit-->
																		<!--begin::Delete-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
																			<i class="ki-duotone ki-trash fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--end::Delete-->
																		<!--begin::More-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<i class="ki-duotone ki-setting-3 fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																		<!--end::More-->
																	</div>
																	<!--end::Toolbar-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Emma Smith</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 1702</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">12/2024</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">Mastercard credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">VICBANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_4325df90sdf8</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">AU</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">Australia
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/australia.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Passed
																					<i class="ki-duotone ki-check-circle fs-2 text-success">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
															<div class="separator separator-dashed"></div>
															<!--begin::Option-->
															<div class="py-0" data-kt-customer-payment-method="row">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
																		<!--begin::Arrow-->
																		<div class="me-3 rotate-90">
																			<i class="ki-duotone ki-right fs-3"></i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center">
																				<div class="text-gray-800 fw-bold">Visa</div>
																			</div>
																			<div class="text-muted">Expires Feb 2022</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Toolbar-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Edit-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																			<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
																				<i class="ki-duotone ki-pencil fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</a>
																		<!--end::Edit-->
																		<!--begin::Delete-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
																			<i class="ki-duotone ki-trash fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--end::Delete-->
																		<!--begin::More-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<i class="ki-duotone ki-setting-3 fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																		<!--end::More-->
																	</div>
																	<!--end::Toolbar-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_customer_view_payment_method_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Melody Macy</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 4838</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">02/2022</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">Visa credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">ENBANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_w2r84jdy723</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">UK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">United Kingdom
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/united-kingdom.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Passed
																					<i class="ki-duotone ki-check fs-2 text-success"></i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
															<div class="separator separator-dashed"></div>
															<!--begin::Option-->
															<div class="py-0" data-kt-customer-payment-method="row">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
																		<!--begin::Arrow-->
																		<div class="me-3 rotate-90">
																			<i class="ki-duotone ki-right fs-3"></i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="<?php echo base_url()?>assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center">
																				<div class="text-gray-800 fw-bold">American Express</div>
																				<div class="badge badge-light-danger ms-5">Expired</div>
																			</div>
																			<div class="text-muted">Expires Aug 2021</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Toolbar-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Edit-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																			<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
																				<i class="ki-duotone ki-pencil fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																		</a>
																		<!--end::Edit-->
																		<!--begin::Delete-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-customer-payment-method="delete">
																			<i class="ki-duotone ki-trash fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--end::Delete-->
																		<!--begin::More-->
																		<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="More Options" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																			<i class="ki-duotone ki-setting-3 fs-3">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold w-150px py-3" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																		<!--end::More-->
																	</div>
																	<!--end::Toolbar-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_customer_view_payment_method_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Max Smith</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 8215</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">08/2021</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">American express credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">USABANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_89457jcje63</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">US</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">United States of America
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/united-states.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Failed
																					<i class="ki-duotone ki-cross fs-2 text-danger">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2 class="fw-bold">Credit Balance</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_adjust_balance">
																<i class="ki-duotone ki-pencil fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Adjust Balance</a>
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<div class="fw-bold fs-2">$32,487.57
															<span class="text-muted fs-4 fw-semibold">USD</span>
															<div class="fs-7 fw-normal text-muted">Balance will increase the amount due on the customer's next invoice.</div></div>
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-2 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Invoices</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar m-0">
																<!--begin::Tab nav-->
																<ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
																	<li class="nav-item" role="presentation">
																		<a id="kt_referrals_year_tab" class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_1">This Year</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a id="kt_referrals_2019_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_2">2020</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a id="kt_referrals_2018_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_3">2019</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a id="kt_referrals_2017_tab" class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_details_invoices_4">2018</a>
																	</li>
																</ul>
																<!--end::Tab nav-->
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<!--begin::Tab Content-->
															<div id="kt_referred_users_tab_content" class="tab-content">
																<!--begin::Tab panel-->
																<div id="kt_customer_details_invoices_1" class="py-0 tab-pane fade show active" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
																		<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
																			<tr class="text-start text-muted gs-0">
																				<th class="min-w-100px">Order ID</th>
																				<th class="min-w-100px">Amount</th>
																				<th class="min-w-100px">Status</th>
																				<th class="min-w-125px">Date</th>
																				<th class="min-w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody class="fs-6 fw-semibold text-gray-600">
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td class="text-success">$38.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td class="text-danger">$-2.60</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Oct 24, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$76.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Oct 08, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$5.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Sep 15, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td class="text-danger">$-1.30</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>May 30, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td class="text-success">$204.00</td>
																				<td>
																					<span class="badge badge-light-success">Approved</span>
																				</td>
																				<td>Apr 22, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td class="text-success">$31.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Feb 09, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td class="text-success">$52.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td class="text-danger">$-0.80</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Jan 04, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_details_invoices_2" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_details_invoices_table_2" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
																		<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
																			<tr class="text-start text-muted gs-0">
																				<th class="min-w-100px">Order ID</th>
																				<th class="min-w-100px">Amount</th>
																				<th class="min-w-100px">Status</th>
																				<th class="min-w-125px">Date</th>
																				<th class="min-w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody class="fs-6 fw-semibold text-gray-600">
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td class="text-danger">$-1.30</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>May 30, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td class="text-success">$204.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Apr 22, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td class="text-success">$31.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Feb 09, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td class="text-success">$52.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td class="text-danger">$-0.80</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Jan 04, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td class="text-success">$38.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td class="text-danger">$-2.60</td>
																				<td>
																					<span class="badge badge-light-success">Approved</span>
																				</td>
																				<td>Oct 24, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$76.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Oct 08, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$5.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Sep 15, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_details_invoices_3" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_details_invoices_table_3" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
																		<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
																			<tr class="text-start text-muted gs-0">
																				<th class="min-w-100px">Order ID</th>
																				<th class="min-w-100px">Amount</th>
																				<th class="min-w-100px">Status</th>
																				<th class="min-w-125px">Date</th>
																				<th class="min-w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody class="fs-6 fw-semibold text-gray-600">
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td class="text-success">$31.00</td>
																				<td>
																					<span class="badge badge-light-success">Approved</span>
																				</td>
																				<td>Feb 09, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td class="text-success">$52.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td class="text-danger">$-0.80</td>
																				<td>
																					<span class="badge badge-light-success">Approved</span>
																				</td>
																				<td>Jan 04, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$5.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Sep 15, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td class="text-success">$38.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td class="text-danger">$-2.60</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Oct 24, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$76.00</td>
																				<td>
																					<span class="badge badge-light-warning">Pending</span>
																				</td>
																				<td>Oct 08, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td class="text-danger">$-1.30</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>May 30, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td class="text-success">$204.00</td>
																				<td>
																					<span class="badge badge-light-warning">Pending</span>
																				</td>
																				<td>Apr 22, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_details_invoices_4" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_details_invoices_table_4" class="table align-middle table-row-dashed fs-6 fw-bold gy-5">
																		<thead class="border-bottom border-gray-200 fs-7 text-uppercase fw-bold">
																			<tr class="text-start text-muted gs-0">
																				<th class="min-w-100px">Order ID</th>
																				<th class="min-w-100px">Amount</th>
																				<th class="min-w-100px">Status</th>
																				<th class="min-w-125px">Date</th>
																				<th class="min-w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody class="fs-6 fw-semibold text-gray-600">
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td class="text-success">$38.00</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td class="text-danger">$-2.60</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Oct 24, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td class="text-success">$38.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td class="text-danger">$-2.60</td>
																				<td>
																					<span class="badge badge-light-info">In progress</span>
																				</td>
																				<td>Oct 24, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td class="text-success">$31.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Feb 09, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td class="text-success">$52.00</td>
																				<td>
																					<span class="badge badge-light-danger">Rejected</span>
																				</td>
																				<td>Nov 01, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td class="text-danger">$-0.80</td>
																				<td>
																					<span class="badge badge-light-warning">Pending</span>
																				</td>
																				<td>Jan 04, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$76.00</td>
																				<td>
																					<span class="badge badge-light-success">Approved</span>
																				</td>
																				<td>Oct 08, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td class="text-success">$76.00</td>
																				<td>
																					<span class="badge badge-light-warning">Pending</span>
																				</td>
																				<td>Oct 08, 2020</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
															</div>
															<!--end::Tab Content-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab" role="tabpanel">
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Logs</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-duotone ki-cloud-download fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5" id="kt_table_customers_logs">
																	<tbody>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_64b781ac9909b/not_found</td>
																			<td class="pe-0 text-end min-w-200px">20 Jun 2023, 11:30 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_1976_3717/payment</td>
																			<td class="pe-0 text-end min-w-200px">24 Jun 2023, 8:43 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_64b781ac9909b/not_found</td>
																			<td class="pe-0 text-end min-w-200px">20 Jun 2023, 6:43 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_1839_8187/payment</td>
																			<td class="pe-0 text-end min-w-200px">10 Mar 2023, 10:30 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-danger">500 ERR</div>
																			</td>
																			<td>POST /v1/invoice/in_4342_7545/invalid</td>
																			<td class="pe-0 text-end min-w-200px">05 May 2023, 10:10 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_9148_1926/payment</td>
																			<td class="pe-0 text-end min-w-200px">10 Nov 2023, 9:23 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_64b781ac9909b/not_found</td>
																			<td class="pe-0 text-end min-w-200px">10 Nov 2023, 6:05 pm</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-success">200 OK</div>
																			</td>
																			<td>POST /v1/invoices/in_9148_1926/payment</td>
																			<td class="pe-0 text-end min-w-200px">10 Nov 2023, 6:43 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_64b781ac9909a/not_found</td>
																			<td class="pe-0 text-end min-w-200px">19 Aug 2023, 11:30 am</td>
																		</tr>
																		<tr>
																			<td class="min-w-70px">
																				<div class="badge badge-light-warning">404 WRN</div>
																			</td>
																			<td>POST /v1/customer/c_64b781ac99099/not_found</td>
																			<td class="pe-0 text-end min-w-200px">20 Jun 2023, 10:30 am</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<!--end::Table wrapper-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															<div class="card-title">
																<h2>Events</h2>
															</div>
															<!--end::Card title-->
															<!--begin::Card toolbar-->
															<div class="card-toolbar">
																<!--begin::Button-->
																<button type="button" class="btn btn-sm btn-light-primary">
																<i class="ki-duotone ki-cloud-download fs-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Download Report</button>
																<!--end::Button-->
															</div>
															<!--end::Card toolbar-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body py-0">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5" id="kt_table_customers_events">
																<tbody>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																		<span class="badge badge-light-warning me-1">Pending</span>to
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2023, 5:20 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																		<span class="badge badge-light-warning me-1">Pending</span>to
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Nov 2023, 5:20 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																		<span class="badge badge-light-danger">Declined</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">24 Jun 2023, 9:23 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Melody Macy</a>has made payment to
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun 2023, 6:05 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2023, 10:30 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status has changed from
																		<span class="badge badge-light-succees me-1">In Transit</span>to
																		<span class="badge badge-light-success">Approved</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2023, 8:43 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Max Smith</a>has made payment to
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar 2023, 11:30 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2023, 10:10 pm</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">
																		<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">25 Jul 2023, 6:43 am</td>
																	</tr>
																	<tr>
																		<td class="min-w-400px">Invoice
																		<a href="#" class="fw-bold text-gray-900 text-hover-primary me-1">#WER-45670</a>is
																		<span class="badge badge-light-info">In Progress</span></td>
																		<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2023, 8:43 pm</td>
																	</tr>
																</tbody>
															</table>
															<!--end::Table-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
												<div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
													<!--begin::Earnings-->
													<div class="card mb-6 mb-xl-9">
														<!--begin::Header-->
														<div class="card-header border-0">
															<div class="card-title">
																<h2>Earnings</h2>
															</div>
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body py-0">
															<div class="fs-5 fw-semibold text-gray-500 mb-4">Last 30 day earnings calculated. Apart from arranging the order of topics.</div>
															<!--begin::Left Section-->
															<div class="d-flex flex-wrap flex-stack mb-5">
																<!--begin::Row-->
																<div class="d-flex flex-wrap">
																	<!--begin::Col-->
																	<div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
																		<span class="fs-1 fw-bold text-gray-800 lh-1">
																			<span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$">0</span>
																			<i class="ki-duotone ki-arrow-up fs-1 text-success">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																		<span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Net Earnings</span>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
																		<span class="fs-1 fw-bold text-gray-800 lh-1">
																		<span class="" data-kt-countup="true" data-kt-countup-value="16">0</span>%
																		<i class="ki-duotone ki-arrow-down fs-1 text-danger">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i></span>
																		<span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Change</span>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
																		<span class="fs-1 fw-bold text-gray-800 lh-1">
																			<span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$">0</span>
																			<span class="text-primary">--</span>
																		</span>
																		<span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Fees</span>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
																<a href="#" class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw Earnings</a>
															</div>
															<!--end::Left Section-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Earnings-->
													<!--begin::Statements-->
													<div class="card mb-6 mb-xl-9">
														<!--begin::Header-->
														<div class="card-header">
															<!--begin::Title-->
															<div class="card-title">
																<h2>Statement</h2>
															</div>
															<!--end::Title-->
															<!--begin::Toolbar-->
															<div class="card-toolbar">
																<!--begin::Tab nav-->
																<ul class="nav nav-stretch fs-5 fw-semibold nav-line-tabs nav-line-tabs-2x border-transparent" role="tablist">
																	<li class="nav-item" role="presentation">
																		<a class="nav-link text-active-primary active" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_1">This Year</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_2">2020</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_3">2019</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a class="nav-link text-active-primary ms-3" data-bs-toggle="tab" role="tab" href="#kt_customer_view_statement_4">2018</a>
																	</li>
																</ul>
																<!--end::Tab nav-->
															</div>
															<!--end::Toolbar-->
														</div>
														<!--end::Header-->
														<!--begin::Card body-->
														<div class="card-body pb-5">
															<!--begin::Tab Content-->
															<div id="kt_customer_view_statement_tab_content" class="tab-content">
																<!--begin::Tab panel-->
																<div id="kt_customer_view_statement_1" class="py-0 tab-pane fade show active" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_view_statement_table_1" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
																		<thead class="border-bottom border-gray-200">
																			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																				<th class="w-125px">Date</th>
																				<th class="w-100px">Order ID</th>
																				<th class="w-300px">Details</th>
																				<th class="w-100px">Amount</th>
																				<th class="w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Nov 01, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2021</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_view_statement_2" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_view_statement_table_2" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
																		<thead class="border-bottom border-gray-200">
																			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																				<th class="w-125px">Date</th>
																				<th class="w-100px">Order ID</th>
																				<th class="w-300px">Details</th>
																				<th class="w-100px">Amount</th>
																				<th class="w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>May 30, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2020</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_view_statement_3" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_view_statement_table_3" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
																		<thead class="border-bottom border-gray-200">
																			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																				<th class="w-125px">Date</th>
																				<th class="w-100px">Order ID</th>
																				<th class="w-300px">Details</th>
																				<th class="w-100px">Amount</th>
																				<th class="w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Feb 09, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
																<!--begin::Tab panel-->
																<div id="kt_customer_view_statement_4" class="py-0 tab-pane fade" role="tabpanel">
																	<!--begin::Table-->
																	<table id="kt_customer_view_statement_table_4" class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-4">
																		<thead class="border-bottom border-gray-200">
																			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																				<th class="w-125px">Date</th>
																				<th class="w-100px">Order ID</th>
																				<th class="w-300px">Details</th>
																				<th class="w-100px">Amount</th>
																				<th class="w-100px text-end pe-7">Invoice</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Nov 01, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2018</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Feb 09, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">426445943</a>
																				</td>
																				<td>Visual Design Illustration</td>
																				<td class="text-success">$31.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">984445943</a>
																				</td>
																				<td>Abstract Vusial Pack</td>
																				<td class="text-success">$52.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Jan 04, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">324442313</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-0.80</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Sep 15, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Iphone 12 Pro Mockup Mega Bundle</td>
																				<td class="text-success">$5.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Nov 01, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">102445788</a>
																				</td>
																				<td>Darknight transparency 36 Icons Pack</td>
																				<td class="text-success">$38.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 24, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">423445721</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-2.60</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Oct 08, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">312445984</a>
																				</td>
																				<td>Cartoon Mobile Emoji Phone Pack</td>
																				<td class="text-success">$76.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>May 30, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">523445943</a>
																				</td>
																				<td>Seller Fee</td>
																				<td class="text-danger">$-1.30</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																			<tr>
																				<td>Apr 22, 2019</td>
																				<td>
																					<a href="#" class="text-gray-600 text-hover-primary">231445943</a>
																				</td>
																				<td>Parcel Shipping / Delivery Service App</td>
																				<td class="text-success">$204.00</td>
																				<td class="text-end">
																					<button class="btn btn-sm btn-light btn-active-light-primary">Download</button>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Tab panel-->
															</div>
															<!--end::Tab Content-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Statements-->
												</div>
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - Add Payment-->
									<div class="modal fade" id="kt_modal_add_payment" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Add a Payment Record</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_add_payment_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_add_payment_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Invoice Number</span>
																<span class="ms-2" data-bs-toggle="tooltip" title="The invoice number must be unique.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="invoice" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Status</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select class="form-select form-select-solid fw-bold" name="status" data-control="select2" data-placeholder="Select an option" data-hide-search="true">
																<option></option>
																<option value="0">Approved</option>
																<option value="1">Pending</option>
																<option value="2">Rejected</option>
																<option value="3">In progress</option>
																<option value="4">Completed</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Invoice Amount</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="amount" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-15">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">
																<span class="required">Additional Information</span>
																<span class="ms-2" data-bs-toggle="tooltip" title="Information such as description of invoice or product purchased.">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid rounded-3" name="additional_info"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center">
															<button type="reset" id="kt_modal_add_payment_cancel" class="btn btn-light me-3">Discard</button>
															<button type="submit" id="kt_modal_add_payment_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - New Card-->
									<!--begin::Modal - Adjust Balance-->
									<div class="modal fade" id="kt_modal_adjust_balance" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Adjust Balance</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_adjust_balance_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<i class="ki-duotone ki-cross fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Balance preview-->
													<div class="d-flex text-center mb-9">
														<div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
															<div class="fs-6 fw-semibold mb-2 text-muted">Current Balance</div>
															<div class="fs-2 fw-bold" kt-modal-adjust-balance="current_balance">US$ 32,487.57</div>
														</div>
														<div class="w-50 border border-dashed border-gray-300 rounded mx-2 p-4">
															<div class="fs-6 fw-semibold mb-2 text-muted">New Balance
															<span class="ms-2" data-bs-toggle="tooltip" title="Enter an amount to preview the new balance.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></div>
															<div class="fs-2 fw-bold" kt-modal-adjust-balance="new_balance">--</div>
														</div>
													</div>
													<!--end::Balance preview-->
													<!--begin::Form-->
													<form id="kt_modal_adjust_balance_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Adjustment type</label>
															<!--end::Label-->
															<!--begin::Dropdown-->
															<select class="form-select form-select-solid fw-bold" name="adjustment" aria-label="Select an option" data-control="select2" data-dropdown-parent="#kt_modal_adjust_balance" data-placeholder="Select an option" data-hide-search="true">
																<option></option>
																<option value="1">Credit</option>
																<option value="2">Debit</option>
															</select>
															<!--end::Dropdown-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Amount</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input id="kt_modal_inputmask" type="text" class="form-control form-control-solid" name="amount" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mb-2">Add adjustment note</label>
															<!--end::Label-->
															<!--begin::Input-->
															<textarea class="form-control form-control-solid rounded-3 mb-5"></textarea>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Disclaimer-->
														<div class="fs-7 text-muted mb-15">Please be aware that all manual balance changes will be audited by the financial team every fortnight. Please maintain your invoices and receipts until then. Thank you.</div>
														<!--end::Disclaimer-->
														<!--begin::Actions-->
														<div class="text-center">
															<button type="reset" id="kt_modal_adjust_balance_cancel" class="btn btn-light me-3">Discard</button>
															<button type="submit" id="kt_modal_adjust_balance_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - New Card-->
									<!--begin::Modal - New Address-->
									<div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" action="#" id="kt_modal_update_customer_form">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_update_customer_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Update Customer</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
															<i class="ki-duotone ki-cross fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</div>
														<!--end::Close-->
													</div>
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
															<!--begin::Notice-->
															<!--begin::Notice-->
															<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
																<!--begin::Icon-->
																<i class="ki-duotone ki-information fs-2tx text-primary me-4">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
																<!--end::Icon-->
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack flex-grow-1">
																	<!--begin::Content-->
																	<div class="fw-semibold">
																		<div class="fs-6 text-gray-700">Updating customer details will receive a privacy audit. For more info, please read our
																		<a href="#">Privacy Policy</a></div>
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Notice-->
															<!--end::Notice-->
															<!--begin::User toggle-->
															<div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
															<span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
															<!--end::User toggle-->
															<!--begin::User form-->
															<div id="kt_modal_update_customer_user_info" class="collapse show">
																<!--begin::Input group-->
																<div class="mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Update Avatar</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Image input wrapper-->
																	<div class="mt-1">
																		<!--begin::Image input-->
																		<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo base_url()?>assets/media/svg/avatars/blank.svg')">
																			<!--begin::Preview existing avatar-->
																			<div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo base_url()?>assets/media/avatars/300-1.jpg)"></div>
																			<!--end::Preview existing avatar-->
																			<!--begin::Edit-->
																			<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																				<i class="ki-duotone ki-pencil fs-7">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																				<!--begin::Inputs-->
																				<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																				<input type="hidden" name="avatar_remove" />
																				<!--end::Inputs-->
																			</label>
																			<!--end::Edit-->
																			<!--begin::Cancel-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Cancel-->
																			<!--begin::Remove-->
																			<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																				<i class="ki-duotone ki-cross fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</span>
																			<!--end::Remove-->
																		</div>
																		<!--end::Image input-->
																	</div>
																	<!--end::Image input wrapper-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Email</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-15">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Description</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="" name="description" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::User form-->
															<!--begin::Billing toggle-->
															<div class="fw-bold fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_billing_info">Shipping Information
															<span class="ms-2 rotate-180">
																<i class="ki-duotone ki-down fs-3"></i>
															</span></div>
															<!--end::Billing toggle-->
															<!--begin::Billing form-->
															<div id="kt_modal_update_customer_billing_info" class="collapse">
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 1</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Address Line 2</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="address2" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Town</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="row g-9 mb-7">
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">State / Province</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<!--begin::Label-->
																		<label class="fs-6 fw-semibold mb-2">Post Code</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
																		<!--end::Input-->
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-flex flex-column mb-7 fv-row">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">
																		<span>Country</span>
																		<span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_customer" class="form-select form-select-solid fw-bold">
																		<option value="">Select a Country...</option>
																		<option value="AF">Afghanistan</option>
																		<option value="AX">Aland Islands</option>
																		<option value="AL">Albania</option>
																		<option value="DZ">Algeria</option>
																		<option value="AS">American Samoa</option>
																		<option value="AD">Andorra</option>
																		<option value="AO">Angola</option>
																		<option value="AI">Anguilla</option>
																		<option value="AG">Antigua and Barbuda</option>
																		<option value="AR">Argentina</option>
																		<option value="AM">Armenia</option>
																		<option value="AW">Aruba</option>
																		<option value="AU">Australia</option>
																		<option value="AT">Austria</option>
																		<option value="AZ">Azerbaijan</option>
																		<option value="BS">Bahamas</option>
																		<option value="BH">Bahrain</option>
																		<option value="BD">Bangladesh</option>
																		<option value="BB">Barbados</option>
																		<option value="BY">Belarus</option>
																		<option value="BE">Belgium</option>
																		<option value="BZ">Belize</option>
																		<option value="BJ">Benin</option>
																		<option value="BM">Bermuda</option>
																		<option value="BT">Bhutan</option>
																		<option value="BO">Bolivia, Plurinational State of</option>
																		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																		<option value="BA">Bosnia and Herzegovina</option>
																		<option value="BW">Botswana</option>
																		<option value="BR">Brazil</option>
																		<option value="IO">British Indian Ocean Territory</option>
																		<option value="BN">Brunei Darussalam</option>
																		<option value="BG">Bulgaria</option>
																		<option value="BF">Burkina Faso</option>
																		<option value="BI">Burundi</option>
																		<option value="KH">Cambodia</option>
																		<option value="CM">Cameroon</option>
																		<option value="CA">Canada</option>
																		<option value="CV">Cape Verde</option>
																		<option value="KY">Cayman Islands</option>
																		<option value="CF">Central African Republic</option>
																		<option value="TD">Chad</option>
																		<option value="CL">Chile</option>
																		<option value="CN">China</option>
																		<option value="CX">Christmas Island</option>
																		<option value="CC">Cocos (Keeling) Islands</option>
																		<option value="CO">Colombia</option>
																		<option value="KM">Comoros</option>
																		<option value="CK">Cook Islands</option>
																		<option value="CR">Costa Rica</option>
																		<option value="CI">Côte d'Ivoire</option>
																		<option value="HR">Croatia</option>
																		<option value="CU">Cuba</option>
																		<option value="CW">Curaçao</option>
																		<option value="CZ">Czech Republic</option>
																		<option value="DK">Denmark</option>
																		<option value="DJ">Djibouti</option>
																		<option value="DM">Dominica</option>
																		<option value="DO">Dominican Republic</option>
																		<option value="EC">Ecuador</option>
																		<option value="EG">Egypt</option>
																		<option value="SV">El Salvador</option>
																		<option value="GQ">Equatorial Guinea</option>
																		<option value="ER">Eritrea</option>
																		<option value="EE">Estonia</option>
																		<option value="ET">Ethiopia</option>
																		<option value="FK">Falkland Islands (Malvinas)</option>
																		<option value="FJ">Fiji</option>
																		<option value="FI">Finland</option>
																		<option value="FR">France</option>
																		<option value="PF">French Polynesia</option>
																		<option value="GA">Gabon</option>
																		<option value="GM">Gambia</option>
																		<option value="GE">Georgia</option>
																		<option value="DE">Germany</option>
																		<option value="GH">Ghana</option>
																		<option value="GI">Gibraltar</option>
																		<option value="GR">Greece</option>
																		<option value="GL">Greenland</option>
																		<option value="GD">Grenada</option>
																		<option value="GU">Guam</option>
																		<option value="GT">Guatemala</option>
																		<option value="GG">Guernsey</option>
																		<option value="GN">Guinea</option>
																		<option value="GW">Guinea-Bissau</option>
																		<option value="HT">Haiti</option>
																		<option value="VA">Holy See (Vatican City State)</option>
																		<option value="HN">Honduras</option>
																		<option value="HK">Hong Kong</option>
																		<option value="HU">Hungary</option>
																		<option value="IS">Iceland</option>
																		<option value="IN">India</option>
																		<option value="ID">Indonesia</option>
																		<option value="IR">Iran, Islamic Republic of</option>
																		<option value="IQ">Iraq</option>
																		<option value="IE">Ireland</option>
																		<option value="IM">Isle of Man</option>
																		<option value="IL">Israel</option>
																		<option value="IT">Italy</option>
																		<option value="JM">Jamaica</option>
																		<option value="JP">Japan</option>
																		<option value="JE">Jersey</option>
																		<option value="JO">Jordan</option>
																		<option value="KZ">Kazakhstan</option>
																		<option value="KE">Kenya</option>
																		<option value="KI">Kiribati</option>
																		<option value="KP">Korea, Democratic People's Republic of</option>
																		<option value="KW">Kuwait</option>
																		<option value="KG">Kyrgyzstan</option>
																		<option value="LA">Lao People's Democratic Republic</option>
																		<option value="LV">Latvia</option>
																		<option value="LB">Lebanon</option>
																		<option value="LS">Lesotho</option>
																		<option value="LR">Liberia</option>
																		<option value="LY">Libya</option>
																		<option value="LI">Liechtenstein</option>
																		<option value="LT">Lithuania</option>
																		<option value="LU">Luxembourg</option>
																		<option value="MO">Macao</option>
																		<option value="MG">Madagascar</option>
																		<option value="MW">Malawi</option>
																		<option value="MY">Malaysia</option>
																		<option value="MV">Maldives</option>
																		<option value="ML">Mali</option>
																		<option value="MT">Malta</option>
																		<option value="MH">Marshall Islands</option>
																		<option value="MQ">Martinique</option>
																		<option value="MR">Mauritania</option>
																		<option value="MU">Mauritius</option>
																		<option value="MX">Mexico</option>
																		<option value="FM">Micronesia, Federated States of</option>
																		<option value="MD">Moldova, Republic of</option>
																		<option value="MC">Monaco</option>
																		<option value="MN">Mongolia</option>
																		<option value="ME">Montenegro</option>
																		<option value="MS">Montserrat</option>
																		<option value="MA">Morocco</option>
																		<option value="MZ">Mozambique</option>
																		<option value="MM">Myanmar</option>
																		<option value="NA">Namibia</option>
																		<option value="NR">Nauru</option>
																		<option value="NP">Nepal</option>
																		<option value="NL">Netherlands</option>
																		<option value="NZ">New Zealand</option>
																		<option value="NI">Nicaragua</option>
																		<option value="NE">Niger</option>
																		<option value="NG">Nigeria</option>
																		<option value="NU">Niue</option>
																		<option value="NF">Norfolk Island</option>
																		<option value="MP">Northern Mariana Islands</option>
																		<option value="NO">Norway</option>
																		<option value="OM">Oman</option>
																		<option value="PK">Pakistan</option>
																		<option value="PW">Palau</option>
																		<option value="PS">Palestinian Territory, Occupied</option>
																		<option value="PA">Panama</option>
																		<option value="PG">Papua New Guinea</option>
																		<option value="PY">Paraguay</option>
																		<option value="PE">Peru</option>
																		<option value="PH">Philippines</option>
																		<option value="PL">Poland</option>
																		<option value="PT">Portugal</option>
																		<option value="PR">Puerto Rico</option>
																		<option value="QA">Qatar</option>
																		<option value="RO">Romania</option>
																		<option value="RU">Russian Federation</option>
																		<option value="RW">Rwanda</option>
																		<option value="BL">Saint Barthélemy</option>
																		<option value="KN">Saint Kitts and Nevis</option>
																		<option value="LC">Saint Lucia</option>
																		<option value="MF">Saint Martin (French part)</option>
																		<option value="VC">Saint Vincent and the Grenadines</option>
																		<option value="WS">Samoa</option>
																		<option value="SM">San Marino</option>
																		<option value="ST">Sao Tome and Principe</option>
																		<option value="SA">Saudi Arabia</option>
																		<option value="SN">Senegal</option>
																		<option value="RS">Serbia</option>
																		<option value="SC">Seychelles</option>
																		<option value="SL">Sierra Leone</option>
																		<option value="SG">Singapore</option>
																		<option value="SX">Sint Maarten (Dutch part)</option>
																		<option value="SK">Slovakia</option>
																		<option value="SI">Slovenia</option>
																		<option value="SB">Solomon Islands</option>
																		<option value="SO">Somalia</option>
																		<option value="ZA">South Africa</option>
																		<option value="KR">South Korea</option>
																		<option value="SS">South Sudan</option>
																		<option value="ES">Spain</option>
																		<option value="LK">Sri Lanka</option>
																		<option value="SD">Sudan</option>
																		<option value="SR">Suriname</option>
																		<option value="SZ">Swaziland</option>
																		<option value="SE">Sweden</option>
																		<option value="CH">Switzerland</option>
																		<option value="SY">Syrian Arab Republic</option>
																		<option value="TW">Taiwan, Province of China</option>
																		<option value="TJ">Tajikistan</option>
																		<option value="TZ">Tanzania, United Republic of</option>
																		<option value="TH">Thailand</option>
																		<option value="TG">Togo</option>
																		<option value="TK">Tokelau</option>
																		<option value="TO">Tonga</option>
																		<option value="TT">Trinidad and Tobago</option>
																		<option value="TN">Tunisia</option>
																		<option value="TR">Turkey</option>
																		<option value="TM">Turkmenistan</option>
																		<option value="TC">Turks and Caicos Islands</option>
																		<option value="TV">Tuvalu</option>
																		<option value="UG">Uganda</option>
																		<option value="UA">Ukraine</option>
																		<option value="AE">United Arab Emirates</option>
																		<option value="GB">United Kingdom</option>
																		<option value="US">United States</option>
																		<option value="UY">Uruguay</option>
																		<option value="UZ">Uzbekistan</option>
																		<option value="VU">Vanuatu</option>
																		<option value="VE">Venezuela, Bolivarian Republic of</option>
																		<option value="VN">Vietnam</option>
																		<option value="VI">Virgin Islands</option>
																		<option value="YE">Yemen</option>
																		<option value="ZM">Zambia</option>
																		<option value="ZW">Zimbabwe</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Wrapper-->
																	<div class="d-flex flex-stack">
																		<!--begin::Label-->
																		<div class="me-5">
																			<!--begin::Label-->
																			<label class="fs-6 fw-semibold">Use as a billing adderess?</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
																			<!--end::Input-->
																		</div>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_customer_billing" checked="checked" />
																			<!--end::Input-->
																			<!--begin::Label-->
																			<span class="form-check-label fw-semibold text-muted" for="kt_modal_update_customer_billing">Yes</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																	<!--begin::Wrapper-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Billing form-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<!--end::Button-->
													</div>
													<!--end::Modal footer-->
												</form>
												<!--end::Form-->
											</div>
										</div>
									</div>
									<!--end::Modal - New Address-->
									<!--begin::Modal - New Card-->
									<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2>Add New Card</h2>
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
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_modal_new_card_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																<span class="required">Name On Card</span>
																<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
																	<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
															<!--end::Label-->
															<!--begin::Input wrapper-->
															<div class="position-relative">
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
																<!--end::Input-->
																<!--begin::Card logos-->
																<div class="position-absolute translate-middle-y top-50 end-0 me-5">
																	<img src="<?php echo base_url()?>assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
																	<img src="<?php echo base_url()?>assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
																	<img src="<?php echo base_url()?>assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
																</div>
																<!--end::Card logos-->
															</div>
															<!--end::Input wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-10">
															<!--begin::Col-->
															<div class="col-md-8 fv-row">
																<!--begin::Label-->
																<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-6">
																		<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
																			<option></option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																			<option value="6">6</option>
																			<option value="7">7</option>
																			<option value="8">8</option>
																			<option value="9">9</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																		</select>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-6">
																		<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
																			<option></option>
																			<option value="2023">2023</option>
																			<option value="2024">2024</option>
																			<option value="2025">2025</option>
																			<option value="2026">2026</option>
																			<option value="2027">2027</option>
																			<option value="2028">2028</option>
																			<option value="2029">2029</option>
																			<option value="2030">2030</option>
																			<option value="2031">2031</option>
																			<option value="2032">2032</option>
																			<option value="2033">2033</option>
																		</select>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
																	<span class="required">CVV</span>
																	<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="position-relative">
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
																	<!--end::Input-->
																	<!--begin::CVV icon-->
																	<div class="position-absolute translate-middle-y top-50 end-0 me-3">
																		<i class="ki-duotone ki-credit-cart fs-2hx">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::CVV icon-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-stack">
															<!--begin::Label-->
															<div class="me-5">
																<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
																<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
															</div>
															<!--end::Label-->
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
																<span class="form-check-label fw-semibold text-muted">Save Card</span>
															</label>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
															<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - New Card-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
							<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url()?>assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url()?>assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url()?>assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo base_url()?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/add-payment.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/adjust-balance.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/invoices.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/payment-method.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/payment-table.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/view/statement.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/customers/update.js"></script>
		<script src="<?php echo base_url()?>assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/utilities/modals/new-card.js"></script>
		<script src="<?php echo base_url()?>assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->