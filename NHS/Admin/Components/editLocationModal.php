


<!-- piece of code that represents the location form for editing purpose that appears in the form of modal-->


<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="Php/updateLocation.php">
          <div class="form-group">
            <label class="font-weight-bold">Id</label>
            <input type="text" name="id" id="updateLocationId" class="form-control border border-dark" readonly > 
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Location</label>
            <input name="location" class="form-control border border-dark" id="updateLocation" required></input>  
          </div>
          <button type="submit" name="updateLocationBtn" class="btn btn-lg btn-success btn-lg" id="updateLocationBtn">Update Location</button>                  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>