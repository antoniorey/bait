<?php
      include 'include/header.php';
      include 'include/rightmenu.php';
      include 'connection.php';

      if (isset($_GET["aa"])) {
        $delete =  $_GET["aa"];
        $sql = "DELETE FROM resident WHERE id_card='".$delete."' ";

        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }

      }

?>


<br>


                    <div class="panel with-nav-tabs panel-info">
                        <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1info" data-toggle="tab">  รายชื่อผู้อาศัยทั้งหมด  </a></li>
                                    <li><a href="#tab2info" data-toggle="tab">  คณะ3  </a></li>
                                    <li><a href="#tab3info" data-toggle="tab">  คณะ4  </a></li>
                                    <li><a href="#tab4info" data-toggle="tab">  คณะ5  </a></li>
                                    <li><a href="#tab5info" data-toggle="tab">  คณะ6  </a></li>

                                </ul>

                      </div>
                        <div class="panel-body">
                            <div class="tab-content">

<!-- ................................................................................................................................................. -->



                                <div class="tab-pane fade in active" id="tab1info">
                                    <center>
                                      <table class="table table-striped table-bordered">
                                        <tr>
                                          <th><center>รหัสบัตรประชาชน</th>
                                          <th><center>สถานะ</th>
                                          <th><center>ชื่อ</th>
                                          <th><center>นามสกุล</th>
                                          <th><center>เบอร์โทรศัพท์</th>
                                            <th><center>คณะ</th>
                                            <th><center>ห้อง</th>
                                        </tr>
                                          <?php

                                            $sql = "SELECT * FROM `resident` ";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                              $id_card = $row["id_card"];
                                              $pname = $row["pname"];
                                              $fname = $row["fname"];
                                              $lname = $row["lname"];
                                              $tel = $row["tel"];

                                              $group_name = $row["group_name"];
                                              $bed_room = $row["bed_room"];
                                              ?>
                                                <tr>
                                                  <td><center><?php echo $id_card;?></td>
                                                    <td><center><?php echo $pname;?></td>
                                                  <td><center><?php echo $fname;?></td>
                                                  <td><center> <?php echo $lname; ?> </td>
                                                    <td><center><?php echo $tel;?></td>
                                                    <td><center><?php echo $group_name;?></td>
                                                      <td><center><?php echo $bed_room;?></td>
                                                <!--  <td><center> <a href='#'> ดูข้อมูล</a> </td> -->
                                                <td align="center">
                                                  <a href="../edit/edit_data1_g3.php?id_card=<?=$id_card?>" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>

                                                  <a href="blank.php?aa=<?=$id_card?>" class="btn btn-danger" name="aa"  title="delete"><i class="fa fa-trash" ></i></a>
                                                </td>

                                                </tr>
                                                <?php
                                            }
                                          ?>
                                      </table>
                                    </center>
                                </div>

<!-- ................................................................................................................................................. -->
                                <div class="tab-pane fade" id="tab2info">
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-primary">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">3/1</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 1";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge"> <?=$rows[0];?></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data1_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/2</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 2";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data2_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge"> 3/3</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 3";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data3_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/4</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 4";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data4_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/5</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 5";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data5_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/6</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 6";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data6_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/7</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 7";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data7_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/8</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 8";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data8_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/9</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 9";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data9_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge">3/10</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 10";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data10_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge"> 3/11</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 11";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data11_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge"> 3/12</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 12";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data12_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                      <div class="huge"> 3/13</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 13";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data13_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
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
                                                    <div class="huge">3/14</div>

                                                    <?php
                                                      $query = "SElECT COUNT(*) FROM resident WHERE group_name = 3 AND bed_room = 14";
                                                      $rescount = mysqli_query($conn,$query);
                                                      $rows = mysqli_fetch_row($rescount);
                                                    ?>
                                                      <div class="huge">อยู่ <?=$rows[0];?> รูป</div>


                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group3/data14_group3.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                </div>
<!-- ................................................................................................................................................. -->

                                <div class="tab-pane fade" id="tab3info">
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"> </i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                    <div class="huge">4/1</div>
                                                    <?php
                                                      $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 1";
                                                      $rescount = mysqli_query($conn,$query);
                                                      $rows = mysqli_fetch_row($rescount);
                                                    ?>
                                                      <div class="huge">อยู่ <?=$rows[0];?> รูป</div>

                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data1_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/2</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 2";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data2_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/3</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 3";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data3_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/4</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 4";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data4_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/5</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 5";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data5_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/6</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 6";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data6_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/7</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 7";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data7_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/8</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 8";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data8_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/9</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 9";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data9_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/10</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 10";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data10_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/11</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 11";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data11_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/12</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 12";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data12_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/13</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 13";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data13_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">4/14</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 4 AND bed_room = 14";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group4/data14_group4.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                </div>

<!-- ................................................................................................................................................. -->

                                <div class="tab-pane fade" id="tab4info">
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/1</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 1";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data1_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/2</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 2";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data2_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/3</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 3";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data3_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/4</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 4";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data4_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/5</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 5";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data5_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/6</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 6";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data6_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/7</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 7";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data7_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/8</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 8";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data8_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/9</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 9";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data9_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/10</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 10";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data10_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/11</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 11";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data11_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/12</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 12";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data12_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/13</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 13";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data13_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">5/14</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 5 AND bed_room = 14";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group5/data14_group5.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                </div>

<!-- ................................................................................................................................................. -->

                                <div class="tab-pane fade" id="tab5info">
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/1</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 1";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data1_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/2</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 2";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data2_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/3</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 3";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data3_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/4</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 4";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data4_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/5</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 5";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data5_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/6</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 6";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data6_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/7</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 7";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data7_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/8</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 8";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data8_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/9</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 9";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data9_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/10</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 10";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data10_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/11</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 11";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data11_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/12</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 12";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data12_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/13</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 13";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data13_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6">
                                      <div class="panel panel-green">
                                          <div class="panel-heading">
                                              <div class="row">
                                                  <div class="col-xs-3">
                                                      <i class="fa fa-user fa-5x"></i>
                                                  </div>
                                                  <div class="col-xs-9 text-right">
                                                      <div class="huge">6/14</div>
                                                      <?php
                                                        $query = "SElECT COUNT(*) FROM resident WHERE group_name = 6 AND bed_room = 14";
                                                        $rescount = mysqli_query($conn,$query);
                                                        $rows = mysqli_fetch_row($rescount);
                                                      ?>
                                                        <div class="huge">อยู่ <?=$rows[0];?> รูป</div>
                                                  </div>
                                              </div>
                                          </div>
                                          <a href="data_group6/data14_group6.php">
                                              <div class="panel-footer">
                                                  <span class="pull-left">View Details</span>
                                                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                  <div class="clearfix"></div>
                                              </div>
                                          </a>
                                      </div>
                                  </div>
                                </div>

<!-- ................................................................................................................................................. -->

                            </div>
                        </div>
                    </div>


            <!-- /.container-fluid -->
            <?php include 'include/footer.php'; ?>
