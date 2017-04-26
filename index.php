<?php include("header.php"); ?>


<div class="row mobile-header">
    <div id="img"><img src="images/Brighton-mobile.jpg"/></div>
    <div class="row text-center"><span>Melenie Schatynski</span></div>
</div>

<div class="about-image" >
    <img src="images/Brighton.jpg" />
    <div class="about-overlay">
        I am <span id="Iam" class="iam">a Brighton Based Developer</span> and <br/>I enjoy <span id="Ienjoy" class="iam">creating things using code.</span>
    </div>
</div>

<section id="about" >







    <div class="main-content" id="about-text" data-magellan-target="about-text">




        <div class="row body-text ">



            <?php //about part 1 ?>

            <div class="row">
                <a name="about"></a>


                <a name="about-text"></a>



                <div class="large-1 columns">&nbsp;</div>
                <div class="large-10 columns">
                    <div class="row">
                        <div class="large-7 columns" style="margin-bottom: 10px;">
                            <h3 class="title"><b>About Me</b></h3>
                            <span class="blue-text">
                                <?php echo date("Y") - 2013;?>
                             years ago I swapped the busy streets of <b>Manchester</b> for <b>Brighton's</b> pebble beaches.
                            I <b>love</b> to make things; dresses, robots, <b>programs</b>, <b>websites</b> and food.
                                I became a Developer in 2007 but my passion has always been in education so I recently returned to university and trained to be a teacher.
                                I'm now looking to combine both passions by creating <b>beautiful</b> and <b>functioning</b> programs which make education more accessible.
                            <br/><br/>
                            My aim is to inspire the next generation of coders by developing educational software and being a teacher and an active <u><a href=“http://www.stemnet.org.uk/“ target="_blank"><b>STEMNet</b></a></u> member.</b></a></u>

                            </span>

                            <div class="desktop-header">
                                <h4 class="title"><b>Skills</b></h4>
                                <div class="skills-box">
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Python</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">PHP</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Java</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Agile</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">SQL</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Swift</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Javascript</span>
                                    <span class="label info" style="font-size: 1.5em; margin-top: 5px;">Teaching</span>

                                </div>


                                    <a class="mail contact yellow" data-toggle="offCanvasLeft">
                                        <div class="projects-seemore">More...</div>
                                    </a>



                                </div>


                        </div>



                        <div class="desktop-header squares outside large-4 columns" style="margin-left: 10px;">



                            <div class="inner-square-twitter inner-square ">
                                <img src="images/Twitter+Grey.png"/>
                                <div class="orbit" role="region" data-orbit>

                                    <?php include("tweetapi/tweets_json.php"); ?>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="large-1 columns">&nbsp;</div>

            </div>


        </div>
        <div class="mobile-header"><?php include("up-arrow.php");?></div>
    </div>

</section>


<a name="skills"></a>
<div class="mobile-header skills-box">
    <div class="row">
                <div class="main-content">
                    <h3 class="title">Skills</h3>

                    <span class="label secondary">Swift</span>
                    <span class="label secondary">Java</span>
                    <span class="label secondary">SQL & MySQL</span>
                    <span class="label secondary">PHP</span>
                    <span class="label secondary">Javascript</span>
                    <span class="label secondary">jQuery</span>
                    <span class="label secondary">Python</span>
                    <span class="label secondary">C#</span>
                    <span class="label secondary">ASP.Net</span>

                    <span class="label secondary">MVC</span>
                    <span class="label secondary">Agile Methodology</span>
                    <span class="label secondary">Version Control (Git)</span>
                    <span class="label secondary">Database Tuning</span>

                    <span class="label secondary">Leadership</span>
                    <span class="label secondary">Project Management</span>
                    <span class="label secondary">Organisation</span>
                    <span class="label secondary">Communication</span>
                    <span class="label secondary">Problem Solving</span>
                    <span class="label secondary">Decision Making</span>

    </div>

    </div>
</div>

<div class="squares">
    <div class="row">
        <div class="outside  large-12 columns">
            <div class="inner-square">
                <div class="main-content">

                        <h3 class="title" style="color: #5C5A4E">Publications</h3>
                    <blockquote>

                        <b><cite>Schatynski, Melenie and Wood, Sharon (2016)</cite></b>
                        <b>TALES: an e-learning application to teach programming concepts to the early years foundation stage.

                        In: 27th Annual Workshop of the Psychology of Programming Interest Group - PPIG 2016, 7-10 September 2016, St Catharine's College, University of Cambridge, UK.
                        <p><a href="http://sro.sussex.ac.uk/63659/" target="_blank">http://sro.sussex.ac.uk/63659/ <i class="fa fa-external-link"> </i> </a></p></b>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
</div>




<div class="main-content align-right mobile-header"> <?php include("up-arrow.php");?>
</div>



<div id="cv" data-magellan-target="cv">
    <a name="cv"></a>

    <section class="desktop-header">

        <?php include('timeline.php'); ?>

    </section>

    <section class="mobile-header">

        <?php include('timeline-mobile.php'); ?>

    </section>
