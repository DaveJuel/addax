<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="../images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span><?php echo $_SESSION['username'] ?><br><small><?php echo $_SESSION['type'] ?></small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="active"><a href="dashboard.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-dashboard"></span><p>Dashboard</p></a></li>
            <?php if ($_SESSION['type'] == "admin") { ?>
                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Members</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="add_member.php">Add</a></li>
                        <li><a href="member_list.php">View</a></li>                        
                    </ul>
                </li> 
                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Transactions</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="deposit.php">Deposit</a></li>
                        <li><a href="withdraw.php">Withdraw</a></li>                        
                        <li><a href="history.php">History</a></li>
                    </ul>
                </li> 
            <?php } else { ?>
                <li><a href="history.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Account</p></a></li>
            <?php } ?>
            <li><a href="profile.php" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Profile</p></a></li>
            <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-envelope"></span><p>Messages</p><span class="arrow"></span></a>
                <ul class="sub-menu">
                    <li><a href="compose.php">Compose</a></li>
                    <li><a href="#">Received</a></li>
                    <li><a href="sent_msg.php">Sent</a></li>                                                    
                </ul>
            </li>                                             
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->