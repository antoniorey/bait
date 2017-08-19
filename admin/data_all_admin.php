<?php
      include 'include/header.php';
      include 'include/rightmenu.php';
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
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>ผู้อาศัยทั้งหมด</h2>
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

                                 $sql = "SELECT * FROM `resident` WHERE `id_card` ";
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
                                               <button type="submit" class="btn btn-default">ลบ</button></td> -->
                                               <td align="center">
                                                 <a href="../edit/edit_data1_g3.php?id_card=<?=$id_card?>" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>

                                                 <a href="../data_group3/data1_group3.php?aa=<?=$id_card?>" class="btn btn-danger" name="aa"  title="delete"><i class="fa fa-trash" ></i></a>
                                               </td>
                                      </tr>
                                      <?php
                                  }
                                ?>


                            </table>
                        </div>
                    </div>

                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
  <?php include 'include/footer.php'; ?>
