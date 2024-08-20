<?php $user_n=$this->session->userdata('username'); 
$groupp=$this->session->userdata('groupid');?><br>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar mt-lg-0 mt-lg-n5 pt-4 pt-lg-0 pb-2 pb-lg-2">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center me-3">
											<!--begin::Title-->
											<h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Complaint Time Line</h1>
											<!--end::Title-->

										</div>
										<!--end::Page title-->
										
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Navbar-->
									<div class="card mb-3">
										<div class="card-body pt-1 pb-0">

											<!--begin::Navs-->
											<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item mt-2">
                                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/applicant_detail/'.$aid)?>">Applicant Detail</a>
                                                </li>
                                                <!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 " href="<?php echo base_url('Complaint/complaint_detail/'.$aid)?>">Complaint Detail</a>
												</li>
												<!--end::Nav item-->

												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?php echo base_url('Complaint/complaint_timeline/'.$aid)?>">Complaint TimeLine</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/complaint_tierwise/'.$aid)?>">Complaint Tier Wise</a>
												</li>
												<!--end::Nav item-->
												<?php if($groupp==2 || $groupp==1){ ?>
                                                <!--begin::Nav item-->
                                                <li class="nav-item mt-2">
                                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/assign_complaint/'.$aid)?>">Assign Complaint</a>
                                                </li>
                                                <!--end::Nav item-->
                                            <?php }
                                            else{
                                                
                                            } ?>
											</ul>
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
					</div>
				</div>
				<?php 
				$result2 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.complaint_detail_id=$aid")->row();?>

				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                           
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                           <!--begin::Navbar-->
                                    <div class="card mb-5 mb-xl-10">
                                        <div class="card-body pt-9 pb-0">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                                <!--begin: Pic-->
                                                <div class="me-7 mb-4">
                                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                        <img src="<?php echo base_url()?>demo47/dist/assets/media/books/100.png" alt="image">
                                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                                    </div>
                                                </div>
                                                <!--end::Pic-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1">
                                                    <!--begin::Title-->
                                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Name-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo $result2->applicant_name;?></a>
                                                                <a href="#">
                                                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </a>
                                                            </div>
                                                            <!--end::Name-->
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                                <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>Complainant</a>
                                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                                <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>SF, Bay Area</a>
                                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                                <i class="ki-duotone ki-sms fs-4">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i><?php echo $user_n; ?></a>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex my-4">
                                                          <a href="#" class="btn btn-sm btn-warning me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal"><?php
                        
                                     echo $result2->status_name;
                        ?></a>

                                                <!--begin::Menu-->
                                                            <div class="card-toolbar">
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-category fs-6 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px pb-15" data-kt-menu="true">
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
                                                                <!--begin::Menu-->
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-primary me-3" data-kt-menu-trigger="click">
                                                                   Mark as Resolved
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3 px-2" data-kt-menu="true" style="">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content pb-2 px-3 fs-7"><label class="required fs-6 fw-semibold mb-2">Remarks:</label></div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <form method="POST" action="<?php echo base_url('Complaint/up_status/'.$aid)?>">
                                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                                        <textarea rows="5" name="remarks" class="form-control form-control-solid" required></textarea>
                                                                        <label class=" fs-6 fw-semibold mt-2">File(Optional):</label>
                                                                        <input type="file" name="image" class="form-control form-control-solid" style="height: 41px;">
                                                                        <button class="btn btn-sm btn-primary mx-2 my-2" name="submit" class="form-control">Resolved</button>
                                                                    </form>
                                                                    
                                                                    
                                                                    <!--end::Menu item-->

                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <!--begin::Menu-->
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-danger me-3" data-kt-menu-trigger="click">
                                                                    Mark as Cancel
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3 px-2" data-kt-menu="true" style="">
                                                                     <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content pb-2 px-3 fs-7"><label class="required fs-6 fw-semibold mb-2">Remarks:</label></div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <form method="POST" action="<?php echo base_url('Complaint/cancel/'.$aid)?>">
                                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                                        <textarea rows="5" name="remarks" class="form-control form-control-solid" required></textarea>
                                                                        <button class="btn btn-sm btn-danger mx-2 my-2" name="submit" class="form-control">Cancel</button>
                                                                    </form>
                                                                    
                                                                    
                                                                    <!--end::Menu item-->

                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>

                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex flex-wrap flex-stack">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                                            <!--begin::Stats-->
                                                            <div class="d-flex flex-wrap">
                                                                <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Total Complaints</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where status_id=1 AND complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Inprogress</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where status_id=2 AND complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Resolved</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                
                                                                   
                                                                    <!--begin::Label-->
                                                                    <a class="border border-gray-300 border-dashed rounded min-w-125px py-8 px-7 me-6 mb-3"
                                                                    href="#" 
                                                                    data-kt-menu-trigger="click">Attachment</a>
                                                                    <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3 px-2" data-kt-menu="true" style="">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item ">
                                                                        <div class="menu-content  px-3 fs-7"></div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <form method="POST" action="<?php echo base_url('Complaint/insert_attachment/'.$aid)?>" enctype="multipart/form-data">
                                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                                        <label class="required fs-6 fw-semibold ">title:</label>
                                                                        <input type="text" name="grm_title" class="form-control form-control-solid">
                                                                        <label class="required fs-6 fw-semibold ">Remarks:</label>
                                                                        <textarea rows="5" name="grm_remarks" class="form-control form-control-solid" required></textarea>
                                                                        <label class=" fs-6 fw-semibold mt-2">File(Optional):</label>
                                                                        <input type="file" name="grm_image" class="form-control form-control-solid" style="height: 41px;">
                                                                        <button class="btn btn-sm btn-primary mx-2 my-2" name="submit" class="form-control">Submit</button>
                                                                    </form>
                                                                    
                                                                    
                                                                    <!--end::Menu item-->

                                                                </div>
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            
                                    <!--begin::details View-->
                                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                        <!--begin::Card header-->
                                        <div class="card-header cursor-pointer">
                                            <!--begin::Card title-->
                                            <div class="card-title m-0">
                                                <h3 class="fw-bold m-0">Complaint Time Line</h3>
                                            </div>
                                            <!--end::Card title-->
                                            
                                        </div>
                                        <!--begin::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body p-9">
                                            <!--begin::Row-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-semibold text-muted"><strong style="color:#5E9DC8;">Created By:</strong> </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <span class="fw-bold fs-6 text-gray-800"><?php echo $result2->applicant_name;?></span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-semibold text-muted"><strong style="color:#5E9DC8;">Created Date:</strong> </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                    <span class="fw-semibold text-gray-800 fs-6"><?php echo $result2->complaint_date;?> </span>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-semibold text-muted"><strong style="color:#5E9DC8;">Status: </strong>
                                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span></label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 d-flex align-items-center">
                                                    <span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $result2->status_name;?></span>
                                                    
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-7">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 fw-semibold text-muted"><strong style="color:#5E9DC8;">Resolved By:</strong><br><br></label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php //echo $result2->applicant_address;?> </a>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                                        <div class="fs-6 text-gray-700">Your Complaint has been resgistered. For more info, please
                                                        <a class="fw-bold" href="#">Contact With Our Support Team</a>.</div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::details View-->
                                                           
                                   
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                       
                    </div>
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
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
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