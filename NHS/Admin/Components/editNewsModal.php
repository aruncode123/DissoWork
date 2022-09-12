


<!-- piece of code that represents the news form for editing purpose that appears in the form of modal-->


<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="newsmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="Php/updateNews.php">
          <div class="form-group">
            <label class="font-weight-bold">Id</label>
            <input type="text" name="id" id="updateNewsId" class="form-control border border-dark" readonly > 
          </div>
          <div class="form-group">
            <label class="font-weight-bold">News Title</label>
            <input name="newsTitle" type="text" class="form-control border border-dark" id="updateNewsTitle" required></input>  
          </div>
          <div class="form-group">
            <label class="font-weight-bold">News Description</label>
            <textarea name="newsDescription" class="form-control border border-dark" rows="4" id="updateNewsDescription" required></textarea>  
          </div>
          <div class="form-group">
            <label class="font-weight-bold">News Date</label>
            <input name="newsDate" type="date" class="form-control border border-dark" required></input>  
          </div>
          <button type="submit" name="updateNewsBtn" class="btn btn-lg btn-success btn-lg" >Update News</button>                  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>