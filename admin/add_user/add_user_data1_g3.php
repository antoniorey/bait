<?php
      include 'include/header.php';
      include 'include/rightmenu.php';
      include 'include/connection.php';

      if (isset($_POST["btnAdd"])) {

        $id_card = $_POST["id_card"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $pname = $_POST["pname"];

    		$sql = "INSERT INTO resident (`id_card`, `fname`, `lname`, `tel`, `email`, `address`, `pname`) VALUES ( '$id_card', '$fname', '$lname', '$tel', '$email' ,'$address', '$pname' )";

        // var_dump($sql);
    		$result = mysqli_query($conn, $sql);

    		if ($result) {
    			echo "<script type='text/javascript'>";
    			echo "alert('เพิ่มสินค้าสำเร็จ');";
    			echo "window.location='data_group3/data1_group3.php';";
    			echo "</script>";
    			//header('location: admin_product.php');
    		}else{
    			die('Query Failed' . mysqli_error($conn));
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

                                <form  action="add_user/add_user_data1_g3.php" class="form-signin" method="post">

                                    <div class="form-group">
                                        <label>ข้อมูลผู้เข้าอาศัย</label>
                                        <select class="form-control" name="pname">
                                          <option>กรุณาเลือก - คำนำหน้าชื่อ</option>
                                          <option value="พระ">พระ</option>
                                          <option value="พระมหา">พระมหา</option>
                                          <option value="สามเณร">สามเณร</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control"  type="text" name="id_card" placeholder="รหัสบัตรประชาชน">
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control"  type="text" name="fname" placeholder="ชื่อ">
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control"  type="text" name="lname" placeholder="นามสกุล">
                                    </div>

                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control" type="text"  name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control"  type="text" name="tel" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input class="form-control" type="text"  name="address" placeholder="ที่อยู่">
                                    </div>



                                    <button type="submit" class="btn btn-default" name="btnAdd">บันทึก</button>
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
