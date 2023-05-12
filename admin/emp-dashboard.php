<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <!--Head-->
  <?php include("assets/inc/head.php");?>
  <!--End Head-->
  <body>

    <div class="be-wrapper be-fixed-sidebar">

    <!--Navbar-->
     <?php include("assets/inc/navbar.php");?>
      <!--End Nav Bar-->

      <!--Sidebar-->
      <?php include('assets/inc/sidebar.php');?>
      <!--End Sidebar-->

      <div class="be-content">
        <div class="main-content container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">airline_seat_recline_normal</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of passengers 
                  $result ="SELECT count(*) FROM orrs_passenger";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($pass);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Passengers</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $pass;?>">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">assignment_late</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of passengers 
                  $result ="SELECT count(*) FROM orrs_train_tickets where confirmation != 'Approved' ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($pass);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Pending Checkouts</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $pass;?>">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">directions_subway</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of trains
                  $result ="SELECT count(*) FROM orrs_train";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($train);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Trains</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $train;?>">0</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">supervisor_account</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of passengers 
                  $result ="SELECT count(*) FROM orrs_passenger";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($pass);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Employees</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $pass;?>">0</span>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">person</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of passengers 
                  $result ="SELECT count(*) FROM orrs_admin ";  
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($pass);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Administrators</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $pass;?>">0</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">local_activity</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of passengers 
                  $result ="SELECT count(*) FROM orrs_passwordresets where status = 'Pending' ";  
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($pass);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Passwd Resets</div>
                  <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $pass;?>">0</span>
                  </div>
                </div>
              </div>
            </div>

            
            
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline"><i class="material-icons">loyalty</i></div>
                <div class="data-info">
                <?php
                  //code for summing up number of trains tickets
                  $result ="SELECT count(*) FROM orrs_train_tickets where confirmation = 'Approved'";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($ticket);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                  <div class="desc">Approved Checkouts</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $train;?>">0</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
            <div class="widget widget-tile">
            <div class="chart sparkline"><i class="material-icons">rowing</i></div>
              <div class="data-info">
              <?php
                  //code for summing up number of trains tickets
                  $result ="SELECT count(*) FROM `orrs_train_tickets` ";
                  $stmt = $mysqli->prepare($result);
                  $stmt->execute();
                  $stmt->bind_result($resevations);
                  $stmt->fetch();
                  $stmt->close();
                ?>
                <div class="desc">Reservations</div>
                <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $resevations;?>">0</span>
                </div>
              </div>
            </div>
            </div>
          </div>            
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Trains
                
                  <div class="tools dropdown"><span class=""></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class=""></span></a>
                    
                  </div>
                </div>
                <div class="card-body">
                <!--Start Table-->
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Train Number</th>
                        <th>Train Name</th>
                        <th>Train Route</th>
                        <th>Train Current Station</th>
                        <th>Train Destination</th>
                        <th>Train Departure Time</th>
                        <th>Number Of Passengers</th>
                        <th>Train Fare</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        $ret="SELECT * FROM orrs_train ORDER BY RAND() LIMIT 100 "; //sql code to get to ten trains randomly
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                      {
                      ?>
                          <tr class="odd gradeX even gradeC odd gradeA ">
                            <td><?php echo $cnt;?>
                            <td><?php echo $row->number;?></td>
                            <td><?php echo $row->name;?></td>
                            <td><?php echo $row->route;?></td>
                            <td><?php echo $row->current;?></td>
                            <td><?php echo $row->destination;?></td>
                            <td><?php echo $row->time;?></td>
                            <td><?php echo $row->passengers;?></td>
                            <td><?php echo $row->fare;?></td>
                          </tr>

                      <?php $cnt=$cnt+1; }?>
                    </tbody>
                  </table>
                  <!--eND Table-->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Passenger Reservations
                
                  <div class="tools dropdown"><span class=""></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class=""></span></a>
                    
                  </div>
                </div>
                <div class="card-body">
                <!--Start Table-->
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Passenger Name</th>
                        <th>Passenger Address</th>
                        <th>Passenger Phone No</th>
                        <th>Train Number</th>
                        <th>Train Name</th>
                        <th>Train Destination</th>
                        <th>Train Arrival Station</th>
                        <th>Train Fare</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $ret="SELECT * FROM orrs_passenger where pass_train_name IS NOT NULL  "; //sql code to get all details of booked trains.
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                      {
                      ?>
                          <tr class="odd gradeX even gradeC odd gradeA ">
                            <td><?php echo $cnt;?>
                            <td><?php echo $row->pass_fname;?> <?php echo $row->pass_lname;?></td>
                            <td><?php echo $row->pass_addr;?></td>
                            <td><?php echo $row->pass_phone;?></td>
                            <td><?php echo $row->pass_train_number;?></td>
                            <td><?php echo $row->pass_train_name;?></td>
                            <td><?php echo $row->pass_dep_station ;?></td>
                            <td><?php echo $row->pass_arr_station;?></td>
                            <td><?php echo $row->pass_train_fare;?></td>
                          </tr>

                      <?php $cnt=$cnt+1; }?>
                    </tbody>
                  </table>
                  <!--eND Table-->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">My Employees
                
                  <div class="tools dropdown"><span class=""></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class=""></span></a>
                    
                  </div>
                </div>
                <div class="card-body">
                <!--Start Table-->
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Employee Name</th>
                        <th>Employee Address</th>
                        <th>Employee Phone No</th>
                        <th>Employee National ID NO</th>
                        <th>Employee Email</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $ret="SELECT * FROM orrs_employee ORDER BY RAND() LIMIT 10  "; //sql code to get all details of all employees
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                      {
                      ?>
                          <tr class="odd gradeX even gradeC odd gradeA ">
                            <td><?php echo $cnt;?>
                            <td><?php echo $row->emp_fname;?> <?php echo $row->emp_lname;?></td>
                            <td><?php echo $row->emp_addr;?></td>
                            <td><?php echo $row->emp_phone;?></td>
                            <td><?php echo $row->emp_nat_idno;?></td>
                            <td><?php echo $row->emp_email ;?></td>
                          </tr>

                      <?php $cnt=$cnt+1; }?>
                    </tbody>
                  </table>
                  <!--eND Table-->
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!--footer-->
        <?php include('assets/inc/footer.php');?>
        <!--EndFooter-->
      </div>
     
    </div>

    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

</html>