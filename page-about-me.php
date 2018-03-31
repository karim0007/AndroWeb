                <?php
                    include 'header.php';
                ?>
            
                <!-- Parallax Background -->
                <div class="bg_parallax image_03_parallax"></div>
                <!-- Parallax Background -->

                <!-- Content Parallax-->
                <section class="opacy_bg_02">
                    <!-- Info section Title-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>About Me</h1>
                                <p class="lead"></p>
                            </div>
                        </div>
                    </div>            
                    <!-- End Info section Title-->   
                </section>  
                <!-- End Content Parallax--> 
            </header>
            <!-- End Header Section-->

            <!-- crumbs-->
            <div class="crumbs border_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li>About Us</li>                                       
                            </ul>
                        </div>
                    </div>
                </div>        
            </div>
            <!-- End crumbs-->

            <!-- End content info - White Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="paddings">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <!-- Image Me --> 
                            <div class="col-md-4">                           
                                <!-- Slide -->  
                                <ul class="carousel-single" id="carousel-single">
                                    <li><img src="img/team/1.jpg" alt="" class="img-responsive"></li>
                                    <li><img src="img/team/2.jpg" alt="" class="img-responsive"></li>
                                    <li><img src="img/team/4.jpg" alt="" class="img-responsive"></li>             
                                </ul>
                                <!-- End Slide -->                            
                            </div>   
                            <!-- End Image Me --> 

                            <!-- Info Me --> 
                            <div class="col-md-8 info-me">
                                <h2>Abdul <strong>Karim</strong>
                                    <span>Web Designer</span>
                                </h2>

                                <ul class="social">
                                    <li class="facebook"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                    <li class="twitter"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                    <li class="github"><a href="#"><span><i class="fa fa-github"></i></span></a></li>
                                    <li class="linkedin"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus.</p>

                                <ul class="list">
                                    <li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
                                    <li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                                    <li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
                                </ul>
                            </div>   
                            <!-- End Info Me -->             
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - White Section--> 
            
            <!-- End content info - Grey Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt borders">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Who We Are</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipisciin faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                            </div>  

                            <!-- skills-->
                            <div class="col-md-6">
                                <div class="skills-wrapper wow animated fadeInRight">
                                    <h6 class="heading-progress">Web Design <span class="pull-right">88%</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                                        </div>
                                    </div>
                                    <h6 class="heading-progress">Web Development <span class="pull-right">78%</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 78%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                                        </div>
                                    </div>
                                    <h6 class="heading-progress">Marketing <span class="pull-right">82%</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar">
                                        </div>
                                    </div>  
                                    <h6 class="heading-progress">Front End <span class="pull-right">90%</span></h6>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar">
                                        </div>
                                    </div>                    
                                </div>
                                <!--End skills-->
                            </div>                 
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - Grey Section--> 

           <!-- Info title-->
            <div class="row info_title wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="info_vertical animated">
                    <h1>MY <span>WORK</span> .</h1>
                    <p class="">The fastest way to grow your business with the leader in Technology.</p>
                </div>
                <div class="vertical_line"></div>

                <i class="fa fa-cogs right"></i>
            </div>
            <!-- End Info title-->

            <!-- Start content info - Portfolio Carousel Section-->
            <?php include 'team-portfolio-slide.php' ?>
            <!-- End content info - Portfolio Carousel Section-->

            <!-- footer-->
            <?php 
                include 'footer.php';
            ?>     
            <!-- End footer-->
        </div>
        <!-- End layout-->
   
        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="js/nav/superfish.js"></script> 
        <script type="text/javascript" src="js/nav/hoverIntent.js"></script>  
        <script type="text/javascript" src="js/nav/jquery.sticky.js"></script>                                               
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide Revolution-->
        <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>      
        <script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>   
        <!--owl-carousel-->
        <script type="text/javascript" src="js/carousel/owl.carousel.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>  
        <!--Gallery Grid--> 
        <script type="text/javascript" src="js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="js/filters/jquery.isotope.js" ></script>   
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Twitter Feed-->
        <script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>   
        <!-- WOW-master-->
        <script type="text/javascript" src="js/animations/wow.min.js"></script> 
        <!-- Parallax-->
        <script type="text/javascript" src="js/parallax/jquery.inview.js"></script>
        <script type="text/javascript" src="js/parallax/nbw-parallax.js"></script>                           
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
  </body>
</html>