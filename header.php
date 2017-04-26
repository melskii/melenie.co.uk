<?php

ob_start();
session_start();

$nameempty = false;
$emailempty = false;
$msgempty = false;
$nonvalidemail = false;
$nonvalidname   = false;

if (empty($_POST) === false) {
    //submitted
    $errors = array();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = 0;



    if (empty($name) === true || empty($email) === true || empty($message) === true) {

        if (empty($name) === true){
            $nameempty = true;

            $errors++;
        }
        if (empty($email) === true){
            $emailempty = true;

            $errors++;
        }
        if (empty($message) === true){
            $msgempty = true;

            $errors++;
        }
    }
    else {

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $nonvalidemail = true;

            $errors++;
        }


    }


    if ($errors == 0) {


        //recipient, subject, body, headers
        mail('hello@melenie.co.uk', 'You have received a message from: '. $name, $message,'From: ' . $email);



        header('Location: email-response.php?n='.$name.'&e='.$email);
        exit();
    }
}
?>

<!doctype html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/main.css?<?=time()?>" />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Poiret+One&subset=latin,cyrillic'  type='text/css'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,300italic'  type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


    <title>Melenie | Brighton Based Developer</title>
    <link rel="icon"  href="images/lemon.ico?v=2" />

</head>


<body>






<a name="top"></a>

<div class="container" id="header">




  <?php include("burger.php"); ?>



        <?php //main header ?>

    <div data-sticky-container class="desktop-header" id="desktop-header">
        <div style="width: 100%; background-color: #FBFCFC;" class="sticky" data-sticky data-options="marginTop: 0;">


                <div class="row">



                    <div class="medium-6 columns header-text">
                        <a href="#">
                            <div class="row">
                                <div>Melenie Schatynski</div>
                            </div>
                            <div class="row">
                                <p id="subheader">I'm a Brighton Based Developer with a passion for Ed Tech.<br/>Programming is creative, rewarding and it should be accessible to everyone</p>
                            </div>
                        </a>
                    </div>


                    <div class="medium-6 columns">


                        <div class="social" >
                            <ul class="menu align-right">


                                <li>
                                    <a target="_blank" href="https://twitter.com/_melski" class="red">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-twitter fa-stack-1x"></i>
                                </span>
                                    </a>
                                </li>
                                <li><a class="orange" target="_blank" href="https://uk.linkedin.com/pub/melenie-schatynski/1a/434/855">

                                   <span class="fa-stack fa-lg">
                                  <i class="fa fa-linkedin-square fa-stack-1x"></i>
                                </span>

                                    </a></li>
                                <li><a class="blue" target="_blank" href="https://github.com/melskii">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-github fa-stack-1x"></i></span>

                                    </a>
                                </li>
                                <li>
                                    <a class="mail yellow" target="_top" href="mailto:hello@melenie.co.uk">

                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-envelope-o fa-stack-1x"></i>
                                </span>

                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <nav data-sticky data-magellan data-options="barOffset:30;" activeClass="active">
                                <div class="sub-nav">


                                    <dl class="blue item"><a class="blue item" href="#about-text">About</a></dl>
                                    <dl class="orange item"><a class="orange item" href="#cv">Experience</a></dl>
                                    <dl class="yellow item"><a class="yellow item" href="#contact">Contact</a></dl>

                                </div>
                            </nav>

                        </div>

                    </div>
                </div>


        </div>
    </div>


