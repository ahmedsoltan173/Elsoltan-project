<?php
require_once('php/header.php');

?>

<body>

<header class="page__header slide-out " style="z-index:1000;">
        <nav class="navbar__menu text-center">
            <!-- Navigation starts as empty UL that will be populated with JS -->
            <ul id="navbar__list"></ul>
        </nav>
    </header>
    <div class="li-menu">&#x2630;</div>
    <main >

        <!-- color option -->
    <div class="option-box">
        <div class="color-option">
            
            <ul class="list-unstyled">
                <li data-value="css/color/Defualtcolor_theme.css"></li>
                <li data-value="css/color/green_theme.css"></li>
                <li data-value="css/color/blue_theme.css"></li>
                <li data-value="css/color/purble_theme.css"></li>
                
            </ul>
        </div>
        <i class="fa fa-gear fa-2x gear-check"></i>
    </div>

<!-- end color option -->
        <!-- Each Section has an ID (used for the anchor) and 
    a data attribute that will populate the li node.
    Adding more sections will automatically populate nav.
    The first section is set to active class by default -->

<!-- Section One -->
        <section id="section1" data-nav="Home" class="your-active-class container-fluid" 
        style="background-color:rgba(9,9,9,.3);width:100%;height:100%;padding:0px;margin:0px;"
        > 

            
            <div class="landing__containers" style='    
                background:url("image/background.png")no-repeat center center fixed;
				-webkit-background-size:cover;
			    -moz-background-size:cover;
			    -o-background-size:cover;
				background-size:cover;
				
                '>
                <header class="main__hero " >
                    
                    <h1 id="headerh1">Elsoltan<span class="spa"> website</span></h1>
                    
                </header>
            </div>
        </section>

<!-- section two -->
        <section id="Our services" data-nav="Our services" class="your-active-class price-table"
        style="background-color:#fff;">
        
            <?php
            input_sectionTwo(); ?>     
        </section>


        <section class="testimonials text-center" id="Our team" data-nav="Our team">
            <?php input();?>

        </section>
    </main>
    <?php

    require_once('php/footer.php');
    ?>