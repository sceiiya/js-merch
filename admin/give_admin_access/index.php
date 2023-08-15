<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>New Admin Grant</title>
</head>

<body class="admin_dashboard">

<?php include("../../includes/admin/admin_nav.php") ?>
<?php include("../../includes/admin/admin_position.php") ?>

<div class="modal" id="ConfirmNewAdminModal">
  <div class="modal-dialog">
    <div class="modal-content bg-transparent border-0">

      <div class="add-list-cont">

        <span><h3 class="txtc mb-4">Are you sure you want to give access to this person?</h3></span>

        <!-- Yes? button -->
        <button type="button" id="confirm_new_admin" class="btn btn-warning btn-block mb-4">Yes</button>
        <button type="button" id="addNotSure" class="btn btn-warning btn-block mb-4">No</button>
        <!-- Register buttons -->
        <div class="text-center">
        </div>
      </div>

    </div>
  </div>
</div>

<?php include("../../includes/admin/admin_nav.php") ?>

<main class="admin-logAccess">

<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>
      <div class="text-center mb-3">
        <p>ADD NEW ADMIN</p>
      </div>
      <!-- Name input -->
      <div class="form-outline mb-4">
        <input type="text" id="AdminName" class="form-control" placeholder="Full Name"/>
      </div>

      <!-- Username input -->
      <div class="form-outline mb-4">
        <input type="text" id="AdminUname" class="form-control" placeholder="Username"/>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <input type="email" id="AdminEmail" class="form-control" placeholder="Email"/>
      </div>

      <!-- Potsition -->
      <div class="form-outline mb-4">
          <!-- <input type="text" id="" class="form-control" placeholder="Position"/> -->
          <label for="cars">Position</label>
          <select id="AdminPosition" name="Position">
            <option selected disabled>Access Scope</option>
            <option value="manager">Manager</option>
            <option value="supervisor">Supervisor</option>
            <option value="co-founder">Co-founder</option>
          </select>
      </div>

      <!-- Submit button -->
    </form>
    <button type="submit" class="btn btn-primary btn-block mb-4" id="addNewAdmin">Give Access</button>
  </div>
 
</div>
</main>
<!-- Pills content -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="/assets/js/new_admin_access.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/admin_navs.js"></script>
<script src="/assets/js/admin_access_validation.js"></script>
</html>

