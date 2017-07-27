<?php
      include 'include/header.php';
      include 'include/rightmenu.php';
?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          ฟฟฟฟฟฟฟฟฟฟฟฟฟ <small> ฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟ </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 3</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../group3.php">
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 4</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../group4.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 5</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../group5.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">คณะ 6</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="../group6.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="container" >
                  <div class="row">
                    <div class="col-md-12">
                        <div class="panel with-nav-tabs panel-info">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1info" data-toggle="tab">  หน้าแรก  </a></li>
                                        <li><a href="#tab2info" data-toggle="tab">  เงินบริจาค  </a></li>
                                        <li><a href="#tab3info" data-toggle="tab">  เช่าวัตถุมงคล  </a></li>
                                        <li><a href="#tab4info" data-toggle="tab">  ขายของ  </a></li>
                                        <li><a href="#tab5info" data-toggle="tab">  ฌาปนกิจ  </a></li>

                                    </ul>

                          </div>
                            <div class="panel-body">
                                <div class="tab-content">

  <!-- ................................................................................................................................................. -->

                                    <div class="tab-pane fade in active" id="tab1info">
                                      <center ><a href="add_income.php" ><button type="button" class="btn btn-danger"> เพิ่มรายรับ</button></a></center><br>
                                        <center>
                                          <table class="table table-striped table-bordered">
                                            <tr>
                                              <th><center>ที่</th>
                                              <th><center>เดือน</th>
                                              <th><center>สรุปรายรับรวม</th>
                                              <th><center>แก้ไข</th>
                                            </tr>
                                              <?php
                                                $sql = "select * from income";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                  $ID_income = $row["ID_income"];
                                                  $income = $row["income"];
                                                  $months = $row["months"];
                                                  ?>
                                                    <tr>
                                                      <td><center><?php echo $ID_income;?></td>
                                                      <td><center><?php echo $months;?></td>
                                                      <td><center> <?php echo number_format($income); ?> บาท</td>
                                                      <td><center> <a href='edit_income_arm.php?id=<?php echo $ID_income; ?>'> แก้ไข</a> </td>
                                                    </tr>
                                                    <?php
                                                }
                                              ?>
                                          </table>
                                        </center>
                                    </div>

  <!-- ................................................................................................................................................. -->
                                    <div class="tab-pane fade" id="tab2info">
                                      <center ><a href="add_aa.php" ><button type="button" class="btn btn-danger"> เพิ่มรายรับ</button></a></center><br>
                                      <center>
                                        <table class="table table-striped table-bordered">
                                              <tr>
                                                <th><center>ที่</th>
                                                <th><center>ตู้บริจาค</th>
                                                <th><center>ผ้าป่า</th>
                                                <th><center>เวลา</th>
                                                <th><center>แก้ไข</th>
                                              </tr>
                                                <?php
                                                  $sql = "select * from aa";
                                                  $result = mysqli_query($conn, $sql);
                                                  while ($row = mysqli_fetch_array($result)) {
                                                    $ID_Aa = $row["ID_Aa"];
                                                    $Donationboxs = $row["Donationboxs"];
                                                    $Paapa = $row["Paapa"];
                                                    $aadate = $row["aadate"];
                                                    ?>
                                                    <tr>
                                                        <td><center><?php echo $ID_Aa; ?></td>
                                                        <td><center><?php echo number_format($Donationboxs); ?> บาท</td>
                                                        <td><center><?php echo number_format($Paapa); ?> บาท</td>
                                                        <td><center><?php echo $aadate; ?></td>
                                                        <td><center> <a href='edit_aa_arm.php?id=<?php echo $ID_Aa; ?>'> แก้ไข</a> </td>
                                                      </tr>
                                                      <?php
                                                  }
                                                ?>
                                            </table>
                                      </center>
                                    </div>
  <!-- ................................................................................................................................................. -->

                                    <div class="tab-pane fade" id="tab3info">
                                      <center ><a href="add_ab.php" ><button type="button" class="btn btn-danger"> เพิ่มรายรับ</button></a></center><br>
                                      <center>
                                        <table class="table table-striped table-bordered">
                                          <tr>
                                            <th><center>ที่</th>
                                            <th><center>พระหยก</th>
                                            <th><center>แหวนหยก</th>
                                            <th><center>เวลา</th>
                                            <th><center>แก้ไข</th>
                                          </tr>
                                            <?php
                                              $sql = "select * from ab";
                                              $result = mysqli_query($conn, $sql);
                                              while ($row = mysqli_fetch_array($result)) {
                                                $ID_Ab = $row["ID_Ab"];
                                                $Phra = $row["Phra"];
                                                $Ring = $row["Ring"];
                                                $abdate = $row["abdate"];
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $ID_Ab; ?></td>
                                                    <td><center><?php echo number_format($Phra); ?> บาท</td>
                                                    <td><center><?php echo number_format($Ring); ?> บาท</td>
                                                    <td><center><?php echo $abdate; ?></td>
                                                    <td><center> <a href='edit_ab_arm.php?id=<?php echo $ID_Ab; ?>'> แก้ไข</a> </td>
                                                  </tr>
                                                  <?php
                                              }
                                            ?>
                                        </table>
                                      </center>
                                    </div>

  <!-- ................................................................................................................................................. -->

                                    <div class="tab-pane fade" id="tab4info">
                                      <center ><a href="add_ac.php" ><button type="button" class="btn btn-danger"> เพิ่มรายรับ</button></a></center><br>
                                      <center>
                                        <table class="table table-striped table-bordered">
                                          <tr>
                                            <th><center>ที่</th>
                                            <th><center>ร้านขายของมินิมาร์ท</th>
                                            <th><center>ไตรจีวร</th>
                                            <th><center>เวลา</th>
                                            <th><center>แก้ไข</th>
                                          </tr>
                                            <?php
                                              $sql = "select * from ac";
                                              $result = mysqli_query($conn, $sql);
                                              while ($row = mysqli_fetch_array($result)) {
                                                $ID_Ac = $row["ID_Ac"];
                                                $Minimart = $row["Minimart"];
                                                $Robe = $row["Robe"];
                                                $acdate =$row["acdate"];
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $ID_Ac; ?></td>
                                                    <td><center><?php echo number_format($Minimart); ?> บาท</td>
                                                    <td><center><?php echo number_format($Robe); ?> บาท</td>
                                                    <td><center><?php echo $acdate; ?></td>
                                                    <td><center> <a href='edit_ac_arm.php?id=<?php echo $ID_Ac; ?>'> แก้ไข</a> </td>
                                                  </tr>
                                                  <?php
                                              }
                                            ?>
                                        </table>
                                      </center>
                                    </div>

  <!-- ................................................................................................................................................. -->

                                    <div class="tab-pane fade" id="tab5info">
                                      <center ><a href="add_ad.php" ><button type="button" class="btn btn-danger"> เพิ่มรายรับ</button></a></center><br>
                                      <center>
                                        <table class="table table-striped table-bordered">
                                          <tr>
                                            <th><center>ที่</th>
                                            <th><center>จองศาลา</th>
                                            <th><center>ฌาปณกิจ</th>
                                            <th><center>เวลา</th>
                                            <th><center>แก้ไข</th>
                                          </tr>
                                            <?php
                                              $sql = "select * from ad";
                                              $result = mysqli_query($conn, $sql);
                                              while ($row = mysqli_fetch_array($result)) {
                                                $ID_Ad = $row["ID_Ad"];
                                                $Booksala = $row["Booksala"];
                                                $Cremation = $row["Cremation"];
                                                $addate = $row["addate"];
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $ID_Ad; ?></td>
                                                    <td><center><?php echo number_format($Booksala); ?> บาท</td>
                                                    <td><center><?php echo number_format($Cremation); ?> บาท</td>
                                                    <td><center><?php echo $addate; ?></td>
                                                    <td><center> <a href='edit_ad_arm.php?id=<?php echo $ID_Ad; ?>'> แก้ไข</a> </td>
                                                  </tr>
                                                  <?php
                                              }
                                            ?>
                                        </table>
                                      </center>
                                    </div>

  <!-- ................................................................................................................................................. -->

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  </center>
                </div>

                <!-- /.row -->

<?php include 'include/footer.php'; ?>
