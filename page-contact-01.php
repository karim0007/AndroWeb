                <?php
                    include 'header.php';
                ?>
                
                <!-- Info section Title-->
                <div class="container">
                    <div class="row animated fadeInUp delay1">
                        <div class="col-md-5">
                            <h1>Contact Us 01</h1>
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
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>Contact Us 01</li>                                       
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
                            <!-- Item Location -->
                            <div class="col-md-6">
                               <div class="row">
                                 <div class="col-md-6">
                                        <img src="img/office/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Central Office</h4>
                                        <p>East Razabazer,Tejga
                                        <br>Dhaka 1205<br>
                                        Tel: +8801521482467<br>
                                        Email: <a href="mailto:jdrendon@imaginacionweb.net">testmail@yourdomain.com</a><br>
                                        Website: <a href="#">www.yoursitename.com</a></p>
                                    </div>
                               </div>
                            </div> 
                            <!-- Item Location--> 

                            <!-- Item Location--> 
                            <div class="col-md-6">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <img src="img/office/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub Branch</h4>
                                        <p>East Razabazer,Tejga
                                        <br>Dhaka 1205<br>
                                        Tel: +8801521482467<br>
                                        Email: <a href="mailto:jdrendon@imaginacionweb.net">testmail@yourdomain.com</a><br>
                                        Website: <a href="#">www.yoursitename.com</a></p>
                                    </div>
                                    
                               </div>
                            </div> 
                            <!-- End Item Location--> 
                        </div>
                    </div>
                </div>
                <!-- End Info Resalt-->
            </section>   
            <!-- End content info - White Section--> 

            <!-- End content info - Grey Section-->
            <section class="content_info">
                <!-- Info Resalt-->
                <div class="info_resalt border-top">
                    <div class="container wow fadeInUp">
                        <div class="row">
                           <div class="col-md-6">
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

                            <div class="col-md-6">
                                <h3>Get in touch</h3>
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>
                                
                                <!-- Map area-->
                                <section class="map_area">
                                    <iframe  src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=East+Raza+Bazar&amp;aq=&amp;sll=23.7539187,90.3852694&amp;sspn=9.61761,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=E+Raza+Bazar+Rd,+Dhaka+1215&amp;ll=23.7539187,90.3852694&amp;spn=0.598524,1.234589&amp;t=m&amp;z=10&amp;output=embed">
                                    </iframe>
                                </section>
                                <!-- End Map area-->
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