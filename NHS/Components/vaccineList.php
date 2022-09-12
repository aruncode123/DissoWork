

<!-- Piece of code that represents lists of locations that are fetching from database. -->

<section>
  <h3>VACCINES</h3>
  <ul class="list-group">
      <?php 
          // including database connection file
          include 'Php/dbConnect.php';
          
           // writting sql query for showing Vaccines
          $sql="SELECT * FROM Vaccines";

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
    <li class="list-group-item disabled"><?php  echo $row['vaccine']; ?></li>
      <?php
              }
          }
      ?>
  </ul>
</section>