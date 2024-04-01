<?php
if (isset($_POST['login'])) {
    $usertype = $_POST['usertype'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sqlSel = $con->query("SELECT*from Users where usertype='$usertype'");
     if($sqlSel){
       
        $fetch = mysqli_fetch_array($sqlSel);
        if(($username==$fetch['phone']|| $username==$fetch['email']) && $password == $fetch['dbpassword']){
          
            $_SESSION['userActive'] = $usertype;
            $_SESSION['usercode'] = $fetch['user_id'];

            ?>
            <script>
                window.location.href = "dashboard/dashboard.php";
                localStorage.setItem("activepage","dashboardHomeContainer");
            </script>
            <?php
        }
        else {
            ?>
            <div class="alert alert-danger border-danger p-0 py-2 text-danger h6 px-1 mx-2">
                <span class='fa fa-info-circle'></span> try your login again  
                <button type="button" class="btn btn-close float-start"></button>
            </div>
            <?php
         }
        
     }
    
}

?>