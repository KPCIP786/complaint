<?php $user_n=$this->session->userdata('username'); 
$groupp=$this->session->userdata('groupid');
?>

<br>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Toolbar-->
                            <div id="kt_app_toolbar" class="app-toolbar mt-lg-0 mt-lg-n5 pt-4 pt-lg-0 pb-4 pb-lg-8">
                                <!--begin::Toolbar container-->
                                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                                    <!--begin::Toolbar wrapper-->
                                    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                                        <!--begin::Page title-->
                                        <div class="page-title d-flex flex-column justify-content-center me-3">
                                            <!--begin::Title-->
                                            <h1 class="page-heading d-flex title-custom fw-bolder fs-2hx flex-column justify-content-center my-0">Meeting Minutes</h1>
                                            <!--end::Title-->

                                        </div>
                                        <!--end::Page title-->
                                        
                                    </div>
                                    <!--end::Toolbar wrapper-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->
                            
                <?php 
                $result2 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.complaint_detail_id=$aid")->row();
                $result_new = $this->db->query("SELECT * FROM grm_meeting_minutes_tbl as gm,grm_tier_tbl as t where t.tier_id=$result2->tier_id AND gm.complaint_id=$aid")->result();
?>
       <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                           
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                           <!--begin::Navbar-->
                                    <div class="card mb-5 mb-xl-10">
                                        <div class="card-body pt-9 pb-0">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                                <!--begin: Pic-->
                                                <div class="me-7 mb-4">
                                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                        <img src="<?php echo base_url()?>demo47/dist/assets/media/books/100.png" alt="image">
                                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                                    </div>
                                                </div>
                                                <!--end::Pic-->
                                                <!--begin::Info-->
                                                <div class="flex-grow-1">
                                                    <!--begin::Title-->
                                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                        <!--begin::User-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Name-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo $result2->applicant_name;?></a>
                                                                <a href="#">
                                                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </a>
                                                            </div>
                                                            <!--end::Name-->
                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                                <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>Complainant</a>

                                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                                <i class="ki-duotone ki-sms fs-4">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i><?php echo $user_n; ?></a>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::User-->
                                                       <!--begin::Actions-->
                                                        <div class="d-flex my-4">
                                                         <a href="#" class="btn btn-sm btn-warning me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal"><?php
                        
                                     echo $result2->status_name;
                        ?></a>

                                               <!--begin::Menu-->
                                                            <div class="card-toolbar">
                                                        <!--begin::Menu-->
                                                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            <i class="ki-duotone ki-category fs-6 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </button>
                                                        <!--begin::Menu 2-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px pb-15" data-kt-menu="true">
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
                                                                <!--begin::Menu-->
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-primary me-3" data-kt-menu-trigger="click">
                                                                   Mark as Resolved
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3 px-2" data-kt-menu="true" style="">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content pb-2 px-3 fs-7"><label class="required fs-6 fw-semibold mb-2">Remarks:</label></div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <form method="POST" action="<?php echo base_url('Complaint/up_status/'.$aid)?>">
                                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                                        <textarea rows="5" name="remarks" class="form-control form-control-solid" required></textarea>
                                                                        <label class=" fs-6 fw-semibold mt-2">File(Optional):</label>
                                                                        <input type="file" name="image" class="form-control form-control-solid" style="height: 41px;">
                                                                        <button class="btn btn-sm btn-primary mx-2 my-2" name="submit" class="form-control">Resolved</button>
                                                                    </form>
                                                                    
                                                                    
                                                                    <!--end::Menu item-->

                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <!--begin::Menu-->
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-danger me-3" data-kt-menu-trigger="click">
                                                                    Mark as Cancel
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-400px py-3 px-2" data-kt-menu="true" style="">
                                                                     <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content pb-2 px-3 fs-7"><label class="required fs-6 fw-semibold mb-2">Remarks:</label></div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <form method="POST" action="<?php echo base_url('Complaint/cancel/'.$aid)?>">
                                                                        <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                                        <textarea rows="5" name="remarks" class="form-control form-control-solid" required></textarea>
                                                                        <button class="btn btn-sm btn-danger mx-2 my-2" name="submit" class="form-control">Cancel</button>
                                                                    </form>
                                                                    
                                                                    
                                                                    <!--end::Menu item-->

                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            </div>
                                                            <!--end::Menu item-->
                                                            
                                                        </div>
                                                        <!--end::Menu 2-->
                                                        <!--end::Menu-->
                                                    </div>

                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex flex-wrap flex-stack">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                                            <!--begin::Stats-->
                                                            <div class="d-flex flex-wrap">
                                                             <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Total Complaints</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where status_id=1 AND complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Inprogress</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->
                                                                <!--begin::Stat-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                    <!--begin::Number-->
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1"><?php $doneResolved=$this->db->query("select count(*) as tot_resolved from gre_complaint_detail where status_id=2 AND complaint_detail_id=$aid")->row();
                                echo $doneResolved->tot_resolved;
                                    ?></div>
                                                                    </div>
                                                                    <!--end::Number-->
                                                                    <!--begin::Label-->
                                                                    <div class="fw-semibold fs-6 text-gray-400">Resolved</div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Stat-->

                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                        
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Details-->
                                            
                                    
                                <!--begin::details View-->
                                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                        <!--begin::Card header-->
                                       
                                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                                    <!--begin::Actions-->
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <h3 class="fw-bold m-0">Meeting Minutes</h3>
                                                        
                                                    </div>
                                                    <!--end::Actions-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex align-items-center flex-wrap gap-2">
                                                        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal">Add Meeting Mintues</button>
                                                        
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                        <!--begin::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body p-9">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th align="center">Subject</th>
                                                    <th align="center">Date</th>
                                                    <th align="center">Discussion</th>
                                                    <th align="center">Decision</th>
                                                    <th align="center">Tier</th>
                                                    <th align="center">file</th>
                                                </tr>
                                                <?php 
                                                   
                                                    $i=0; 
                                                    foreach($result_new as $res){?>
                                                    <tr>
                                                    <td align="center"><?php echo $res->mm_subject ?></td>
                                                    <td align="center"><?php echo $res->mm_date ?></td>
                                                    <td align="center"><?php echo $res->mm_discussion ?></td>
                                                    <td align="center"><?php echo $res->mm_decision ?></td>
                                                    <td align="center"><?php echo $res->tier_name ?></td>
                                                    <td align="center">
                                                    <?php $file = $this->db->query("SELECT * FROM grm_meeting_minutes_tbl as gmmt,grm_mm_document as gmd where gmmt.mm_id=gmd.mm_id AND gmd.mm_id=$res->mm_id AND gmmt.complaint_id=$aid")->result();
                                                    $f=0;
                                                     foreach($file as $fff){?>
    <a href="<?php echo base_url()?>img/meeting_minutes/<?php echo $fff->mm_file;?>">
        <img src="<?php echo base_url()?>img/down.jpg" width="30px" height="30px" />
    </a>
<?php } $f++; ?>
                                                    </td>
                                                    </tr>
                                                    <?php }
                                                     $i++;
                                                    ?>
                                                
                                            </table>
                                            
                                            
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::details View-->
                                   
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                       
                    </div>

            
             
 <!-- The Modal -->
