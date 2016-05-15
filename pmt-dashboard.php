<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMT Dashboard</title>

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
                <div style="display:none" class="row">
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

                <div style="display:none" class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            
                        </div>
                        <div class="navbar-collapse collapse" id="navPanel">
                        <a class="navbar-brand" id="schoolName" href="#" hidden></a>
                            <ul class="nav navbar-nav">
                                <li id="assignments" name="assignments">
                                <a id="assignments" href="#"  >Assignments</a>
                                </li>
                                <li id="debates"><a href="#" id="debates">Debates</a>
                                </li>
                                <li id="etests" ><a href="#" id="etests">E-Tests</a>
                                </li>
                                <li id="teachinggadgets" ><a  href="#" id="teachinggadgets">Teaching Gadgets</a>
                                </li>
                                <li id="homework" ><a  href="#" id="homework">Homework</a>
                                </li>
                                <li id="quiz" ><a href="#" id="quiz">Quiz</a>
                                </li>
                                <li id="syllabus"><a href="#" id="syllabus">Syllabus(Term Wise)</a>
                                </li>
                                <li id="symposiums" ><a href="#" id="symposiums">Symposiums</a>
                                </li>
                               
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>

               

                <div class="col-lg-12">
                    <h1 class="page-header" id="PMT-subject-header">PMT Preparation</h1>
                </div>
                <div style="display:none" class="page-header" >
                    <h1 id="school-dashboard-panel-header"></h1>
                </div>
                <div style="display:none" class="row">
                    <div class="col-sm-4" >
                        
                    </div>
                </div>               
                
                <div class="col-lg-12" id="inconia" >
                    <p>This page is under Construction.</p>
                </div>

            </div>
            <!-- /.container-fluid -->
            <div class="panel" id="PMTContent-Well" style="">
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
<script >

$( document ).ready(

function(){
          var currentSchoolPMT = document.URL.split("id=")[1];
          $('#PMT-subject-header').text(currentSchoolPMT);
          $('#inconia').fileTree({ root: '../files/homework/'+currentSchoolPMT+'/' , script: 'connectors/customFileTreeIconiaBoot.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750  }, function(file) { 
                   window.open(file);
                 });
           });

function loadContentPMT(varName){
      console.log(varName);
var currentSchoolPMT = document.URL.split("id=")[1];
      $('#PMTContent-Well').fileTree({ root: '../files/homework/'+currentSchoolPMT+'/'+varName+'/' , script: 'connectors/customFileTreeIconiaBoot.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750  }, function(file) { 
                   window.open(file);
                        });

                  }



</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

        <script src="jquery.easing.js" type="text/javascript"></script>
        <script src="jqueryFileTree.js" type="text/javascript"></script>
        <link href="jqueryFileTree.css" rel="stylesheet" type="text/css" media="screen" />

</body>

</html>