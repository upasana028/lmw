var flag= "chkSesn";
var id = (document.URL.split("id=")[1]);
var pass = "";
var paramjs = {id,pass};
paramjs = JSON.stringify(paramjs);

$.ajax({
  type: "POST",
  url: "/lmw/js/js1.php",
  data: { flag,paramjs},
  success: function(data) {
         
         if(data==0 && $(location).attr('href').search("school-dashboard.php")>0 ){
         var redirectUri =  encodeURI($(location).attr('href'));
         $(location).attr('href',"http://www.learnmyway.in/lmw/login.php?RedirectUri="+redirectUri);

          }
      }
  
});