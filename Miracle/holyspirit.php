<?php 
    
   require ('server.php');

  if (empty($_SESSION['username'])) {
      header('location: login.php');
  }

        


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <link rel="icon"  href="img/logo.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rccg Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="css/miracle.css">
    </head>
    <?php 
        if (isset($_SESSION['username'])) {
            echo $_SESSION['success'];
        }


    ?>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="holyspirit.php"><?php if (isset($_SESSION["username"])): ?>
                            <?php echo $_SESSION['username']; ?>
                        <?php endif ?></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="contact.php"><i class="icon-envelope"></i></a></li>
                            <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">Useful Links</li>
                                    <li><a href="members.php?members">Members</a></li>
                                    <li><a href="workers.php?workers">Workers</a></li>
                                    <li><a href="#">Funds</a></li>
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/pst.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin_profile.php" target="_blank">Your Profile</a></li>
                                    <li><a href="admin_editprofile.php?edita=<?php echo $_SESSION['id']; ?>" target="_blank">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="holyspirit.php?logout='1'">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" id="sidemenu">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="holyspirit.php" ><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="register_members.php" target=""><i class="menu-icon icon-bullhorn"></i>Register Members </a>
                                </li>
                                <li><a href="register_workers.php" target=""><i class="menu-icon icon-bullhorn"></i>Register Workers </a>
                                </li>
                                <li><a href="reg_att.php" target=""><i class="menu-icon icon-bullhorn"></i>Record Attendance </a>
                                </li>
                                <li><a href="reg_off.php" target=""><i class="menu-icon icon-bullhorn"></i>Account Register </a>
                                </li>
                                <li><a href="reg_ft.php" target=""><i class="menu-icon icon-bullhorn"></i>Register First Timers</a>
                                </li>
                                 <li><a href="reg_form.php" target=""><i class="menu-icon icon-bullhorn"></i>Remittance Record </a>
                                </li>
                                <li><a href="reg_expenses.php" target=""><i class="menu-icon icon-bullhorn"></i>Record Expenses </a>
                                </li>
                                <li><a href="reg_pro.php" target=""><i class="menu-icon icon-bullhorn"></i>Record Church Property </a>
                                </li>
                                <li><a href="holyspirit.php?logout='1'" target="_self"><i class="menu-icon icon-signout"></i>Logout </a></li>
                               
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <?php 

                                    
                                    $query = "SELECT * FROM members";
                                    $run_query = mysqli_query($connect, $query);
                                    $members = mysqli_num_rows($run_query);
                                    


                                    ?>
                                    <a href="members.php?members" target="" class="btn-box big span4"><i class=" icon-user"></i><b id="alert"><?php echo $members; ?></b>
                                        <p class="text-muted">
                                            Members Manager</p>

                                            <?php 

                                            $query = "SELECT * FROM workers";
                                            $run_query = mysqli_query($connect, $query);
                                            $workers = mysqli_num_rows($run_query);



                                            ?>
                                    </a><a href="workers.php?workers" target="" class="btn-box big span4"><i class="icon-user"></i><b id="alert"><?php echo $workers; ?></b>
                                        <p class="text-muted">
                                            Workers Manager</p>
                                            <?php 

                                            $query = "SELECT * FROM offering";
                                            $run_query = mysqli_query($connect, $query);
                                            $sum = 0;
                                            while ($data = mysqli_fetch_assoc($run_query)) {
                                                $crm = $data['crm'];
                                                $slo = $data['slo'];
                                                $tithe = $data['tithe'];
                                                $thanksgiving = $data['thanksgiving'];
                                                $pledge = $data['pledge'];
                                                $mission = $data['mission_offering'];
                                                $children = $data['children_offering'];
                                                $special = $data['special_offering'];
                                                $all = $crm + $slo + $tithe + $thanksgiving + $pledge + $mission + $children + $special;

                                                 $sum +=  number_format($all, 2);
                                                 
                                            }
                                           


                                            ?>
                                    </a><a href="off.php" class="btn-box big span4"><i class="icon-money"></i><b id="alert"><?php echo 'N'. number_format($sum, 2); ?></b>
                                        <p class="text-muted">
                                            Funds Manager</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <?php 

                                                $query = "SELECT * FROM attendance";
                                                $run_query = mysqli_query($connect, $query);
                                                $att = mysqli_num_rows($run_query);



                                                ?>
                                                </a><a href="attendance_record.php" target="" class="btn-box small span4"><i class="icon-group"></i><b><?php echo $att; ?> Attendace Records</b>
                                                    <?php 

                                                        $query = "SELECT * FROM contacts";
                                                        $run_query = mysqli_query($connect, $query);
                                                        $messages = mysqli_num_rows($run_query);




                                                    ?>
                                                <a href="contact.php" target="" class="btn-box small span4"><i class="icon-envelope"></i><b id="alert"><?php echo $messages; ?> Messages </b>

                                                <?php 

                                                $query = "SELECT * FROM expenses";
                                                $run_query = mysqli_query($connect, $query);
                                                $expenses = mysqli_num_rows($run_query);



                                                ?>
                                                </a><a href="expenses.php" target="" class="btn-box small span4"><i class="icon-exchange"></i><b id="alert"> <?php echo $expenses; ?> Expenses</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <?php 

                                                    $query = "SELECT * FROM images";
                                                    $run_query = mysqli_query($connect, $query);
                                                    $forms = mysqli_num_rows($run_query);



                                                ?>

                                                <a href="rem_form.php" target="" class="btn-box small span4"><i class="icon-picture"></i><b id="alert"> <?php echo $forms; ?>  Remmittance Forms</b>

                                                <?php 

                                                    $query = "SELECT * FROM properties";
                                                    $run_query = mysqli_query($connect, $query);
                                                    $properties = mysqli_num_rows($run_query);


                                                ?>


                                                </a><a href="church_pro.php" class="btn-box small span4"><i class="icon-building"></i><b><?php echo $properties; ?> Church Properties</b>
                                                    <?php 

                                                        $query = "SELECT * FROM first_timers";
                                                        $run_query = mysqli_query($connect, $query);
                                                        $ft = mysqli_num_rows($run_query)



                                                     ?>

                                                </a><a href="f_timers.php" class="btn-box small span4"><i class="icon-user"></i><b><?php echo $ft; ?> FirstTimers/New Converts</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Members</strong> <span class="pull-right small muted"><?php echo $members .'%'; ?></span>
                                            </p>
                                            <?php 

                                            $mem_per = ($members * 200) / 100;
                                            $wor_per = ($workers * 200) / 100;




                                            ?>
                                            <div class="progress tight">
                                                <div class="bar" style=" width: <?php echo $mem_per ?>%; " >
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Workers</strong> <span class="pull-right small muted"><?php echo $workers. '%'; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: <?php echo $wor_per ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <?php 

                                            $query = "SELECT * FROM attendance";
                                            $run_query = mysqli_query($connect, $query);
                                            $tota = mysqli_num_rows($run_query);

                                            $totap = ($tota * 200) / 100;



                                            ?>
                                            <p>
                                                <strong>Attendance Records</strong> <span class="pull-right small muted"><?php echo $tota. '%'; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: <?php echo $totap ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <?php 

                                                $query = "SELECT * FROM offering";
                                                $run_query = mysqli_query($connect, $query);
                                                $atrow = mysqli_num_rows($run_query);

                                                $atrowp = ($atrow * 200) / 100;


                                            ?>
                                            <p>
                                                <strong>Funds Record</strong> <span class="pull-right small muted"><?php echo $atrow.'%'; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-danger" style="width: <?php echo $atrowp ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                     </div>
                </div>
        </div>
   
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Rccg Miracle Zone </b>All rights reserved.
            </div>
        </div>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
    </body>
</html