<?php
// if(isset($_COOKIE['seccess'])){
// echo 'hello';
// }
if(isset($_COOKIE['success'])){
    echo '<div class="alert alert-success">'.$_COOKIE['success'].'</div>';
}
if(isset($_COOKIE['error'])){
    echo '<div class="alert alert-danger" role="alert">'.$_COOKIE['error'].' </div>';
}
if(isset($_COOKIE['info'])){
    echo '<div class="alert alert-info" role="alert">'.$_COOKIE['info'].'</div>';
}
// check_box
// glyphicon glyphicon-check
?>
