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
                                                        <span class="card-label fw-bold text-gray-800">UC</span>
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
                                                            <th>City</th>
                                                            <th>Zone Name</th>
                                                            <th>UC Name</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_uc_tbl AS gut,grc_zone_tbl AS gzt,city as c Where gzt.zone_id=gut.zone_id AND c.city_id=gut.city_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
                       <td><?php echo $item->city_name;?></td>
                        <td><?php echo $item->zone_name;?></td>
                        <td><?php echo $item->uc_name;?></td>
        <td><a href="<?php echo base_url()?>Complaint/edit_uc/<?php echo $item->uc_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        </tr>
                                                        <?php
 $i++;
 } ?>
                                                    </tbody>
                                                    <tfoot>
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
                                                        <span class="card-label fw-bold text-gray-800">Add UC</span>
                                                        <!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span> -->
                                                    </h3>
                                                    <!--end::Title-->
                                                
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-6">
                                                                     <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/insert_uc" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                    <table class="table gridexample">
                                                                    
                                                         <tr>
                                                                    <td><label class="required fs-6 fw-semibold mb-2">City:</label></td>
                                                             <td>
<select name="city_id" class="form-control form-control-solid" style="height: 41px;" id="city_id" onchange="get_zone_new(this.value)">
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
                                                                    <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>
                                                             <td>
                                                                 <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;">
                                              <option>Select Zone</option>
                                                               <?php 
                                                               ///$zone=$this->db->query("select * from grc_zone_tbl")->result();
                                               ///foreach($zone as $zone){
                                                                ?>
                                                                <option
                                                                    value="<?php ///echo $zone->zone_id;?>">
                                                                    <?php ///echo ///$zone->zone_name;?>
                                                                </option>
                                                                <?php /// }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                <tr>
                                                                    <td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>
                                                             <td>
                                       <input type="text" name="uc_name" class="form-control form-control-solid">                          
                                                             </td>
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">


    $(document).ready(function() {

        $('select[name="subproject_id"]').on('change', function() {

            var projectID = $(this).val();
//alert(projectID);
            if(projectID) {

                $.ajax({

                    url: '<?php //echo base_url('Welcome/get_zone/')?>'+projectID,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {

                        $('select[name="zone_id"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="zone_id"]').append('<option value="'+ value.zone_id +'">'+ value.zone_name +'</option>');

                        });

                    }

                });

            }else{

                $('select[name="zone_id"]').empty();

            }

        });

    });

</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<script>
   function get_zone_new(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Welcome/get_zone_new1')?>",
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
<script type="text/javascript">
    setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds
</script>