

<!-- Piece of code that represents login form code. -->


<form action="Php/signup.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <div class="input-group-prepend mb-2">
        <span class="input-group-text px-3">
          <i class="fa fa-user"></i>
        </span>                    
        <input type="text" name="name"  class="form-control ml-2" id="name" placeholder="Enter your Name" required>
      </div>
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
  <div class="form-group">
      <div class="input-group-prepend">
        <span class="input-group-text px-3">
          <i class="fa fa-lock"></i>
        </span>                    
        <input type="password" name="confirmPassword"  class="form-control ml-2" placeholder="Confirm your password" required>
      </div>
  </div>

  <div class="text-center ">
      <button type="submit" name="signup" class="btn btn-lg btn-primary tx-tfm btn-block">Sign up</button>
  </div>
</form>