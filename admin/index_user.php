<?php
      include 'include/header.php';
      include 'include/rightmenu_user.php';
      include 'connection.php'
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          ระบบ <small> การจัดการห้องพัก </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 3</div>
                                        <?php
                                          $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 ";
                                          $rescount = mysqli_query($conn,$query);
                                          $rows = mysqli_fetch_row($rescount);
                                        ?>
                                          <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                    </div>
                                </div>
                            </div>
                            <a href="data_user3_user.php">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูข้อมูล</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 4</div>
                                        <?php
                                          $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 ";
                                          $rescount = mysqli_query($conn,$query);
                                          $rows = mysqli_fetch_row($rescount);
                                        ?>
                                          <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                    </div>
                                </div>
                            </div>
                            <a href="data_user4_user.php">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูข้อมูล</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 5</div>
                                        <?php
                                          $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 ";
                                          $rescount = mysqli_query($conn,$query);
                                          $rows = mysqli_fetch_row($rescount);
                                        ?>
                                          <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                    </div>
                                </div>
                            </div>
                            <a href="data_user5_user.php">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูข้อมูล</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 6</div>
                                        <?php
                                          $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 ";
                                          $rescount = mysqli_query($conn,$query);
                                          $rows = mysqli_fetch_row($rescount);
                                        ?>
                                          <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                    </div>
                                </div>
                            </div>
                            <a href="data_user6_user.php">
                                <div class="panel-footer">
                                    <span class="pull-left">ดูข้อมูล</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                <!-- /.row -->

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">ผู้อาศัย</div>
                                    <?php
                                      $query = "SElECT COUNT(*) FROM resident WHERE id_card ";
                                      $rescount = mysqli_query($conn,$query);
                                      $rows = mysqli_fetch_row($rescount);
                                    ?>
                                      <div class="huge">รวม <?=$rows[0];?></div>
                                </div>
                            </div>
                        </div>
                        <a href="data_all_user.php">
                            <div class="panel-footer">
                                <span class="pull-left">ดูข้อมูล</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
              </div>
  <!-- ................................................................................................................................................. -->
          <!--  <div class="row">
                <div class="col-lg-12">
                    <h2>คณะ 3</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                  <th><center></th>
                                  <th><center>ชื่อ</th>
                                  <th><center>นามสกุล</th>
                                  <th><center>เบอร์โทรศัพท์</th>
                                  <th><center>คณะ</th>
                                  <th><center>ห้อง</th>

                                </tr>
                            </thead>
                            <?php

                              $sql = "SELECT * FROM `resident` WHERE `group_name` = 3 ";
                              $result = mysqli_query($conn, $sql);
                              while ($row = mysqli_fetch_array($result)) {

                                $pname = $row["pname"];
                                $fname = $row["fname"];
                                $lname = $row["lname"];
                                $tel = $row["tel"];

                                $group_name = $row["group_name"];
                                $bed_room = $row["bed_room"];
                                ?>
                                  <tr>

                                    <td><center><?php echo $pname;?></td>
                                    <td><center><?php echo $fname;?> </td>
                                    <td><center> <?php echo $lname; ?> </td>
                                      <td><center><?php echo $tel;?></td>
                                      <td><center><?php echo $group_name;?></td>
                                        <td><center><?php echo $bed_room;?></td>

                                  </tr>
                                  <?php
                              }
                            ?>

                        </table>
                    </div>
                </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>คณะ 4</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th><center></th>
                                      <th><center>ชื่อ</th>
                                      <th><center>นามสกุล</th>
                                      <th><center>เบอร์โทรศัพท์</th>
                                      <th><center>คณะ</th>
                                      <th><center>ห้อง</th>

                                    </tr>
                                </thead>
                                <?php

                                  $sql = "SELECT * FROM `resident` WHERE `group_name` = 4 ";
                                  $result = mysqli_query($conn, $sql);
                                  while ($row = mysqli_fetch_array($result)) {

                                    $pname = $row["pname"];
                                    $fname = $row["fname"];
                                    $lname = $row["lname"];
                                    $tel = $row["tel"];

                                    $group_name = $row["group_name"];
                                    $bed_room = $row["bed_room"];
                                    ?>
                                      <tr>

                                        <td><center><?php echo $pname;?></td>
                                        <td><center><?php echo $fname;?> </td>
                                        <td><center> <?php echo $lname; ?> </td>
                                          <td><center><?php echo $tel;?></td>
                                          <td><center><?php echo $group_name;?></td>
                                            <td><center><?php echo $bed_room;?></td>

                                      </tr>
                                      <?php
                                  }
                                ?>

                            </table>
                        </div>
                    </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h2>คณะ 5</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                          <th><center></th>
                                          <th><center>ชื่อ</th>
                                          <th><center>นามสกุล</th>
                                          <th><center>เบอร์โทรศัพท์</th>
                                          <th><center>คณะ</th>
                                          <th><center>ห้อง</th>

                                        </tr>
                                    </thead>
                                    <?php

                                      $sql = "SELECT * FROM `resident` WHERE `group_name` = 5 ";
                                      $result = mysqli_query($conn, $sql);
                                      while ($row = mysqli_fetch_array($result)) {

                                        $pname = $row["pname"];
                                        $fname = $row["fname"];
                                        $lname = $row["lname"];
                                        $tel = $row["tel"];

                                        $group_name = $row["group_name"];
                                        $bed_room = $row["bed_room"];
                                        ?>
                                          <tr>

                                            <td><center><?php echo $pname;?></td>
                                            <td><center><?php echo $fname;?> </td>
                                            <td><center> <?php echo $lname; ?> </td>
                                              <td><center><?php echo $tel;?></td>
                                              <td><center><?php echo $group_name;?></td>
                                                <td><center><?php echo $bed_room;?></td>

                                          </tr>
                                          <?php
                                      }
                                    ?>

                                </table>
                            </div>
                        </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h2>คณะ 6</h2>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                              <th><center></th>
                                              <th><center>ชื่อ</th>
                                              <th><center>นามสกุล</th>
                                              <th><center>เบอร์โทรศัพท์</th>
                                              <th><center>คณะ</th>
                                              <th><center>ห้อง</th>

                                            </tr>
                                        </thead>
                                        <?php

                                          $sql = "SELECT * FROM `resident` WHERE `group_name` = 6 ";
                                          $result = mysqli_query($conn, $sql);
                                          while ($row = mysqli_fetch_array($result)) {

                                            $pname = $row["pname"];
                                            $fname = $row["fname"];
                                            $lname = $row["lname"];
                                            $tel = $row["tel"];

                                            $group_name = $row["group_name"];
                                            $bed_room = $row["bed_room"];
                                            ?>
                                              <tr>

                                                <td><center><?php echo $pname;?></td>
                                                <td><center><?php echo $fname;?> </td>
                                                <td><center> <?php echo $lname; ?> </td>
                                                  <td><center><?php echo $tel;?></td>
                                                  <td><center><?php echo $group_name;?></td>
                                                    <td><center><?php echo $bed_room;?></td>

                                              </tr>
                                              <?php
                                          }
                                        ?>






                                    </table>
                                </div>
                            </div>

                          </div> -->

                <!-- /.row -->

<?php include 'include/footer.php'; ?>
