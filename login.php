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
   
   
    </script>

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


    <div id="">

        <div id="page-wrapper">
<br><br>
            <div class="container-fluid">

                <br><br><br><br>

                <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form >
                            <fieldset>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="password-box" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a  class="btn btn-lg btn-success btn-block" id="Lgn-button">Login</a>
                            </fieldset>
                        </form>
                        <br>
                        <a class="btn btn-lg btn-warning btn-block" href="index.php?id=home" id="Hom-button">Home</a>
                    </div>
                </div>
            </div>

                
                <div class="page-header" >
                    <h1 id="school-dashboard-panel-header"></h1>
                </div>
                <div class="row">
                    <div class="col-sm-12" >
                        
                    </div>
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
<script>
 var redirectUrl = decodeURI(document.URL.split("RedirectUri=")[1]);
 $('#Lgn-button').bind("click",function()
    {
      var id =redirectUrl.split("id=")[1];
      var pass = $("#password-box").val();
      var flag= "chkPsw";
      var params = {id,pass};
      $.ajax({
            type: "POST",
            url: "/lmw/js/js1.php",
            data: { flag,params},
            success: function(data) {
console.log(data);
                   if(data == 1)
                        $(location).attr('href',redirectUrl);
                     
           }
  
         });
    });
</script>
</body>

</html>
