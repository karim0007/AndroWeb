                <?php
                    include 'header.php';
                ?>
                
                <!-- Info section Title-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Contact Us 02</h1>
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
                                <li>Contact Us 02</li>                                       
                            </ul>
                        </div>
                    </div>
                </div>        
            </div>
            <!-- End crumbs-->

            <!-- End content info - White Section-->
            <section class="content_info">
                <!-- Map area-->
                <section class="map_area-02">
                    <iframe  src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=East+Raza+Bazar&amp;aq=&amp;sll=23.7539187,90.3852694&amp;sspn=9.61761,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=E+Raza+Bazar+Rd,+Dhaka+1215&amp;ll=23.7539187,90.3852694&amp;spn=0.598524,1.234589&amp;t=m&amp;z=10&amp;output=embed">
                    </iframe>
                </section>
                <!-- End Map area-->
            </section>   
            <!-- End content info - White Section--> 

            <!-- End content info - Grey Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="paddings border-top">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Get in touch</h3>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                <aside>
                                    <h4>The Office</h4>
                                    <address>
                                      <strong>Farm, Inc.</strong><br>
                                      <i class="fa fa-map-marker"></i><strong>Address: </strong> East Razabazer, Tejga<br>
                                      <i class="fa fa-plane"></i><strong>City: </strong>Dhaka -1215<br>
                                      <i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> +8801521482467
                                    </address>

                                    <address>
                                      <strong>Farm Emails</strong><br>
                                      <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> sales@farm.com</a><br>
                                      <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> support@farm.com</a>
                                    </address>
                                </aside>
                            </div>                 

                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <form id="form" action="php/send_mail.php">
                                    <input type="text" placeholder="Name" name="Name" required>
                                    <input type="email" placeholder="Email"  name="Email" required>
                                    <input type="number" placeholder="Phone"  name="Phone" required>
                                    <textarea placeholder="Your Message" name="message" required></textarea>
                                    <input type="submit" name="Submit" value="Send Message" class="button">
                                </form> 
                                <div id="result"></div>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - Grey Section--> 

            <!-- End content info - Grey Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt border_top">
                    <div class="container wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                               <!-- Sponsors Zone-->     
                                <ul class="owl-carousel carousel-sponsors tooltip-hover" id="carousel-sponsors">
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/1.png" alt="Image"></a>
                                    </li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/2.png" alt="Image"></a>
                                    </li>
                                     <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/3.png" alt="Image"></a>
                                    </li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/4.png" alt="Image"></a>
                                    </li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/5.png" alt="Image"></a>
                                    </li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/1.png" alt="Image"></a>
                                    </li>
                                    <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/2.png" alt="Image"></a>
                                    </li>
                                     <li data-toggle="tooltip" title data-original-title="Name Sponsor">
                                        <a href="#"  class="tooltip_hover" title="Name Sponsor"><img src="img/sponsors/5.png" alt="Image"></a>
                                    </li>                                       
                                </ul> 
                                <!-- End Sponsors Zone-->    
                            </div>                    
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - Grey Section-->

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