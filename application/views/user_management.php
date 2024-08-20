<?php $ss=$this->session->userdata('userid');
      $cityid=$this->session->userdata('cityid');    
 ?>

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
                                         <?php }elseif($this->session->flashdata('msgr')) {?>
                                         	<div class="alert alert-danger border-0" role="alert" id="mydiv">
                                           <?php echo $this->session->flashdata('msgr'); ?>
                                         </div>
                                         <?php
                                        } ?>
									

									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-8">
											<!--begin::Table widget 14-->
											<div class="card card-flush h-md-100">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Users</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
												
											</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													<!--begin::Table container-->
													<div class="table-responsive">
                            
                            <table class="table table-bordered align-middle table-stripped">
                              <!--begin::Table head-->
                              <thead>
                              <tr>
                                                <th>Serial#</th>
                                                <th>Full name</th>
                                                <th>UserName</th>
                                                <th>Mobile</th>
                                                <th>Organization</th>
                                                <th>City</th>
                                                <th>NC</th>
                                                <th>UC</th>
                                                <th>Zone</th>
                                                <th>Tier</th>
                                                <th>Group</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                        </tr>
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody>
                                <?php $done=$this->db->query("select * from user as u,city as c,organization as o,grm_nc_tbl AS gnt,grm_uc_tbl AS gut,grc_zone_tbl AS gzt,grm_tier_tbl as t,grm_group as gg where u.uc_id=gut.uc_id AND u.zone_id=gzt.zone_id And u.nc_id=gnt.nc_id AND u.tier_id=t.tier_id AND u.city_id=c.city_id AND u.organization_id=o.organization_id AND u.group_id=gg.group_id

                                            ")->result();
                                            $i=1;
                                            foreach($done as $done){
                                            ?>
                                            <tr>
                                                 <td><?php echo $i;?></td>
                                                 <td><?php echo $done->name;?></td>
                                                <td><?php echo $done->user_name;?></td>
                                                <td><?php echo $done->mobile_no;?></td>
                                                <td><?php echo $done->organization_name; ?></td>
                                                <td><?php echo $done->city_name; ?></td>
                                                <td><?php echo $done->nc_name;?></td>
                                                <td><?php echo $done->uc_name;?></td>
                                                <td><?php echo $done->zone_name;?></td>
                                                <td><?php echo $done->tier_name;?></td>
                                                <td><?php echo $done->group_name;?></td>
                    
                       
                      <td align="center"><a href="<?php echo base_url('Complaint/edit_user/').$done->user_id?>" >
                       <img src="<?php echo base_url()?>img/edit.png" width="30px" height="30px"/> </button>
                      
                       </td>
                       <td align="center"><a href="<?php echo base_url('Complaint/delete_user/').$done->user_id?>" >
                       <img src="<?php echo base_url()?>img/delete.jpg" width="30px" height="30px"/> </button>
                      
                       </td>
          </tr>
  <?php
 $i++;
 }
?>
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
                                     
                                     <!--begin::Col-->
										<div class="col-xl-4">
											<!--begin::Table widget 14-->
											<div class="card card-flush">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Add User</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
													</h3>
													<!--end::Title-->
												
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													                 <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/insert_user" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                    <table class="table gridexample">
                                                    	<tr>
                                                           <td>
                                                           	<label class="required fs-6 fw-semibold mb-2">Fullname:</label></td>
                                                            <td>
                                                            	<input type="text" class="form-control form-control-solid" name="f_name">
                                                           </td>
                                                            </tr>
                                                        <tr>
                                                           <td>
                                                           	<label class="required fs-6 fw-semibold mb-2">Username:</label></td>
                                                            <td>
                                                            	<input type="email" class="form-control form-control-solid" name="email">
                                                           </td>
                                                            </tr>
                                                         <tr>
                                                         	<td><label class="required fs-6 fw-semibold mb-2">Password:</label></td>
                                                         	<td><input type="password" class="form-control form-control-solid" name="passwords"></td>
                                                         </tr>
                                                         <tr>
                                                           <td>
                                                            <label class="required fs-6 fw-semibold mb-2">Mobile:</label></td>
                                                            <td>
                                                              <input type="text" class="form-control form-control-solid" name="mobile">
                                                           </td>
                                                            </tr>
                                                         <tr>
                                                          <tr>
                                                                    <td><label class="required fs-6 fw-semibold mb-2">City:</label></td>
                                                             <td>
                       <select name="city_id" class="form-control form-control-solid" style="height: 41px;" onchange="get_nc_new(this.value)">
                                              <option>Select City</option>
                                                                <?php $city=$this->db->query("select * from city")->result();
                                               foreach($city as $city){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $city->city_id;?>">
                                                                    <?php echo $city->city_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                          <tr>
                                                                    <td><label class="required fs-6 fw-semibold mb-2">Organization:</label></td>
                                                             <td>
                                                                 <select name="organization_id" class="form-control form-control-solid" style="height: 41px;">
                                              <option>Select Organization</option>
                                                                <?php $organization=$this->db->query("select * from organization")->result();
                                               foreach($organization as $organization){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $organization->organization_id;?>">
                                                                    <?php echo $organization->organization_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                          <tr>
                                                           <td><label class="required fs-6 fw-semibold mb-2">NC:</label></td>
                                                             <td>
        <select name="nc_id" id="nc_id" class="form-control form-control-solid" style="height: 41px;" onchange="get_uc_new2(this.value)">
                                              <option>Select NC</option>
                                                              
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                            <td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>
                                                             <td>
     <select name="uc_id" id="uc_id" class="form-control form-control-solid" style="height: 41px;" onchange="get_zone_new(this.value)">
                                              <option>Select UC</option>
                                                               
                                                            </select>
                                                             </td>
                                                         </tr>
                                                             <tr>
                                                             	
                                                            <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>
                                                             <td>
                        <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;">
                                              <option>Select Zone</option>
                                                                
                                                            </select>
                                                             </td>  
                                                             
                                                             </tr>
                                                          <tr>
                                                   <td><label class="required fs-6 fw-semibold mb-2">Tier</label></td>
                                                             <td>
                    <select name="tier_id" id="tier_id" class="form-control form-control-solid" style="height: 41px;">
                                              <option>Select Tier</option>
                                                               <?php $tier=$this->db->query("select * from grm_tier_tbl")->result();
                                               foreach($tier as $tier){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $tier->tier_id;?>">
                                                                    <?php echo $tier->tier_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                   <td><label class="required fs-6 fw-semibold mb-2">Group</label></td>
                                                             <td>
                    <select name="group_id" id="group_id" class="form-control form-control-solid" style="height: 41px;">
                                              <option>Select Group</option>
                                                               <?php $group=$this->db->query("select * from grm_group")->result();
                                               foreach($group as $group){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $group->group_id;?>">
                                                                    <?php echo $group->group_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>

                                                            <td><button type="submit"
                                                                    class="btn btn-block  btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                       
                                                    </table>
                                                    
                                                </form>
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
<script type="text/javascript">
    setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>



<script>
   function get_nc_new(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Welcome/get_nc_new1')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#nc_id").html('<option value="">Select NC</option');
                        $("#nc_id").html(data);
                       

                    }
                }
                );
            }

</script>

<script>
   function get_uc_new2(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Welcome/get_uc_new2')?>",
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<script>
   function get_zone_new(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Welcome/get_zone_new')?>",
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


