<!-- Topbar -->
<header class="navbar navbar-expand-lg navbar-dark bg-dark px-3 mb-3" id="">

  <!-- Left section -->
  <div class="d-flex align-items-center">

    <!-- Burger (mobile only) -->
    <button
      id="burgerBtn"
      class="btn btn-outline-light me-2 d-lg-none"
      aria-label="Open sidebar"
    >
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Logo -->
    <img
      src="../../images/logo.png"
      alt="Breed-it logo"
      class="me-2"
      style="height:32px;"
    >

    <!-- Brand text -->
    <span class="navbar-brand fw-bold mb-0">BREED-IT</span>
  </div>

  <!-- Right section -->
  <div class="ms-auto d-flex align-items-center gap-3">

    <button class="btn btn-outline-light position-relative" title="Notifications">
      <i class="fa-regular fa-bell"></i>
    </button>

    <button class="btn btn-outline-light" title="Settings">
      <i class="fa-solid fa-gear"></i>
    </button>

    <!-- User dropdown -->
    <div class="dropdown">
      <button
        class="btn btn-outline-light dropdown-toggle"
        id="userDropdown"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        title="User"
      >
        <i class="fa-regular fa-user"></i>
      </button>

      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#">Account Settings</a></li>
        <li><a class="dropdown-item" href="#">Help</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
      </ul>
    </div>

  </div>
</header>

<!-- App shell -->
<div class="container-fluid p-0"></div>
