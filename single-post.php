                <?php
                    include 'header.php';
                ?>
                
                <!-- Info section Title-->
                <div class="container">
                    <div class="row animated fadeInUp delay1">
                        <div class="col-md-5">
                            <h1>Single Post</h1>
                        </div>
                        <div class="col-md-7">                        
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                    </div>
                </div>            
                <!-- End Info section Title--> 
            </header>
            <!-- End Header Section-->

            <!-- crumbs-->
            <div class="crumbs border_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>/</li>
                                <li><a href="#">Blog</a></li>
                                <li>/</li>
                                <li>Single Post</li>                                       
                            </ul>
                        </div>
                    </div>
                </div>        
            </div>
            <!-- End crumbs-->
                
            <!-- Post-->
            <div class="row wow fadeInUp">
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>
                <div class="post">
                     <!-- Slide -->  
                    <ul class="carousel-single" id="carousel-single">
                        <li><img src="img/gallery/1.jpg" alt="" class="img-responsive"></li>
                        <li><img src="img/gallery/2.jpg" alt="" class="img-responsive"></li>
                        <li><img src="img/gallery/4.jpg" alt="" class="img-responsive"></li>             
                    </ul>
                    <!-- End Slide -->  

                    <h2><a href="single-post.html"> Post Format Image - <span> Gallery </span></a></h2>

                    <div class="post-meta">
                        <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                        <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                        <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                    </div>  

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure <span class="label label-important">Important dolor</span> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>    
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Success!</strong> You successfully read this important alert message. 
                    </div>
                    <p>Lorem ipsum dolor sit amet,adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris  <span class="label label-success">consectetur</span> Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.
                    </p>         
                    <blockquote>
                        Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.
                        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                    </blockquote> 
                    <pre class="text_left">
        
        //=================================== Subtmit Form  =================================//

        $('#form').submit(function(event) {  
            event.preventDefault();  
            var url = $(this).attr('action');  
            var datos = $(this).serialize();  
            $.get(url, datos, function(resultado) {  
                $('#result').html(resultado);  
            });  
        });  
                    </pre>
                    <p class="padding_top_mini">Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.
                    </p>         
                </div>
                <div class="vertical_line"></div>                
            </div>
            <!-- End Post-->

            <!-- About Autor-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt borders">
                    <div class="post">
                        <h2>About <span> Autor </span> Post</h2>
                        <div class="row comment padding_top_mini">
                            <div class="col-md-3">
                                <img src="img/team/1.jpg" alt="" class="img-circle">
                            </div>
                            <div class="col-md-9 text_left">
                                <div class="title_comment">
                                    <span>Md Abdul Karim -</span>
                                    <span>Saturday, 29 Mar 2018 12:00 </span> 
                                    <span><a href="#coment_form"> Comment Link </a> </span>
                                </div>
                                <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                                <ul class="social">
                                    <li class="facebook"><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                    <li class="twitter"><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                    <li class="github"><a href="#"><span><i class="fa fa-github"></i></span></a></li>
                                    <li class="linkedin"><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End About Autor-->

            <!-- Comment post-->
            <div class="row padding_bottom">  
                <div class="vertical_line">
                    <div class="circle_bottom"></div>
                </div>              
                <div class="post">
                    <h2>Comments Post</h2>
                    
                    <!-- Comment-->
                    <div class="row comment padding_top">
                        <div class="col-md-2">
                            <img src="img/team/1.jpg" alt="" class="img-circle">
                        </div>
                        <div class="col-md-10 text_left">
                            <div class="title_comment">
                                <span>Abdul Karim -</span>
                                <span>Saturday, 29 Mar 2018 12:00 </span> 
                                <span><a href="#coment_form"> Comment Link </a> </span>
                            </div>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                    </div>
                    <!-- End Comment-->

                    <!-- Comment-->
                    <div class="row comment">
                        <div class="col-md-2">
                            <img src="img/team/8.jpg" alt="" class="img-circle">
                        </div>
                        <div class="col-md-10 text_left">
                            <div class="title_comment">
                                <span>H M D Akash -</span>
                                <span>Saturday, 29 Mar 2018 12:00 </span> 
                                <span><a href="#coment_form"> Comment Link </a> </span>
                            </div>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                    </div>
                    <!-- End Comment-->

                    <!-- Comment-->
                    <div class="row comment">
                        <div class="col-md-2">
                            <img src="img/team/5.jpg" alt="" class="img-circle">
                        </div>
                        <div class="col-md-10 text_left">
                            <div class="title_comment">
                                <span>Ahsanuzzaman Ridoy -</span>
                                <span>Saturday, 29 Mar 2018 12:00 </span> 
                                <span><a href="#coment_form"> Comment Link </a> </span>
                            </div>
                            <p>Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.Lorem ipsum dolor amet, consectetue Radipiscing elit et Suspendisse et justo. mattis commodo augue.</p>
                        </div>
                    </div>
                    <!-- End Comment-->
                </div>                
            </div>
            <!-- End Comments post-->

            <!-- Form Comment post-->
            <div class="info_resalt border_top" id="coment_form">
                <div class="post">
                     <h2>New Comment</h2>
                     <form class="form_comment padding-top-mini">
                        <div class="row">
                            <div class="col-md-6">
                                 <input type="text" placeholder="Name" name="Name" required>                        
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email"  name="Email" required>
                            </div>
                        </div>
                        <textarea placeholder="Your Message" name="message" required></textarea>
                        <input type="submit" name="Submit" value="Send Comment" class="button">
                    </form> 
                </div>                 
            </div>
            <!-- End Form Comment post-->

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