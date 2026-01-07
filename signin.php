<?php 
// configs and database Connection
include_once "config/core.php";
include_once "config/database.php";
include_once "objects/user.php";
print_r($_SESSION);

$page_title = "Signin";
include_once "layout_head.php"; 

$database = new Database();
$db = $database->getConnection();

$user = new User($db);


$require_login = false;
include_once "login_checker.php";
$access_denied = false;
include_once 'layout_head.php';

if($_POST){
    include_once "config/database.php";
    include_once "objects/user.php";

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $user->email_address=$_POST['email_address'];
    $email_exist = $user->emailExists();
    
    //validate the login creds

    if ($email_exist && password_verify($_POST['password'], $user->password)) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['firstname'] = $user->firstname;
        $_SESSION['lastname'] = $user->lastname;
        $_SESSION['role'] = $user->role;
        $_SESSION['logged_in'] = true;

        if ($user->role == "Admin") {
            $_SESSION['isAccessible'] = true;
            header("location:{$home_url}user/admin/index.php?action=login_success");
        }else{
            header("location:{$home_url}user/farmer/index.php?action=login_success");
        }
    }else{
        $access_denied = true;
    }
  include_once 'alert-message.php';
}


?>

  <main class="login-viewport">
    <div class="container-lg h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
          <div class="login-card p-4">
            <h2 class="login-title text-center">Login</h2>

    
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="signupForm">
              <div class="mb-3">
                <label class="form-label small text-muted">Email</label>
                <input type="email" class="form-control form-control-sm" name="email_address" placeholder="" required>
              </div>

              <div class="mb-2 position-relative">
                <label class="form-label small text-muted">Password</label>
                <div class="input-group input-group-sm">
                  <input type="password" class="form-control" name="password" placeholder="">
                  <button class="btn btn-outline-secondary btn-sm toggle-pass" type="button" aria-label="Show password" required>
                    <i class="fa-regular fa-eye"></i>
                  </button>
                </div>
              </div>

              <div class="text-end mb-3">
                <a href="#" class="small text-muted forgot-link">Forgot Password?</a>
              </div>

              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-outline-dark btn-sm login-btn">Login</button>
              </div>

              <div class="text-center small muted-divider">
                <span class="divider-line"></span>
                <span class="divider-text">Don't have an Account?</span>
                <span class="divider-line"></span>
              </div>

              <div class="text-center mt-3">
                <a href="signup.php" class="create-link">Create an Account</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap + page JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/login.js"></script>
</body>
</html>
