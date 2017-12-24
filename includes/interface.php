<?php

//Interface
require 'classes.php';
$main = new main();
$user = new user();
$subject = new subject();
$article = new article();
$action = null;
//getting caller details
if (isset($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
}
switch ($action) {
    //admin functionalities
    case 'Login':
        //getting the required values to log in
        $username = $_REQUEST['log_username'];
        $password = $_REQUEST['log_password'];
        $user->login($username, $password);
        break;
    case 'Unlock':
        //getting the required values to log in
        $password = $_REQUEST['password'];
        $response = $user->login($_SESSION['username'], $password);
        break;
    case 'Add user':
        $fname = $_REQUEST['add_user_fname'];
        $lname = $_REQUEST['add_user_lname'];
        $oname = $_REQUEST['add_user_oname'];
        $tel = $_REQUEST['add_user_tel'];
        $email = $_REQUEST['add_user_email'];
        $address = $_REQUEST['add_user_address'];
        $password = $_REQUEST['add_user_password'];
        $cpassword = $_REQUEST['add_user_password'];
        $username = $_REQUEST['add_user_username'];
        $type = $_REQUEST['add_user_type'];
        //checking the registering a new user
        if ($password == $cpassword) {
            $user->add($fname, $lname, $oname, $email, $tel, $address, $username, $password, $type);
        } else {
            $user->status = $user->feedbackFormat(0, "Password not the same!");
        }
        break;
    case 'Add subject':
        $title = $_REQUEST['subject_title'];
        $attrNumber = $_REQUEST['subject_count_attr'];
        $attrString = "";
        if (isset($title) && isset($attrNumber) && isset($_REQUEST['attr_name0'])) {
            //looping throughout the attributes
            $attributes = array();
            for ($count = 0; $count < $attrNumber; $count++) {
                $attrName = $_REQUEST['attr_name' . $count];
                $attrType = $_REQUEST['attr_type' . $count];
                $attrNullable = $_REQUEST['attr_nullable' . $count];
                $attribute_desc = array('name' => $attrName, 'type' => $attrType, 'nullable' => $attrNullable);
                if ($count == 0) {
                    $attrString = $attrName . "=" . $attrType;
                } else {
                    $attrString = $attrString . "," . $attrName . "=" . $attrType;
                }
                array_push($attributes, $attribute_desc);
            }
            $commenting = $_REQUEST['subject_commenting'];
            $likes = $_REQUEST['subject_likes'];
            $displayViews = $_REQUEST['subject_display_views'];
            $subject->add($title, $attrNumber, $attributes, $attrString, $commenting, $likes, $displayViews);
        } else {
            $subject->status = $subject->feedbackFormat(0, "Fill all required fields!");
        }
        break;
    case 'Save':
        $values = array();
        $articleId = $_REQUEST['article'];
        $attributes = $subject->getAttributes($articleId);
        if (count($attributes) > 0) {
            //getting form values
            for ($count = 0; $count < count($attributes); $count++) {
                $values[$count] = $_REQUEST[$attributes[$count]];
            }
            //saving form data
            $main->status = $article->add($main->header($articleId), $values, $attributes);
        } else {
            $main->status = $main->feedbackFormat(0, "ERROR: Form data not fetched!");
        }
        break;
    //UI callers
    case 'combo_tables':
        $main->getTables();
        break;
    case 'combo_table_columns':
        if (isset($_REQUEST["table_name"])) {
            $main->getTableColumns($_REQUEST["table_name"]);
        }
        break;
    case 'feed_modal':
        $instance = $_REQUEST['instance'];
        $field = $_REQUEST['field'];
        $main->feedModal($instance, $field);
        break;
    default:
        break;
}
unset($action);
