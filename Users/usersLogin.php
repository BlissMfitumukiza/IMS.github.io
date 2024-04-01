<div class="container-fluid" id="homepageLogin" style="display: none;">
    <div class="container my-5 col-sm-12 col-md-5 col-lg-4">
        <div class="card m-0 p-0 shadow ">
            <div class="container-fluid bg-dark text-light h6 text-center py-2">
                User Login Form
            </div>
            <?php require'userLogin.php'?>
            <!-- <div class="row m-0 p-0 container">
                <div class="col-1">
                    <span class="spinner spinner-border"></span>
                </div>
                <div class="col-10 px-3">detecting user <span class="fa fa-hourglass-3 spinner-border border-0"></span></div>
            </div> -->
            <div class="container">
                <span class="" id="waightMsg"></span>
            </div>
            <form action="" method="post">
                 <div class="container-fluid">
                    <!-- input usertype disabled -->
                    <input type="text" name="usertype" id="getUserType" value="" hidden>
                    <label for="username" class="text-secondary">username</label>
                    <div class="input-group">
                        <span class="input-group-item input-group-prepend border border-secondary px-2">
                            <i class="fa fa-info-circle"></i>
                        </span>
                        <input type="text" name="username" id="username" class="form-control form-control-sm rounded-0 border-secondary">
                    </div>
                </div>
                <div class="container-fluid my-3">
                    <label for="password" class=" text-secondary">Password</label>
                    <div class="input-group">
                        <span class="input-group-item input-group-prepend border border-secondary border-right-0 left-rounded px-2">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" name="password" id="password" class="form-control form-control-sm  border-secondary border-left-0 right-rounded">
                    </div>
                    <div class="container-fluid my-4 col-12 p-0">
                        <button type="submit" name="login" class="btn btn-success  btn-sm float-start rounded-0"><span class="fa fa-lock"></span> Login</button>
                    </div>
                </form>
           <div class="border border-success"></div>
                <div class="container-fluid bg-light px-0">
                    <span>
                        <a href="" class="link">forgot password?</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // define userget Identifier
    let getUserType = document.querySelector('#getUserType');
    // Function to handle button clicks
function handleButtonClick(event) {
    // Get the ID of the button clicked
    const buttonId = event.target.id;
    
    // Store the ID in local storage under the key "userNow"
    localStorage.setItem("userNow", buttonId);
    
    // Get the waiting message span
    const waitMsgSpan = document.getElementById("waightMsg");
    
    // Add spinner while waiting for 5 seconds
    waitMsgSpan.innerHTML = '<span class="spinner-border"></span> Waiting...';
    
    // Wait for 5 seconds
    setTimeout(function() {
        // Get the stored ID from local storage
        const storedId = localStorage.getItem("userNow");
        
        // Display the stored ID as a message
        waitMsgSpan.innerHTML = "<span class='text-info h6'><span class='fa fa-check-circle'></span> User: </span><span class='text-Successess h6'>" + storedId +"</span>";
        getUserType.value= storedId;
        // Remove spinner after displaying message
        waitMsgSpan.querySelector('.spinner-border').remove();
        
    }, 3000); // 5 seconds
}

// Add event listeners to the buttons
document.getElementById("coordinator").addEventListener("click", handleButtonClick);
document.getElementById("logistic").addEventListener("click", handleButtonClick);
document.getElementById("hod").addEventListener("click", handleButtonClick);

// document.getElementById("waightMsg").textContent = "User: " + localStorage.getItem("userNow");
document.getElementById("waightMsg").innerHTML = "<span class='text-info h6'><span class='fa fa-check-circle'></span> User: </span><span class='text-Successess h6'>" + localStorage.getItem("userNow") +"</span>";
// localStorage.setItem("userNow","");
getUserType.value= localStorage.getItem("userNow");
if(localStorage.setItem("userNow")==""){
    document.getElementById("waightMsg").innerHTML = "<span class='text-info h6'><span class='fa fa-check-circle'></span> User: </span><span class='text-Successess h6'> No User found</span>";
    getUserType.value="";
}
</script>
