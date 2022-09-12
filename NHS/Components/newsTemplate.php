
<!-- Piece of code that represents news data that are fetching from database. -->

<section>
  <div class="container mt-5">
    <h3 class="text-center">News</h3>
    <?php 
          // including database connection file
          include 'Php/dbConnect.php';

          // writting sql query for showing News
          $sql="SELECT * FROM News";

          // executing query to get the desired results
          $result=mysqli_query($connection,$sql);

          // checking if results have data or not
          if(mysqli_num_rows($result)>0)
          {
            // loop into map the result into the html to make it in visible presentation form
              while($row = mysqli_fetch_array($result))
              { 
                  $id=$row["id"];
      ?>
    <div class="card mb-5">
      <div class="card-body">
        <div class="text-muted h7 mb-2"> <i class="fa fa-calendar"></i><?php  echo $row['newsDate']; ?></div>
        <a class="card-link" href="#">
            <h5 class="card-title"><?php  echo $row['newsTitle']; ?></h5>
        </a>
        <p class="card-text"><?php  echo $row['newsDescription']; ?></p>
      </div>
    </div>

     <?php
              }
          }
      ?>
  </div>
</section>