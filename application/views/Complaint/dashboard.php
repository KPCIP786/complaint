<?php  $ss=$this->session->userdata('userid'); 
   $city=$this->session->userdata('cityid');
   $tierr=$this->session->userdata('tierid');
   $group=$this->session->userdata('groupid');
?>



				
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->

								<div id="kt_app_toolbar" class="app-toolbar mt-lg-0 mt-lg-n5 pt-4 pt-lg-0 pb-4 pb-lg-8">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap" style="margin-bottom:-20px ;">
									<!--begin::Toolbar wrapper-->
									<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

										<!--begin::Page title-->
										<div class="page-title d-flex flex-column justify-content-center me-3">
											
											
										</div>
										<!--end::Page title-->
										<h3 class="float-right">
										<?php if($group==1){
											echo "Welcome to Complaint Management System";
										}
										// elseif($group==4 || $group==5){
          //                                   $ct=$this->db->query("select city_id,city_name,tier_id,tier_name from city,grm_tier_tbl where city_id=$city and tier_id=$tierr")->row();
										// 	echo "Welcome to WSSC - ".$ct->city_name." ".$ct->tier_name." Dashboard:";
										// }
                                        else{
                                            $ctt=$this->db->query("select city_id,city_name from city where city_id=$city")->row();
                                        	echo "Welcome to WSSC - ".$ctt->city_name." Dashboard:";
                                        }
									?>
									
								</h3>
										<!--begin::Actions-->

										<div class="d-flex align-items-center gap-2 gap-lg-3">
											<?php if($group != 5){ ?>
											<button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#myModal">Add Complaint</button>
                                        <?php } ?>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Toolbar container-->
							</div>
							

								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
																		<!--begin::Row-->
									<?php
                                    if($group==1){
                                      
									$count=0;
									$done=$this->db->query("select complaint_detail_id from gre_complaint_detail")->result();
									foreach ($done as $done) {
										$count++;
									}
									?>
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    	<div class="col-sm-12">
                            <table class="table" cellpadding="10">
                                <tr>
                            <td width="200px">
                                <a href="<?php echo base_url('Complaint/total_Complaints') ?>">
                                <div class="card gradient-1" style="background-color:lightcoral; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Total Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                    <h4 class="text-white"> <?php if($count<=9){
                                        echo "0".$count;
                                    }
                                        else{
                                                echo $count;
                                            
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div>
                           </a>
                            </td>
                           	<?php 
									$inprogress=0;
									$resolved=0;
									$rejected=0;
                                    $escalated=0;
									$done=$this->db->query("select status_id from gre_complaint_detail")->result();
									foreach ($done as $done) {
										if($done->status_id==1){
										$inprogress++;
									}
									elseif($done->status_id==2){
										$resolved++;
									}
                                    elseif($done->status_id==4){
                                        $escalated++;
                                    }
									else{
										$rejected++;
									}
									}
									?>
                           
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/inprogress_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:orange; border-top: white;">
                            <center>
                            <div class="card-body">
                               
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Inprogress Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                    <h4 class="text-white"> <?php if($inprogress<=9){
                                        echo "0".$inprogress;
                                    }
                                        else{
                                                echo $inprogress;
                                            
                                         }  ?></h4>
                                </div>
                            </div>
                            </center>
                     
                           </div> 
                       </a>
                                    </td>
                                    
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/resolved_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:green; border-top: white;">
                                <center>
                            <div class="card-body" >
                               
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Resolved Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($resolved<=9){
                                        echo "0".$resolved;
                                    }
                                        else{
                                            
                                                echo $resolved;
                                            
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div> 
                       </a>
                                    </td>
                                   
                                    <td width="200px">
                                         <a href="<?php echo base_url('Complaint/rejected_complaints') ?>">
                                        <div class="card gradient-1" style="background-color:red; border-top: white;">
                                <center>
                            <div class="card-body" >
                               
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Rejected Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($rejected<=9){
                                        echo "0".$rejected;
                                    }
                                        else{
                                            echo $rejected;
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div>
                       </div>
                   </a>
                                    </td>
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/escalated_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:#336699; border-top: white;">
                                <center>
                            <div class="card-body" >
                                
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Escalated Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($escalated<=9){
                                        echo "0".$escalated;
                                    }
                                        else{
                                            echo $escalated;
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div>
                       </div> 
                                    </td>
                                </tr>
                            </table>
                               
                           </div>
                           
                    
                    <?php }else{
                                    $count=0;
                                    $done=$this->db->query("select gcd.complaint_detail_id,u.user_id,u.city_id,gcd.tier_id from gre_complaint_detail as gcd,user as u where gcd.user_id=u.user_id And u.city_id=$city")->result();
                                    foreach ($done as $done) {
                                        $count++;
                                    }
                                    ?>
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <table class="table" cellpadding="10">
                                <tr>
                            <td width="200px">
                                <div class="card gradient-1" style="background-color:lightcoral; border-top: white;">
                                <center>
                             <a href="<?php echo base_url('Complaint/total_Complaints') ?>">
                            <div class="card-body">
                                
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Total Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                    <h4 class="text-white"> <?php if($count<=9){
                                        echo "0".$count;
                                    }
                                        else{
                                            
                                                echo $count;
                                           
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div>
                           </a>
                            </td>
                            <?php 
                                    $inprogress=0;
                                    $resolved=0;
                                    $rejected=0;
                                    $escalated=0;
                                    $done=$this->db->query("select gcd.complaint_detail_id,gcd.status_id,u.user_id,u.city_id,gcd.tier_id from gre_complaint_detail as gcd,user as u where gcd.user_id=u.user_id And u.city_id=$city")->result();
                                    foreach ($done as $done) {
                                        if($done->status_id==1){
                                        $inprogress++;
                                    }
                                    elseif($done->status_id==2){
                                        $resolved++;
                                    }
                                    elseif($done->status_id==4){
                                        $escalated++;
                                    }
                                    else{
                                        $rejected++;
                                    }
                                    }
                                    ?>
                           
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/inprogress_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:orange; border-top: white;">
                            <center>
                            <div class="card-body">
                               
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Inprogress Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                    <h4 class="text-white"> <?php if($inprogress<=9){
                                        echo "0".$inprogress;
                                    }
                                        else{
                                                echo $inprogress;
                                            
                                         }  ?></h4>
                                </div>
                            </div>
                            </center>
                     
                           </div> 
                       </a>
                                    </td>
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/resolved_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:green; border-top: white;">
                                <center>
                            <div class="card-body" >
                           
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Resolved Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($resolved<=9){
                                        echo "0".$resolved;
                                    }
                                        else{
                                           
                                                echo $resolved;
                                          
                                            
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div> 
                       </a>
                                    </td>
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/rejected_complaints') ?>">
                                        <div class="card gradient-1" style="background-color:red; border-top: white;">
                                <center>
                            <div class="card-body" >
                               
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Rejected Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($rejected<=9){
                                        echo "0".$rejected;
                                    }
                                        else{
                                            echo $rejected;
                                         }  ?></h4>
                                </div>
                                
                            </center>
                           </div>
                       </div>
                   </a>
                                    </td>
                                    <td width="200px">
                                        <a href="<?php echo base_url('Complaint/escalated_complaints') ?>">
                                       <div class="card gradient-1" style="background-color:#336699; border-top: white;">
                                <center>
                            <div class="card-body" >
                                
                                <h5 class="card-title text-white" style="font-weight:bold;"> <br>Escalated Complaints<br><br></h5>
                                <div class="d-inline-block text-white">
                                     <h4 class="text-white"> <?php if($escalated<=9){
                                        echo "0".$escalated;
                                    }
                                        else{
                                            echo $escalated;
                                         }  ?></h4>
                                </div>
                                
                            </div>
                            </center>
                           </div>
                       </div> 
                   </a>
                                    </td>
                                </tr>
                            </table>
                    <?php }

                     ?>
                    <?php if($group==1){?>
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Chart Widget 1-->
											<div class="card ">
												<!--begin::Body-->
												<div class="card-body pt-0 px-0">
													
													<!--begin::Info-->
													<div class="">

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<figure class="highcharts-figure">
    <div id="containern"></div>
    
</figure>

<?php 
       $done=$this->db->query("select count(source_id) as source_e from gre_complaint_detail where source_id=1")->row();
$email=$done->source_e;
      $done1=$this->db->query("select count(source_id) as source_w from gre_complaint_detail where source_id=2")->row();
$whatsapp=$done1->source_w;
$done2=$this->db->query("select count(source_id) as source_m from gre_complaint_detail where source_id=3")->row();
$mobile=$done2->source_m;
$done3=$this->db->query("select count(source_id) as source_t from gre_complaint_detail where source_id=4")->row();
$telephone=$done3->source_t;
$done4=$this->db->query("select count(source_id) as source_p from gre_complaint_detail where source_id=5")->row();
$postal=$done4->source_p;

$totl=$this->db->query("select count(complaint_detail_id) as user_id_pp from gre_complaint_detail")->row();
$ttl=$totl->user_id_pp;
$pending_a=$this->db->query("select count(source_id) as source_e from gre_complaint_detail where source_id=6")->row();
$verification_status_a=$pending_a->source_e;
$other=$this->db->query("select count(source_id) as source_e from gre_complaint_detail where source_id=7")->row();
$otherr=$other->source_e;
									?>

		<script type="text/javascript">
// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('containern', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: 'Source-Wise Complaints'
    },
    subtitle: {
        align: 'left',
        text: ''
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Complaints Summary'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                
            }
        }
    },

   

    series: [
        {
           
            colorByPoint: true,
            data: [
                {
                    name: 'Total',
                    y: <?php echo $ttl; ?>,
                  
                },
                {
                    name: 'Walkin',
                    y: <?php echo $verification_status_a; ?>,
                  
                },
                {
                    name: 'Telephone',
                    y: <?php echo $telephone; ?>,
                  
                },
                {
                    name: 'Mobile',
                    y: <?php echo $mobile; ?>,
                  
                },
                {
                    name: 'Whatsapp',
                    y: <?php echo $whatsapp; ?>,
                   
                },
                {
                    name: 'PM Portal',
                    y: <?php echo $postal; ?>,
                    
                },
                {
                    name: 'Email',
                    y: <?php echo $email; ?>,
                    
                },
                {
                    name: 'Other',
                    y: <?php echo $otherr; ?>,
                    
                },
                
                
            ]
        }
    ],
    
});

		</script>

													</div>
													<!--ed::Info-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Chart Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Engage widget 15-->
											<div class="card " dir="ltr">
												<!--begin::Body-->
												<div class="card-body flex-column flex-center">


<figure class="highcharts-figure">
    <div id="containerm"></div>
    
</figure>
<?php 
// Peshawer
$peshawer=$this->db->query("select count(g.user_id) as user_id_p,u.city_id from gre_complaint_detail as g,user as u where u.city_id=1 And g.user_id=u.user_id")->row();
$peshawer_city=$peshawer->user_id_p;

// Mardan
$mardan=$this->db->query("select count(g.user_id) as user_id_m,u.city_id from gre_complaint_detail as g,user as u where u.city_id=2 And g.user_id=u.user_id")->row();
$mardan_city=$mardan->user_id_m;

// kohat
$kohat=$this->db->query("select count(g.user_id) as user_id_k,u.city_id from gre_complaint_detail as g,user as u where u.city_id=3 And g.user_id=u.user_id")->row();
$kohat_city=$kohat->user_id_k;

// Swat
$swat=$this->db->query("select count(g.user_id) as user_id_sw,u.city_id from gre_complaint_detail as g,user as u where u.city_id=4 And g.user_id=u.user_id")->row();
$swat_city=$swat->user_id_sw;

// Abbottabad
$abbottabad=$this->db->query("select count(g.user_id) as user_id_ab,u.city_id from gre_complaint_detail as g,user as u where u.city_id=5 And g.user_id=u.user_id")->row();
$abbottabad_city=$abbottabad->user_id_ab;
 ?>
<script type="text/javascript">// Data retrieved from https://www.ssb.no/en/transport-og-reiseliv/landtransport/statistikk/bilparken
// Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('containerm', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'City Wise Complaints',
        align: 'center'
    },
    tooltip: {
       
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                
                connectorColor: 'rgba(128,128,128,0.5)'
            }
        }
    },
    series: [{
        name: 'Total Complaints',
        data: [
            { name: 'Peshawer', y:<?php echo $peshawer_city;?>},
            { name: 'Mardan', y: <?php echo $mardan_city;?> },
            { name: 'Kohat', y:<?php echo $kohat_city;?>},
            { name: 'Swat', y: <?php echo $swat_city;?> },
            { name: 'Abbottabad', y: <?php echo $abbottabad_city;?> }
        ]
    }]
});
</script>


												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 15-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Chart Widget 1-->
											<div class="card ">
												<figure class="highcharts-figure">
    <div id="containerl"></div>
    
