


<!-- Piece of code that represents vaccine data in the form of table from database. -->


<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <a href="addVaccine.php" class="btn btn-md btn-warning float-right">Add Vaccine</a>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Vaccine</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                                include 'php/dbConnect.php';
                                
                                $sql="SELECT * FROM Vaccines";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    { 
                                        $id=$row["id"];
                            ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['vaccine']; ?></td>
                                <td><button class="btn btn-success vaccine-edit-btn" data-toggle="modal" data-target="#vaccineModal" id="<?php echo $row['id'];?>">Edit</button></td>
                                <td><button class="btn btn-danger" onclick="location.href='Php/deleteVaccine.php?id=<?php echo $row["id"]; ?>';">Delete</button></td>
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


 