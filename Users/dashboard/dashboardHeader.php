<div class="row m-0 p-0 bg-dark">
    <div class="col-sm-4 col-md-3 col-lg-3 h1 text-info" style="font-family: Colonna MT; text-shadow:1px 8px 2px darkgray; ">IMS D<span class='text-light'>ash<span class='text-info'>B</span>oard</span> </div>
    <div class="col-sm-8 col-md-9 col-lg-9 py-2">
        <span class="text-light h6 ">
             <span class="text-info h5">I</span>nventory <span class="text-info h5">M</span>anagement <span class="text-info h5">S</span>ystem 
        </span>
        <div class="col-3 float-start">
            <div class="dropdown" onmouseleave="document.querySelector('.login-Dropdown').style.display='none'">
                <button type="button" class="btn btn-sm btn-outline-info  dropdown-toggle" data-toggle="dropdown" onmouseover="document.querySelector('.login-Dropdown').style.display='block'">
                    <span class="far fa-user"></span> User Menu
                </button>
                <div class="dropdown-menu login-Dropdown" style="text-align: left;">
                  <a class="dropdown-item btn btn-sm btn-outline-primary rounded-0" href="#" id="userSetting"><span class="fa fa-cog"></span> Settings</a>
                  <a class="dropdown-item btn btn-sm btn-outline-primary rounded-0" href="#" id="userInformation"> <span class="fa fa-info-circle"></span> user info</a>
                  <a href="include/logout.php" class="dropdown-item btn btn-sm btn-outline-primary rounded-0" href="#" id="hod"><span class="fa fa-sign-out"></span> Logout <?=$user_1?></a>
                </div>
              </div>
        </div>
    </div>
    <div class="row container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-lg bg-dark p-0">


<ul class="navbar-nav nav-dark">
  <li class="nav-item ">
    <a class="nav-link" href="#" id="dashboardHome"><span class="fa fa-home"></span> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" class="px-3 " id="dashboardRegister"><span class="fa fa-file-word"></span> register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="?page=1" class="px-3 " id="dashboardRequest"><span class="fa fa-share-square"></span> Request</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" class="px-3 dashboardWaitR" id="dashboardApprove"><span class="fa fa-spinner"></span> Waited Request</a>
  </li>
</ul>

</nav>
    </div>
</div>

