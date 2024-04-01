<?php   session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::IMS</title>
    <?php require_once'bootstrapfontawesome.html'?>

</head>
<body>

<?php require_once'../connectionCon/connectionCon.php'?>
<?php require_once'usersHeader.html'?>

<?php require_once'welcome.php'?>
<?php require_once'usersLogin.php'?>
</body>
</html>


<script type="text/javascript">
    homepageLogin = document.querySelector("#homepageLogin");  
    homepageGwidance = document.querySelector("#homepageGwidance"); 
document.querySelector("#coordinator").addEventListener("click", function (e) {
        e.preventDefault();
            
            localStorage.setItem("homepage","homepageLogin");
        setTimeout(function(){
            homepageGwidance.style.display="none";
             homepageLogin.style.display="block";
        },1000)
       });
document.querySelector("#logistic").addEventListener("click", function (e) {
        e.preventDefault();
            
            localStorage.setItem("homepage","homepageLogin");
        setTimeout(function(){
            homepageGwidance.style.display="none";
             homepageLogin.style.display="block";
        },1000)
       });
document.querySelector("#hod").addEventListener("click", function (e) {
        e.preventDefault();
            
            localStorage.setItem("homepage","homepageLogin");
        setTimeout(function(){
            homepageGwidance.style.display="none";
             homepageLogin.style.display="block";
        },1000)
       });
document.querySelector("#guidance").addEventListener("click", function (e) {
        e.preventDefault();
            
            localStorage.setItem("homepage","homepageGwidance");
        setTimeout(function(){
            homepageGwidance.style.display="block";
             homepageLogin.style.display="none";
        },1000)
       });

    let thisPage = localStorage.getItem("homepage");
    

    if (thisPage == "homepageLogin") {
        homepageGwidance.style.display="none";
        homepageLogin.style.display="block";
    }
    else{
       document.getElementById(thisPage).style.display='block'; 
    }
</script>