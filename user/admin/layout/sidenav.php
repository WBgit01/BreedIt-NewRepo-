<!-- Sidebar -->
<aside
  id="sidebar"
  class="sidebar position-fixed top-0 start-0 vh-100 bg-dark text-light d-flex flex-column p-3 d-none d-lg-flex"
  style="width: 260px; z-index: 1040;"
>
  <!-- Close button (mobile only) -->
  <div class="d-lg-none mb-3 text-end">
    <button
      id="sidebarCloseBtn"
      class="btn btn-sm btn-outline-light"
      aria-label="Close sidebar"
    >
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>

  <nav class="nav nav-pills flex-column gap-1">

    <a href="/admin_dashboard"
       class="nav-link text-light <%= current_page === 'admin_dashboard' ? 'active' : '' %>">
      <i class="fa-solid fa-border-all me-2"></i>
      Dashboard
    </a>

    <a href="/pigmanagement_overview"
       class="nav-link text-light <%= current_page === 'pigmanagement_overview' ? 'active' : '' %>">
      <i class="fa-brands fa-github me-2"></i>
      Pig Management
    </a>

    <a href="/breed_analysis"
       class="nav-link text-light <%= current_page === 'breed_analysis' ? 'active' : '' %>">
      <i class="fa-solid fa-chart-line me-2"></i>
      Breed Analysis
    </a>

    <a href="/reports"
       class="nav-link text-light <%= current_page === 'reports' ? 'active' : '' %>">
      <i class="fa-regular fa-file-lines me-2"></i>
      Reports
    </a>

    <a href="/farmers_report"
       class="nav-link text-light <%= current_page === 'farmers' ? 'active' : '' %>">
      <i class="fa-regular fa-user me-2"></i>
      Farmers
    </a>

  </nav>
</aside>

<!-- Overlay (mobile) -->
<div id="overlay"
     class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-none"
     style="z-index: 1030;">
</div>
