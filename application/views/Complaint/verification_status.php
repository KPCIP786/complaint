<?php $ss=$this->session->userdata('userid');
$city=$this->session->userdata('cityid');
 ?>

					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
                                 <div style="margin-bottom:3px;">
										 <a href="<?php echo base_url()?>Complaint/verification_status" class="btn btn-danger">Verification Status
                                       </a>
                                       <?php if($ss==1 || $ss==2 || $ss==3 || $ss==4 || $ss==5){?>
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
			<span class="card-label fw-bold text-gray-800">Pending Complaints
       <?php 
             if($ss==1 || $ss==2 || $ss==3){
              $count=$this->db->query("select count(complaint_detail_id) as cd,tier_id from gre_complaint_detail where tier_id=4")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }elseif($ss==13 || $ss==14){
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id,gcdd.tier_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=$city AND gcdd.user_id=uu.user_id And gcdd.tier_id=4 and gcdd.user_id=$ss")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }else{
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=$city AND gcdd.user_id=uu.user_id And gcdd.tier_id=4")->row();

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
				<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>									<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>							<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>							<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
							</g>
						</svg>
						</span>
						<!--end::Svg Icon-->
					</button>							<!--begin::Nav-->
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
						<!--begin::Table-->
						<table class="table table-bordered align-middle table-stripped">					<!--begin::Table head-->
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
			   if (($ss==1) || ($ss==2) || ($ss==3)){
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id  AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id")->result();
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
                        <td><button class="btn btn-danger">Pending</button> </td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        
        
        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>

       
                                                            </tr>
                                                        <?php
 $h++;
 }
}
  
                
                elseif($ss==13) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user As u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND gcd.user_id=$ss")->result();
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
                        
                        <td><button class="btn btn-danger">Pending</button></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        
        
        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>

       
                                                            </tr>
                                                        <?php
 $h++;
 }
}

        
              
              elseif($ss==14) {
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.tier_id=$ss")->result();
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
                        
                        <td><button class="btn btn-danger">Pending</button></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                        
        
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
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=4 AND gcd.status_id=1 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND u.user_id=gcd.user_id AND u.city_id=$city")->result();
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
                        
                        <td> 
                            <button class="btn btn-danger">Pending</button>
                        	<!--begin::Menu-->
                                                            <!-- <div class="me-0"> -->
                                                               <!--  <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                </button> -->
                                                                <!--begin::Menu 3-->
                                                                <!-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style=""> -->
                                                                    <!--begin::Heading-->
                                                                    <!-- <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Action</div>
                                                                    </div> -->
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <!-- <div class="menu-item px-3">
                                                                        <a href="<?php //echo base_url('Complaint/updt_tier/'.$item->complaint_detail_id)?>" class="menu-link px-3">Transter To Tier one</a>
                                                                    </div> -->
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <!-- <div class="menu-item px-3">
                                                                        <a href="<?php //echo base_url('Complaint/updt_status/'.$item->complaint_detail_id)?>" class="menu-link px-3">Resolved</a>
                                                                    </div> -->
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <!-- <div class="menu-item px-3">
                                                                        <a href="<?php //echo base_url('Complaint/cancel_s/'.$item->complaint_detail_id)?>" class="menu-link flex-stack px-3">Cancel
                                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
                                                                           
                                                                        </span></a>
                                                                    </div>
                                                                    <!-end::Menu item-->
                                                                <!-- </div> -->
                                                                <!--end::Menu 3-->
                                                            <!-- </div>  -->
                                                            <!--end::Menu--></td>
                        <td><?php echo $item->zone_name?></td>
                        <td><?php echo $item->uc_name?></td>
                        <td><?php echo $item->nc_name?></td>
                       
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
</tbody>														<!--end::Table body-->
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
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						








  