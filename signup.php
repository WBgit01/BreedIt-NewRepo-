<?php 
// configs and database Connection
include_once "config/database.php";
include_once "objects/user.php";

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$page_title = "Signup";
include_once "layout_head.php"; 

if ($_POST) {
    $user->firstname = $_POST['firstname'];
    $user->lastname = $_POST['lastname'];
    $user->address = $_POST['address'];
    $user->contactno = $_POST['contactno'];
    $user->role = 'farmer'; // default role
    $user->email_address = $_POST['email'];
    $user->password = $_POST['password'];

    if ($user->createUser()) {
        echo "<div class='alert alert-success'>User created successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to create user.</div>";
    }
}


?>

<!-- Centered signup area -->
  <main class="signup-viewport">
    <div class="container-lg h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
          <div class="signup-card p-4">
            <h2 class="signup-title text-center">Signup</h2>

              
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="signupForm">

                <div class="row gx-2 mb-3">
                  <div class="col">
                    <label class="form-label small text-muted">Firstname</label>
                    <input type="text" class="form-control form-control-sm" name="firstname" required />
                  </div>
                  <div class="col">
                    <label class="form-label small text-muted">Lastname</label>
                    <input type="text" class="form-control form-control-sm" name="lastname" required />
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label small text-muted">Address</label>
                  <input type="text" class="form-control form-control-sm" name="address" required />
                </div>

                <div class="mb-3">
                  <label class="form-label small text-muted">Phone number</label>
                  <input type="tel" class="form-control form-control-sm" name="contactno" placeholder="+63" required />
                </div>

                <div class="mb-3">
                  <label class="form-label small text-muted">Email</label>
                  <input type="email" class="form-control form-control-sm" name="email" required />
                </div>


                <div class="mb-3 position-relative">
                  <label class="form-label small text-muted">Password</label>
                  <div class="input-group input-group-sm">
                    <input type="password" class="form-control" name="password" required />
                    <button class="btn btn-outline-secondary btn-sm toggle-pass" type="button" aria-label="Show password">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>

                <div class="mb-3 position-relative">
                  <label class="form-label small text-muted">Confirm password</label>
                  <div class="input-group input-group-sm">
                    <input type="password" class="form-control" name="confirm_password" required />
                    <button class="btn btn-outline-secondary btn-sm toggle-pass confirm-toggle" type="button" aria-label="Show password">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                  </div>
                </div>

                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-outline-dark btn-sm signup-btn">Signup</button>
                </div>

                <div class="text-center small muted-divider">
                  <span class="divider-line"></span>
                  <span class="divider-text">Already have an Account?</span>
                  <span class="divider-line"></span>
                </div>

                <div class="text-center mt-3">
                  <a href="signin.php" class="create-link">Login</a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap + page JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../js/register.js"></script>
</body>
</html>