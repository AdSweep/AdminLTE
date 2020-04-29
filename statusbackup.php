<!-- NA <ul class="sidebar-menu"> -->
<li class="header">NAVIGATIE</li>



<!-- Sidebar user panel -->
            <div class="user-panel">
                <!--
				<div class="pull-left image">
                     <img src="img/adsweep.png" class="img-responsive" alt="Pi-hole logo" style="display: table-layout: fixed; height: 67px; width: 67px;" />
                </div>
				-->
                <div class="pull-left image">
                    <p>Status</p>
                        <?php
                        $pistatus = exec('sudo pihole status web');
                        if ($pistatus == "1") {
                            echo '<a id="status"><i class="fa fa-circle" style="color:#7FFF00"></i> Active</a>';
                        } elseif ($pistatus == "0") {
                            echo '<a id="status"><i class="fa fa-circle" style="color:#FF0000"></i> Offline</a>';
                        } elseif ($pistatus == "-1") {
                            echo '<a id="status"><i class="fa fa-circle" style="color:#FF0000"></i> DNS service not running</a>';
                        } else {
                            echo '<a id="status"><i class="fa fa-circle" style="color:#ff9900"></i> Unknown</a>';
                        }

                        // CPU Temp
                        if($FTL)
                        {
                            if ($celsius >= -273.15) {
                                echo "<a id=\"temperature\"><i class=\"fa fa-fire\" style=\"color:";
                                if ($celsius > $temperaturelimit) {
                                    echo "#FF0000";
                                }
                                else
                                {
                                    echo "#3366FF";
                                }
                                echo "\"></i> Temp:&nbsp;";
                                if($temperatureunit === "F")
                                {
                                    echo round($fahrenheit,1) . "&nbsp;&deg;F";
                                }
                                elseif($temperatureunit === "K")
                                {
                                    echo round($kelvin,1) . "&nbsp;K";
                                }
                                else
                                {
                                    echo round($celsius,1) . "&nbsp;&deg;C";
                                }
                                echo "</a>";
                            }
                        }
                        else
                        {
                            echo '<a id=\"temperature\"><i class="fa fa-circle" style="color:#FF0000"></i> FTL offline</a>';
                        }
                    ?>
                    <br/>
                    <?php
                    echo "<a title=\"Detected $nproc cores\"><i class=\"fa fa-circle\" style=\"color:";
                        if ($loaddata[0] > $nproc) {
                            echo "#FF0000";
                        }
                        else
                        {
                            echo "#7FFF00";
                        }
                        echo "\"></i> Load:&nbsp;&nbsp;" . $loaddata[0] . "&nbsp;&nbsp;" . $loaddata[1] . "&nbsp;&nbsp;". $loaddata[2] . "</a>";
                    ?>
                    <br/>
                    <?php
                    echo "<a><i class=\"fa fa-circle\" style=\"color:";
                        if ($memory_usage > 0.75 || $memory_usage < 0.0) {
                            echo "#FF0000";
                        }
                        else
                        {
                            echo "#7FFF00";
                        }
                        if($memory_usage > 0.0)
                        {
                            echo "\"></i> Memory usage:&nbsp;&nbsp;" . sprintf("%.1f",100.0*$memory_usage) . "&thinsp;%</a>";
                        }
                        else
                        {
                            echo "\"></i> Memory usage:&nbsp;&nbsp; N/A</a>";
                        }
                    ?>
                </div>
            </div>