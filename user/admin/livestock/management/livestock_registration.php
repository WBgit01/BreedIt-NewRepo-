<?php
// include the core and database
include_once "../../../../config/core.php";
include_once "../../../../config/database.php";

$page_title = "Register New Pig";
$require_login = true;
include_once "../../../../login_checker.php";
include_once "../../layout/layout_head.php";

// include the navbar
include_once "navbar.php";
?>

<div class="card shadow-sm rounded-4 mb-4">
  <div class="card-body">

    <!-- Header -->
    <h5 class="fw-bold text-uppercase mb-4">Register a Pig</h5>

    <!-- Farmer Identification -->
    <h6 class="fw-semibold mb-3">Farmer Identification</h6>
    <div class="row g-3 mb-4">

      <div class="col-md-4">
        <label class="form-label">Farmer</label>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Juan Dela Cruz" readonly>
          <button class="btn btn-success btn-sm">Select</button>
        </div>
      </div>

      <div class="col-md-2">
        <label class="form-label">Municipal</label>
        <select class="form-select">
          <option>Torrijos</option>
        </select>
      </div>

      <div class="col-md-2">
        <label class="form-label">Farm Size (m²/ha)</label>
        <input type="number" class="form-control" placeholder="Farm Size">
      </div>

      <div class="col-md-2">
        <label class="form-label">Pen Count</label>
        <input type="number" class="form-control" placeholder="Pen Count">
      </div>

      <div class="col-md-2">
        <label class="form-label">Pig Count</label>
        <input type="number" class="form-control" value="2">
      </div>

    </div>

    <!-- Physical Information -->
    <h6 class="fw-semibold mb-3">Physical Information</h6>
    <div class="row g-3 mb-4">

      <div class="col-md-3">
        <label class="form-label">TAG ID</label>
        <input type="text" class="form-control" value="E02129" readonly>
      </div>

      <div class="col-md-3">
        <label class="form-label">Breed</label>
        <select class="form-select">
          <option>Select Breed</option>
        </select>
      </div>

      <div class="col-md-2">
        <label class="form-label">Sex</label>
        <select class="form-select">
          <option>Select</option>
        </select>
      </div>

      <div class="col-md-2">
        <label class="form-label">Color</label>
        <select class="form-select">
          <option>Select</option>
        </select>
      </div>

      <div class="col-md-2">
        <label class="form-label">Weight (kg)</label>
        <input type="number" class="form-control" placeholder="Weight">
      </div>

      <div class="col-md-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" class="form-control">
      </div>

      <div class="col-md-3">
        <label class="form-label">Purpose</label>
        <select class="form-select">
          <option>Fattening</option>
          <option>Breeding</option>
        </select>
      </div>

      <div class="col-md-3">
        <label class="form-label">Current Status</label>
        <select class="form-select">
          <option>Alive</option>
          <option>Sold</option>
          <option>Deceased</option>
        </select>
      </div>

    </div>

    <!-- Actions -->
    <div class="d-flex justify-content-end gap-2">
      <button class="btn btn-outline-danger btn-sm">
        Clear
      </button>
      <button class="btn btn-success btn-sm fw-semibold">
        Save
      </button>
    </div>

  </div>
</div>

<?php "../../layout/layout_foot.php";?>