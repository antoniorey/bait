<?php
      include 'include/header.php';
      include 'include/rightmenu_user.php';
      include 'connection.php';

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข้อมูลผู้เข้าอาศัย
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>คณะ 5</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th><center>คำนำหน้าชื่อ</th>
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
                                          <!--    <td><center><button type="submit" class="btn btn-default">ดูข้อมูล</button>
                                               <button type="submit" class="btn btn-default">ลบ</button></td>  -->
                                      </tr>
                                      <?php
                                  }
                                ?>






                            </table>
                        </div>
                    </div>


                    </div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
  <?php include 'include/footer.php'; ?>
