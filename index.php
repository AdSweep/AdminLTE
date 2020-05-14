<?php /*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
            $filename = "tutorialstatus.txt";
            $line = file($theFile);

            $a=trim($line[1]);
if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
echo "$a";

        if ($a == "0") {
            $newcontent = "1";
            echo "hallo ik ben in de if statement geweest";
            file_put_contents($filename,$newcontent);
            header('Location: tutorial.php');
            die();
        }

    $indexpage = true;
    require "scripts/pi-hole/php/header.php";
    require_once("scripts/pi-hole/php/gravity.php");

    function getinterval()
    {
        global $piholeFTLConf;
        if(isset($piholeFTLConf["MAXLOGAGE"]))
        {
             return round(floatval($piholeFTLConf["MAXLOGAGE"]), 1);
        }
        else
        {
             return "24";
        }
    }
?>
?>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <!-- small box -->
        <div class="small-box bg-adsweepgreen" id="total_queries" title="only A + AAAA queries">
            <div class="inner">
                <p>Totale verzoeken (<span id="unique_clients">-</span> apparaten)</p>
                <h3 class="statistic"><span id="dns_queries_today">---</span></h3>
            </div>
            <div class="icon">
                <i class="ion ion-earth"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
        <!-- small box -->
        <div class="small-box bg-adsweeporange">
            <div class="inner">
                <p>Advertenties geblokkeerd</p>
                <h3 class="statistic"><span id="ads_blocked_today">---</span></h3>
            </div>
            <div class="icon">
                <i class="ion ion-android-hand"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
        <!-- small box -->
        <div class="small-box bg-adsweepdarkgreen">
            <div class="inner">
                <p>Percentage geblokkeerd</p>
                <h3 class="statistic"><span id="ads_percentage_today">---</span></h3>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-sm-6">
        <!-- small box -->
        <div class="small-box bg-adsweepdarkred" title="<?php echo gravity_last_update(); ?>">
            <div class="inner">
                <p>Domeinen op blocklist</p>
                <h3 class="statistic"><span id="domains_being_blocked">---</span></h3>
            </div>
            <div class="icon">
                <i class="ion ion-ios-list"></i>
            </div>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="queries-over-time">
            <div class="box-header with-border">
                <h3 class="box-title">Verzoeken over de laatste <?php echo getinterval(); ?> uren</h3>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="queryOverTimeChart" width="800" height="140"></canvas>
                </div>
            </div>
            <div class="overlay">
                <i class="fa fa-sync fa-spin"></i>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<?php
// If the user is logged in, then we show the more detailed index page.
// Even if we would include them here anyhow, there would be nothing to
// show since the API will respect the privacy of the user if he defines
// a password
if($auth){ ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box" id="clients">
                <div class="box-header with-border">
                    <h3 class="box-title">Apparaten (over bepaalde tijd)</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="clientsChart" width="800" height="140" class="extratooltipcanvas"></canvas>
                    </div>
                </div>
                <div class="overlay">
                    <i class="fa fa-sync fa-spin"></i>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

<?php
if($boxedlayout)
{
  $tablelayout = "col-md-6";
}
else
{
  $tablelayout = "col-md-6 col-lg-6";
}
?>
<div class="row">
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="domain-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Meest gebruikte toegestaande domeinen</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Domein</th>
                    <th>Hits</th>
                    <th>Hoeveelheid</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay">
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="ad-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Meest geblokkeerde domeinen</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Domein</th>
                    <th>Hits</th>
                    <th>Hoeveelheid</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay">
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
<div class="row">
    <!-- /.col -->
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="client-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Top apparaten (totaal)</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Apparaat</th>
                    <th>Aanvragen</th>
                    <th>Hoeveelheid</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay">
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <!-- /.col -->
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="client-frequency-blocked">
        <div class="box-header with-border">
          <h3 class="box-title">Top apparaten (geblokkeerd)</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Apparaat</th>
                    <th>Aanvragen</th>
                    <th>Hoeveelheid</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay">
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<?php } ?>

<script src="scripts/pi-hole/js/index.js"></script>

<?php
    require "scripts/pi-hole/php/footer.php";
?>
