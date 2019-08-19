<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Newtelco NOC Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.css">
  <link rel="stylesheet" href="assets/css/_all-skins.css">
  <script>
  	var netdataTheme = 'slate';
  </script>
  <script type="text/javascript" src="http://192.168.11.120:19999/dashboard.js?v20170724-1"></script>
  <script type="text/javascript" src="assets/js/jquery-3.3.1.slim.js"></script>
  <!-- <script type="text/javascript" src="assets/js/jquery.webticker.min.js"></script> -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<script>
NETDATA.options.current.destroy_on_hide = true;
NETDATA.options.current.eliminate_zero_dimensions = false;
NETDATA.options.current.concurrent_refreshes = true;
NETDATA.options.current.parallel_refresher = true;
NETDATA.options.current.stop_updates_when_focus_is_lost = false;
var RELOAD_EVERY = 15;
setTimeout(function(){
    location.reload();
}, RELOAD_EVERY * 60 * 1000);

</script>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>New</b>telco GmbH</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          NOC Dashboard
          <small>v1.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Page</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row" style="max-height:150px !important">
          <div class="col-md-4">
            <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fa fa-server"></i>

                <h3 class="box-title">Urbackup</h3> <small style="float: right">192.168.11.120</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <!-- netdata items -->
                <div style="text-align: center; margin: 0 auto;">
        					<div data-netdata="system.ip"
                      data-host="http://192.168.11.120:19999"
            					data-dimensions="received"
            					data-chart-library="easypiechart"
            					data-title="IPv4 Inbound"
            					data-width="100"
            					data-height="120"
            					data-after="-300"
            					data-points="300"
            					data-dt-element-name="time701"
        					></div>
                  <div data-netdata="system.cpu"
                      data-host="http://192.168.11.120:19999"
                      data-title="CPU Usage"
                      data-chart-library="gauge"
                      data-width="220px"
                      data-height="150px"
                      data-after="-300"
                      data-dygraph-valuerange="[0, 100]"
                  ></div>
        					<div data-netdata="system.ip"
                      data-host="http://192.168.11.120:19999"
            					data-dimensions="sent"
            					data-chart-library="easypiechart"
            					data-title="IPv4 Outbound"
            					data-width="100"
            					data-height="120"
            					data-after="-300"
            					data-points="300"
            					data-dt-element-name="time701"
        					></div>
                  </div>
                </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fa fa-server"></i>

                <h3 class="box-title">newtelco-cloud</h3> <small style="float: right">94.249.164.180</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <!-- netdata items -->
              <div style="text-align: center; margin: 0 auto;">
                <div data-netdata="system.ip"
                      data-dimensions="received"
          						data-host="https://netdata.newtelco.tech/"
                      data-chart-library="easypiechart"
                      data-title="IPv4 Outbound"
                      data-width="100"
                      data-height="120"
                      data-after="-300"
                      data-points="300"
                      data-dt-element-name="time701"
          						></div>
          			 <div data-netdata="system.cpu"
          						data-host="https://netdata.newtelco.tech/"
                      data-title="CPU Usage"
                      data-chart-library="gauge"
                      data-width="220px"
                      data-height="150px"
                      data-after="-300"
                      data-dygraph-valuerange="[0, 100]"
          						></div>
                <div data-netdata="system.ip"
                      data-dimensions="sent"
                      data-host="https://netdata.newtelco.tech/"
                      data-chart-library="easypiechart"
                      data-title="IPv4 Outbound"
                      data-width="100"
                      data-height="120"
                      data-after="-300"
                      data-points="300"
                      data-dt-element-name="time701"
                      ></div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="box box-solid with-border">
              <div class="box-header with-border">
                <i class="fa fa-server"></i>

                <h3 class="box-title">newtelco-ndo</h3> <small style="float: right">192.168.11.239</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                    <!-- netdata items -->
                <div style="text-align: center; margin: 0 auto;">
                <div data-netdata="system.ip"
                      data-dimensions="received"
          						data-host="https://netdata2.newtelco.tech"
                      data-chart-library="easypiechart"
                      data-title="IPv4 Outbound"
                      data-width="100"
                      data-height="120"
                      data-after="-300"
                      data-points="300"
                      data-dt-element-name="time701"
          						></div>
          			 <div data-netdata="system.cpu"
          						data-host="https://netdata2.newtelco.tech/"
                      data-title="CPU Usage"
                      data-chart-library="gauge"
                      data-width="220px"
                      data-height="150px"
                      data-after="-300"
                      data-dygraph-valuerange="[0, 100]"
          						></div>
                <div data-netdata="system.ip"
                      data-dimensions="sent"
          						data-host="https://netdata2.newtelco.tech/"
                      data-chart-library="easypiechart"
                      data-title="IPv4 Outbound"
                      data-width="100"
                      data-height="120"
                      data-after="-300"
                      data-points="300"
                      data-dt-element-name="time701"
          						></div>
                  </div>
                </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-4">
            <div class="box box-solid">
              <div class="box-header with-border">

                <i class="fas fa-exchange-alt"></i>
                <h3 class="box-title">Traffic - 172.16.4.1</h3> <small style="color:white; float: right">24 hrs</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
    				  <?php 

               echo '<img style="margin: auto auto; display: block" src= "https://nms.newtelco.tech/graph.php?to=' . time(); 
               echo '&device=84&type=device_bits&from=' . strtotime('-1 day', time());
               echo '&height=240&width=500&showcommand=yes&legend=no&format=svg" width="500px">'; 

               ?>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fas fa-exchange-alt"></i>
                <h3 class="box-title">Traffic - eShelter</h3> <small style="color:white; float: right">24 hrs</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php 

               echo '<img style="margin: auto auto; display: block" src= "https://nms.newtelco.tech/graph.php?to=' . time(); 
               echo '&device=5&type=device_bits&from=' . strtotime('-1 day', time());
               echo '&height=240&width=500&showcommand=yes&legend=no&format=svg" width="500px">'; 

               ?>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <div class="box box-solid with-border">
              <div class="box-header with-border">
                <i class="fas fa-exchange-alt"></i>
                <h3 class="box-title">Traffic - Office</h3> <small style="color:white; float: right">24 hrs</small>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php 

               echo '<img style="margin: auto auto; display: block" src= "https://nms.newtelco.tech/graph.php?to=' . time(); 
               echo '&device=46&type=device_bits&from=' . strtotime('-1 day', time());
               echo '&height=240&width=500&showcommand=yes&legend=no&format=svg" width="500px">'; 

               ?>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="box box-default">
          <div class="box-header with-border">
             <h3 class="box-title" style="width: 100%; margin-left: auto; margin-right: auto; text-align: center;">IP Camera Feeds</h3>
          </div>
          <div class="box-body">


        <!-- <ul id="webticker-update-example" > -->

