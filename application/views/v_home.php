<div id="site_content">   
    <div id="content">
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
        { ?>
        <h2><a  class="btn btn-success" href="<?=  base_url()?>index.php/blog/new_post/" role="button">Create a new post</a></h2><hr>
        <?php } ?>
    <!-- insert the page content here -->
    <?php foreach($posts as $post)
    { ?>
    <h1><a href="<?=  base_url()?>index.php/blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h1>
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user')
        { ?>
        <p>
            <a href="<?=  base_url()?>index.php/blog/editpost/<?=$post['post_id']?>"><span class="glyphicon glyphicon-edit" title="Edit post"></span> Edit</a> | 
            <a style="color:#f77;" href="<?=  base_url()?>index.php/blog/deletepost/<?=$post['post_id']?>"><span  class="glyphicon glyphicon-remove-circle" title="Delete post"></span> Delete</a>
        </p>
       <?php }?>
        <p><?=  substr(strip_tags($post['post']), 0, 200).'...';?></p>
        <p><a href="<?=  base_url()?>index.php/blog/post/<?=$post['post_id']?>">Read More</a></p><hr>
    <?php
    }?>
    <?=$pages?>
    </div>
</div>