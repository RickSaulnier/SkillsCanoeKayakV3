<?php include 'header2.php'; ?>

<!--JQUERY MENU TOGGLER-->
<script>
    $(document).ready(function(){
        $(".hamburgerIcon").click(function(){
            $(".sideToggle").toggle();
        });
    });
</script>

<section>


<!--NAV BAR IS INSIDE THE WAVE ANIMATION BLOCK BELOW WITH ICONS ETC-->


    <!--CSS Water Effect Source- Author: Goodkatz: https://codepen.io/goodkatz/pen/LYPGxQz?editors=1100 
    He said it is free to use. I have customized it.-->

    <div class="waveheader">

        <!--TOGGLING SIDEBAR MENU div-->
        <div class="sideToggle">
            <div><a href="index.php">Home</a></div>
            <div><a href="book.php">Book Trip</a></div>
            <div><a href="admin-add.php">Add Trip</a></div>
            <div><a href="all-adventures.php">All Adventures</a></div>
        </div>

        <!--Content before waves-->
        <div class="inner-header flex">
            <img class="hamburgerIcon" src="images/hamburger.png" alt="Pulldown Menu"/>
            <h1 class="headerTitle">Halifax Canoe and Kayak</h1>
            <img class="paddleIcon" src="images/paddle-white.png" alt="Paddle Icon"/>
        </div>

        <!--Waves Container-->
        <div class="wavesDiv">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255,255,255,0.2)" />
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(84,58,183)" />
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(84,58,183, 0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(84,58,183, 0.2)" />
                </g>
            </svg>
        </div>
    </div>

</section>