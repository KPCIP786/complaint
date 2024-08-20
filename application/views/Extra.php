<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
								<?php if($this->session->flashdata('msg')){?>	
                                <div class="alert alert-primary border-0" role="alert" id="mydiv">
                                           <?php echo $this->session->flashdata('msg'); ?>
                                         </div>
                                         <?php } ?>

									<div style="margin-bottom:3px;">
										 <a href="<?php echo base_url()?>Complaint/verification_status" class="btn btn-danger">Verification Status
                                       </a>
                                       <?php if($group==2){?>
                                       	 <a href="<?php echo base_url()?>Complaint/tier_one" class="btn btn-primary">Tier 1
                                       </a>
                                       <a href="<?php echo base_url()?>Complaint/tier_two" class="btn btn-primary">Tier 2
                                       </a>
                                       <a href="<?php echo base_url()?>Complaint/tier_three" class="btn btn-primary">Tier 3
                                       </a>
                                       <?php } ?>
                                 

                                       </div>
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-12">
											<!--begin::Table widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800"><?php if($ss==13){
															echo "Tier 1 Complaints Kohat City";
														}elseif($ss==14){
															echo "Tier 2 Complaints Kohat City";
														}else{
															echo "All Complaints";
														}

													?>
														 <?php 
             if($ss==1 || $ss==2 || $ss==3){
             	$count=$this->db->query("select count(complaint_detail_id) as cd,tier_id from gre_complaint_detail where tier_id!=4")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }elseif($ss==13 || $ss==14){
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id,gcdd.tier_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=3 AND gcdd.user_id=uu.user_id And gcdd.tier_id=$tierid")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }else{
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=$city AND gcdd.user_id=uu.user_id AND gcdd.tier_id!=4")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }
													?>
													</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->

													</h3>
													<!--end::Title-->
													
													<!--begin::Toolbar-->
													<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												
												
														<!--begin::Nav-->
															<div> 	
															
															</div>
													  <!--end::Nav-->
															

														<a href="#" class="btn btn-primary" style="" data-bs-toggle="modal" data-bs-target="#myModal">Add Complaint</a>		
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
														<a href="<?php echo base_url()?>Complaint/progress" class="menu-link px-3" >Progress</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="<?php echo base_url()?>Complaint/resolved" class="menu-link px-3">Resolved</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="<?php echo base_url()?>Complaint/rejected" class="menu-link px-3">Rejected</a>
													</div>
													<!--end::Menu item-->
													
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
													<div class="table-responsive">
														<!-- <div class="dataTables_length" id="simpletable_length"><label>Show <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div> -->
														<!--begin::Table-->
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


               elseif(($ss==13)) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND t.tier_id=gcd.tier_id AND gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=3")->result();
                  
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
}elseif(($ss==14)) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=2 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=3")->result();
                  
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
  else {
			  	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 or gcd.tier_id=2 or gcd.tier_id=3) AND  gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=$city")->result();
                  
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
   <!-- modal -->

															</tbody>
															<!--end::Table body-->
														</table>
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





