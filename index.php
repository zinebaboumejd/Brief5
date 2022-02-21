

<?php
require_once './Views/includes/header.php';
require_once './Controllers/HomeController.php';
require_once './autoload.php';

$home= new HomeController();
// $home->index($_GET['page']);
$pages=['home','add','delete','update','logout','login'];
if(isset($_SESSION['login']) && $_SESSION['login']===true){


if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page=$_GET['page'];
        $home->index($page);
    }else{
    include 'Views/includes/404.php';
    }
}else{
    $home->index('home');
}
 
}else if(isset($_GET['page']) && $_GET['page'] ==='register'){
    $home->index('register');
}else{
    $home->index(('login'));
}
//require_once '../GestionVol/Views/includes/footer.php';
?>

