<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <div class="success-message" style="color: green;">
            <?php if($success == 1) {echo "This post has been updated";}?>
        </div>
        <h1>Edit Post</h1>
        <form action="<?=  base_url()?>index.php/blog/editpost/<?=$post['post_id']?>" method="post"  class="form_set">
            <div class="form-group">
                <p>
                    <span>Title</span>
                    <input class="form-control" type="text" name="post_title" value="<?=$post['post_title'];?>" />
                </p>
                <p>
                    <span>Description</span>
                    <textarea class="textarea form-control" rows="8" cols="50" name="post"><?=$post['post'];?></textarea>
                </p>
                <p style="padding-top: 15px">
                    <span>&nbsp;</span>
                    <input class="btn btn-primary" type="submit" name="add" value="Update" />
                </p>
            </div>
        </form>
    </div>
</div>