<div class="modal" id="myModal">
 <!--begin::Modal dialog-->

        <div class="modal-dialog modal-xl">

            <!--begin::Modal content-->

            <div class="modal-content modal-rounded">

                <!--begin::Modal header-->

                <div class="modal-header">

                    <!--begin::Modal title-->

                    <h2>Add Meeting Minutes</h2>

                    <!--end::Modal title-->

                    <!--begin::Close-->

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                        <i class="ki-duotone ki-cross fs-1">

                            <span class="path1"></span>

                            <span class="path2"></span>

                        </i>

                    </div>

                    <!--end::Close-->

                </div>

                <!--begin::Modal header-->

                <!--begin::Modal body-->

                <div class="modal-body scroll-y">

                    <!--begin::Stepper-->

                   

                    <!--begin::Form-->
        <form class="mx-auto" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form" method="POST" action="<?php echo base_url('Complaint/insert_meeting_minutes')?>" enctype="multipart/form-data">
            <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                <input type="hidden" name="complaint_id" value="<?php echo $result2->complaint_detail_id ?>" />
                <input type="hidden" name="tier_id" value="<?php echo $result2->tier_id ?>" />
                                        <!--begin::Input group-->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Subject:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="subject" placeholder="" value="" required="" />
                                            <!--end::Input-->
                                            </div>
                                            <div class="col-lg-6">
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Date:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="date" class="form-control form-control-lg form-control-solid" name="date" placeholder="" value="" required="" />
                                            <!--end::Input-->
                                            </div>
                                               
                                            <div class="col-lg-12">
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Discussion:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea id="to" class="form-control form-control-lg form-control-solid" name="discussion" required=""></textarea>
                                        
                                            <!--end::Input-->
                                            </div>

                                            <div class="col-lg-12">
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Decision:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <textarea id="too" class="form-control form-control-lg form-control-solid" name="decision" required=""></textarea>
                                            <!--end::Input-->
                                            </div>
                                            <div class="col-lg-12">
                                               <table class="table align-middle table-stripped" id="myTable">
                                                <tr>
                                              <td>
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Participant:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="mmp_participant[]" placeholder="" value="" required="" />
                                            <!--end::Input-->
                                            </td>
                                              <td>
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Designation:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="mmp_designation[]" placeholder="" value="" required="" />
                                            <!--end::Input-->
                                            </td>
                                            <td class="pt-12">
                                            <img src="<?php echo base_url('img/plus.png')?>" width="45px" height="45px" onClick="add_new_row()">
                                            </td>
                                            </tr>  
                                            </table> 
                                            </div>
                                       
                                            <div class="col-lg-12">
                                                <!--begin::Label-->
                                            <label class="required form-label mb-3">Upload Files:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" name="files[]"class="form-control form-control-lg form-control-solid" multiple >
                                            <!--end::Input-->
                                            </div> 
                                            
                                        </div>
                                        <!--end::Input group-->
                                        
                                        
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 1-->
                                                                
                                
                                
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-3">
                                    
                                    
                                        <button class="btn btn-lg btn-primary" name="submit">Submit
