<!--footer -->
<footer class="main-footer fl-wrap">
    <!-- footer-header-->
    <div class="footer-header fl-wrap grad ient-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div  class="subscribe-header">
                        <h3>Abonnez-vous</h3>
                    
                        <p>
                            Vous souhaitez être 
                            informé des nouveaux
                            emplacements? Inscrivez-vous
                            simplement.
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="subscribe-widget">
                        <div class="subcribe-form">
                            <form id="subscribe">
                                <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Entrer votre Email" spellcheck="false" type="email">
                                <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fal fa-envelope"></i></button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-header end-->
    <!--footer-inner-->
    <div class="footer-inner   fl-wrap">
        <div class="container">
            <div class="row">
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>
                               {{setting('footer.footer_descr')}}  
                            </p>
                            <ul  class="footer-contacts fl-wrap no-list-style">
                                <li><span><i class="fal fa-envelope"></i> E-mail :</span><a href="#" target="_blank">{{setting('contact.contact_email')}}</a></li>
                                <li> <span><i class="fal fa-map-marker"></i> Addresse :</span><a href="#" target="_blank">{{setting('contact.contact_address')}}</a></li>
                                <li><span><i class="fal fa-phone"></i> Téléphone :</span><a href="#">{{setting('contact.contact_tele')}}</a></li>
                            </ul>
                            <div class="footer-social">
                                <span>Suivez nous</span>
                                <ul class="no-list-style">
                                    
                                        @if(setting('contact.contact_twitter'))
                                        <li><a href="{{setting('contact.contact_facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                        @if(setting('contact.contact_twitter'))
                                        <li><a href="{{setting('contact.contact_twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        @endif
                                        @if(setting('contact.contact_instagram'))
                                        <li><a href="{{setting('contact.contact_instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        @endif
                                        @if(setting('contact.contact_wtsp'))
                                        <li><a href="{{setting('contact.contact_wtsp')}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <h3>dernières nouvelles</h3>
                        <div class="footer-widget-posts fl-wrap">
                            <ul class="no-list-style">
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Vivamus dapibus rutrum</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 21 Mar 09.05 </span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title=""> In hac habitasse platea</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 18.21 </span>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg" class="respimg" alt=""></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Tortor tempor in porta</a>
                                        <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 16.42 </span>
                                    </div>
                                </li>
                            </ul>
                            <a href="blog.html" class="footer-link">Read all <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget  -->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap ">
                        <h3>Our  Twitter</h3>
                        <div class="twitter-holder fl-wrap scrollbar-inner2" data-simplebar data-simplebar-auto-hide="false">
                            <div id="footer-twiit"></div>
                        </div>
                        <a href="#" class="footer-link twitter-link" target="_blank">Follow us <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- footer-widget end-->
            </div>
        </div>
        <!-- footer bg-->
        <div class="footer-bg" data-ran="4"></div>
        <div class="footer-wave">
            <svg viewbox="0 0 100 25">
                <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
            </svg>
        </div>
        <!-- footer bg  end-->
    </div>
    <!--footer-inner end -->
    <!--sub-footer-->
    <div class="sub-footer  fl-wrap">
        <div class="container">
            <div class="copyright"> mesecoles @ 2020 .  All rights reserved.</div>
            {{--
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Français</a></li>
                    
                    </ul>
                </div>
            --}}
            <div class="subfooter-nav">
                <ul class="no-list-style">
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
<!--footer end -->
