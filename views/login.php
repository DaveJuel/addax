<?php
require '../includes/interface.php';
$title = "Login";
?>
<?php ob_start(); ?>
    <div class="row">
        <div class="col-md-6 center">
            <div class="login-box panel panel-white">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="logo-name text-lg"><?php echo $main->appName; ?></a>
                            <p class="login-info"><b><?php echo $main->appName; ?></b> is a premium Web Application Admin Dashboard built on top of Twitter Bootstrap 3.3.4 Framework and Redbean library.<br>
                                It was created to be the most functional, clean and well designed theme for any types of backend applications.We have carefully designed all common elements.</p>
                            <div class="btn-group btn-group-justified m-t-sm" role="group" aria-label="Justified button group">
                                <a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                                <a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                                <a href="#" class="btn btn-google"><i class="fa fa-google-plus"></i> Google+</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <div class="form-group">
                                    <input type="text" name="log_username" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="log_password" class="form-control" placeholder="Password" required>
                                </div>
                                <input type="submit" class="btn btn-success btn-block" name="action" value="Login">
                                <p class="display-block text-center m-t-md text-sm"><?php echo $user->status; ?></p>
                                <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                <a href="register.php" class="btn btn-default btn-block m-t-md">Create an account</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Row -->

<?php $content = ob_get_clean(); ?>
<?php include '../layout/layout_login.php'; ?>