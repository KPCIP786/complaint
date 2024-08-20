

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
						<!--begin::Sidebar wrapper-->
						<div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y mx-2 my-4" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-offset="5px">
							<!--begin::Primary menu-->
							<div id="kt_app_sidebar_menu" class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 px-2" data-kt-menu="true">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link active" href="<?php echo base_url()?>Complaint/dashboard">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
									<!--end:Menu link-->
								</div>
									<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link active" href="<?php echo base_url()?>Complaint/home">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">All Complaints</span>
									</a>
									<!--end:Menu link-->
								</div>
									
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link active" href="<?php echo base_url()?>Complaint/report">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Report</span>
									</a>
									<!--end:Menu link-->
								</div>

							</div>
							<!--end::Primary menu-->
						</div>
						<!--end::Sidebar wrapper-->
					</div>
					<!--end::Sidebar-->
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
														<span class="card-label fw-bold text-gray-800">Add New Complaint</span>
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
														<a href="#" class="menu-link px-3">Un Resolved</a>
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
<div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/complaint_insert" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
           
                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Applicant Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant name" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_name" tabindex="1"></td>
                                                        
                                                            <td>Applicant Address</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Address" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_address" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Mobile</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Mobile" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_mobile" tabindex="1"></td>
                                                        
                                                            <td>Applicant CNIC</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant CNIC" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_cnic" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complaint Date</td>
                                                            <td><input type="date" autofocus
                                                                    placeholder="" required
                                                                    id="cc" class="form-control"
                                                                    name="complaint_date" tabindex="1"></td>
                                                        
                                                            <td>Complaint Category</td>
                                                           <td>
                <select name="cc_id" class="form-control">
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
                                                            <td>Source</td>
                                                           <td>
                <select name="source_id" class="form-control">
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
                                                        
                                                            <td>SubProject</td>
                                                           <td>
                <select name="subproject_id" class="form-control">
                <option value="">Select SubProject</option>
        <?php $ps=$this->db->query("select * from ppms_subproject")->result();
            foreach($ps as $ps){
            ?>
                                                                <option
                                                                    value="<?php echo $ps->subproject_id;?>">
                                                                    <?php echo $ps->subproject_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                         <tr>
                                                            <td>Tehsil</td>
                                                             <td>
                                                                 <select name="tehsil_id" class="form-control">
                                              <option>Select Tehsil</option>
                                                                <?php $tehsil=$this->db->query("select * from tehsil")->result();
                                               foreach($tehsil as $tehsil){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $tehsil->tehsil_id;?>">
                                                                    <?php echo $tehsil->tehsil_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                        
                                                            <td>Complaint Title</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Complaint Title" required
                                                                    id="cc" class="form-control"
                                                                    name="complaint_title" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                        	
                                                            <td >Complaint Detail</td>
                                                            <td colspan="3"><textarea name="complaint_detail" class="form-control" ></textarea></td>
                                                         </tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                       
                                                    </table>
                                                </form>
                                            </div>												</div>
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
						