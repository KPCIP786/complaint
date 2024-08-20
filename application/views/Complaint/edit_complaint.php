<?php $ss=$this->session->userdata('userid');
      $city=$this->session->userdata('cityid');    
 ?>

<?php $result1 = $this->db->query("SELECT ga.applicant_id,ga.applicant_name,ga.applicant_address,ga.applicant_cnic,ga.applicant_mobile,gcd.complaint_detail_id,gcd.complaint_date,gcd.complaint_category_id,gcc.cc_id,gcc.cc_name,gcd.complaint_detail,gcd.complaint_title,gcd.sub_project_id,ps.subproject_id,ps.subproject_name,ps.detail,gcd.source_id,s.source_name,gcd.zone_id,gzt.zone_name,gcd.uc_id,gut.uc_name,gcd.nc_id,gnt.nc_name FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,tehsil As th,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id AND gcd.complaint_detail_id=$aid")->row(); ?>
 
    <!-- gre_applicant.applicant_name,gre_applicant.applicant_address,gre_applicant.applicant_cnic,gre_applicant.applicant_mobile,gre_complaint_detail.complaint_date,gre_complaint_detail.cc_id,grm_complaint_category.cc_name,gre_complaint_detail.complaint_detail,gre_complaint_detail.complaint_title,gre_complaint_detail.tehsil_id,tehsil.tehsil_name,gre_complaint_detail.subproject_id,ppms_subproject.subproject_name,gre_complaint_detail.source_id,grm_source_tbl.source_name,gre_complaint_detail.zone_id,grc_zone_tbl.zone_name,gre_complaint_detail.uc_id,grm_uc_tbl.uc_name,gre_complaint_detail.nc_id,grm_nc_tbl.nc_name -->
				
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
                                
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
														<span class="card-label fw-bold text-gray-800">Edit Complaint</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
												
														<!--begin::Nav-->
															<div>
															   
															   	
															
															</div>
													  <!--end::Nav-->
															

															
												
												<!--end::Menu-->
											</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
                                               <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/complaint_update" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                                    <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
    <input type="hidden" autofocus placeholder=""  id="cc" class="form-control" name="applicant_id" value="<?php echo $result1->applicant_id; ?>" tabindex="1">
    <input type="hidden" autofocus placeholder=""  id="cc" class="form-control" name="complaint_detail_id" value="<?php echo $result1->complaint_detail_id; ?>" tabindex="1">

                                                    <table class="table gridexample">
                                                       <tr><h5 class="text-primary">Applicant info:</h5></tr>
                                                        <tr>
                                                            <td><label class="required fs-6 fw-semibold mb-2">Applicant Name :</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant name" 
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="applicant_name" tabindex="1" value="<?php echo $result1->applicant_name; ?>"></td>
                                                       
                                                            <td><label class="required fs-6 fw-semibold mb-2">Applicant Mobile:</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Mobile" 
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="applicant_mobile" tabindex="1" value="<?php echo $result1->applicant_mobile; ?>"></td>
                                                                  
                                                        </tr>
                                                        <tr>
                                                        	<td><label class="required fs-6 fw-semibold mb-2">Applicant Address :</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Address" 
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="applicant_address" tabindex="1" value="<?php echo $result1->applicant_address; ?>"></td>
                                                                    <td><label class="required fs-6 fw-semibold mb-2">Applicant CNIC :</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant CNIC" 
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="applicant_cnic" tabindex="1" value="<?php echo $result1->applicant_cnic; ?>"></td>
                                                        </tr>
                                                        <tr><td><h5 class="text-primary">Complaint info:</h5></td></tr>
                                                        <tr>
                                                            <td><label class="required fs-6 fw-semibold mb-2">Complaint 
                                                            Date:</label></td>
                                                            <td><input type="date" autofocus
                                                                    placeholder="" required
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="complaint_date" tabindex="1" value="<?php echo $result1->complaint_date; ?>"></td>
                                                        
                                                            <td><label class="required fs-6 fw-semibold mb-2">Complaint Category:</label></td>
                                                           <td>
                <select name="cc_id" class="form-control form-control-solid" style="height: 41px;">
                <option value="<?php echo $result1->cc_id;?>"><?php echo $result1->cc_name; ?></option>
                <option value="">Select Complaint Category</option>
        <?php $cc=$this->db->query("select * from grm_complaint_category")->result();
            foreach($cc as $cc){
            ?>
                                                                <option
                                                                    value="<?php echo $cc->cc_id;?>">
                                                                    <?php echo $cc->cc_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                        	<td><label class="required fs-6 fw-semibold mb-2">Complaint Detail:</label></td>
                                                            <td><textarea name="complaint_detail" class="form-control form-control-solid" value=""><?php echo $result1->complaint_detail;?></textarea></td>
                                                            
                                                            
                                                        <td><label class="required fs-6 fw-semibold mb-2">Complaint Title:</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Complaint Title" required
                                                                    id="cc" class="form-control form-control-solid"
                                                                    name="complaint_title" tabindex="1" value="<?php echo $result1->complaint_title;?>"></td>
                                                            
                                                        </tr>
                                                         <tr>
                                                            <td><label class="required fs-6 fw-semibold mb-2">Source:</label></td>
                                                           <td>
                <select name="source_id" class="form-control form-control-solid" style="height: 41px;">
                <option value="<?php echo $result1->source_id;?>"><?php echo $result1->source_name; ?></option>
                <option value="">Select Source</option>
        <?php $src=$this->db->query("select * from grm_source_tbl")->result();
            foreach($src as $src){
            ?>
                                                                <option
                                                                    value="<?php echo $src->source_id;?>">
                                                                    <?php echo $src->source_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        
                                                            
                                                        </tr>
                                                         <tr>
                                                        	<td><label for="ID1" class="required fs-6 fw-semibold mb-2">Subproject:</label></td>
                                                           <td colspan="4">
                <select name="subproject_id" class="form-control form-control-solid" id="ID1" style="height: 41px;">
                	 <option value="<?php echo $result1->subproject_id;?>"><?php echo $result1->subproject_name.'/'.$result1->detail; ?></option>
                <option value="" >Select SubProject</option>
        <?php $ps=$this->db->query("select * from ppms_subproject where city_id=$city")->result();
            foreach($ps as $ps){
            ?>
                                                                <option
                                                                    value="<?php echo $ps->subproject_id;?>">
                                                                    <?php echo $ps->subproject_name.'/'.$ps->detail;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                       </tr>
                                                       <tr>
                                                           <td><label class="required fs-6 fw-semibold mb-2">NC:</label></td>
                                                             <td>
        <select name="nc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_uc_new(this.value)">
        	 <option value="<?php echo $result1->nc_id;?>"><?php echo $result1->nc_name; ?></option>
                                              <option>Select NC</option>
                                                                <?php $nc=$this->db->query("select * from grm_nc_tbl where city_id=$city")->result();
                                               foreach($nc as $nc){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $nc->nc_id;?>">
                                                                    <?php echo $nc->nc_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                            <td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>
                                                             <td>
     <select name="uc_id" id="uc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_zone_new(this.value)">
     	 <option value="<?php echo $result1->uc_id;?>"><?php echo $result1->uc_name; ?></option>
                                              <option>Select UC</option>
                                                               
                                                            </select>
                                                             </td>
                                                         </tr>
                                                             <tr>
                                                             	
                                                            <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>
                                                             <td>
                        <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;">
                        	 <option value="<?php echo $result1->zone_id;?>"><?php echo $result1->zone_name; ?></option>
                                              <option>Select Zone</option>
                                                                
                                                            </select>
                                                             </td>  
                                                             <td><label class="required fs-6 fw-semibold mb-2">File:</label></td>
                                                             <td>
                                                                <input type="file" name="files[]" class="form-control form-control-solid" style="height: 41px;" multiple>
                                                                <?php foreach ($result2 as $result2) {?>
     <img src="<?php echo base_url('img/')?><?php echo $result2->file; ?>" height="30px">
                                                                <?php } ?>
                                                                
                     
                                                             </td>
                                                             </tr>
                                                         
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                       
                                                    </table>
                                                </form>
                                            </div>											</div>
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
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
   function get_uc_new(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Welcome/get_uc_new')?>",
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