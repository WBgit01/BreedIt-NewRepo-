<?php
// login checker for 'admin' access level
// if access level was not 'Admin', redirect him to login page
// if(isset($_SESSION['access_level']) && $_SESSION['access_level']=="Admin"){
//     header("Location: {$home_url}admin/index-admin.php?action=logged_in_as_admin");
// }

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] == "Admin"){
    // if user is an admin and trying to access login or register page, redirect
    if($page_title == "Login" || $page_title == "Register"){
        header("Location: {$home_url}admin/index.php?action=already_logged_in");
        exit(); // Prevent further execution
    }
}
// if $require_login was set and value is 'true'
else if(isset($require_login) && $require_login == true){
    // if user not yet logged in, redirect to login page
    if(!isset($_SESSION['role'])){
        header("Location: {$home_url}signin.php?action=please_login");
        exit(); // Prevent further execution
    }
}
else if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['role'] == "farmer"){
    if($page_title == "SignUp" || $page_title == "Signin" || $page_title == "Dashboard"){
        header("Location: {$home_url}user/farmer/index.php?action=already_logged_in");
        exit(); // Prevent further execution
    }
}

// Check for page accessibility if user is already logged in
else if ($require_login && !$isAccessible) {
    header("Location: {$home_url}user/index.php?action=access_denied");
    exit(); // Prevent further execution
}

// No problem, stay on current page
?>