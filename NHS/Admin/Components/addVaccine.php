


<!-- Piece of code that represents form for entering vaccine values in database. -->



<section>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row align-items-center">
          <div class="col-xl-6 col-12 mb-4 mb-xl-0">
            <h3 class=" text-center mb-3 text-danger font-weight-bold">Add Vaccine</h3>
            <div class="container">
              <form method="POST" action="Php/addVaccine.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">Vaccine Name</label>
                    <input type="text" name="vaccine" class="form-control border border-dark" id="in" placeholder="Enter Vaccine Name" required>
                  </div>
                  <button type="submit" name="addVaccine" class="btn btn-lg btn-danger btn-lg">Add Vaccine</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>