<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">

									<?php if($this->session->flashdata('msg')){?>   
                                <div class="alert alert-primary border-0" role="alert" id="mydiv">
                                           <?php echo $this->session->flashdata('msg'); ?>
                                         </div>
                                         <?php } ?>

                                         <div style="margin-bottom:3px;">
										 <a href="<?php echo base_url()?>Complaint/verification_status" class="btn btn-danger">Verification Status
                                       </a>
                                       <?php if($group==2){?>
                                       	 <a href="<?php echo base_url()?>Complaint/tier_one" class="btn btn-primary">Tier 1
                                       </a>
                                       <a href="<?php echo base_url()?>Complaint/tier_two" class="btn btn-primary">Tier 2
                                       </a>
                                       <a href="<?php echo base_url()?>Complaint/tier_three" class="btn btn-primary">Tier 3
                                       </a>
                                       <?php } ?>
                                 

                                       </div>
									<!--begin::Inbox App - Messages -->
									<div class="d-flex flex-column flex-lg-row">
										
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-3 ms-xl-0">
											<!--begin::Card-->
											<div class="card">
												<div class="card-header align-items-center py-5 gap-2 gap-md-5">
													<!--begin::Actions-->
													<div class="d-flex flex-wrap gap-2">
														<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800"><?php if($ss==13){
															echo "Tier 1 Complaints Kohat City";
														}elseif($ss==14){
															echo "Tier 2 Complaints Kohat City";
														}else{
															echo "All Complaints";
														}

													?>
														 <?php 
             if($ss==1 || $ss==2 || $ss==3){
             	$count=$this->db->query("select count(complaint_detail_id) as cd,tier_id from gre_complaint_detail where tier_id!=4")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }elseif($ss==13 || $ss==14){
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id,gcdd.tier_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=3 AND gcdd.user_id=uu.user_id And gcdd.tier_id=$tierid")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }else{
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=$city AND gcdd.user_id=uu.user_id AND gcdd.tier_id!=4")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }
													?>
													</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->

													</h3>
														
													</div>
													<!--end::Actions-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">

														<!--begin::Toolbar-->
													<div class="card-toolbar">
												<!--begin::Menu-->
												<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
													<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
																<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
																<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												
												
														<!--begin::Nav-->
															<div> 	
															
															</div>
													  <!--end::Nav-->
															

														<a href="#" class="btn btn-primary" style="" data-bs-toggle="modal" data-bs-target="#myModal">Add Complaint</a>		
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
														<a href="<?php echo base_url()?>Complaint/progress" class="menu-link px-3" >Progress</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="<?php echo base_url()?>Complaint/resolved" class="menu-link px-3">Resolved</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="<?php echo base_url()?>Complaint/rejected" class="menu-link px-3">Rejected</a>
													</div>
													<!--end::Menu item-->
													
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
														
													</div>
													<!--end::Actions-->
												</div>
												<div class="card-body pt-6">
													<!--begin::Table-->
													<table class="table table-bordered talble-responsive align-middle mb-2" id="kt_inbox_listing" >
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


               elseif(($ss==13)) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND t.tier_id=gcd.tier_id AND gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=3")->result();
                  
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
}elseif(($ss==14)) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=2 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=3")->result();
                  
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
  else {
			  	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 or gcd.tier_id=2 or gcd.tier_id=3) AND  gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=$city")->result();
                  
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
   <!-- modal -->

															</tbody>
															<!--end::Table body-->
														</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Inbox App - Messages -->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->



