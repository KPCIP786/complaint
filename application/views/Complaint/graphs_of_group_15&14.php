<?php }elseif($group==4 || $group==5){?>
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
$ddone=$this->db->query("select count(g.source_id) as source_emmm,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=1 AND g.tier_id=$tierr")->row();
$emailll=$ddone->source_emmm;
$ddone1=$this->db->query("select count(g.source_id) as source_wtt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=2 AND g.tier_id=$tierr")->row();
$whatsapppp=$ddone1->source_wtt;
$ddone2=$this->db->query("select count(g.source_id) as source_mbb,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=3 AND g.tier_id=$tierr")->row();
$mobileee=$ddone2->source_mbb;
$ddone3=$this->db->query("select count(g.source_id) as source_tell,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=4 AND g.tier_id=$tierr")->row();
$telephoneee=$ddone3->source_tell;
$ddone4=$this->db->query("select count(g.source_id) as source_pstt,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id And g.source_id=5 AND g.tier_id=$tierr")->row();
$postalll=$ddone4->source_pstt;

// peshawer Category
$ddone5=$this->db->query("select count(g.complaint_category_id) as category_sss,city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=1 And g.user_id=u.user_id AND g.tier_id=$tierr")->row();
$soical_pp=$ddone5->category_sss;
$ddone6=$this->db->query("select count(g.complaint_category_id) as category_eee,city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.complaint_category_id=2 And g.user_id=u.user_id AND g.tier_id=$tierr")->row();
$enviromental_pp=$ddone6->category_eee;

// peshawer Tiers
// $qqueryy6=$this->db->query("select count(g.tier_id) as tier_one_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=1 And g.user_id=u.user_id")->row();
// $tier_f_pp=$qqueryy6->tier_one_ppp;
// $qqueryy7=$this->db->query("select count(g.tier_id) as tier_s_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=2 And g.user_id=u.user_id")->row();
// $tier_t_pp=$qqueryy7->tier_s_ppp;
// $qqueryy8=$this->db->query("select count(g.tier_id) as tier_thr_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=3 And g.user_id=u.user_id")->row();
// $tier_th_pp=$qqueryy8->tier_thr_ppp;

// peshawer Total Complaints
$pesh1=$this->db->query("select count(g.user_id) as user_id_pp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id AND g.tier_id=$tierr")->row();
$peshhh=$pesh1->user_id_pp;
$pending=$this->db->query("select count(g.user_id) as user_id_pp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id AND g.source_id=6")->row();
$verification_status=$pending->user_id_pp;
                                    ?>

        <script type="text/javascript">
// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('containerz', {
    chart: {
        type: 'column'
    },
    title: {
        <?php $ct=$this->db->query("SELECT city_id,city_name from city where city_id=$city")->row(); ?>
        text: 'Source-Wise Complaints<?php //echo "Complaints Detail"." ".$ct->city_name ?>'
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
            ['Total', <?php echo $peshhh ?>],
            ['Walk in', <?php echo $verification_status ?>],
            ['Via Email', <?php echo $emailll ?>],
            ['Via Whatsapp', <?php echo $whatsapppp ?>],
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
$qquryy6=$this->db->query("select count(g.tier_id) as tier_one_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city And g.user_id=u.user_id AND g.tier_id=$tierr")->row();
$tier_f_pp=$qquryy6->tier_one_ppp;
// $qquryy8=$this->db->query("select count(g.tier_id) as tier_tw_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=2 And g.user_id=u.user_id")->row();
// $tier_t_pp=$qquryy8->tier_tw_ppp;
// $qquryy8=$this->db->query("select count(g.tier_id) as tier_thr_ppp,u.city_id from gre_complaint_detail as g,user as u where u.city_id=$city AND g.tier_id=3 And g.user_id=u.user_id")->row();
// $tier_tr_pp=$qquryy8->tier_thr_ppp;
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
           ['Tier <?php echo $tierr ?>', <?php echo $tier_f_pp ?>],
           
            
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
                                    </div>
                                    <!--end::Row-->