</div>




<div class="block">
    <div class="main-content">
        <section id="contact" data-magellan-target="contact" >
        <div class="row">
            <div class="body-text">
                <a name="contact"></a>




                <?php //contact ?>



                <div class="row">

                    <div class="desktop-header large-1 columns">&nbsp;</div>

                    <div class="large-10 columns">
                        <div class="mobile-header"><?php include("up-arrow.php");?></div>



                            <div class="large-5 columns contact">
                                <div class="row">
                                    <div class="title">Follow Me</div>
                                </div>
                                <div class="row">
                                    <ul class="menu mlist">

                                        <li>
                                            <a target="_blank" href="https://twitter.com/_melski" class="blue">
                                           <span class="fa-stack" >
                                              <i class="fa fa-circle fa-stack-2x"></i>
                                              <i class="fa fa-twitter fa-stack-1x" style="color:#F5DA53;"></i>
                                            </span>
                                            </a>
                                        </li>
                                        <li><a class="orange" target="_blank" href="https://uk.linkedin.com/pub/melenie-schatynski/1a/434/855">
                                            <span class="fa-stack">
                                              <i class="fa fa-linkedin-square fa-stack-2x"></i>
                                            </span>
                                            </a></li>
                                        <li><a class="blue" target="_blank" href="https://github.com/melskii">
                                           <span class="fa-stack">
                                              <i class="fa fa-github fa-stack-2x"></i>
                                            </span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="title">Email</div>
                                </div>
                                <div class="row">
                                    <div class="info">
                                        <a class="mail blue" target="_top" href="mailto:hello@melenie.co.uk"><i class="fa fa-envelope fa-lg"></i> hello@melenie.co.uk  </a>
                                    </div>
                                </div>
                                <div class="row"><div class="title info">Location</div></div>
                                <div class="row">
                                    <div class="info">
                                        <i class="fa fa-map-signs"></i> Brighton*, England
                                    </div>
                                </div>

                                <!-- Map of coffee shops -->

                                <div class="row desktop-header" id="map">
                                    <script>
                                        function initMap() {


                                            var brighton = {lat: 50.8168555, lng: -0.1389267};




                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                zoom: 11,
                                                center: brighton
                                            });



                                            var marker = new google.maps.Marker({
                                                position: brighton,
                                                map: map
                                            });
                                        }

                                    </script>

                                    <script async defer
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB26Lq2BvjqkZSjAvzRx7CKgRzMD0MON60&callback=initMap">
                                    </script>
                                </div>

                                <div class="row" style="margin-top: 5px;">
                                    <a href="http://www.officreche.com/blog/a-guide-to-brightons-best-wifi-cafes/" target="_blank" class="red">*Website developed in Brighton Wifi Cafés <b>#followthewifi</b> <i class="fa fa-external-link"> </i> </a>
                                </div>

                                <?php

                                //    echo 'hello';

                                if (isset($_SESSION['success-contact'])): ?>
                                    <br/>
                                    <div class="row">
                                        <div data-alert class="alert-box success radius">
                                            <i class="fa fa-star"></i> <?php echo  $_SESSION['success-contact'] ?>
                                            <a href="#" class="close">&times;</a>
                                        </div>
                                    </div>
                                    <?php

                                    unset($_SESSION['success-contact']);
                                endif;
                                ?>

                            </div>
                            <div class="large-2 columns">

                            </div>



                            <!--  Contact Form -->
                            <div class="large-6 columns contact" style="float:right">

                                <div class="row">
                                    <h3 class="title">Say hello!</h3>
                                </div>




                                <form action="#contact" method="post">

                                    <label for="name">Name
                                        <?php if($nameempty === true): ?><small class="error" style="color: red !important;"> *Required</small><?php endif; ?>
                                    </label>
                                    <input type="text" name="name" id="name" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags($_POST['name']), '"'; }?>   />
                                    <label for="email">Email
                                        <?php if($emailempty === true): ?><small class="error" style="color: red !important;"> *Required</small><?php endif; ?>
                                        <?php if($nonvalidemail === true): ?><small class="error" style="color: red !important;"> Enter a valid email address</small><?php endif; ?>
                                    </label><input type="text" name="email" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags($_POST['email']), '"'; }?>/>

                                    <label for="message">Message
                                        <?php if($msgempty === true): ?><small class="error" style="color: red !important;"> *Required</small><?php endif; ?>
                                    </label>
                                    <textarea rows="15" type = "text" name="message" placeholder="Tell me about yourself. How can I help you?"><?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']); }?></textarea>

                                    <input type="submit" class="button medium-12"/>


                                </form>
                            </div>


                    <div class="large-1 columns">&nbsp;</div>

                </div>


            </div>
                <?php include("up-arrow.php");?>


            </div>

        </div>
        </section>
        <div style="text-align:center">Melenie Schatynski © 2017</div>
    </div>
    </div>
</div>








<?php include("footer.php"); ?>