</figure>

<?php 
// Peshawer
$queryy=$this->db->query("select count(g.tier_id) as tier_one_p,u.city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_p=$queryy->tier_one_p;
$queryy1=$this->db->query("select count(g.tier_id) as tier_s_p,u.city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_p=$queryy1->tier_s_p;
$queryy2=$this->db->query("select count(g.tier_id) as tier_thr_p,u.city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_th_p=$queryy2->tier_thr_p;

// Mardan
$queryy3=$this->db->query("select count(g.tier_id) as tier_one_m,u.city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_m=$queryy3->tier_one_m;
$queryy4=$this->db->query("select count(g.tier_id) as tier_s_m,u.city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_m=$queryy4->tier_s_m;
$queryy5=$this->db->query("select count(g.tier_id) as tier_thr_m,u.city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_th_m=$queryy5->tier_thr_m;

// Kohat
$queryy6=$this->db->query("select count(g.tier_id) as tier_one_k,u.city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_k=$queryy6->tier_one_k;
$queryy7=$this->db->query("select count(g.tier_id) as tier_s_k,u.city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_k=$queryy7->tier_s_k;
$queryy8=$this->db->query("select count(g.tier_id) as tier_thr_k,u.city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_th_k=$queryy8->tier_thr_k;

// Swat
$queryy9=$this->db->query("select count(g.tier_id) as tier_one_sw,u.city_id from gre_complaint_detail as g,user as u where u.city_id=4 AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_sw=$queryy9->tier_one_sw;
$queryy10=$this->db->query("select count(g.tier_id) as tier_s_sw,u.city_id from gre_complaint_detail as g,user as u where u.city_id=4 AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_sw=$queryy10->tier_s_sw;
$queryy11=$this->db->query("select count(g.tier_id) as tier_thr_sw,u.city_id from gre_complaint_detail as g,user as u where u.city_id=4 AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_th_sw=$queryy11->tier_thr_sw;

// Abbottabad
$queryy12=$this->db->query("select count(g.tier_id) as tier_one_ab,u.city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_ab=$queryy12->tier_one_ab;
$queryy13=$this->db->query("select count(g.tier_id) as tier_s_ab,u.city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_ab=$queryy13->tier_s_ab;
$queryy14=$this->db->query("select count(g.tier_id) as tier_thr_ab,u.city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_th_ab=$queryy14->tier_thr_ab;

 ?>
<script>
	// Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
Highcharts.chart('containerl', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Tier-Wise Complaints'
    },
    xAxis: {
        categories: ['Peshawer', 'Mardan', 'Kohat', 'Swat', 'Abbottabad']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Tier-Wise Complaints'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Tier 3',
        data: [<?php echo $tier_th_p;?>, <?php echo $tier_th_m;?>,<?php echo $tier_th_k;?>, <?php echo $tier_th_sw;?>, <?php echo $tier_th_ab;?>]
    }, {
        name: 'Tier 2',
        data: [<?php echo $tier_t_p;?>, <?php echo $tier_t_m;?>,<?php echo $tier_t_k;?>, <?php echo $tier_t_sw;?>, <?php echo $tier_t_ab;?>]
    }, {
        name: 'Tier 1',
        data: [<?php echo $tier_f_p;?>, <?php echo $tier_f_m;?>,<?php echo $tier_f_k;?>, <?php echo $tier_f_sw;?>, <?php echo $tier_f_ab;?>]
    }]
});

</script>
												
											</div>
											<!--end::Chart Widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->

									
										<!--begin::Col-->
										<div class="col-xl-6">
											<!--begin::Chart Widget 1-->
											<div class="card ">
												<figure class="highcharts-figure">
    <div id="containerr"></div>
    
</figure>
<?php 
        // kohat
$k_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$kohat_1=$k_1->category_s;
$k_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$kohat_2=$k_2->category_s;
$k_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$kohat_3=$k_3->category_s;
$k_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$kohat_4=$k_4->category_s;
$k_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$kohat_5=$k_5->category_s;
$k_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$kohat_6=$k_6->category_s;
$k_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$kohat_7=$k_7->category_s;
$k_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$kohat_8=$k_8->category_s;
$k_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$kohat_9=$k_9->category_s;
$k_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$kohat_10=$k_10->category_s;
$k_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$kohat_11=$k_11->category_s;
$k_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$kohat_12=$k_12->category_s;
$k_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$kohat_13=$k_13->category_s;
$k_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$kohat_14=$k_14->category_s;
$k_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$kohat_19=$k_19->category_s;
$k_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$kohat_20=$k_20->category_s;

// peshawer
$p_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$pesh_1=$p_1->category_s;
$p_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$pesh_2=$p_2->category_s;
$p_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$pesh_3=$p_3->category_s;
$p_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$pesh_4=$p_4->category_s;
$p_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$pesh_5=$p_5->category_s;
$p_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$pesh_6=$p_6->category_s;
$p_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$pesh_7=$p_7->category_s;
$p_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$pesh_8=$p_8->category_s;
$p_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$pesh_9=$p_9->category_s;
$p_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$pesh_10=$p_10->category_s;
$p_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$pesh_11=$p_11->category_s;
$p_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$pesh_12=$p_12->category_s;
$p_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$pesh_13=$p_13->category_s;
$p_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$pesh_14=$p_14->category_s;
$p_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$pesh_19=$p_19->category_s;
$p_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=1 AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$pesh_20=$p_20->category_s;

// mardan
$m_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$mardan_1=$m_1->category_s;
$m_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$mardan_2=$m_2->category_s;
$m_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$mardan_3=$m_3->category_s;
$m_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$mardan_4=$m_4->category_s;
$m_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$mardan_5=$m_5->category_s;
$m_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$mardan_6=$m_6->category_s;
$m_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$mardan_7=$m_7->category_s;
$m_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$mardan_8=$m_8->category_s;
$m_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$mardan_9=$m_9->category_s;
$m_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$mardan_10=$m_10->category_s;
$m_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$mardan_11=$m_11->category_s;
$m_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$mardan_12=$m_12->category_s;
$m_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$mardan_13=$m_13->category_s;
$m_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$mardan_14=$m_14->category_s;
$m_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$mardan_19=$m_19->category_s;
$m_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=2 AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$mardan_20=$m_20->category_s;

// swat
$sw_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$swat_1=$sw_1->category_s;
$sw_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$swat_2=$sw_2->category_s;
$sw_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$swat_3=$sw_3->category_s;
$sw_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$swat_4=$sw_4->category_s;
$sw_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$swat_5=$sw_5->category_s;
$sw_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$swat_6=$sw_6->category_s;
$sw_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$swat_7=$sw_7->category_s;
$sw_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$swat_8=$sw_8->category_s;
$sw_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$swat_9=$sw_9->category_s;
$sw_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$swat_10=$sw_10->category_s;
$sw_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$swat_11=$sw_11->category_s;
$sw_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$swat_12=$sw_12->category_s;
$sw_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$swat_13=$sw_13->category_s;
$sw_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$swat_14=$sw_14->category_s;
$sw_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$swat_19=$sw_19->category_s;
$sw_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=3 AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$swat_20=$sw_20->category_s;

// abbotabbad
$ab_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$abbot_1=$ab_1->category_s;
$ab_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$abbot_2=$ab_2->category_s;
$ab_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$abbot_3=$ab_3->category_s;
$ab_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$abbot_4=$ab_4->category_s;
$ab_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$abbot_5=$ab_5->category_s;
$ab_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$abbot_6=$ab_6->category_s;
$ab_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$abbot_7=$ab_7->category_s;
$ab_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$abbot_8=$ab_8->category_s;
$ab_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$abbot_9=$ab_9->category_s;
$ab_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$abbot_10=$ab_10->category_s;
$ab_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$abbot_11=$ab_11->category_s;
$ab_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$abbot_12=$ab_12->category_s;
$ab_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$abbot_13=$ab_13->category_s;
$ab_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$abbot_14=$ab_14->category_s;
$ab_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$abbot_19=$ab_19->category_s;
$ab_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id from gre_complaint_detail as g,user as u where u.city_id=5 AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$abbot_20=$ab_20->category_s;
 ?>
<script>
	// // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
Highcharts.chart('containerr', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Category Wise Complaints'
    },
    xAxis: {
        categories: ['Peshawer', 'Mardan', 'Kohat', 'Swat', 'Abbottabad']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Category Wise Complaints'
        }
    },
    tooltip: {
        
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent'
        }
    },
    series: [{
        name: 'Social Safegaurd',
        data: [<?php echo $pesh_1;?>,<?php echo $mardan_1;?>,<?php echo $kohat_1;?>, <?php echo $swat_1;?>, <?php echo $abbot_1;?>]
    }, {
        name: 'Enviromental Safegaurd',
        data: [<?php echo $pesh_2;?>,<?php echo $mardan_2;?>,<?php echo $kohat_2;?>, <?php echo $swat_2;?>, <?php echo $abbot_2;?>]
    }, {
        name: 'Harresment',
        data: [<?php echo $pesh_3;?>,<?php echo $mardan_3;?>,<?php echo $kohat_3;?>, <?php echo $swat_3;?>, <?php echo $abbot_3;?>]
    }, {
        name: 'Land Dispute',
        data: [<?php echo $pesh_4;?>,<?php echo $mardan_4;?>,<?php echo $kohat_4;?>, <?php echo $swat_4;?>, <?php echo $abbot_4;?>]
    }, {
        name: 'Design',
        data: [<?php echo $pesh_5;?>,<?php echo $mardan_5;?>,<?php echo $kohat_5;?>, <?php echo $swat_5;?>, <?php echo $abbot_5;?>]
    }, {
        name: 'Nature of Land (Abi, shulgar, etc.)',
        data: [<?php echo $pesh_6;?>,<?php echo $mardan_6;?>,<?php echo $kohat_6;?>, <?php echo $swat_6;?>, <?php echo $abbot_6;?>]
    }, {
        name: 'Enviromental',
        data: [<?php echo $pesh_7;?>,<?php echo $mardan_7;?>,<?php echo $kohat_7;?>, <?php echo $swat_7;?>, <?php echo $abbot_7;?>]
    }, {
        name: 'Land Measurement issue',
        data: [<?php echo $pesh_8;?>,<?php echo $mardan_8;?>,<?php echo $kohat_8;?>, <?php echo $swat_8;?>, <?php echo $abbot_8;?>]
    }, {
        name: 'DPs’ name/ info missing in the BOR record while his land is included in the scheme',
        data: [<?php echo $pesh_9;?>,<?php echo $mardan_9;?>,<?php echo $kohat_9;?>, <?php echo $swat_9;?>, <?php echo $abbot_9;?>]
    }, {
        name: 'NOT Agree for receiving BOR Payment',
        data: [<?php echo $pesh_10;?>,<?php echo $mardan_10;?>,<?php echo $kohat_10;?>, <?php echo $swat_10;?>, <?php echo $abbot_10;?>]
    }, {
        name: 'Observation on land rates',
        data: [<?php echo $pesh_11;?>,<?php echo $mardan_11;?>,<?php echo $kohat_11;?>, <?php echo $swat_11;?>, <?php echo $abbot_11;?>]
    }, {
        name: 'Observation on retaining wall of Green Urban space',
        data: [<?php echo $pesh_12;?>,<?php echo $mardan_12;?>,<?php echo $kohat_12;?>, <?php echo $swat_12;?>, <?php echo $abbot_12;?>]
    }, {
        name: 'Waste disposal',
        data: [<?php echo $pesh_13;?>,<?php echo $mardan_13;?>,<?php echo $kohat_13;?>, <?php echo $swat_13;?>, <?php echo $abbot_13;?>]
    }, {
        name: 'Rent payment issue with contractor',
        data: [<?php echo $pesh_14;?>,<?php echo $mardan_14;?>,<?php echo $kohat_14;?>, <?php echo $swat_14;?>, <?php echo $abbot_14;?>]
    }, {
        name: 'Social Safegaurd - IVS Payment',
        data: [<?php echo $pesh_19;?>,<?php echo $mardan_19;?>,<?php echo $kohat_19;?>, <?php echo $swat_19;?>, <?php echo $abbot_19;?>]
    }, {
        name: 'Payment Issue',
        data: [<?php echo $pesh_20;?>,<?php echo $mardan_20;?>,<?php echo $kohat_20;?>, <?php echo $swat_20;?>, <?php echo $abbot_20;?>]
    }]
});



</script>
												</div>
												<!--end::Card-->
											</div>
											<!--end::Col-->
										</div>
										<!-- end::Row -->
                                
										
                   <?php }else{?>
                    <!--begin::Row-->
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <!--begin::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <!--begin::card-->
                                            <div class="card ">
                                                
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<figure class="highcharts-figure">
    <div id="containerx"></div>
    
</figure>

<?php 

// peshawer Tiers
$qquryy6=$this->db->query("select count(g.complaint_detail_id) as tier_one_ppp,u.city_id,g.complaint_detail_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=1 And g.user_id=u.user_id")->row();
$tier_f_pp=$qquryy6->tier_one_ppp;
$qquryy8=$this->db->query("select count(g.complaint_detail_id) as tier_tw_ppp,u.city_id,g.complaint_detail_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=2 And g.user_id=u.user_id")->row();
$tier_t_pp=$qquryy8->tier_tw_ppp;
$qquryy8=$this->db->query("select count(g.complaint_detail_id) as tier_thr_ppp,u.city_id,g.complaint_detail_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=3 And g.user_id=u.user_id")->row();
$tier_tr_pp=$qquryy8->tier_thr_ppp;
    ?>

        <script type="text/javascript">
// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Data retrieved from https://netmarketshare.com/
Highcharts.chart('containerx', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Tier-Wise Complaints',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    tooltip: {
        
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Total Complaints',
        innerSize: '50%',
        data: [
           ['Tier 1', <?php echo $tier_f_pp ?>],
           ['Tier 2', <?php echo $tier_t_pp ?>],
           ['Tier 3', <?php echo $tier_tr_pp ?>],
            
            {
                
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
});

        </script>
                                                    </div>
                                                <!--end:: Card Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <!--begin::card-->
                                            <div class="card ">
                                                
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
                                                    <figure class="highcharts-figure">
    <div id="project_graph"></div>
    
</figure>
<?php if($city==4){ ?>
<?php $total_lot1=$this->db->query("select count(g.complaint_detail_id) as subproject,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=19 And g.user_id=u.user_id")->row();
$total_lot4=$this->db->query("select count(g.complaint_detail_id) as subproject,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=3 And g.user_id=u.user_id")->row();
$inprogress_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=19 And g.user_id=u.user_id")->row();
$inprogress_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=3 And g.user_id=u.user_id")->row();
$resolved_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=19 And g.user_id=u.user_id")->row();
$resolved_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=3 And g.user_id=u.user_id")->row();
}elseif($city==1){
$total_pesh_lot1=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=6 And g.user_id=u.user_id")->row();
$total_pesh_lot4=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=10 And g.user_id=u.user_id")->row();
$inprogress_pesh_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=6 And g.user_id=u.user_id")->row();
$inprogress_pesh_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=10 And g.user_id=u.user_id")->row();
$resolved_pesh_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=6 And g.user_id=u.user_id")->row();
$resolved_pesh_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=10 And g.user_id=u.user_id")->row();
}elseif($city==2){
$total_mardan_lot1=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=5 And g.user_id=u.user_id")->row();
$total_mardan_lot4=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=12 And g.user_id=u.user_id")->row();
$inprogress_mardan_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=5 And g.user_id=u.user_id")->row();
$inprogress_mardan_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=12 And g.user_id=u.user_id")->row();
$resolved_mardan_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=5 And g.user_id=u.user_id")->row();
$resolved_mardan_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=12 And g.user_id=u.user_id")->row();
}elseif($city==3){
    $total_kohat_lot1=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=2 And g.user_id=u.user_id")->row();
$total_kohat_lot4=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=8 And g.user_id=u.user_id")->row();
$total_kohat_lot11=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=11 And g.user_id=u.user_id")->row();
$inprogress_kohat_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=2 And g.user_id=u.user_id")->row();
$inprogress_kohat_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=8 And g.user_id=u.user_id")->row();
$inprogress_kohat_lot11=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=11 And g.user_id=u.user_id")->row();
$resolved_kohat_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=2 And g.user_id=u.user_id")->row();
$resolved_kohat_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=8 And g.user_id=u.user_id")->row();
$resolved_kohat_lot11=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=11 And g.user_id=u.user_id")->row();
}elseif ($city==5) {
    $total_abbot_lot1=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=15 And g.user_id=u.user_id")->row();
$total_abbot_lot4=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=17 And g.user_id=u.user_id")->row();
$total_abbot_lot11=$this->db->query("select count(g.complaint_detail_id) as category,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.sub_project_id=18 And g.user_id=u.user_id")->row();
$inprogress_abbot_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=15 And g.user_id=u.user_id")->row();
$inprogress_abbot_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=17 And g.user_id=u.user_id")->row();
$inprogress_abbot_lot11=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=1 And g.sub_project_id=18 And g.user_id=u.user_id")->row();
$resolved_abbot_lot1=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=15 And g.user_id=u.user_id")->row();
$resolved_abbot_lot4=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=17 And g.user_id=u.user_id")->row();
$resolved_abbot_lot11=$this->db->query("select count(g.complaint_detail_id) as status,u.city_id,g.complaint_detail_id,u.user_id,g.user_id,g.sub_project_id,status_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.status_id=2 And g.sub_project_id=18 And g.user_id=u.user_id")->row();
}
 ?>
                                                    <script >
                                                        // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/

Highcharts.chart('project_graph', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Project-Wise Complaints'
    },
    xAxis: {
        categories: [<?php if($city==4) {?>'MGWSS', 'Neighborhood Park Mingora' <?php }elseif($city==1){ ?>'Besai-Park Hayatabad and Bagh-e-Naran Park','improvement Water Supply System With SCADA'<?php }elseif($city==2){ ?>'Ring Road Green Belt and N-45 National Highway','Catchment Area of Rorya STP including New Sewerage Treatment Plant and required SCADA System, MARDAN.'<?php }elseif($city==3){ ?>'Urban Green Spaces initiatives','improvement of Water Supply System With SCADA','Kotal Township (KDA) Sewerage System including New Sewerage Treatment Plant (STP) and required SCADA System, KOHAT.'<?php }elseif($city==3){ ?>'(a) PEDESTRAINIZATION OF MARKET OLD CITY CENTER - (b) SHERWAN ADVENTURE FAMILY PARK, ABBT- (c) Health & Safety (H&S), Environmental Management Plan & Traffic Management','Procurement, Supply, Installation, commissioning and operations of Solid waste management system, Abbotabad','GGWS - Greater Gravity Water Scheme'<?php } ?>]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Goals'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [{
        name: 'Rosolved',
        data: [<?php if($city==4){ echo $resolved_lot1->status; ?>, <?php echo $resolved_lot4->status; }elseif($city==1){
             echo $resolved_pesh_lot1->status; ?>, <?php echo $resolved_pesh_lot4->status;
         }elseif($city==2){
             echo $resolved_mardan_lot1->status; ?>, <?php echo $resolved_mardan_lot4->status;}
             elseif($city==3){
             echo $resolved_kohat_lot1->status; ?>, <?php echo $resolved_kohat_lot4->status;?>, <?php echo $resolved_kohat_lot11->status;}
             elseif($city==5){
             echo $resolved_abbot_lot1->status; ?>, <?php echo $resolved_abbot_lot4->status;?>, <?php echo $resolved_abbot_lot11->status;}?>
        ]
    }, {
        name: 'Inprogress',
        data: [<?php if($city==4){ echo $inprogress_lot1->status; ?>, <?php echo $inprogress_lot4->status; }elseif($city==1){
            echo $inprogress_pesh_lot1->status; ?>, <?php echo $inprogress_pesh_lot4->status;
        } elseif($city==2){
            echo $inprogress_mardan_lot1->status; ?>, <?php echo $inprogress_mardan_lot4->status;}
             elseif($city==3){
             echo $inprogress_kohat_lot1->status; ?>, <?php echo $inprogress_kohat_lot4->status;?>, <?php echo $inprogress_kohat_lot11->status;
         }elseif($city==5){
             echo $inprogress_abbot_lot1->status; ?>, <?php echo $inprogress_abbot_lot4->status;?>, <?php echo $inprogress_abbot_lot11->status;}
        ?>
        ]
    }, {
        name: 'Total Complaints',
        data: [<?php if($city==4){ echo $total_lot1->subproject; ?>, <?php echo $total_lot4->subproject; }elseif($city==1){
            echo $total_pesh_lot1->category; ?>, <?php echo $total_pesh_lot4->category;}elseif($city==2){
            echo $total_mardan_lot1->category; ?>, <?php echo $total_mardan_lot4->category;}elseif($city==3){
             echo $total_kohat_lot1->category; ?>, <?php echo $total_kohat_lot4->category;?>, <?php echo $total_kohat_lot11->category;
         }
         elseif($city==5){
             echo $total_abbot_lot1->category; ?>, <?php echo $total_abbot_lot4->category;?>, <?php echo $total_abbot_lot11->category;}?>
        ]
    }]
});


                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                   	<!--begin::Row-->
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <!--begin::Col-->
                                        <div class="col-xl-6">
                                            <!--begin::card-->
                                            <div class="card ">
                                                
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<figure class="highcharts-figure">
    <div id="containerz"></div>
    
</figure>

<?php 
$ddone=$this->db->query("select count(g.source_id) as source_emmm,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=1")->row();
$emailll=$ddone->source_emmm;
$ddone1=$this->db->query("select count(g.source_id) as source_wtt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=2")->row();
$whatsapppp=$ddone1->source_wtt;
$ddone2=$this->db->query("select count(g.source_id) as source_mbb,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=3")->row();
$mobileee=$ddone2->source_mbb;
$ddone3=$this->db->query("select count(g.source_id) as source_tell,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=4")->row();
$telephoneee=$ddone3->source_tell;
$ddone4=$this->db->query("select count(g.source_id) as source_pstt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=5")->row();
$postalll=$ddone4->source_pstt;
$walkin=$this->db->query("select count(g.source_id) as source_pstt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=6")->row();
$walkinn=$walkin->source_pstt;
$other=$this->db->query("select count(g.source_id) as source_pstt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=7")->row();
$otherr=$other->source_pstt;

// peshawer Category
$ddone5=$this->db->query("select count(g.complaint_category_id) as category_sss,city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$soical_pp=$ddone5->category_sss;
$ddone6=$this->db->query("select count(g.complaint_category_id) as category_eee,city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$enviromental_pp=$ddone6->category_eee;

// peshawer Tiers
// $qqueryy6=$this->db->query("select count(g.tier_id) as tier_one_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=1 And g.user_id=u.user_id")->row();
// $tier_f_pp=$qqueryy6->tier_one_ppp;
// $qqueryy7=$this->db->query("select count(g.tier_id) as tier_s_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=2 And g.user_id=u.user_id")->row();
// $tier_t_pp=$qqueryy7->tier_s_ppp;
// $qqueryy8=$this->db->query("select count(g.tier_id) as tier_thr_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=3 And g.user_id=u.user_id")->row();
// $tier_th_pp=$qqueryy8->tier_thr_ppp;

// peshawer Total Complaints
$total=$this->db->query("select count(g.complaint_detail_id) as user_id_pp,u.city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id")->row();
$totall=$total->user_id_pp;
$pending_c=$this->db->query("select count(g.user_id) as user_id_pp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id AND g.tier_id=4")->row();
$verification_status_c=$pending_c->user_id_pp;
                                    ?>
<!-- select gcd.complaint_detail_id,u.user_id,u.city_id,gcd.tier_id from gre_complaint_detail as gcd,user as u where gcd.user_id=u.user_id And u.city_id=$city -->
        <script type="text/javascript">
// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('containerz', {
    chart: {
        type: 'column'
    },
    title: {
        <?php $ct=$this->db->query("SELECT city_id,city_name from city where city_id=$city")->row(); ?>
        text: '<?php echo "Complaints Detail"." ".$ct->city_name ?>'
    }, 
    subtitle: {
        text: 'Subject: <a href="https://worldpopulationreview.com/world-cities" target="_blank">Complaints View</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
       
    },
    series: [{
        name: 'Total Complaints',
        colors: [
            '#9b20d9', '#9215ac', '#861ec9', '#1f88b7', '#1693b1', '#0a9eaa',
            '#03c69b',  '#00f194'
        ],
        colorByPoint: true,
        groupPadding: 0,
        data: [
            ['Total', <?php echo $totall ?>],
            ['Walkin', <?php echo $walkinn ?>],
            ['Via Email', <?php echo $emailll ?>],
            ['Via Whatsapp',<?php echo $whatsapppp ?>],
            ['Via Mobile', <?php echo $mobileee ?>],
            ['Via Telephone', <?php echo $telephoneee ?>],
            ['Via PM Portal', <?php echo $postalll ?>],
            // ['Social Safegaurd', <?php echo $soical_pp ?>],
            // ['Enviromental Safegaurd', <?php echo $enviromental_pp ?>],
            
            
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});


        </script>
                                                    </div>
                                                <!--end:: Card Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <div class="col-xl-6">
                                            <!--begin::card-->
                                            <div class="card ">
                                                
                                                <!--begin::Body-->
                                                <div class="card-body">
                                                    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
                                                    <figure class="highcharts-figure">
    <div id="category_graph"></div>
    
</figure>
<?php  $done_catt_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$done_cat_01=$done_catt_1->category_s; 
$done_catt_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$done_cat_02=$done_catt_2->category_s;
$done_catt_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$done_cat_03=$done_catt_3->category_s;
$done_catt_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$done_cat_04=$done_catt_4->category_s;
$done_catt_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$done_cat_05=$done_catt_5->category_s;
$done_catt_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$done_cat_06=$done_catt_6->category_s;
$done_catt_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$done_cat_07=$done_catt_7->category_s;
$done_catt_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$done_cat_08=$done_catt_8->category_s;
$done_catt_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$done_cat_09=$done_catt_9->category_s;
$done_catt_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$done_cat_10=$done_catt_10->category_s;
$done_catt_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$done_cat_11=$done_catt_11->category_s;
$done_catt_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$done_cat_12=$done_catt_12->category_s;
$done_catt_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$done_cat_13=$done_catt_13->category_s;
$done_catt_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$done_cat_14=$done_catt_14->category_s;
$done_catt_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$done_cat_19=$done_catt_19->category_s;
$done_catt_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$done_cat_20=$done_catt_20->category_s;
// total_cateogry end

$done_catt_prog_1=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$done_cat_prog_01=$done_catt_prog_1->category_s; 
$done_catt_prog_2=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$done_cat_prog_02=$done_catt_prog_2->category_s;
$done_catt_prog_3=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$done_cat_prog_03=$done_catt_prog_3->category_s;
$done_catt_prog_4=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$done_cat_prog_04=$done_catt_prog_4->category_s;
$done_catt_prog_5=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$done_cat_prog_05=$done_catt_prog_5->category_s;
$done_catt_prog_6=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$done_cat_prog_06=$done_catt_prog_6->category_s;
$done_catt_prog_7=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$done_cat_prog_07=$done_catt_prog_7->category_s;
$done_catt_prog_8=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$done_cat_prog_08=$done_catt_prog_8->category_s;
$done_catt_prog_9=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$done_cat_prog_09=$done_catt_prog_9->category_s;
$done_catt_prog_10=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$done_cat_prog_10=$done_catt_prog_10->category_s;
$done_catt_prog_11=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$done_cat_prog_11=$done_catt_prog_11->category_s;
$done_catt_prog_12=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$done_cat_prog_12=$done_catt_prog_12->category_s;
$done_catt_prog_13=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$done_cat_prog_13=$done_catt_prog_13->category_s;
$done_catt_prog_14=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$done_cat_prog_14=$done_catt_prog_14->category_s;
$done_catt_prog_19=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$done_cat_prog_19=$done_catt_prog_19->category_s;
$done_catt_prog_20=$this->db->query("select count(g.complaint_category_id) as category_s,city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=1 And u.city_id=$city AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$done_cat_prog_20=$done_catt_prog_20->category_s;

// inprogress end

$done_catt_resolve_1=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=1 And g.user_id=u.user_id")->row();
$done_cat_resolve_01=$done_catt_resolve_1->category_s; 
$done_catt_resolve_2=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=2 And g.user_id=u.user_id")->row();
$done_cat_resolve_02=$done_catt_resolve_2->category_s;
$done_catt_resolve_3=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=3 And g.user_id=u.user_id")->row();
$done_cat_resolve_03=$done_catt_resolve_3->category_s;
$done_catt_resolve_4=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=4 And g.user_id=u.user_id")->row();
$done_cat_resolve_04=$done_catt_resolve_4->category_s;
$done_catt_resolve_5=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=5 And g.user_id=u.user_id")->row();
$done_cat_resolve_05=$done_catt_resolve_5->category_s;
$done_catt_resolve_6=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=6 And g.user_id=u.user_id")->row();
$done_cat_resolve_06=$done_catt_resolve_6->category_s;
$done_catt_resolve_7=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=7 And g.user_id=u.user_id")->row();
$done_cat_resolve_07=$done_catt_resolve_7->category_s;
$done_catt_resolve_8=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=8 And g.user_id=u.user_id")->row();
$done_cat_resolve_08=$done_catt_resolve_8->category_s;
$done_catt_resolve_9=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=9 And g.user_id=u.user_id")->row();
$done_cat_resolve_09=$done_catt_resolve_9->category_s;
$done_catt_resolve_10=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=10 And g.user_id=u.user_id")->row();
$done_cat_resolve_10=$done_catt_resolve_10->category_s;
$done_catt_resolve_11=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=11 And g.user_id=u.user_id")->row();
$done_cat_resolve_11=$done_catt_resolve_11->category_s;
$done_catt_resolve_12=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=12 And g.user_id=u.user_id")->row();
$done_cat_resolve_12=$done_catt_resolve_12->category_s;
$done_catt_resolve_13=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=13 And g.user_id=u.user_id")->row();
$done_cat_resolve_13=$done_catt_resolve_13->category_s;
$done_catt_resolve_14=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=14 And g.user_id=u.user_id")->row();
$done_cat_resolve_14=$done_catt_resolve_14->category_s;
$done_catt_resolve_19=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=19 And g.user_id=u.user_id")->row();
$done_cat_resolve_19=$done_catt_resolve_19->category_s;
$done_catt_resolve_20=$this->db->query("select count(g.complaint_category_id) as category_s,u.city_id,u.user_id,g.user_id,g.status_id from gre_complaint_detail as g,user as u where g.status_id=2 And u.city_id=$city AND g.complaint_category_id=20 And g.user_id=u.user_id")->row();
$done_cat_resolve_20=$done_catt_resolve_20->category_s;

?>

                                                    <script >
                                                        Highcharts.chart('category_graph', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Category-Wise Complaints',
        align: 'left'
    },
    
    xAxis: {
        categories: ['Social Safegaurd','Enviromental Safegaurd','Harresment','Land Dispute','Design','Nature of Land (Abi, shulgar, etc.)','Enviromental','    Land Measurement issue','DPs’ name/ info missing in the BOR record while his land is included in the scheme','NOT Agree for receiving BOR Payment','Observation on land rates','Observation on retaining wall of Green Urban space','Waste disposal','Rent payment issue with contractor','Social Safegaurd - IVS Payment','Payment Issue'],
        title: {
            text: null
        },
        gridLineWidth: 1,
        lineWidth: 0
    },
    yAxis: {
        min: 0,
        title: {
            text: '',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        },
        gridLineWidth: 0
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        bar: {
            borderRadius: '50%',
            dataLabels: {
                enabled: true
            },
            groupPadding: 0.1
        }
    },
    
    credits: {
        enabled: false
    },
    series: [{
        name: 'Total Complaints',
        data: [<?php echo $done_cat_01 ?>,<?php echo $done_cat_02 ?>,<?php echo $done_cat_03 ?>,<?php echo $done_cat_04 ?>,<?php echo $done_cat_05 ?>,<?php echo $done_cat_06 ?>,<?php echo $done_cat_07 ?>,<?php echo $done_cat_08 ?>,<?php echo $done_cat_09 ?>,<?php echo $done_cat_10 ?>,<?php echo $done_cat_11 ?>,<?php echo $done_cat_12 ?>,<?php echo $done_cat_13 ?>,<?php echo $done_cat_14 ?>,<?php echo $done_cat_19 ?>,<?php echo $done_cat_20 ?> ]
    }, {
        name: 'Inprogress',
        data: [<?php echo $done_cat_prog_01 ?>,<?php echo $done_cat_prog_02 ?>,<?php echo $done_cat_prog_03 ?>,<?php echo $done_cat_prog_04 ?>,<?php echo $done_cat_prog_05 ?>,<?php echo $done_cat_prog_06 ?>,<?php echo $done_cat_prog_07 ?>,<?php echo $done_cat_prog_08 ?>,<?php echo $done_cat_prog_09 ?>,<?php echo $done_cat_prog_10 ?>,<?php echo $done_cat_prog_11 ?>,<?php echo $done_cat_prog_12 ?>,<?php echo $done_cat_prog_13 ?>,<?php echo $done_cat_prog_14 ?>,<?php echo $done_cat_prog_19 ?>,<?php echo $done_cat_prog_20 ?> ]
    }, {
        name: 'Resolved',
        data: [<?php echo $done_cat_resolve_01 ?>,<?php echo $done_cat_resolve_02 ?>,<?php echo $done_cat_resolve_03 ?>,<?php echo $done_cat_resolve_04 ?>,<?php echo $done_cat_resolve_05 ?>,<?php echo $done_cat_resolve_06 ?>,<?php echo $done_cat_resolve_07 ?>,<?php echo $done_cat_resolve_08 ?>,<?php echo $done_cat_resolve_09 ?>,<?php echo $done_cat_resolve_10 ?>,<?php echo $done_cat_resolve_11 ?>,<?php echo $done_cat_resolve_12 ?>,<?php echo $done_cat_resolve_13 ?>,<?php echo $done_cat_resolve_14 ?>,<?php echo $done_cat_resolve_19 ?>,<?php echo $done_cat_resolve_20 ?> ]
    }]
});

                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--end::Row-->

                   <?php } ?>	
									</div>
									<!--end::Row-->
									
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						</div>
				<!--end::Main-->
										<!-- The Modal -->
<div class="modal" id="myModal">
 <!--begin::Modal dialog-->

        <div class="modal-dialog modal-fullscreen p-9">

            <!--begin::Modal content-->

            <div class="modal-content modal-rounded">

                <!--begin::Modal header-->

                <div class="modal-header" style="display:block;">

                    <!--begin::Modal title-->
                   <div class="row">
                       <div class="col-11">
                            <h2>Add Complaint</h2>
                       </div>
                       <div class="col-1">
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">

                        <i class="ki-duotone ki-cross fs-1">

                            <span class="path1"></span>

                            <span class="path2"></span>

                        </i>

                    </div>
                       </div>
                   </div>
                   

                    <!--end::Modal title-->

                    <!--begin::Close-->

                   

                    <!--end::Close-->

                </div>

                <!--begin::Modal header-->

                <!--begin::Modal body-->

                <div class="modal-body scroll-y m-5">

                    <!--begin::Stepper-->

                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">

                    <form role="form" method="post" id="create_item"

                                                    enctype="multipart/form-data" action="<?php echo base_url() ?>Complaint/complaint_insert" autocomplete="off"

                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

<input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                        <table class="table gridexample">





                            <tr>

                                <h5 class="text-primary">Applicant info:</h5>

                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Name :</label></td>

                                <td>

                                    <input type="text" autofocus placeholder="Applicant name"  id="cc" required="" 

                                        class="form-control form-control-solid" name="applicant_name" tabindex="1"

                                        >

                                </td>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Mobile :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant Mobile"  id="cc"

                                        class="form-control form-control-solid" name="applicant_mobile" tabindex="1"

                                        ></td>



                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant Address :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant Address"  id="cc"

                                        class="form-control form-control-solid" name="applicant_address" tabindex="1"

                                        ></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Applicant CNIC :</label></td>

                                <td><input type="text" autofocus placeholder="Applicant CNIC"  id="cc"

                                        class="form-control form-control-solid" name="applicant_cnic" tabindex="1"

                                        ></td>

                            </tr>

                            <tr>

                                <td>

                                    <h5 class="text-primary">Complaint info:</h5>

                                </td>

                            </tr>

                            <tr>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Date :</label></td>

                                <td><input type="date" autofocus placeholder=""  id="cc"

                                        class="form-control form-control-solid" name="complaint_date" tabindex="1"

                                        ></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Category :</label></td>

                                <td>

                                    <select name="cc_id" class="form-control form-control-solid" style="height: 41px;"

                                        >

                                        <option value="">Select Complaint Category</option>

                                        <?php $cc = $this->db->query("select * from grm_complaint_category")->result();

                                        foreach ($cc as $cc) {

                                            ?>

                                            <option value="<?php echo $cc->cc_id; ?>">

                                                <?php echo $cc->cc_name; ?>

                                            </option>

                                        <?php } ?>

                                    </select>

                                </td>

                            </tr>



                            <tr>





                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Title :</label></td>

                                <td><input type="text" autofocus placeholder="Complaint Title"  id="cc"

                                        class="form-control form-control-solid" name="complaint_title" tabindex="1"

                                        ></td>

                                <td><label class="required fs-6 fw-semibold mb-2">Complaint Detail :</label></td>

                                <td><textarea name="complaint_detail" class="form-control form-control-solid"></textarea ></td>

                                                            </tr>





                                                            <tr>

                                                            <td><label class="required fs-6 fw-semibold mb-2">Source :</label></td>

                                                           <td>

                <select name="source_id" class="form-control form-control-solid" style="height: 41px;" >

                <option value="">Select Source</option>

        <?php $src = $this->db->query("select * from grm_source_tbl")->result();

        foreach ($src as $src) {

            ?>

                                                                    <option

                                                                        value="<?php echo $src->source_id; ?>">

                                                                        <?php echo $src->source_name; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                           </td>



                                                            <td></td>

                                                        </tr>



                                                        <tr>

                                                            <td><label for="ID1" class="required fs-6 fw-semibold mb-2">Subproject:</label></td>

                                                           <td colspan="4">

                <select name="subproject_id" class="form-control form-control-solid" id="ID1" style="height: 41px;" required >

                <option value="" selected="selected">Select SubProject</option>

        <?php $ps = $this->db->query("select * from ppms_subproject where city_id=$city")->result();

        foreach ($ps as $ps) {

            ?>

                                                                    <option

                                                                        value="<?php echo $ps->subproject_id; ?>">

                                                                        <?php echo $ps->subproject_id.$ps->subproject_name . '/' . $ps->detail; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                           </td>

                                                       </tr>

                                                       <tr>

                                                           <td><label class="required fs-6 fw-semibold mb-2">NC:</label></td>

                                                             <td>

        <select name="nc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_uc_new(this.value)" required>

                                              <option value="">Select NC</option>

                                    <?php $nc = $this->db->query("select * from grm_nc_tbl as gnt,grm_uc_tbl as gut where gnt.uc_id=gut.uc_id AND gnt.city_id=$city")->result();

                                    foreach ($nc as $nc) {

                                        ?>

                                                                    <option

                                                                        value="<?php echo $nc->nc_id; ?>">

                                                                        <?php echo $nc->nc_name.",UC-".$nc->uc_name; ?>

                                                                    </option>

                                                                <?php } ?>

                                                            </select>

                                                             </td>

                                                            <td><label class="required fs-6 fw-semibold mb-2">UC:</label></td>

                                                             <td>

     <select name="uc_id" id="uc_id" class="form-control form-control-solid" style="height: 41px;" onChange="get_zone_new(this.value)" required >

                                              <option value="">Select UC</option>

                                                               

                                                            </select>

                                                             </td>

                                                         </tr>

                                                         <tr>

                                                                 

                                                                 <td><label class="required fs-6 fw-semibold mb-2">Zone:</label></td>

                                                                  <td>

                             <select name="zone_id" id="zone_id" class="form-control form-control-solid" style="height: 41px;" required>

                                                   <option value="">Select Zone</option>

                                                                     

                                                                 </select>

                                                                  </td>  

                                                                  <td><label class="required fs-6 fw-semibold mb-2">File:</label></td>

                                                                  <td>

                                                                      <input type="file" name="files[]" class="form-control form-control-solid" style="height: 41px;" multiple >

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

                    <!--end::Stepper-->

                </div>

                <!--begin::Modal body-->

            </div>

        </div>
  </div>



<!-- /modal 2 -->

<!-- <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10"> -->
											<!--begin::Card-->
											<!-- <div class="card">
												<div class="card-header align-items-center py-5 gap-2 gap-md-5">
													
												</div>
												<div class="card-body p-0"> -->
													<!--begin::Table-->
													<!-- <div id="kt_inbox_listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table table-hover table-row-dashed fs-6 gy-5 my-0 dataTable no-footer" id="kt_inbox_listing">
														<thead class="d-none">
															</thead>
															<tbody>
														</tbody>
													</table></div><div class="row px-9 pt-3 pb-5"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"><div class="dataTables_length" id="kt_inbox_listing_length"><label><select name="kt_inbox_listing_length" aria-controls="kt_inbox_listing" class="form-select form-select-sm form-select-solid"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_inbox_listing_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_inbox_listing_previous"><a href="#" aria-controls="kt_inbox_listing" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_inbox_listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="kt_inbox_listing_next"><a href="#" aria-controls="kt_inbox_listing" data-dt-idx="2" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div> -->
													<!--end::Table-->
												<!-- /div>
											</div>
											end::Card
										</div> -->
										
										
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
                        
                        $("#zone_id").html(data);
                       

                    }
                }
                );
            }

</script>


