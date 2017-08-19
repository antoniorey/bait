<?php
include 'include/header.php';
include 'include/rightmenu.php';
include 'include/connection.php';


if (isset($_POST["btnEdit"])) {
  $id_card = $_POST["id_card"];
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $pname = $_POST["pname"];
  $group_name = $_POST["group_name"];
  $bed_room = $_POST["bed_room"];

  $sql = "UPDATE `resident` SET `fname` = '$fname', `lname` = '$lname', `tel` = '$tel', `email` = '$email', `address` = '$address', `pname` = '$pname', `group_name` = '$group_name', `bed_room` = '$bed_room'  WHERE `resident`.`id_card` = '$id_card'";


  //echo $sql;exit;
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขสินค้าสำเร็จ');";
    echo "window.location='../blank.php';";
    echo "</script>";
    //header('location: admin_product.php');
  }else{
    echo "<font color='red'>SQL Error</font><hr>";
  }
}else{
  $id_card = $_GET["id_card"];
  $sql = "SELECT * FROM resident WHERE id_card='$id_card'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $id_card = $row["id_card"];
    $fname = $row["fname"];
    $lname = $row["lname"];
    $tel = $row["tel"];
    $email = $row["email"];
    $address = $row["address"];
    $pname = $row["pname"];
    $group_name = $row["group_name"];
    $bed_room = $row["bed_room"];
  }else{
    $id_card = "";
    $fname = "";
    $lname = "";
    $tel = "";
    $email = "";
    $address = "";
    $pname = "";
    $group_name = "";
    $bed_room = "";

  }
}
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    เพิ่ม
                    <small>ผู้เข้าอาศัย</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.php">หน้าหลัก</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-user"></i> สมาชิกใหม่
                    </li>
                </ol>

                <div class="row text-center">
                    <div class="col-lg-6 col-lg-offset-3 ">

                        <form  action="edit_data1_g3.php" class="form-signin" method="post">

                            <div class="form-group">
                                <label>ข้อมูลผู้เข้าอาศัย</label>
                                <select class="form-control" name="pname">
                                  <option><?=$pname?></option>
                                  <option value="พระ">พระ</option>
                                  <option value="พระมหา">พระมหา</option>
                                  <option value="สามเณร">สามเณร</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control"  type="text" name="id_card" placeholder="รหัสบัตรประชาชน" value="<?=$id_card ?>">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control"  type="text" name="fname" placeholder="ชื่อ" value="<?=$fname?>">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control"  type="text" name="lname" placeholder="นามสกุล" value="<?=$lname?>">
                            </div>

                            <div class="form-group">
                                <label></label>
                                <input class="form-control" type="text"  name="email" placeholder="E-mail" value="<?=$email?>">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control"  type="text" name="tel" placeholder="เบอร์โทรศัพท์" value="<?=$tel?>">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" type="text"  name="address" placeholder="ที่อยู่" value="<?=$address?>">
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <label></label>
                                  <select class="form-control" name="group_name">
                                    <option><?=$group_name?></option>
                                    <option value="3">คณะ3</option>
                                    <option value="4">คณะ4</option>
                                    <option value="5">คณะ5</option>
                                    <option value="6">คณะ6</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                  <label></label>
                                  <select class="form-control"  name="bed_room">
                                    <option><?=$bed_room?></option>
                                    <option value="1">ห้อง1</option>
                                    <option value="2">ห้อง2</option>
                                    <option value="3">ห้อง3</option>
                                    <option value="4">ห้อง4</option>
                                    <option value="5">ห้อง5</option>
                                    <option value="6">ห้อง6</option>
                                    <option value="7">ห้อง7</option>
                                    <option value="8">ห้อง8</option>
                                    <option value="9">ห้อง9</option>
                                    <option value="10">ห้อง10</option>
                                    <option value="11">ห้อง11</option>
                                    <option value="12">ห้อง12</option>
                                    <option value="13">ห้อง13</option>
                                    <option value="14">ห้อง14</option>
                                  </select>
                              </div>
                            </div>
                      <!--       <div class="form-group">
                                <label>ผู้ปกครอง</label>
                                <select class="form-control" name="">
                                  <option>กรุณาเลือก - คำนำหน้าชื่อ</option>
                                  <option value="1">นาย</option>
                                  <option value="2">นาง</option>
                                  <option value="3">นางสาว</option>
                                </select>
                            </div>



                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="ชื่อ">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="นามสกุล">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="เบอร์โทรศัพท์">
                            </div>

                            <label>ประวัติการศึกษาเดิม</label>
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" name="">
                                  <option>กรุณาเลือก - วุฒิการศึกษา</option>
                                  <option value="1">ป.6</option>
                                  <option value="2">ม.1</option>
                                  <option value="3">ม.2</option>
                                  <option value="4">ม.3</option>
                                  <option value="5">ม.4</option>
                                  <option value="6">ม.5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="โรงเรียนเดิม">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="ตำบล">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="อำเภอ">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input class="form-control" name="" placeholder="จังหวัด">
                            </div>
                            <div class="form-group">
                                  <label>วุฒินักธรรม</label>
                                  <select class="form-control" name="">
                                    <option>-- เลือก --</option>
                                    <option value="1">ยังไม่ได้</option>
                                    <option value="2">ตรี</option>
                                    <option value="3">โท</option>
                                    <option value="4">เอก</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="จากสำนัก">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="ตำบล">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="อำเภอ">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="จังหวัด">
                              </div>
                              <div class="form-group">
                                  <label>เปรียญธรรม</label>
                                  <select class="form-control" name="">
                                    <option>-- เลือก --</option>
                                    <option value="1">ยังไม่ได้</option>
                                    <option value="2">ปธ.1-2</option>
                                    <option value="3">ปธ.3</option>
                                    <option value="4">ปธ.4</option>
                                    <option value="5">ปธ.5</option>
                                    <option value="6">ปธ.6</option>
                                    <option value="7">ปธ.7</option>
                                    <option value="8">ปธ.8</option>
                                    <option value="9">ปธ.9</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="จากสำนัก">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="ตำบล">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="อำเภอ">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="จังหวัด">
                              </div>
                              <div class="form-group">
                                  <label>ผู้รับรอง</label>
                                  <select class="form-control" name="">
                                    <option>กรุณาเลือก - คำนำหน้าชื่อ</option>
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                    <option value="3">พระ</option>
                                    <option value="3">พระมหา</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="ชื่อ">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="นามสกุล">
                              </div>
                              <div class="form-group">
                                  <label></label>
                                  <input class="form-control" name="" placeholder="เบอร์โทรศัพท์">
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label></label>
                                    <select class="form-control" name="">
                                      <option>กรุณาเลือก - คณะ</option>
                                      <option value="3">คณะ3</option>
                                      <option value="4">คณะ4</option>
                                      <option value="5">คณะ5</option>
                                      <option value="6">คณะ6</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                    <label></label>
                                    <select class="form-control" name="">
                                      <option>กรุณาเลือก - ห้อง</option>
                                      <option value="1">ห้อง1</option>
                                      <option value="2">ห้อง2</option>
                                      <option value="3">ห้อง3</option>
                                      <option value="4">ห้อง4</option>
                                      <option value="5">ห้อง5</option>
                                      <option value="6">ห้อง6</option>
                                      <option value="7">ห้อง7</option>
                                      <option value="8">ห้อง8</option>
                                      <option value="9">ห้อง9</option>
                                      <option value="10">ห้อง10</option>
                                      <option value="11">ห้อง11</option>
                                      <option value="12">ห้อง12</option>
                                      <option value="13">ห้อง13</option>
                                      <option value="14">ห้อง14</option>
                                    </select>
                                </div>
                              </div> -->



                            <button type="submit" class="btn btn-default" name="btnEdit">บันทึก</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                  </form>
              </div>
                </div>
                <!-- /.row -->

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
<?php include 'include/footer.php'; ?>
