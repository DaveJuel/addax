<?php require '../includes/interface.php'; ?>
<?php $title = 'Dashboard' ?>
 <?php ob_start() ?>
  
 <?php $content = ob_get_clean() ?>
 <?php include '../layout/layout_main.php' ?>