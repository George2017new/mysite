<?php
if(!empty($_REQUEST['phone'])){
    $msg = 'Phone: ' . $_REQUEST['phone'];
    mail('fin.spec777@gmail.com', 'New bid from ' . $_SERVER['HTTP_HOST'], $msg);
}
?>{"message":"OK","results":["195171:3202799"]}