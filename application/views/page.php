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
	<head><base href="../../"/>
		<title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
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
		<link rel="shortcut icon" href="<?php echo base_url()?>demo47/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="<?php echo base_url()?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="<?php echo base_url()?>demo47/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>demo47/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="false" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">

				</div>
				<!--end::Header-->
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
										<!--begin::Sidebar-->
										<div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">
											<!--begin::Sticky aside-->
											<div class="card card-flush mb-0" data-kt-sticky="false" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '100px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
												<!--begin::Aside content-->
												<div class="card-body">
													<!--begin::Button-->
													<a href="../../demo47/dist/apps/inbox/compose.html" class="btn btn-primary fw-bold w-100 mb-8">New Message</a>
													<!--end::Button-->
													<!--begin::Menu-->
													<div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Inbox-->
															<span class="menu-link active">
																<span class="menu-icon">
																	<i class="ki-duotone ki-sms fs-2 me-3">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-bold">Inbox</span>
																<span class="badge badge-light-success">3</span>
															</span>
															<!--end::Inbox-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Marked-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-abstract-23 fs-2 me-3">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-bold">Marked</span>
															</span>
															<!--end::Marked-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Draft-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-file fs-2 me-3">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-bold">Draft</span>
																<span class="badge badge-light-warning">5</span>
															</span>
															<!--end::Draft-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Sent-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-send fs-2 me-3">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-bold">Sent</span>
															</span>
															<!--end::Sent-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item">
															<!--begin::Trash-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-trash fs-2 me-3">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																		<span class="path5"></span>
																	</i>
																</span>
																<span class="menu-title fw-bold">Trash</span>
															</span>
															<!--end::Trash-->
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
													<!--begin::Menu-->
													<div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary">
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Custom work-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-abstract-8 fs-5 text-danger me-3 lh-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-semibold">Custom Work</span>
																<span class="badge badge-light-danger">6</span>
															</span>
															<!--end::Custom work-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::Partnership-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-abstract-8 fs-5 text-success me-3 lh-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-semibold">Partnership</span>
															</span>
															<!--end::Partnership-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item mb-3">
															<!--begin::In progress-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-abstract-8 fs-5 text-info me-3 lh-0">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
																<span class="menu-title fw-semibold">In Progress</span>
															</span>
															<!--end::In progress-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item">
															<!--begin::Add label-->
															<span class="menu-link">
																<span class="menu-icon">
																	<i class="ki-duotone ki-plus fs-2 me-3 lh-0"></i>
																</span>
																<span class="menu-title fw-semibold">Add Label</span>
															</span>
															<!--end::Add label-->
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</div>
												<!--end::Aside content-->
											</div>
											<!--end::Sticky aside-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
											<!--begin::Card-->
											<div class="card">
												<div class="card-header align-items-center py-5 gap-2 gap-md-5">
													<!--begin::Actions-->
													<div class="d-flex flex-wrap gap-2">
														<!--begin::Checkbox-->
														<div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_inbox_listing .form-check-input" value="1" />
														</div>
														<!--end::Checkbox-->
														<!--begin::Reload-->
														<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Reload">
															<i class="ki-duotone ki-arrows-circle fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
														<!--end::Reload-->
														<!--begin::Archive-->
														<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Archive">
															<i class="ki-duotone ki-sms fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
														<!--end::Archive-->
														<!--begin::Delete-->
														<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Delete">
															<i class="ki-duotone ki-trash fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
															</i>
														</a>
														<!--end::Delete-->
														<!--begin::Filter-->
														<div>
															<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
																<i class="ki-duotone ki-down fs-2"></i>
															</a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_all">All</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_read">Read</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_unread">Unread</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_starred">Starred</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_unstarred">Unstarred</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</div>
														<!--end::Filter-->
														<!--begin::Sort-->
														<span>
															<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Sort">
																<i class="ki-duotone ki-dots-square fs-3 m-0">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_newest">Newest</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_oldest">Oldest</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="filter_unread">Unread</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</span>
														<!--end::Sort-->
													</div>
													<!--end::Actions-->
													<!--begin::Actions-->
													<div class="d-flex align-items-center flex-wrap gap-2">
														<!--begin::Search-->
														<div class="d-flex align-items-center position-relative">
															<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<input type="text" data-kt-inbox-listing-filter="search" class="form-control form-control-sm form-control-solid mw-100 min-w-125px min-w-lg-150px min-w-xxl-200px ps-11" placeholder="Search inbox" />
														</div>
														<!--end::Search-->
														<!--begin::Toggle-->
														<a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
															<i class="ki-duotone ki-burger-menu-2 fs-3 m-0">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</a>
														<!--end::Toggle-->
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
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer py-2 py-lg-4">
							<!--begin::Footer container-->
							<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
		<!--begin::Javascript-->
		<script>var hostUrl = "<?php echo base_url()?>demo47/dist/assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo base_url()?>demo47/dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo base_url()?>demo47/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/apps/inbox/listing.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/widgets.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="<?php echo base_url()?>demo47/dist/assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	