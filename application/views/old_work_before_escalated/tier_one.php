<?php 
$ss=$this->session->userdata('userid');
$city=$this->session->userdata('cityid');
$tierid=$this->session->userdata('tierid');
$group = $this->session->userdata('groupid');
 ?>

					
				<h3 class="card-title align-items-start flex-column">
			<span class="card-label fw-bold text-gray-800">Complaints List Tier one
          <?php 
             if($group == 1){
              $count=$this->db->query("select count(complaint_detail_id) as cd,tier_id from gre_complaint_detail where tier_id=1")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }else{
             $count=$this->db->query("select count(gcdd.complaint_detail_id) as cd,uu.user_id,uu.city_id,gcdd.tier_id,gcdd.user_id from gre_complaint_detail as gcdd,user as uu where uu.city_id=$city AND gcdd.user_id=uu.user_id And gcdd.tier_id=1")->row();

                                                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."Total=".$count->cd;
                                                    }
                          ?>
			</span>
			<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
					</h3>
						<!--end::Title-->
						
								<!--end::Header-->
								<!--begin::Body-->
											
							
						<!--begin::Table container-->
						<div class="table-responsive">
						<!--begin::Table-->
						<table class="table table-bordered align-middle table-stripped">					<!--begin::Table head-->
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
			   if ($group == 1){
			   	$h=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user as un,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id  AND gcd.user_id=un.user_id AND un.city_id=c.city_id")->result();
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
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,user AS un,grm_complaint_category AS gcc,gre_complaint_detail AS gcd,grm_source_tbl AS s,ppms_subproject AS ps,grm_tier_tbl AS t,grc_status_tbl AS gs,grc_zone_tbl AS gzt,grm_uc_tbl AS gut,grm_nc_tbl AS gnt,city as c WHERE ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.tier_id=t.tier_id AND 
                  	  gcd.tier_id=1 AND gs.status_id=gcd.status_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.user_id=un.user_id AND un.city_id=$city AND un.city_id=c.city_id")->result();
                  
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
</tbody>														<!--end::Table body-->
		</table>
		</div>
		<!--end::Table-->
					

						<!--Begin Code for Tier Updation through date -->
  <?php 
    $result3 = $this->db->query("SELECT complaint_date FROM gre_complaint_detail where tier_id=1")->row();
    $result4 = $this->db->query("SELECT tier_days FROM grm_tier_tbl where tier_id=1")->row();
  $Date2 = date('Y-m-d', strtotime($result3->complaint_date . " + $result4->tier_days day"));
  $Date3 = date('Y-m-d', strtotime($Date2 . " - 10 day"));
 //echo '<br>'.date('Y-m-d').'<br>';
 //echo $Date2.'<br>';
$tdateeee=date('Y-m-d');
$datetime1 = new DateTime($Date2);
$datetime2 = new DateTime($tdateeee);
//echo '<hr>';
$interval=$datetime1->diff($datetime2);
//echo $interval->format('%a').'<br>';
$woweekends = 0;
for($i=1; $i<=$interval->d; $i++){
   $datetime2->modify('+1 day');
  $weekday = $datetime2->format('w');
  //echo "zzz".$weekday."YYY";
   if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
       $woweekends++;
       //echo '<br>'.$woweekends;
   }
}
if($woweekends<=0){
    $update = $this->db->query("update gre_complaint_detail set tier_id=2 where tier_id=1 AND complaint_date='$Date3'");
}
     ?>

<!-- End Code for Tier Updation through date -->






  