
<!-- Piece of code that represents location data in the form of table from database. -->


<div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Faq Title</th>
                                <th>Faq Description</th>
                                <th>Reply</th>
                                <th>Is Closed</th>
                                <th>Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include 'Php/dbConnect.php';
                               
                                $sql="SELECT f.id,f.title,f.comment,r.reply,r.is_closed FROM FAQ f LEFT JOIN Replies r ON f.id=r.faqId";

                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    { 
                                        $id=$row["id"];
                            ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['title']; ?></td>
                                <td><?php  echo $row['comment']; ?></td>
                                <td><?php  echo $row['reply']; ?></td>
                                <td><?php  echo $row['is_closed'] == 1 ? "True" : "False"; ?></td>
                                <td><button class="btn btn-danger" onclick="location.href='replyFaq.php?id=<?php echo $row["id"]; ?>';">Reply</button></td>
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


 