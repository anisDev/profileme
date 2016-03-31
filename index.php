<?php
    require_once 'includes/Twig/Autoloader.php';
    require_once "config.php";
    use Parse\ParseObject;
    use Parse\ParseClient;
    use Parse\ParseQuery;
    use Parse\ParseUser;

    session_start();
    Twig_Autoloader::register();
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader, array(
        'cache' => 'cache',
    ));
    $twig->setCache(false);

    if(isset($_SESSION['user'])){
       
    }else{ 
        if(isset($_GET['register'])){
             $template = $twig->loadTemplate('register.html');
            echo $template->render(array('title' => 'Бүртгэл баталгаажуулах'));
        }else{
            $template = $twig->loadTemplate('home.html');
            echo $template->render(array('title' => 'Profile Me'));
        }
       
    }
?>
