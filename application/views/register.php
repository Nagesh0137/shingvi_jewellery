<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">
<head>
        

        <meta charset="utf-8" />
                <title>Manali | Manali - Admin & Dashboard School Software</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose School Admin & Dashboard Software Created & Crafted By Manali" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.ico">

       
         <!-- App css -->
         <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="<?=base_url()?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="<?=base_url()?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
         <style type="text/css">
    .bgImg {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), 
        url(https://img.freepik.com/premium-vector/business-sketches-white-backdrop-presentations-design-projects_906149-79752.jpg);
        background-size: cover;
        background-position: center;
    }
</style>

    </head>

    
    <!-- Top Bar Start -->
    <body class="bgImg">
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mt-3 mx-auto">
                            <div class="row">
                                <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top rounded-bottom mt-2">
                                    <div class="text-center p-2">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="<?=base_url()?>assets/logo.png" height="120" style="object-fit: contain;" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-1 mb-1 fw-semibold text-white fs-18">Create an account</h4>   
                                        <p class="text-muted fw-medium mb-0">Enter your detail to Create your account today.</p>  
                                    </div>
                                </div>
                                <div class="card-body pt-0 p-2">   
                                    <form class="my-4" action="<?=base_url()?>login/new_register" method="POST">            
                                <div class="row">                                 
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">School Name <span class="text-danger">*</span></label>
                                            <input type="text" required class="form-control" id="SchoolName" name="SchoolName" placeholder="Enter School Name">
                                        </div>
                                        <div class="form-group mb-2 col-md-6 float-left">
                                            <label class="form-label" for="useremail">School Type</label>
                                            <select required class="form-control form-select" name="SchoolType" required>
                                                <option>Public</option>
                                                <option>Private</option>
                                                <option>International</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2 col-md-6 float-left">
                                            <label class="form-label" for="username">School Registration No.(Optional)</label>
                                            <input type="text" required class="form-control" id="SchoolRegNo" name="SchoolRegNo" placeholder="Enter Registration No">
                                        </div>
                                        <div class="form-group mb-2 col-md-6">
                                            <label class="form-label" for="username">School Established Year <span class="text-danger">*</span></label>
                                            <input type="number" required class="form-control" id="SchoolEstablishedYear" name="SchoolEstablishedYear" placeholder="Enter Established Year">
                                        </div>
                                        <div class="form-group mb-2 col-md-6">
                                            <label class="form-label" for="mobileNo">School Mobile Number <span class="text-danger">*</span></label>
                                            <input type="text" required class="form-control" id="mobileNo" name="SchoolMobileNo" placeholder="Enter School Mobile Number">                               
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <label class="form-label" for="mobileNo">School Email <span class="text-danger">*</span></label>
                                            <input type="email" required class="form-control" id="EmailNo" name="SchoolEmail" placeholder="Enter School Email">
                                        </div>
                                        <div class="form-group mb-2 col-md-12">
                                            <label class="form-label" for="username">School Address <span class="text-danger">*</span></label>
                                            <textarea required class="form-control" id="SchoolAddress" name="SchoolAddress" placeholder="Enter School Address"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="username">School Motto <span class="text-danger">*</span></label>
                                            <textarea required class="form-control" id="SchoolMotto" name="SchoolMotto" placeholder="Enter School Motto"></textarea>
                                        </div>
                                        <div class="col-12 text-end">
                                            <button style="padding: 2px;font-size: 8px;vertical-align: middle;" class="btn text-center btn-sm btn-primary" onclick="generatePassword()">GENERATE PASSWORD &nbsp;&nbsp;<i class="fas fa-key"></i>
                                            </button>
                                            <button style="padding: 2px;font-size: 8px;vertical-align: middle;" class="btn text-center btn-sm btn-info" id="copyIcon" onclick="copyPassword()" style="display:none;" onclick="generatePassword()">COPY PASSWORD&nbsp;&nbsp;<i class="fas fa-copy" ></i>
                                            </button>
                                        </div>
                                        <div class="form-group mb-2 col-md-6">
                                            <label class="form-label" for="userpassword">Password <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input readonly type="password" required class="form-control bg-light" name="password" id="password" placeholder="Generate password">
                                                <span class="input-group-text" onclick="togglePassword('password', 'eyeIcon1')">
                                                    <i class="fas fa-eye" id="eyeIcon1"></i>

                                                </span>
                                            </div>
                                        </div>

                                        

                                        

                                        <div id="error-message" class="text-danger" style="display: none;">Passwords do not match or are invalid!</div>


                                        <div class="form-group row mt-3">
                                            <div class="col-12">
                                                <div class="form-check form-switch form-switch-success">
                                                    <input class="form-check-input" type="checkbox" id="customSwitchSuccess" required>
                                                    <label class="form-check-label" for="customSwitchSuccess">By registering you agree to the ManaliD School <a href="#" class="text-primary">Terms of Use</a></label>
                                                </div>
                                            </div> 
                                        </div>
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid mt-3">
                                                    <button class="btn btn-primary" type="submit" id="submit-btn">Sign In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                            </div> 
                                        </div>                           
                                    </div>
                                    </form>
                                    
                                    <div class="text-center">
                                        <p class="text-muted">Already have an account ?  <a href="<?=base_url()?>login" class="text-primary ms-2">Log in</a></p>
                                    </div>
                                </div>
                                
                            </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>                                        
    </div>
    <script type="text/javascript">
        // Password Validation Functionality
const passwordInput = document.getElementById("password");
const errorMessage = document.getElementById("error-message");
const submitBtn = document.getElementById("submit-btn");

function validatePasswords() {
    const password = passwordInput.value;

    // Regular expression to check if the password contains at least one number, one letter, and is at least 8 characters long
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (!passwordRegex.test(password)) {
        errorMessage.style.display = "block";
        submitBtn.disabled = true;
    } else {
        errorMessage.style.display = "none";
        submitBtn.disabled = false;
    }
}

// Add event listeners for password validation
passwordInput.addEventListener("keyup", validatePasswords);

// Toggle password visibility
function togglePassword(fieldId, eyeIconId) {
    const passwordField = document.getElementById(fieldId);
    const eyeIcon = document.getElementById(eyeIconId);
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}

// Password Generator Functionality
function generatePassword() {
    const chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    let password = "";
    for (let i = 0; i < 10; i++) {
        password += chars.charAt(Math.floor(Math.random() * chars.length));
    }

    // Show generated password in an alert
    alert("Password Generated Successfully: ");

    // Set password fields and validate
    passwordInput.value = password;
    validatePasswords();  // Validate the generated password

    // Show copy icon after password is generated
    document.getElementById("copyIcon").style.display = "inline-block";
}

// Copy password to clipboard
function copyPassword() {
    const password = passwordInput.value;

    navigator.clipboard.writeText(password)
        .then(() => {
            alert("Password copied to clipboard!");
        })
        .catch(err => {
            console.error("Error copying password: ", err);
        });
}

    </script>
    </body>
</html>
