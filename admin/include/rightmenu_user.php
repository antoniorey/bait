<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index_user.php">หน้าแรก</a>

        <a class="navbar-brand" href="blank_user.php">ห้องพัก </a>


    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> user <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> <?php echo $userRow['username']; ?></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="logout.user.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index_user.php"><i class="fa fa-fw fa-dashboard"></i> หน้าหลัก</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> ข้อมูล <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="data_user3_user.php">ผู้เข้าอาศัยคณะ 3</a>
                    </li>
                    <li>
                        <a href="data_user4_user.php">ผู้เข้าอาศัยคณะ 4</a>
                    </li>
                    <li>
                        <a href="data_user5_user.php">ผู้เข้าอาศัยคณะ 5</a>
                    </li>
                    <li>
                        <a href="data_user6_user.php">ผู้เข้าอาศัยคณะ 6</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="add_user_user.php"><i class="fa fa-fw fa-bar-chart-o"></i> Add Users</a>
            </li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
