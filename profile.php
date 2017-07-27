<?php include "include/header.php" ; ?>

<!-- About Section -->
<style>
      .user-row {
          margin-bottom: 14px;
      }

      .user-row:last-child {
          margin-bottom: 0;
      }

      .dropdown-user {
          margin: 13px 0;
          padding: 5px;
          height: 100%;
      }

      .dropdown-user:hover {
          cursor: pointer;
      }

      .table-user-information > tbody > tr {
          border-top: 1px solid rgb(221, 221, 221);
      }

      .table-user-information > tbody > tr:first-child {
          border-top: 0;
      }


      .table-user-information > tbody > tr > td {
          border-top: 0;
      }
      .toppad
      {margin-top:20px;
      }

</style>


<section class="success" id="about">
    <div class="container">
        <div class="row">
          <br>

            <div class="col-lg-12 text-center">
                <h2>ข้อมูลส่วนตัว</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">


    <div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">


      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">สามเณรมนัญพร พิณทอง</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ชื่อ:</td>
                        <td>สามเณรมนัญพร</td>
                      </tr>
                      <tr>
                        <td>นามสกุล:</td>
                        <td>พิณทอง</td>
                      </tr>
                      <tr>
                        <td> วัน/เดือน/ปี เกิด:</td>
                        <td>23/08/2538</td>
                      </tr>
                      <tr>
                        <td>รหัสบัตรประชาชน:</td>
                        <td>1101500810417</td>
                      </tr>
                      <tr>
                        <td>ผู้ปกครอง:</td>
                        <td>นายไชยา สีอ่อน</td>
                      </tr>
                      <tr>
                        <td>เบอร์ติดต่อผู้ปกครอง</td>
                        <td>0989764289</td>
                      </tr>

                      <tr>
                        <td>ประวัติการศึกษาเดิม</td>
                        <td>ป.6</td>
                      </tr>
                      <tr>
                        <td>จากโรงเรียน</td>
                        <td>วัดธรรมมงคล</td>
                      </tr>
                      <tr>
                        <td>วุฒินักธรรม</td>
                        <td>ยังไม่มี</td>
                      </tr>
                      <tr>
                        <td>เปรียญธรรม</td>
                        <td>ยังไม่มี</td>
                      </tr>
                        <tr>
                        <td>ที่อยู่ปัจจบัน</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                      <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                      </tr><tr>
                        <td>ผู้รับรอง</td>
                        <td>นายไชยา สีอ่อน</td>
                      </tr>

                    </tbody>
                  </table>

                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>

          </div>
        </div>
      </div>
    </div>

            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function() {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function() {
                //Completed slidetoggle
                if(idFor.is(':visible'))
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                }
                else
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });


        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function(e) {
            e.preventDefault();
            alert("This is a demo.\n :-)");
        });
    });
</script>


<?php include "include/footer.php"; ?>
