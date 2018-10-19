<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>New Post</h1>
        <form action="<?=  base_url()?>index.php/blog/new_post/" method="post" class="form_set">
          <div class="form-group">
            <p><span>Title</span><input class="form-control" type="text" name="post_title" value="" /></p>
            <p><span>Description</span><textarea class="textarea form-control" rows="15" cols="50" name="post"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input  class="btn btn-primary" type="submit" name="add" value="Submit" /></p>
          </div>
        </form>
    </div>
</div>