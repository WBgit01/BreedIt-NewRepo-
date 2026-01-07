<div class="card shadow-sm rounded-3 mb-3">
  <div class="card-body">

    <!-- Title -->
    <h6 class="fw-bold mb-3 text-uppercase">Pig Management</h6>

    <!-- Navigation Buttons -->
    <div class="d-flex flex-wrap gap-2">

        <a href="<?= $base_url ?>user/admin/livestock/management/overview.php"
            class="btn btn-outline-success btn-sm <?= $page_title === 'Overview' ? 'active' : '' ?>" >
            <i class="bi bi-grid me-1"></i> Pig Overview
        </a>

        <a class="btn btn-outline-success btn-sm <?= $page_title === 'Farmer Record' ? 'active' : '' ?>">
        <i class="bi bi-people me-1"></i> Farmer Records
        </a>

        <a class="btn btn-outline-success btn-sm <?= $page_title === 'Health Monitoring' ? 'active' : '' ?>">
        <i class="bi bi-heart-pulse me-1"></i> Health Monitoring
        </a>

        <a class="btn btn-outline-success btn-sm <?= $page_title === 'Breeding Record' ? 'active' : '' ?>">
        <i class="bi bi-diagram-3 me-1"></i> Breeding Records
        </a>

        <a href="<?= $base_url ?>user/admin/livestock/management/livestock_registration.php"
            class="btn btn-outline-success btn-sm <?= $page_title === 'Register New Pig' ? 'active' : '' ?>">
            <i class="bi bi-plus-circle me-1"></i> Register New Pig
        </a>
    </div>
  </div>
</div>