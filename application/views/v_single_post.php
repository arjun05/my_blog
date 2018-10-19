<div id="site_content">
    <div id="content">
    <!-- insert the page content here -->
        <?php if(!isset($post))
            {echo "This page was accessed incorrectly";}
            else 
            {?>
                <h2><?=$post['post_title']?></h2>
                <p><?=$post['post']?></p>
                
                <hr>
                <h3>Comments</h3>
    <?php       
                if(count($comments) > 0)
                {
                    foreach ($comments as $row)
                    {?>
                <p><?= date('d-m-Y h:i A',strtotime($row['date_added']))?><br>
                <?=$row['comment'];?></p><hr>
            <?php   }
                }
                else 
                {
                    echo "<p>Currently, there are no comment.</p>";
                }
                
                if($this->session->userdata('user_id'))
                {?>
                    <form action="<?=  base_url()?>index.php/comments/add_comment/<?=$post['post_id']?>" method="post"  class="form_set">
                        <div class="form-group">
                            <p>
                                <span>Comment</span>
                                <textarea class="textarea form-control" rows="8" cols="100" name="comment"></textarea>
                            </p>
                            <p style="padding-top: 15px">
                                <span>&nbsp;</span>
                                <input class="btn btn-primary" type="submit" name="add" value="Add comment" />
                            </p>
                        </div>
                    </form>
               <?php 
               
                }
                else {
                ?>
                <a href="<?=  base_url()?>index.php/users/login">Login to comment</a>
        <?php    }
            }?>   
    </div>
</div>