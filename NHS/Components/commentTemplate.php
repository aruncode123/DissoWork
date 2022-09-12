
<div class="container">
    <h1 class="text-center text-primary">FAQ</h1>
    <div class="comments-container">
        <?php
            // including database connection file
            include 'Php/dbConnect.php';

            // writting sql query for showing comments
            $sql="SELECT f.id,f.title,f.username,f.comment,r.is_closed FROM FAQ f LEFT JOIN Replies r ON f.id=r.faqId";

            // executing query to get the desired results
            $result=mysqli_query($connection,$sql);
           
            // checking if results have data or not
            if(mysqli_num_rows($result)>0)
                {
                    // loop into map the result into the html to make it in visible presentation form
                    while($row=mysqli_fetch_assoc($result))
                    {
                        // saving comment id for getting replies against that comment id
                        $commentId=$row['id'];
        ?>
        <ul id="comments-list" class="comments-list">
            <li>
                <div class="comment-main-level">
                    <div class="comment-box">
                        <div class="comment-head">
                            <span class="badge badge-primary float-left mr-2 py-2"><?php echo $row['is_closed']==1 ? "Closed" : null ?></span>
                            <h6 class="float-left text-muted"><?php echo $row['title']; ?></h6>
                            <h6 class="float-right text-primary"><?php echo $row['username']; ?></h6>
                        </div>
                        <div class="comment-content"><?php echo $row['comment'] ?></div>
                    </div>
                </div>
                <?php 
                     // writting sql query for showing replies of each comment if any
                    $sql1="SELECT * from Replies where faqId='$commentId'";
                    $result1=mysqli_query($connection,$sql1);
                    
                    if(mysqli_num_rows($result1)>0)
                    {
                        while($row1=mysqli_fetch_assoc($result1))
                        {
                ?>
                <!-- Comment list -->
                <ul class="comments-list reply-list">
                    <li>
                        <!-- Comment Container -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="float-left text-muted"><?php echo $row1['name']; ?></h6>
                            </div>
                            <div class="comment-content"><?php echo $row1['reply']; ?></div>
                        </div>
                    </li>
                </ul>
                <?php
                        }
                    } 
                ?>
            </li>
        </ul>
        <?php
                    }
                }
        ?>
    </div>
</div>
