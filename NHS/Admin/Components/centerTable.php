

<!-- Piece of code that represents centers data in the form of table from database. -->


<div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <a href="addCenters.php" class="btn btn-md btn-warning float-right">Add Center</a>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Center Name</th>
                                <th>Center Location</th>
                                <th>Center Address</th>
                                <th>Center Opening Hours</th>
                                <th>Center Average People</th>
                                <th>Center Status</th>
                                <th>Center Vaccines</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include 'php/dbConnect.php';
                            
                                $sql="SELECT * FROM Centers";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    { 
                                        $id=$row["id"];
                            ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['centerName']; ?></td>
                                <td><?php  echo $row['centerLocation']; ?></td>
                                <td><?php  echo $row['centerAddress']; ?></td>
                                <td><?php  echo substr($row['centerOpenTime'],0,5) ?> - <?php  echo substr($row['centerCloseTime'],0,5) ?></td>
                                <td><?php  echo $row['centerAveragePeople']; ?></td>
                                <td><?php  echo $row['centerStatus']; ?></td>
                                <td><?php  echo $row['centerVaccines']; ?></td>
                                <td><button class="btn btn-success center-edit-btn" data-toggle="modal" data-target="#centersModal" id="<?php echo $row['id'];?>">Edit</button></td>
                                <td><button class="btn btn-danger" onclick="location.href='Php/deleteCenter.php?id=<?php echo $row["id"]; ?>';">Delete</button></td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</div>


 