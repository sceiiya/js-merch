<div class="modal" id="changePassModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Password</h5>
      </div>
      <div class="modal-body">

        <form>

          <div class="form-outline mb-4">
            <input type="text" id="oldPass" class="form-control" />
            <label class="form-label" for="form2Example1">Current Password</label>
          </div>


          <div class="form-outline mb-4">
            <input type="text" id="newPass" class="form-control" />
            <label class="form-label" for="form2Example2">New Password</label>
          </div>

          <div class="form-outline mb-4">
            <input type="text" id="confirmPass" class="form-control" />
            <label class="form-label" for="form2Example3">New Password</label> </br>
            <span id='message'></span>
          </div>

        </form>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="saveNewPass" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>