<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery.js" type="text/javascript"></script>

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
        
        

</head>

<body>

    <div id="wrapper">

      <?php
      
        include_once("panels/navigation.php");

    ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  Schools
                            </li>
                            <li class="active">
                                <i class="fa fa-desktop"></i> </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navPanel">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" id="navigation-projName"></a>
                        </div>
                        <div class="navbar-collapse collapse" id="navPanel">
                        <a class="navbar-brand" id="schoolName" href="#" hidden></a>
                            <ul class="nav navbar-nav">
                                <li id="assignments" name="assignments">
                                <a id="assignments" href="#school-dashboard-panel-header"  >Assignments/Symposiums</a>
                                </li>
                                <li id="debates"><a href="#school-dashboard-panel-header" id="debates">Debates</a>
                                </li>
                                <li id="etests" ><a href="#school-dashboard-panel-header" id="etests">E-Tests</a>
                                </li>
                                <li id="teachinggadgets" ><a  href="#school-dashboard-panel-header" id="teachinggadgets">Teaching Gadgets</a>
                                </li>
                                <li id="homework" ><a  href="#school-dashboard-panel-header" id="homework">Homework</a>
                                </li>
                                <li id="quiz" ><a href="#school-dashboard-panel-header" id="quiz">Quiz</a>
                                </li>
                                <li id="syllabus"><a href="#school-dashboard-panel-header" id="syllabus">Syllabus(Term Wise)</a>
                                </li>
                               
                               
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>

               

                
                <div class="page-header" >
                    <h1 id="school-dashboard-panel-header"></h1>
                </div>
                <div class="row">
                    <div class="col-sm-12" >
                        
                    </div>
                </div>               
                
                <div class="well">
                    <p>Welcome to <span id="school-dashboard-name"></span> Panel.  You can find content subscribed by your school here.</p>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        <script src="jquery.easing.js" type="text/javascript"></script>
        <script src="jqueryFileTree.js" type="text/javascript"></script>
        <link href="jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />
<?php

$realip = "";

if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
       $realip = serialize($_SERVER['HTTP_X_FORWARDED_FOR']);
else
       $realip = serialize($_SERVER['REMOTE_ADDR']);
$today = date("Ymd");
//file_put_contents("/logs/userTrace".$today.".txt",$realip.serialize($_SERVER['HTTP_USER_AGENT'])."---++++---".PHP_EOL,FILE_APPEND);

?>
</body>

</html>
