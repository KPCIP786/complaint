<?php $ss=$this->session->userdata('userid'); ?>

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
									<a class="menu-link" href="<?php echo base_url()?>Complaint/dashboard">
										<span class="menu-icon">
											<i class="fa fa-tachometer" aria-hidden="true"></i>
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
                                <!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?php echo base_url()?>Complaint/home">
										<span class="menu-icon">
											<i class="fa fa-folder-open"></i>
										</span>
										<span class="menu-title">Complaints</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
                                <!--begin:Menu item-->
                                <?php if($ss==1){ ?>
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="<?php echo base_url()?>Complaint/user_management">
										<span class="menu-icon">
											<i class="fa fa-users"></i>
										</span>
										<span class="menu-title">User</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->

								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<i class="fa fa-cogs"></i>
										</span>
										<span class="menu-title">Setting</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_zone">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Zone</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_tier">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Tier</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_status">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Status</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_complaint_category">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Category</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_uc">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View UC</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_nc">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View NC</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="<?php echo base_url()?>Complaint/view_source">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">View Source</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										
									</div>
									<!--end:Menu sub-->
								</div>
								<?php } ?>
								
							</div>
							<!--end::Primary menu-->
						</div>
						<!--end::Sidebar wrapper-->
					</div>
					<!--end::Sidebar-->