<div class="ticker-wrap">
  <div class="ticker">
			<div class="ticker__item">
			   <img src="http://cam1.newtelco.local:8090/s1.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam1.newtelco.local:8090/s2.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam1.newtelco.local:8090/s3.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam2.newtelco.local:8090/s4.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam2.newtelco.local:8090/s5.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam2.newtelco.local:8090/s6.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam3.newtelco.local:8090/s7.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam3.newtelco.local:8090/s8.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<!-- <li>
				<img src="http://cam3.newtelco.local:8090/s9.mjpg" height="250" width="425" style="border:none;"></img><br><br>
			</li> -->
			<div class="ticker__item">
				<img src="http://cam3.newtelco.local:8090/s10.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam4.newtelco.local:8090/s11.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam4.newtelco.local:8090/s12.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<div class="ticker__item">
				<img src="http://cam4.newtelco.local:8090/s13.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div>
			<!-- <div class="ticker__item">
				<img src="http://cam5.newtelco.local:8090/s14.mjpg" height="250" width="425" style="border:none;"></img><br><br>
      </div> -->
  </div>
</div>
        <!-- </ul> -->





        <!-- <ul id="web-ticker-labels">
          <li>
            <div class="tickerlabels">
              B1.19
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B1.19
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.17
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.17
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B4.01
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B1.19
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              C1.09 Cage 4
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              C1.09 Cage 4
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              Labor
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.17
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.20
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.20 12
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.20 13
            </div>
          </li>
          <li>
            <div class="tickerlabels">
              B2.20 14
            </div>
          </li>
        </ul> -->
         <script type="text/javascript">
          


          $("#webticker-update-example").webTicker({
                height:'250px',
                duplicate:true,
                rssfrequency:0,
                startEmpty:false,
                hoverpause:false,
                transition: "ease"
            });
            $("#stop-newsticker2").click(function(){
                $("#webticker-update-example").webTicker('stop');
            });
            $("#continue-newsticker2").click(function(){
                $("#webticker-update-example").webTicker('cont');
            });

            // $("#web-ticker-labels").webTicker({
            //     height:'15px',
            //     duplicate:true,
            //     rssfrequency:0,
            //     startEmpty:false,
            //     hoverpause:false,
            //     transition: "ease"
            // });
            $("#stop-newsticker2").click(function(){
                $("#web-ticker-labels").webTicker('stop');
            });
            $("#continue-newsticker2").click(function(){
                $("#web-ticker-labels").webTicker('cont');
            });

        </script>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->

  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>2019 - <a href="https://github.com/ndom91">ndom91</a> &copy;</strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
</body>
</html>
