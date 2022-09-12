

<!-- piece of code that represents the center form for editing purpose that appears in the form of modal-->


<div class="modal fade" id="centersModal" tabindex="-1" role="dialog" aria-labelledby="centerModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Center</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="Php/updateCenter.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">Id</label>
                    <input type="text" name="updateCenterId" id="updateCenterId" class="form-control border border-dark" readonly > 
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Center Name</label>
                    <input type="text" name="updateCenterName" id="updateCenterName" class="form-control border border-dark" placeholder="Enter Center Name" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Select Center Location</label>
                    <select class="form-control border border-dark" name="updateCenterLocation" id="updateCenterLocation">
                       <option value="">Select Location</option>
                      <?php 
                        include 'Php/dbConnect.php';
                        
                        $sql="SELECT * FROM Locations";
                        $result=mysqli_query($connection,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_array($result))
                            { 
                                $id=$row["id"];
                    ?>
                      <option value="<?php  echo $row['location']; ?>"><?php  echo $row['location']; ?></option>
                      <?php
                            }
                        }
                    ?>
                    </select>
                  </div>
                 <div class="form-group">
                    <label class="font-weight-bold">Center Address</label>
                    <input type="text" name="updateCenterAddress" id="updateCenterAddress" class="form-control border border-dark" placeholder="Enter Center Address" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Center Open Time</label>
                    <input type="time" name="updateCenterOpenTime" id="updateCenterOpenTime" class="form-control border border-dark"required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Center Close Time</label>
                    <input type="time" name="updateCenterCloseTime" id="updateCenterCloseTime" class="form-control border border-dark" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Average People in Center</label>
                    <input type="number" name="updateCenterAveragePeople" id="updateCenterAveragePeople" class="form-control border border-dark" placeholder="Enter Number" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Mark center as</label>
                    <select class="form-control border border-dark" name="updateCenterStatus">
                      <option value="">Select Status</option>
                      <option value="Busy">Busy</option>
                      <option value="Normal">Normal</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Selected Vaccines</label>
                    <input type="text" name="selectedVaccines" id="selectedVaccines" class="form-control border border-dark" readonly="true">
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">What type of vaccines they have ?</label>
                    <?php 
                        include 'Php/dbConnect.php';
                        
                        $sql="SELECT * FROM Vaccines";
                        $result=mysqli_query($connection,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_array($result))
                            { 
                                $id=$row["id"];
                    ?>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="updateCenterVaccines[]" value="<?php  echo $row['vaccine']; ?>">
                        <label class="form-check-label"><?php  echo $row['vaccine']; ?></label>
                      </div>
                    <?php
                            }
                        }
                    ?>
                  </div>
                  <button type="submit" name="updateCenter" class="btn btn-lg btn-danger btn-lg">Update Center</button>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>