<div class="container-fluid" id="user_info" style="display: none;">
	<div class="h5 text-center">User informations</div>
	<hr>
	<?php
	$selUser= $con->query("SELECT * from users where user_id='$usercode'");
	if($selUser->num_rows>0){
		$userFetch = mysqli_fetch_array($selUser);
		$fname = $userFetch['fname'];
		$lname = $userFetch['lname'];
		$email = $userFetch['email'];
		$phone = $userFetch['phone'];
		$sex = $userFetch['sex'];
		$userty= $userFetch['usertype'];

		?>
         <div class="container my-2 col-sm-11 col-md-6 col-md-5 text-secondary border shadow rounded">
         	<div class="row m-0 p-0 h6">
         		<div class="col text-secondary">User loged id</div>
         		<div class="col text-info"><?=$userty?></div>
         	</div><hr>
         	<div class="row m-0 p-0">
         		<div class="col-12 text-secondary">Names</div>
         		<div class="col text-info"><?=$fname?></div>
         		<div class="col text-info"><?=$lname?></div>
         	</div>
              <hr>
         	<div class="row m-0 p-0">
         		<div class="col text-secondary">Sex</div>
         		<div class="col text-info"><?=$sex?></div>
         	</div>
         	<hr>
         	<div class="row m-0 p-0">
         		<div class="col text-secondary">email</div>
         		<div class="col text-info"><?=$email?></div>
         	</div>
         	<hr>
         	<div class="row m-0 p-0">
         		<div class="col text-secondary">phone</div>
         		<div class="col text-info"><?=$phone?></div>
         	</div>
         	<hr>
         </div>
		<?php
	}

	?>
</div>