</button>
                                    </div>
                                    <!--end::Wrapper-->
                           
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->

                                                </div>

                    <!--end::Stepper-->

                </div>

                <!--begin::Modal body-->

            </div>

        </div>
  </div>



<!-- /modal 2 --> 

              <!-- CKeditor -->

<!-- discussion  -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
    <script>
// This sample still does not showcase all CKEditor 5 features (!)
// Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
CKEDITOR.ClassicEditor.create(document.getElementById("to"), {
    // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
    toolbar: {
        items: [
            'exportPDF', 'exportWord', '|',
            'findAndReplace', 'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
            'textPartLanguage', '|',
            'sourceEditing'
        ],
        shouldNotGroupWhenFull: true
    },
    // Changing the language of the interface requires loading the language file using the <script> tag.
    // language: 'es',
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
    heading: {
        options: [{
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
            },
            {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
            },
            {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            },
            {
                model: 'heading3',
                view: 'h3',
                title: 'Heading 3',
                class: 'ck-heading_heading3'
            },
            {
                model: 'heading4',
                view: 'h4',
                title: 'Heading 4',
                class: 'ck-heading_heading4'
            },
            {
                model: 'heading5',
                view: 'h5',
                title: 'Heading 5',
                class: 'ck-heading_heading5'
            },
            {
                model: 'heading6',
                view: 'h6',
                title: 'Heading 6',
                class: 'ck-heading_heading6'
            }
        ]
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
    placeholder: 'Please Write Here',
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
    fontFamily: {
        options: [
            'default',
            'Arial, Helvetica, sans-serif',
            'Courier New, Courier, monospace',
            'Georgia, serif',
            'Lucida Sans Unicode, Lucida Grande, sans-serif',
            'Tahoma, Geneva, sans-serif',
            'Times New Roman, Times, serif',
            'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
    fontSize: {
        options: [10, 12, 14, 'default', 18, 20, 22],
        supportAllValues: true
    },
    // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
    // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
    htmlSupport: {
        allow: [{
            name: /.*/,
            attributes: true,
            classes: true,
            styles: true
        }]
    },
    // Be careful with enabling previews
    // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
    htmlEmbed: {
        showPreviews: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
    link: {
        decorators: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
    mention: {
        feeds: [{
            marker: '@',
            feed: [
                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate',
                '@cookie', '@cotton', '@cream',
                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi',
                '@ice', '@jelly-o',
                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                '@sesame', '@snaps', '@soufflé',
                '@sugar', '@sweet', '@topping', '@wafer'
            ],
            minimumCharacters: 1
        }]
    },
    // The "super-build" contains more premium features that require additional configuration, disable them below.
    // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
    removePlugins: [
        // These two are commercial, but you can try them out without registering to a trial.
        // 'ExportPdf',
        // 'ExportWord',
        'CKBox',
        'CKFinder',
        'EasyImage',
        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
        // Storing images as Base64 is usually a very bad idea.
        // Replace it on production website with other solutions:
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
        // 'Base64UploadAdapter',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
        // from a local file system (file://) - load this site via HTTP server if you enable MathType
        'MathType'
    ]
});
    </script>


<!-- decision  -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
    <script>
// This sample still does not showcase all CKEditor 5 features (!)
// Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
CKEDITOR.ClassicEditor.create(document.getElementById("too"), {
    // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
    toolbar: {
        items: [
            'exportPDF', 'exportWord', '|',
            'findAndReplace', 'selectAll', '|',
            'heading', '|',
            'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
            'removeFormat', '|',
            'bulletedList', 'numberedList', 'todoList', '|',
            'outdent', 'indent', '|',
            'undo', 'redo',
            '-',
            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
            'alignment', '|',
            'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
            'specialCharacters', 'horizontalLine', 'pageBreak', '|',
            'textPartLanguage', '|',
            'sourceEditing'
        ],
        shouldNotGroupWhenFull: true
    },
    // Changing the language of the interface requires loading the language file using the <script> tag.
    // language: 'es',
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
    heading: {
        options: [{
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
            },
            {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'ck-heading_heading1'
            },
            {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'ck-heading_heading2'
            },
            {
                model: 'heading3',
                view: 'h3',
                title: 'Heading 3',
                class: 'ck-heading_heading3'
            },
            {
                model: 'heading4',
                view: 'h4',
                title: 'Heading 4',
                class: 'ck-heading_heading4'
            },
            {
                model: 'heading5',
                view: 'h5',
                title: 'Heading 5',
                class: 'ck-heading_heading5'
            },
            {
                model: 'heading6',
                view: 'h6',
                title: 'Heading 6',
                class: 'ck-heading_heading6'
            }
        ]
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
    placeholder: 'Please Write Here',
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
    fontFamily: {
        options: [
            'default',
            'Arial, Helvetica, sans-serif',
            'Courier New, Courier, monospace',
            'Georgia, serif',
            'Lucida Sans Unicode, Lucida Grande, sans-serif',
            'Tahoma, Geneva, sans-serif',
            'Times New Roman, Times, serif',
            'Trebuchet MS, Helvetica, sans-serif',
            'Verdana, Geneva, sans-serif'
        ],
        supportAllValues: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
    fontSize: {
        options: [10, 12, 14, 'default', 18, 20, 22],
        supportAllValues: true
    },
    // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
    // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
    htmlSupport: {
        allow: [{
            name: /.*/,
            attributes: true,
            classes: true,
            styles: true
        }]
    },
    // Be careful with enabling previews
    // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
    htmlEmbed: {
        showPreviews: true
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
    link: {
        decorators: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
    mention: {
        feeds: [{
            marker: '@',
            feed: [
                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate',
                '@cookie', '@cotton', '@cream',
                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi',
                '@ice', '@jelly-o',
                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                '@sesame', '@snaps', '@soufflé',
                '@sugar', '@sweet', '@topping', '@wafer'
            ],
            minimumCharacters: 1
        }]
    },
    // The "super-build" contains more premium features that require additional configuration, disable them below.
    // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
    removePlugins: [
        // These two are commercial, but you can try them out without registering to a trial.
        // 'ExportPdf',
        // 'ExportWord',
        'CKBox',
        'CKFinder',
        'EasyImage',
        // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
        // Storing images as Base64 is usually a very bad idea.
        // Replace it on production website with other solutions:
        // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
        // 'Base64UploadAdapter',
        'RealTimeCollaborativeComments',
        'RealTimeCollaborativeTrackChanges',
        'RealTimeCollaborativeRevisionHistory',
        'PresenceList',
        'Comments',
        'TrackChanges',
        'TrackChangesData',
        'RevisionHistory',
        'Pagination',
        'WProofreader',
        // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
        // from a local file system (file://) - load this site via HTTP server if you enable MathType
        'MathType'
    ]
});
    </script>

    <script>
        function add_new_row(){


let table = document.getElementById("myTable");
let row = table.insertRow(); // creates a new row
let cell1 = row.insertCell(); // creates a new cell
let cell2 = row.insertCell(); // creates another new cell
let cell3 = row.insertCell(); // creates another new cell
cell1.innerHTML = '<input type="text" class="form-control form-control-lg form-control-solid" name="mmp_participant[]" placeholder="" value="" required="" />'; // sets the content of the first cell
cell2.innerHTML = '<input type="text" class="form-control form-control-lg form-control-solid" name="mmp_designation[]" placeholder="" value="" required="" />'; // sets the content of the second cell
    cell3.innerHTML = '<img src="<?php echo base_url('img/plus.png')?>" width="45px" height="45px" onClick="add_new_row()">'; //
    }</script>