

<!-- Piece of code that represents FAQ form code. -->

<div class="container mt-5">
  <div class="row">
   
    <div class="col-sm-6">
    <!--   action here is the file where form values to be added in database -->
      <form action="Php/addFaq.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
          <label for="faqTitle">FAQ Title</label>
          <input type="text" class="form-control" id="faqTitle" name="faqTitle"></textarea>
        </div>
        <div class="form-group">
          <label for="comment">FAQ Description</label>
          <textarea class="form-control" id="comment" rows="4" name="faqDescription"></textarea>
        </div>
        <button type="submit" name="addFaq" class="btn btn-lg btn-primary">Add FAQ</button>
      </form>
    </div>
    <div class="col-sm-3"></div>
  </div>
</div>
