<div class="container-fluid" id="user_settings" style="display: none;">
	<div class="h5 text-center">User Account Settings</div>
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
		$dbpassword= $userFetch['dbpassword'];
	}

	// change password here

	if (isset($_POST['changePassword'])) {
		$oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
		$confirm = $_POST['confirm'];
if (($oldPass==$dbpassword)&&($newPass==$confirm)) {
	$changpasw = $con->query("UPDATE users set dbpassword='$newPass' where user_id='$usercode'");
	if($changpasw){
		?>
        <script type="text/javascript">alert("User Password Modified")</script>
		<?php
	}
}
else{
		?>
        <script type="text/javascript">alert("follow field Instructions/no empty field allowed")</script>
		<?php
	
}


	}

	?>

	<div class="container-fluid my-2">
		<div class="container card p-0 border-0 shadow col-lg-5 col-md-6 col-sm-11 p-0">
			<p class="py-2 text-center bg-dark text-light h6">Change Password</p>
		<form method="POST">
	        <div class="py-2 px-2">
	         	<!-- old Password here -->
	         	<label for="oldPassword" class="input-group-item">Old Password</label>
	         	<div class="input-group">
	         		<label for="oldPassword" class="input-group-item px-2 bg-secondary text-light"><span class="fa fa-key"></span></label>
	         		<input type="text" name="oldPass" class="form-control form-control-sm" id="oldPassword">
	         	</div>
	         	<!-- new Password here -->
	         	<label for="newPassword" class="input-group-item">new Password</label>
	         	<div class="input-group">
	         		<label for="newPassword" class="input-group-item px-2 bg-secondary text-light"><span class="fa fa-key"></span></label>
	         		<input type="text" name="newPass" class="form-control form-control-sm" id="newPassword">
	         	</div>
	         	<!-- confirm Password here -->
	         	<label for="RePassword" class="input-group-item">Re-Password</label>
	         	<div class="input-group">
	         		<label for="RePassword" class="input-group-item px-2 bg-secondary text-light"><span class="fa fa-key"></span></label>
	         		<input type="text" name="confirm" class="form-control form-control-sm" id="RePassword">
	         	</div>
	         	<div class="py-2 text-start shadow">
	         		<button type="submit" name="changePassword" class="btn btn-sm btn-outline-primary px-3 ">Change Password</button>
	         	</div>
	        </div>			
		</form>
		</div>
	</div>

</div>

