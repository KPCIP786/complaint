<?php
     $ss=$this->session->userdata('userid');
      $city=$this->session->userdata('cityid');
      $user_n=$this->session->userdata('username');
      $group=$this->session->userdata('groupid'); 
 ?><br>
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
											<h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Third Tier</h1>
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
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/complaint_detail/'.$aid)?>">Complaint Detail</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/complaint_timeline/'.$aid)?>">Complaint TimeLine</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="<?php echo base_url('Complaint/complaint_tierwise/'.$aid)?>">Complaint Tier Wise</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
                                                <li class="nav-item mt-2">
                                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="<?php echo base_url('Complaint/assign_complaint/'.$aid)?>">Assign Complaint</a>
                                                </li>
                                                <!--end::Nav item-->
											</ul>
											<!--begin::Navs-->
										</div>
									</div>
									<!--end::Navbar-->
					</div>
				</div>
				<?php 
				$result2 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.complaint_detail_id=$aid")->row();

				 ?>
                 <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                           
                          <div id="kt_app_content" class="app-content">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <div style="margin-bottom:3px;">
                                         
                                  <a href="<?php echo base_url('Complaint/first_tier/'.$aid)?>" class="btn btn-primary">Tier 1
                                       </a>
                                       <a href="<?php echo base_url('Complaint/second_tier/'.$aid)?>" class="btn btn-primary">Tier 2
                                       </a>
                                       <a href="<?php echo base_url('Complaint/third_tier/'.$aid)?>" class="btn btn-success">Tier 3
                                       </a>

                                       </div>
                                    <!--begin::Navbar-->
                                    <div class="card mb-6">
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

                                               <?php if($result2->status_id==2 && $ss ==1){ ?>
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
                                                                <a href="<?php echo base_url('Complaint/unresolved_tier3/'.$aid)?>" class="btn btn-sm btn-danger me-3" >
                                                                   Mark as inprogress
                                                                </a>
                                                            </div>
                                                            <!--end::Menu-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                          
                                                            
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>

                        <?php } if($result2->status_id!=2){ ?>
 
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
                                                                        <input type="hidden" name="tier_id" value="<?php echo $result2->tier_id ?>">
                                                                        <textarea rows="5" name="remarks" class="form-control form-control-solid" required></textarea>
                                                                        <label class=" fs-6 fw-semibold mt-2">File(Optional):</label>
                                                                        <input type="file" name="image" class="form-control form-control-solid" style="height: 41px;">
                                                                        <label class=" fs-6 fw-semibold mt-2">Resolved Date:</label>
                                                                        <input type="date" name="resolved_date" class="form-control form-control-solid" style="height: 41px;">
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
                                                                         <input type="hidden" name="tier_id" value="<?php echo $result2->tier_id ?>">
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
                                                <?php } ?>

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
                                                                <!--end::Stat-->
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
                                            
                                    <!--begin::Row-->
                                    <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                                        <!--begin::Followers-->
                                       <?php
                if($group=1){
                    $result5 = $this->db->query("SELECT u.city_id,u.user_id,g.user_id,g.complaint_detail_id FROM user as u,gre_complaint_detail as g where u.user_id=g.user_id AND g.complaint_detail_id=$aid")->row();
                    $result3 = $this->db->query("SELECT * FROM user as u where u.tier_id=3 AND u.city_id=$result5->city_id")->result();
                }else{
                $result3 = $this->db->query("SELECT * FROM user as u where u.tier_id=3 AND u.city_id=$city")->result();
            }
                 foreach($result3 as $result3){
                 ?>
                                       

                                        <!--begin::Col-->
                                        <div class="col-md-6 col-xxl-4">
                                            <!--begin::Card-->
                                            <div class="card">
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                                        <img src="<?php echo base_url()?>demo47/dist/assets/media/books/100.png" alt="image">
                                                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0"><?php echo $result3->name;?></a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="fw-semibold text-gray-400 mb-6"><?php echo $result3->user_name;?></div>
                                                    <!--end::Position-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-center flex-wrap mb-5">
                                                        <!--begin::Stats-->
                                                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                            <div class="fs-6 fw-bold text-gray-700"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where user_id=$result3->user_id")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                            <div class="fw-semibold text-gray-400">Total Complaints</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                        <!--begin::Stats-->
                                                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                                                            <div class="fs-6 fw-bold text-gray-700"><?php $doneResolved1=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where status_id=2 AND user_id=$result3->user_id")->row();
                                echo $doneResolved1->tot_resolved;
                                    ?></div>
                                                            <div class="fw-semibold text-gray-400">Resolved</div>
                                                        </div>
                                                        <!--end::Stats-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Follow-->
                                                    <form method="POST" action="<?php echo base_url('Complaint/insert_assign/'.$aid)?>">
                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                            <input type="hidden" name="user_id" value="<?php echo $result3->user_id;?>">
                                                            <input type="hidden" name="tier_id" value="<?php echo $result3->tier_id;?>">
                                                            <input type="hidden" name="complaint_detail_id" value="<?php echo $aid;?>">
                                                            <?php 
                                                        $result4=$this->db->query("SELECT * FROM gre_complaint_detail as gc where (gc.tier_id=1 or gc.tier_id=2 or gc.tier_id=3) And gc.user_id=$result3->user_id
                                                            AND gc.complaint_detail_id=$aid
                                                            ")->row();
                                                        if($result4){
                                                         ?>
                                                         <a href="#" class="btn btn-success">Assigned<i class="ki-duotone ki-check following fs-3"></i></a>
                                                    <?php  }
                                                    else{?>
                                                         <button class="btn btn-primary" name="add">Assign</button>
                                                       <?php }?>
                                                        </form>
                                                    <!--end::Follow-->
                                                </div>
                                                <!--begin::Card body-->
                                            </div>
                                            <!--begin::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <?php } ?>
                                        <!--end::Followers-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Show more-->
                                   <!--  <div class="d-flex flex-center">
                                        <button class="btn btn-primary" id="kt_followers_show_more_button"> -->
                                            <!--begin::Indicator label-->
                                            <!-- <span class="indicator-label">Show more</span> -->
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                           <!--  <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> -->
                                            <!--end::Indicator progress-->
                                       <!--  </button>
                                    </div> -->
                                    <!--end::Show more-->
                                </div>
                                <!--end::Content container-->
                            </div>
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
              <script type="text/javascript">
    setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>