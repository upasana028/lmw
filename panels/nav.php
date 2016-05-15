<script src="jquery.js"></script>

<script type="text/javascript">
            
        $(document).ready(function(){
            var currentSchool = document.URL.split("id=")[1];
            var currentSchoolName = null;
           // $("#leftNavBar li").attr("class","inactive");
            $("#leftNavBar #"+currentSchool).css("background-color","black");

             $("#schoolName").text(currentSchool);
             
            
            if(currentSchool == "schoolA"){
                $(".breadcrumb .active").text("Cosmos Vasundhra Enclave");
                $('#school-dashboard-name').text("Cosmos Vasundhra Enclave");
               currentSchoolName = "Cosmos Vasundhra Enclave";
            }
            else if(currentSchool == "schoolB"){
                $(".breadcrumb .active").text("Cosmos Harsh Vihar");
                $('#school-dashboard-name').text("Cosmos Harsh Vihar");
currentSchoolName="Cosmos Harsh Vihar";
            } 
            else if(currentSchool == "schoolC"){
                $(".breadcrumb .active").text("Cosmos Tajpur");
                $('#school-dashboard-name').text("Cosmos Tajpur");
currentSchoolName ="Cosmos Tajpur";
            } 
             else if(currentSchool == "schoolD"){
                $(".breadcrumb .active").text("Amar Public School");
                $('#school-dashboard-name').text("Amar Public School");
                currentSchool = "schoolNone"
                $(".container-fluid").css("display","none");
                $(".well").css("display","block");
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

            $('#navPanel ').click(function(event){
                    $('#navPanel').removeClass('in');
                    $('#school-dashboard-panel-header').text(event.target.id);
                    $('#navPanel li').attr("class","inactive");
                    $('#navPanel li#'+event.target.id).attr("class","active");
                    var opt = event.target.id;
                    var currentSchool =  $("#schoolName").text();

                      if(currentSchool == 'schoolASMod' && opt == 'assignments')
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
            <ul class="nav navbar-right top-nav" hidden >
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
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
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
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
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
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
                <li class="dropdown">
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
                <li class="dropdown">
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">
                        <i class="fa fa-fw fa-arrows-v"></i> Schools <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="leftNavBar" class="collapse in" aria-expanded="true">
                            <li id="schoolA" >
                                <a  id="schoolA" >Cosmos Vasundhra Enclave</a>
                            </li>
                            <li id="schoolB" >
                                <a id="schoolB" >Cosmos Harsh Vihar</a>
                            </li>

                             <li id="schoolC" >
                                <a id="schoolC"  >Cosmos Tajpur</a>
                            </li>
                            <li id="schoolD" >
                                <a id="schoolD" >Amar Public School</a>
                            </li>
                            <li id="schoolASMod">
                                <a id = "schoolASMod">AS Modern School</a>
                            </li>
                        </ul>
                    </li>
                    <li id="ndassb">
                        <a href="ndassb-dashboard.php" id="ndassb" ><i class="fa fa-fw fa-bar-chart-o"></i> NDA/SSB</a>
                    </li>
                    <li id="pmt">
                        <a href="pmt-dashboard.php" id="pmt"><i class="fa fa-fw fa-table"></i> PMT</a>
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