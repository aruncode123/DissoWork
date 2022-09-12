


<!-- piece of code that represents the vaccine form for editing purpose that appears in the form of modal-->

<div class="modal fade" id="vaccineModal" tabindex="-1" role="dialog" aria-labelledby="vaccinemodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Vaccine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="Php/updateVaccine.php">
          <div class="form-group">
            <label class="font-weight-bold">Id</label>
            <input type="text" name="id" id="updateVaccineId" class="form-control border border-dark" readonly > 
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Vaccine</label>
            <input name="vaccine" class="form-control border border-dark" id="updateVaccine" required></input>  
          </div>
          <button type="submit" name="updateVaccineBtn" class="btn btn-lg btn-success btn-lg">Update Vaccine</button>                  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>