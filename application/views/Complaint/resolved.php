<?php $ss=$this->session->userdata('userid');
$group=$this->session->userdata('groupid');
$city=$this->session->userdata('cityid');
$tierid=$this->session->userdata('tierid');
 ?>

			
			<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Resolved Complaints</span>
			<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
				</h3>
													<!--end::Title-->
													
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-bordered align-middle table-stripped">
															<!--begin::Table head-->
															<thead>
															<tr>
                                                            <th>Complaint ID</th>
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
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as u,city as c,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.status_id=2 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=c.city_id order BY gcd.complaint_detail_id DESC")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                       <td><?php
$city_nameee = $item->city_name;
preg_match_all('/(?<=\b)\w/iu',$city_nameee,$matches);
$firstLetters=mb_strtoupper(implode('',$matches[0]));

                         echo $firstLetters."-".$item->complaint_detail_id;?></td>
                         <!-- <td><a href="<?php //echo base_url()?>Complaint/applicant_detail/<?php //echo $item->complaint_detail_id;?>" class="text-dark"><?php //echo $item->applicant_name?></a></td>
                        <td><?php //echo $item->applicant_mobile?></td> -->
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->subproject_name?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->detail?></a></td>
                        <td><a href="<?php echo base_url()?>Complaint/applicant_detail/<?php echo $item->complaint_detail_id;?>" class="text-dark"><?php echo $item->complaint_date?></a></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->city_name?></td>
                        <td><?php echo $item->tier_name?></span></td>
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
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS u,city as c,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.status_id=2 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=u.user_id AND u.city_id=$city AND u.city_id=c.city_id order BY gcd.complaint_detail_id DESC")->result();
                  
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                       <td><?php
$city_nameee = $item->city_name;
preg_match_all('/(?<=\b)\w/iu',$city_nameee,$matches);
$firstLetters=mb_strtoupper(implode('',$matches[0]));

                         echo $firstLetters."-".$item->complaint_detail_id;?></td>
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
  ?>				</tbody>
															<!--end::Table body-->
														</table>
													</div>
													<!--end::Table-->
											



    