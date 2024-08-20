<?php $ss=$this->session->userdata('userid');

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
                                         <?php } ?>

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
														<span class="card-label fw-bold text-gray-800">Status</span>
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
                                                            <th>SerialNo </th>
                                                            <th>status Name</th>

                                                            <th>Edit</th>
                                                        </tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																 <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grc_status_tbl")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>


        <td><?php echo $item->status_name;?></td>

        <td><a href="<?php echo base_url()?>Complaint/edit_status/<?php echo $item->status_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        </tr>
                                                        <?php
 $i++;
 } ?>
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
														<span class="card-label fw-bold text-gray-800">Add Status</span>
														<!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
													</h3>
													<!--end::Title-->
												
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-6">
													                 <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td><label class="required fs-6 fw-semibold mb-2">Status Name</label></td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter status name" required
                                                                    id="status name" class="form-control form-control-solid"
                                                                    name="status name" tabindex="1"></td>
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



        
<?php 
	if(isset($_POST['add'])){
		extract($_POST);
	
	$done=$this->db->query("insert into grc_status_tbl set status_name='$status_name'");	
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
		$this->session->set_flashdata('msg','<i>'.'Record Saved Successfully!!'.'</i>');
	redirect(base_url('complaint/view_status',$data));
		}
	
	
	}
	
	
	
	?>
	<script type="text/javascript">
	setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>