<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Login</h1>
        <form action="<?=  base_url()?>index.php/users/login/" method="post" class="form_set">
            <div class="form-group">
                <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }?>
                <p><span>Username</span><input class="form-control" type="text" name="username" value="" /></p>
                <p><span>Password</span><input class="form-control" type="password" name="password" value="" /></p>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="btn btn-primary" type="submit" name="add" value="Login" /></p>
            </div>
        </form>
    </div>
</div>