


<!-- Piece of code that represents form for replying faq -->



<section>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
        <div class="row align-items-center">
          <div class="col-xl-6 col-12 mb-4 mb-xl-0">
            <h3 class=" text-center mb-3 text-danger font-weight-bold">Reply FAQ</h3>
            <div class="container">
              <form method="POST" action="Php/faqReply.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="font-weight-bold">FAQ Id</label>
                    <input type="text" name="faqId" class="form-control border border-dark" value="<?php echo $_GET["id"]; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-bold">FAQ Reply</label>
                    <textarea name="faqReply" class="form-control border border-dark" placeholder="Enter FAQ Reply" rows="4" required></textarea>
                  </div>
                  <div class="form-check py-3">
                      <input type="checkbox" class="form-check-input" name="closed" value="1">
                      <label class="form-check-label">Mark as Closed</label>
                  </div>
                  <button type="submit" name="replyFaq" class="btn btn-lg btn-danger btn-lg">Reply FAQ Vaccine</button>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>