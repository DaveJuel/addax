<?php
require '../includes/interface.php';
?>
<?php $title = "Add user" ?>
<?php ob_start(); ?>
<!--Adding user form-->
<div class="col-md-8">
    <form role="form" method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">First name</span>
                <input type="text" name="add_user_fname" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Last name</span>
                <input type="text" name="add_user_lname" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Other name</span>
                <input type="text" name="add_user_oname"  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">email</span>
                <input type="email" name="add_user_email" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Tel</span>
                <input type="text" name="add_user_tel" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Address</span>
                <input type="text" name="add_user_address" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">User type</span>
                <select name="add_user_type" class="form-control">
                    <option value="administrator">Administrator</option>
                    <option value="editor">Editor</option>                    
                </select>
            </div>
        </div>        
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Username</span>
                <input type="text" name="add_user_username" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Password</span>
                <input type="password" name="add_user_password" required class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Confirm password</span>
                <input type="password" name="add_user_password_confirmed" required class="form-control">
            </div>
        </div>		
        <div class="form-group">
            <div class="input-group">
                <input type="submit" class="btn btn-info" name="action" value="Add user"/>
            </div>
        </div>
        <div class="form-group">
            <span><?php echo $user->status; ?></span>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php
include '../layout/layout_main.php';
?>