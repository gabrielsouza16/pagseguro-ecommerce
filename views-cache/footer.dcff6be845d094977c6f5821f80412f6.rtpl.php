<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Blueflame</h2>
                        <p></p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação </h2>
                        <ul>
                            <li><a href="/profile">Minha Conta</a></li>
                            <li><a href="#">Meus Pedidos</a></li>
                            <li><a href="#">Lista de Desejos</a></li>
			    <li><button onclick="document.getElementById('menu').style.display='block'" class="w3-button w3-black">Atendimento</button></a></li>                      
                        </ul>                        
                    </div>
                </div>

		<!-- Menu Modal -->
                <div id="menu" class="w3-modal">
                        <div class="w3-modal-content w3-animate-zoom">
                            <div class="w3-container w3-black w3-display-container">
                                <span onclick="document.getElementById('menu').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                <h1>Contato</h1>
                            </div>
                            <div class="w3-container">
                                    <p><i class="fa fa-whatsapp" style="font-size:36px;color:green"></i> (11)95364-1104</p>
                                    <p><i class="fa fa-envelope" style="font-size:36px;color:cornflowerblue"></i> blueflameaquecedores@gmail.com</p>
                            </div>
                        </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <?php require $this->checkTemplate("categories-menu");?>

                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p></p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 Blueflame <a href="https://www.blueflameaquecedores.com.br" target="_blank">blueflameaquecedores.com.br</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <script src="/res/site/js/handlebars-v4.0.11.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="/res/site/js/owl.carousel.min.js"></script>
    <script src="/res/site/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="/res/site/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="/res/site/js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="/res/site/js/bxslider.min.js"></script>
	<script type="text/javascript" src="/res/site/js/script.slider.js"></script>
  
    <script>
        $(function () {

            if (scripts instanceof Array) {

                $.each(scripts, function (index, fn) {

                    if (typeof fn === 'function') fn();

                });

            }

        });
    </script>

</body>
</html>