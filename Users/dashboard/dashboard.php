<?php
session_start();
$user_1 = "";
$usercode = "";

if ($_SESSION['userActive']) {
    $user_1 = $_SESSION['userActive'];
    $usercode = $_SESSION['usercode'];
}
else{
    ?>
      <script type="text/javascript">
    window.location.href="../";</script>
    <?php
}

require '../../connectionCon/connectionCon.php';
# echo "$user_1"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::IMS-Dashboard</title>
    <?php require_once'bootstrapfontawesome.html'?>
</head>
<body>
    <?php require 'dashboardHeader.php'?>
    <input type="text" name="" id="useractive" value="<?=$user_1?>" hidden>

    <?php require 'DashboardHome.php'?>
    <?php require 'include/prod_register.php'?>
    <?php require 'include/request.php'?>
    <?php require 'include/load.html'?>
     <?php require 'include/userinfo.php'?>
    <?php require 'include/approve_request.php'?>
    <?php require 'include/userSettings.php'?>
    
</body>
</html>


<script>
// dashboard-register
// dashboard-request
// dashboard-wait-request
    
    let dashboard_home = document.querySelector('#dashboardHomeContainer');approveRequest
    let dashboard_regiter = document.querySelector('#dashboardRegisterContainer');
    let dashboard_request = document.querySelector('#dashboardRequetContainer');
    let load = document.querySelector('#load');
    let approve_request = document.querySelector('#approveRequest');
    let user_info = document.querySelector('#user_info');
    let user_settings = document.querySelector('#user_settings');
   
    document.querySelector("#dashboardHome").addEventListener("click", function (e) {
       e.preventDefault();
       load.style.display="block";
       dashboard_regiter.style.display="none";
       dashboard_request.style.display="none";
       approve_request.style.display="none";
       user_info.style.display="none";
             user_settings.style.display="none";
       localStorage.setItem("activepage","dashboardHomeContainer");
        setTimeout(function(){
            load.style.display="none";
            dashboard_home.style.display="block";
            
        },3000);
    });
    

     document.querySelector("#dashboardRegister").addEventListener("click", function (e) {
         e.preventDefault();
         load.style.display="block";
            dashboard_home.style.display="none";
            dashboard_request.style.display="none";
             approve_request.style.display="none";
              user_info.style.display="none";
             user_settings.style.display="none";
            localStorage.setItem("activepage","dashboardRegisterContainer");
        setTimeout(function(){
            load.style.display="none";
            dashboard_regiter.style.display="block";
        },3000)
     });

     document.querySelector("#dashboardRequest").addEventListener("click", function (e) {
         e.preventDefault();
         load.style.display="block";
            dashboard_home.style.display="none";
            dashboard_regiter.style.display="none";
            approve_request.style.display="none";
              user_info.style.display="none";
             user_settings.style.display="none";
            localStorage.setItem("activepage","dashboardRequetContainer");
        setTimeout(function(){
            load.style.display="none";
            dashboard_request.style.display="block";
        },3000)
     });

     document.querySelector("#dashboardApprove").addEventListener("click", function (e) {
         e.preventDefault();
         load.style.display="block";
            dashboard_home.style.display="none";
            dashboard_regiter.style.display="none";
            dashboard_request.style.display="none";
              user_info.style.display="none";
             user_settings.style.display="none";
            localStorage.setItem("activepage","approveRequest");
        setTimeout(function(){
            load.style.display="none";
            approve_request.style.display="block";
        },3000)
     });
     document.querySelector("#userInformation").addEventListener("click", function (e) {
         e.preventDefault();
         load.style.display="block";
            dashboard_home.style.display="none";
            dashboard_regiter.style.display="none";
            dashboard_request.style.display="none";
            approve_request.style.display="none";
             user_settings.style.display="none";
            localStorage.setItem("activepage","user_info");
        setTimeout(function(){
            load.style.display="none";
              user_info.style.display="block";
        },3000)
     });

       document.querySelector("#userSetting").addEventListener("click", function (e) {

        e.preventDefault();
         load.style.display="block";
            dashboard_home.style.display="none";
            dashboard_regiter.style.display="none";
            dashboard_request.style.display="none";
            approve_request.style.display="none";
            user_info.style.display="none";
            localStorage.setItem("activepage","user_settings");
        setTimeout(function(){
            load.style.display="none";
             user_settings.style.display="block";
        },3000)
       });
     // let requestForm = localStorage.getItem('activepageRequest');
     //  document.getElementById(requestForm).style.display='block';

     let getPage = localStorage.getItem("activepage");
    document.getElementById(getPage).style.display='block';






// active menu

let menus = document.querySelector('#useractive').value;
let dashboardHome = document.querySelector("#dashboardHome");
let dashboardRegister = document.querySelector("#dashboardRegister");
let dashboardRequest = document.querySelector("#dashboardRequest");
let dashboardApprove = document.querySelector("#dashboardApprove");
if (menus=="logistic") {
dashboardHome.style.display="block";
dashboardRegister.style.display="block";
dashboardRequest.style.display="none";
dashboardApprove.style.display="none";
}

if (menus=="coordinator") {
dashboardHome.style.display="block";
dashboardRegister.style.display="none";
dashboardRequest.style.display="block";
dashboardApprove.style.display="none";
}

if (menus=="hod") {
dashboardHome.style.display="block";
dashboardRegister.style.display="none";
dashboardRequest.style.display="none";
dashboardApprove.style.display="approve";
}
    // document.querySelector("#dashboardRequest").addEventListener("click", handleButtonClick);
    // document.querySelector("#dashboardWaitR").addEventListener("click", handleButtonClick);
</script>