<!-- pagination with table -->
<!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                
                <!--begin::Wrapper-->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                    
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <!--begin::Inbox App - Messages -->
                                    <div class="d-flex flex-column flex-lg-row">
                                        
                                        <!--begin::Content-->
                                        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                                            <!--begin::Card-->
                                            <div class="card">
                                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <h3>All Complaints</h3>
                                                        
                                                    </div>
                                                    <!--end::Actions-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <button class="btn btn-primary">Add Complaint</button>
                                                        
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <div class="card-body p-0">
                                                    <!--begin::Table-->
                                                    <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
                                                        <thead class="d-none">
                                                            <tr>
                                                                <th>Checkbox</th>
                                                                <th>Actions</th>
                                                                <th>Author</th>
                                                                <th>Title</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-danger">
                                                                                <span class="text-danger">M</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Melody Macy</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Digital PPV Customer Confirmation</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Thank you for ordering UFC 240 Holloway vs Edgar Alternate camera angles...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-primary">inbox</div>
                                                                    <div class="badge badge-light-warning">task</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold">8:30 PM</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Max Smith</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Your iBuy.com grocery shopping confirmation</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Please make sure that you have one of the following cards with you when we deliver your order...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold">day ago</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Sean Bean</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Your Order #224820998666029 has been Confirmed</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Your Order #224820998666029 has been placed on Saturday, 29 June</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">11:20 PM</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-25.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Brian Cox</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Payment Notification DLOP2329KD</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Your payment of 4500USD to AirCar has been authorized and confirmed, thank you your account. This...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-danger">new</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">2 days ago</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-warning">
                                                                                <span class="text-warning">C</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Mikaela Collins</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Congratulations on your iRun Coach subscription</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Congratulations on your iRun Coach subscription. You made no space for excuses and you</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">July 25</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-9.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Francis Mitcham</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Pay bills & win up to 600$ Cashback!</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Congratulations on your iRun Coach subscription. You made no space for excuses and you decided on a healthier and happier life...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">July 24</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-danger">
                                                                                <span class="text-danger">O</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Olivia Wild</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Activate your LIPO Account today</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Thank you for creating a LIPO Account. Please click the link below to activate your account.</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-warning">task</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">July 13</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-primary">
                                                                                <span class="text-primary">N</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Neil Owen</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">About your request for PalmLake</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">What you requested can't be arranged ahead of time but PalmLake said they'll do their best to accommodate you upon arrival....</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">May 25</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-23.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Dan Wilson</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Welcome, Patty</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Discover interesting ideas and unique perspectives. Read, explore and follow your interests. Get personalized recommendations delivered to you....</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold">April 15</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-danger">
                                                                                <span class="text-danger">E</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Emma Bold</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Free Video Marketing Guide</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Video has rolled into every marketing platform or channel, leaving...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                    <!--begin::Badges-->
                                                                    <div class="badge badge-light-success">project</div>
                                                                    <!--end::Badges-->
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">April 3</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-12.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Ana Crown</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Your iBuy.com grocery shopping confirmation</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Please make sure that you have one of the following cards with you when we deliver your order...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">March 17</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <div class="symbol-label bg-light-info">
                                                                                <span class="text-info">A</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">Robert Doe</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Your Order #224820998666029 has been Confirmed</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Your Order #224820998666029 has been placed on Saturday, 07 March</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">March 12</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="ps-9">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                                    </div>
                                                                </td>
                                                                <td class="min-w-80px">
                                                                    <!--begin::Star-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Star">
                                                                        <i class="ki-duotone ki-star fs-3"></i>
                                                                    </a>
                                                                    <!--end::Star-->
                                                                    <!--begin::Important-->
                                                                    <a href="#" class="btn btn-icon btn-color-gray-400 btn-active-color-primary w-35px h-35px" data-bs-toggle="tooltip" data-bs-placement="right" title="Mark as important">
                                                                        <i class="ki-duotone ki-save-2 fs-4 mt-1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </a>
                                                                    <!--end::Important-->
                                                                </td>
                                                                <td class="w-150px w-md-175px">
                                                                    <a href="../../demo47/dist/apps/inbox/reply.html" class="d-flex align-items-center text-dark">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px me-3">
                                                                            <span class="symbol-label" style="background-image:url(assets/media/avatars/300-13.jpg)"></span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <span class="fw-semibold">John Miller</span>
                                                                        <!--end::Name-->
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="text-dark gap-1 pt-2">
                                                                        <!--begin::Heading-->
                                                                        <a href="../../demo47/dist/apps/inbox/reply.html" class="text-dark">
                                                                            <span class="fw-bold">Payment Notification DLOP2329KD</span>
                                                                            <span class="fw-bold d-none d-md-inine">-</span>
                                                                            <span class="d-none d-md-inine text-muted">Your payment of 4500USD to AirCar has been authorized and confirmed, thank you your account. This...</span>
                                                                        </a>
                                                                        <!--end::Heading-->
                                                                    </div>
                                                                </td>
                                                                <td class="w-100px text-end fs-7 pe-9">
                                                                    <span class="fw-semibold text-muted">March 11</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Inbox App - Messages -->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->

<!-- pagination with table -->



								











								<?php 
      if((empty($this->session->userdata('username')))){
     	redirect(base_url());
     }
      $ss=$this->session->userdata('userid');
      $se=$this->session->userdata('username');
      $emp=$this->session->userdata('name');
      $grp=$this->session->userdata('groupid');
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
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
	<head><base href=""/>
		<title>Complaint Management System</title>

        <meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?php echo base_url()?>img/logo.png"
             width="60px" height="60px"/>
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url()?>demo47/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url()?>demo47/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>demo47/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		 
		 <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?php echo base_url()?>assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url()?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url()?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" class="app-default" >
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
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
									<?php if($ss==1){ ?>
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
									<?php if($ss==1){ ?>
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
													<div class="px-4 py-2">
														<!--begin::Input group-->
														
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
														<h5><?php echo $se;?></h5><br>	
														<a href="<?php echo base_url()?>Complaint/logout" class="btn btn-primary">Sign Out</a>
															<!--end::Options-->
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



		