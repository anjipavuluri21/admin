<?php 
include('database.php');
// $uid = '31bzurWoVlVly2lAZ5iTcQK13ul2';
// print_r($_POST);exit;
$action=$_POST['action'];
$uid=$_POST['uid'];

// $disable_user = '31bzurWoVlVly2lAZ5iTcQK13ul2';
if($action == 0){
    $updatedUser = $auth->disableUser($uid);
    echo $updatedUser;
}
if($action==1){
    $updatedUser = $auth->enableUser($uid);
}
$user = $auth->getUser($uid);
echo $user;

?>