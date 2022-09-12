

<!-- Piece of code that represents form for entering news values in database. -->


<section>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row align-items-center">
          <div class="col-xl-6 col-12 mb-4 mb-xl-0">
            <h3 class=" text-center mb-3 text-danger font-weight-bold">Add News</h3>
            <div class="container">
              <form method="POST" action="Php/addNews.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">News Title</label>
                    <input type="text" name="newsTitle" class="form-control border border-dark" id="in" placeholder="Enter News Title" required>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">News Description</label>
                    <textarea class="form-control border border-dark" name="newsDescription" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">News Date</label>
                    <input type="date" name="newsDate" class="form-control border border-dark" required>
                  </div>
                  <button type="submit" name="addNews" class="btn btn-lg btn-danger btn-lg">Add News</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>