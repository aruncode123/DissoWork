
<!-- Piece of code that represents login form code. -->

<!-- action here is the file where form values to be added in database -->
<form action="Php/login.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
      <div class="input-group-prepend">
        <span class="input-group-text">
          <i class="fa fa-paper-plane"></i>
        </span>                    
        <input type="email" name="email"  class="form-control ml-2" id="email" placeholder="Enter your Email" required>
      </div>
  </div>
  <div class="form-group">
      <div class="input-group-prepend">
        <span class="input-group-text px-3">
          <i class="fa fa-lock"></i>
        </span>                    
        <input type="password" name="password"  class="form-control ml-2" placeholder="Enter your password" required>
      </div>
  </div>

  <div class="text-center ">
      <button type="submit" name="login" class="btn btn-lg btn-primary tx-tfm btn-block">Login</button>
  </div>
</form>