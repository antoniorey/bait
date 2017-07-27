<?php
      include 'include/header.php';
      include 'include/rightmenu.php';
?>

<style>
  /*By DjelalEddine@gmail.com*/
  #user .avatar {
    width:60px;
  }
  #user .avatar > img{
  width:50px;
  height:50px;
  border-radius:10%;
  }
  /*Card*/
  #user .panel-thumb{
  margin:5px auto;
  text-align:center;
  }
  #user .panel-thumb .avatar-card {
  text-align:center;
  height:200px;
  margin:auto;
  overflow:hidden;
  }
  #user .panel-thumb .avatar-card > img{
  max-width:200px;
  max-height:200px;
  }

  /* table*/
  #user .panel-table{
  animation-duration:3s;
  }

  #user .panel-table .panel-body .table{
  margin:0px;
  }
  #user .panel-table .panel-body {
  padding:0px;
  }
  #user .panel-table .panel-body .table-bordered > thead > tr > th{
  text-align:center;
  }
  #user .panel-table .panel-footer {
  height:60px;
  padding:0px;
  }
  </style>
<br>

                    <div class="panel with-nav-tabs panel-info">
                        <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1info" data-toggle="tab">  สมาชิกคณะ 4/6  </a></li>


                                </ul>

                      </div>


            <div class="panel-body">

<!-- ................................................................................................................................................. -->
              <center><h3>สมาชิกคณะ 4/6</h3></center>

                      <div id="user" class="col-md-12" >
                        <div class="panel panel-primary panel-table animated slideInDown">
                         <div class="panel-heading " style="padding:5px;">
                              <div class="row">
                              <div class="col col-xs-3 text-left">
                                  <a href="#list" class="btn btn-default" aria-controls="list" role="tab" data-toggle="tab"><i class="fa fa-list-alt"></i> ข้อมูล</a>
                                  <a href="#thumb" class="btn btn-default" aria-controls="thumb" role="tab" data-toggle="tab"><i class="fa fa-picture-o" aria-hidden="true"></i> รูปภาพ</a>

                              </div>
                              <div class="col col-xs-5 text-left">
                              <a href="../add_user.php" class="btn btn-success" title="Edit"  >เพิ่มสมาชิก <i class="fa fa-pencil"></i></a>
                              </div>
                              </div>
                          </div>
                         <div class="panel-body">
                           <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="list">
                             <table class="table table-striped table-bordered table-list">
                              <thead>
                               <tr>
                                  <th class="avatar">รูป</th>
                                  <th>ชื่อ</th>
                                  <th>นามสกุล</th>
                                  <th>เบอร์ติดต่อ</th>
                                  <th>E - mail</th>
                                  <th><em class="fa fa-cog"></em></th>
                                </tr>
                               </thead>
                               <tbody>
                                <tr class="ok">
                                   <td class="avatar"><img src="https://pbs.twimg.com/profile_images/746779035720683521/AyHWtpGY_400x400.jpg"></td>
                                   <td>Djelal Eddine </td>
                                   <td>Algeria ฟฟหกฟหก </td>
                                   <td>0989764289</td>
                                   <td>djelaleddine@gmail.com </td>
                                   <td align="center">
                                     <a href="#" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
                                     <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
                                   </td>
                                </tr>
                                <tr class="ban">
                                   <td class="avatar"><img src="https://pbs.twimg.com/profile_images/3511252200/f97a40336742d17609e0b0ca17e301b8_400x400.jpeg"></td>
                                   <td>Moh Aymen </td>
                                   <td>Algeria </td>
                                   <td>0989764289 </td>
                                   <td>email@gmail.com </td>
                                   <td align="center">
                                     <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil">    	</i></a>
                                     <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"   >admitted</i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" >		</i></a>
                                   </td>
                                </tr>
                                <tr class="new">
                                   <td class="avatar"><img src="https://pbs.twimg.com/profile_images/3023221270/fcb34337f850c1037af9840ebe510d36_400x400.jpeg"></td>
                                   <td>Dia ElHak  </td>
                                   <td>Tunisia </td>
                                   <td>0989764289 </td>
                                   <td>email@gmail.com </td>
                                   <td align="right">
                                     <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"	  >		</i></a>
                              	   <a href="#" class="btn btn-success" title="validate"><i class="fa fa-check-square">validate</i></a>
                                     <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"		 >		</i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash"	   >		</i></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div><!-- END id="list" -->

                            <div role="tabpanel" class="tab-pane " id="thumb">
                              <div class="row">
                              <div class="col-md-12">

                              <div class="ok">
                               <div class="col-md-3">
                               <div class="panel panel-default panel-thumb">
                        			<div class="panel-heading">
                          			<h3 class="panel-title">Djelal Eddine</h3>
                        			</div>
                        			<div class="panel-body avatar-card">
                         			 <img src="https://pbs.twimg.com/profile_images/746779035720683521/AyHWtpGY_400x400.jpg">
                       			</div>
                                  <div class="panel-footer">
                                     <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"></i></a>
                                     <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"   ></i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" ></i></a>
                                  </div>
                               </div>
                      		 </div>
                             </div>

                              <div class="ban">
                               <div class="col-md-3">
                               <div class="panel panel-default panel-thumb">
                        			<div class="panel-heading">
                          			<h3 class="panel-title">Moh Aymen</h3>
                        			</div>
                        			<div class="panel-body avatar-card">
                         			 <img src="https://pbs.twimg.com/profile_images/3511252200/f97a40336742d17609e0b0ca17e301b8_400x400.jpeg">
                       			</div>
                                  <div class="panel-footer">
                                     <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil">		</i></a>
                                     <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"   >admitted</i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" >		</i></a>
                                  </div>
                               </div>
                      		 </div>
                             </div>

                              <div class="new">
                               <div class="col-md-3">
                               <div class="panel panel-default panel-thumb">
                        			<div class="panel-heading">
                          			<h3 class="panel-title">Dia ElHak</h3>
                        			</div>
                        			<div class="panel-body avatar-card">
                         			 <img src="https://pbs.twimg.com/profile_images/3023221270/fcb34337f850c1037af9840ebe510d36_400x400.jpeg">
                       			</div>
                                  <div class="panel-footer">
                                     <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"	  >		</i></a>
                              	   <a href="#" class="btn btn-success" title="validate"><i class="fa fa-check-square">validate</i></a>
                                     <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"		 >		</i></a>
                                     <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash"	   >		</i></a>
                                  </div>
                               </div>
                      		 </div>
                             </div>

                             </div>
                            </div>
                            </div><!-- END id="thumb" -->

                           </div><!-- END tab-content -->
                          </div>

                        <!-- <div class="panel-footer text-center">
                         		<ul class="pagination">
                      	 	  <li ><a>«</a></li>
                      		   <li class="active"><a href="#">1</a></li>
                                 <li ><a href="#">2</a></li>
                                 <li ><a href="#">3</a></li>
                      		   <li ><a>»</a></li>
                               </ul>
                         </div> -->
                        </div><!--END panel-table-->
                      </div>
                      </div>
                      </div>

<!-- ................................................................................................................................................. -->





            <!-- /.container-fluid -->

            <?php include 'include/footer.php'; ?>
