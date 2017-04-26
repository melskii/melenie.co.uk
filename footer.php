


</div>
</div>
</div>
<!--</div>-->

</body>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.js"></script>


<script>
    $(document).foundation();

</script>


<script>

    $.fn.isOnScreen = function(){

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

    };

    $(document).ready(function() {


        $(window).scroll(function() {


            if ($('.timeline').isOnScreen()) {


                var width = $('#timeline-p').innerWidth();

                $('.timeline').animate({scrollLeft: $('.timeline')[0].scrollWidth}, 750 * 100, "linear");



                $('.timeline').on("scrollLeft DOMMouseScroll mousewheel", function () {
                    $('.timeline').stop();
                });
                document.onkeydown = checkKey;

                function checkKey(e) {

                    e = e || window.event;

                    if (e.keyCode == '37') {

                        var loc = $('.timeline').scrollLeft();

                        if (loc >= 0) {

                            $('.timeline').stop();
                            $('.timeline').animate({scrollLeft: loc - 100}, 300);
                        }


                    }
                    else if (e.keyCode == '39') {

                        var loc = $('.timeline').scrollLeft();


                        if (loc <= width + 500) {

                            $('.timeline').stop();
                            $('.timeline').animate({scrollLeft: loc + 100}, 300);



                        }

                    }


                }


                $('#timeline-right').click(function () {
                    var e = jQuery.Event("keydown");
                    e.keyCode = 39;
                    checkKey(e);
                });


                $('#timeline-left').click(function () {
                    var e = jQuery.Event("keydown");
                    e.keyCode = 37;
                    checkKey(e);
                });
            }
        });

    });
</script>

<script type="text/javascript">


    function toggle_visibility(id) {

        var e = document.getElementById(id);


        if(e.style.display != 'block')
            e.style.display = 'block';
        else
            e.style.display = 'none';

    }

    $(document).bind( "mouseup", function(e)
    {
        var container = $("#dropdown-menu");
        var button = $("#dropdown-button");

        if ( !button.is(e.target)
            && button.has(e.target).length === 0)
        {

            container.hide();

        }

    });

    $(document).bind( "touchstart touchend", function(e)
    {
        var container = $("#dropdown-menu");
        var button = $("#dropdown-button");

        if (!container.is(e.target) && !button.is(e.target)
            && container.has(e.target).length === 0 && button.has(e.target).length === 0)
        {

            container.hide();

        }

    });




    am = ['a Brighton Based Developer', 'an Educator', 'a STEMNet Ambassador', 'a Web Developer', 'a SQL Developer', 'the creator of TALES', 'a Northerner', 'an avid tea drinker'];
    enjoy = ['creating things using code', 'making Edtech using Swift', 'creating things using Java', 'teaching code using Python', 'creating dynamic content with Javascript', 'making websites using PHP', 'database tuning', 'teaching Computer Science', 'problem solving', 'taking photos of my food', 'teaching with Lego Mindstorms'];

    var lam = am.length;
    var lenjoy = enjoy.length;

    setInterval(function(){
        var random = Math.floor(Math.random() * lam)
        document.getElementById("Iam").innerHTML = am[random];}, 4000)
    setInterval(function(){
        var random = Math.floor(Math.random() * lenjoy)
        document.getElementById("Ienjoy").innerHTML = enjoy[random];}, 2500)


    function burgerFunction() {

        $(".burger").toggleClass("change");
        $(".body").toggleClass("stop-scrolling");

    };

    $('.off-canvas').on('click', function() {


        $('.off-canvas').foundation('close');
        burgerFunction()

    });

    $('.js-off-canvas-overlay').on('click', function() {
        $('.off-canvas').foundation('close');
        burgerFunction()

    });


</script>



<script type="text/javascript">

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();


        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight + 320 || document.documentElement.clientHeight + 320) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth || document.parentWindow.innerWidth)
        );
    }

    var items = document.querySelectorAll(".timeline li");



    // code for the isElementInViewport function

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {


            if (isElementInViewport(items[i])) {
                items[i].classList.add("in-view");
            }

        }
    }

    window.addEventListener("load", callbackFunc);
    document.getElementById("timeline").addEventListener("scroll", callbackFunc);





    //    });

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-97849321-1', 'auto');
    ga('send', 'pageview');

</script>