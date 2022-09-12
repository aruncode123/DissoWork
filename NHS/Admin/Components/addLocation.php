
<!-- Piece of code that represents form for entering location values in database. -->


<section>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row align-items-center">
          <div class="col-xl-6 col-12 mb-4 mb-xl-0">
            <h3 class=" text-center mb-3 text-danger font-weight-bold">Add Location</h3>
            <div class="container">
              <form method="POST" action="Php/addLocation.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">Location</label>
                    <input type="text" name="location" class="form-control border border-dark" id="in" placeholder="Enter Location" required>
                  </div>
                  <button type="submit" name="addLocation" class="btn btn-lg btn-danger btn-lg">Add Location</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>