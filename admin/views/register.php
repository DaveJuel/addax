<?php include '../includes/interface.php'; ?>
<?php $title = 'Register' ?>
<?php ob_start() ?> 
<div class="row">
    <div class="col-md-3 center">
        <div class="login-box">
            <a href="login.php" class="logo-name text-lg text-center"><?php echo $main->appName; ?></a> 
            <p class="text-center m-t-md">Create account</p>
            <form class="m-t-md" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">   
                <div class="form-group">
                    <select class="form-control" id="country" onchange="setCountryCode(this)" name="country"  required>
                        <?php $main->listCountries(); ?>
                    </select>       
                </div>   
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" id="phone" onblur="checkPhone();" placeholder="phone" required>
                </div>    
                <label>
                    <input type="checkbox"> Agree the terms and policy
                </label>
                <input type="submit" class="btn btn-success btn-block m-t-xs" name="action" value="Sign up">
                <p class="text-center m-t-xs text-sm" id="status"><?php echo $user->status; ?></p>    
                <p class="text-center m-t-xs text-sm">Already have an account?</p>
                <a href="login.php" class="btn btn-default btn-block m-t-xs">Login</a>
            </form>
        </div>
    </div>
</div><!-- Row -->
<?php $content = ob_get_clean() ?>
<?php include '../layout/layout_login.php' ?>