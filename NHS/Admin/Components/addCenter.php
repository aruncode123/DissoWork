
<!-- Piece of code that represents form for entering center values in database. -->


<section>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row align-items-center">
          <div class="col-xl-6 col-12 mb-4 mb-xl-0">
            <h3 class=" text-center mb-3 text-danger font-weight-bold">Add Center</h3>
            <div class="container">
              <form method="POST" action="Php/addCenter.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">Center Name</label>
                    <input type="text" name="centerName" class="form-control border border-dark" placeholder="Enter Center Name" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Select Center Location</label>
                    <select class="form-control border border-dark" name="centerLocation">
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
                    <input type="text" name="centerAddress" class="form-control border border-dark" placeholder="Enter Center Address" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Center Open Time</label>
                    <input type="time" name="centerOpenTime" class="form-control border border-dark" placeholder="Enter Center Address" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Center Close Time</label>
                    <input type="time" name="centerCloseTime" class="form-control border border-dark" placeholder="Enter Center Address" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Average People in Center</label>
                    <input type="number" name="centerAveragePeople" class="form-control border border-dark" placeholder="Enter Number" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">Mark Center As</label>
                    <select class="form-control border border-dark" name="centerStatus">
                      <option value="">Select Status</option>
                      <option value="Busy">Busy</option>
                      <option value="Normal">Normal</option>
                    </select>
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
                        <input type="checkbox" class="form-check-input" name="centerVaccines[]" value="<?php  echo $row['vaccine']; ?>">
                        <label class="form-check-label"><?php  echo $row['vaccine']; ?></label>
                      </div>
                    <?php
                            }
                        }
                    ?>
                  </div>
                  <button type="submit" name="addCenter" class="btn btn-lg btn-danger btn-lg">Add Center</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>