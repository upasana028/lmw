<?php
function f_sleep() {
 sleep(999);
 echo "<html><body> Go away! </body></html>"; }
 
$age = $_SERVER['HTTP_USER_AGENT'];
if(strpos($age , "Baidu") > 0) f_sleep();
if(strpos($age , "AhrefsBot") > 0) f_sleep();
if(strpos($age , "YandexBot") > 0) f_sleep();

$ip = $_SERVER['REMOTE_ADDR'];
$ip0 = "0g".$ip;
if(strpos($ip0 , "119.63.19") > 0) f_sleep();
if(strpos($ip0 , "220.181") > 0) f_sleep();
if(strpos($ip0 , "123.125.6") > 0) f_sleep();
?>

<script src="jquery.js"></script>
<script src="js/js0.js"></script>
<script type="text/javascript">
            
        $(document).ready(function(){
            var currentSchool = document.URL.split("id=")[1];
            var currentSchoolName = null;
           
            $("#leftNavBar #"+currentSchool).css("background-color","black");
            $("#leftNavBar-PMT #"+currentSchool).css("background-color","black");

             $("#schoolName").text(currentSchool);
             
            
            if(currentSchool == "schoolA"){
                $(".breadcrumb .active").text("OPS School");
                $('#school-dashboard-name').text("OPS School");
               currentSchoolName = "OPS School";
            }
            else if(currentSchool == "schoolB"){
                $(".breadcrumb .active").text("MSS School,Patiala");
                $('#school-dashboard-name').text("MSS School,Patiala");
currentSchoolName="MSS School,Patiala";
            } 
            else if(currentSchool == "schoolC"){
                $(".breadcrumb .active").text("Virtual School");
                $('#school-dashboard-name').text("Virtual School");
currentSchoolName ="Virtual School";
            } 
            
             else if(currentSchool == "schoolASMod"){
                $(".breadcrumb .active").text("A S Modern School ");
                $('#school-dashboard-name').text("A S Modern School ");
currentSchoolName ="A S Modern School";
            } 
            else if(currentSchool == "articles"){
                $(".breadcrumb .active").text("Articles & Blogs");

            } 
       $("#navigation-projName").text(currentSchoolName );

       $("#leftNavBar li a").bind("click",function(){

       window.location.href = "school-dashboard.php?id="+this.id;

         });

         $("#leftNavBar-PMT li a").bind("click",function(){
       window.location.href = "pmt-dashboard.php?id="+this.id;

         });

            $('#navPanel ').click(function(event){
                    $('#navPanel').removeClass('in');
                    $('#school-dashboard-panel-header').text(event.target.id);
                    $('#navPanel li').attr("class","inactive");
                    $('#navPanel li#'+event.target.id).attr("class","active");
                    var opt = event.target.id;
                    var currentSchool =  $("#schoolName").text();

                      if(opt == 'assignments')
                                 {
                                  //check later
                                  }
                                 else if(opt != 'homework'){
                                 currentSchool = 'common';
                                 }


                    $('.col-sm-12').fileTree({ root: '../../lmw/files/homework/'+currentSchool+'/'+event.target.id+'/' , script: 'connectors/jqueryFileTree.php', folderEvent: 'click', expandSpeed: 750, collapseSpeed: 750  }, function(file) { 
                    window.open(file);
                        });
                    });

            
                 $('#leftMenuBar li').attr("class","inactive");
                 $('#leftMenuBar li#'+currentSchool).attr("class","active");

                 $('#leftNavBar-PMT li').attr("class","inactive");
                  
                 $('#leftNavBar-PMT li#'+currentSchool).attr("class","active");
                 

            
           
        });

            
        </script>

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
                <a class="navbar-brand" href="index.php">Learn My Way</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav"  >

            <button type="button" class="btn btn-success" onclick="" style="margin-top: 7%;">Student Login</button>
                

                <li class="dropdown" style="display:none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" style="display:none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown" style="display:none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" id="leftMenuBar">
                    <li id="home">
                        <a href="index.php?id=home" id="home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#leftNavBar">
                        <i class="fa fa-fw fa-arrows-v"></i> Schools <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="leftNavBar" class="collapse in" aria-expanded="true">
                            <li id="schoolA">
                                <a  id="schoolA" >OPS School</a>
                            </li>
                            <li id="schoolB">
                                <a id="schoolB" >MSS School,Patiala</a>
                            </li>

                             <li id="schoolC" >
                                <a id="schoolC">Virtual School</a>
                            </li>
                            
                            <li id="schoolASMod">
                                <a id = "schoolASMod">AS Modern School</a>
                            </li>
                        </ul>
                    </li>
                    <li id="ndassb">
                        <a href="ndassb-dashboard.php" id="ndassb" ><i class="fa fa-fw fa-bar-chart-o"></i> NDA/SSB</a>
                    </li>
                    


                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#leftNavBar-PMT">
                        <i class="fa fa-fw fa-arrows-v"></i> PMT Preparation <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="leftNavBar-PMT" class="collapse in" aria-expanded="true">
                            <li id="schoolBio" >
                                <a  id="schoolBio" >School of Biology</a>
                            </li>
                            <li id="schoolChem" >
                                <a id="schoolChem" >School of Chemistry</a>
                            </li>

                             <li id="schoolPhy" >
                                <a id="schoolPhy"  >School of Physics</a>
                            </li>
                            
                        </ul>
                    </li>


                    <li style="display:none">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Online Tests</a>
                    </li>
                    <li class="" id="articles">
                        <a href="articles.php?id=articles" id="articles"><i class="fa fa-fw fa-file"></i> Articles</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>