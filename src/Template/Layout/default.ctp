<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="aStar Fashion Template Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/styles/bootstrap-4.1.3/bootstrap.css">
    <link href="<?= $this->request->base ?>/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/styles/blog.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->base ?>/styles/blog_responsive.css">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
   <!--  <?= $this->Flash->render() ?> -->
    <div class="super_container">

    
    <!-- Sidebar -->

    <div class="sidebar">
        
        <!-- Info -->
        <div class="info">
            <div class="info_content d-flex flex-row align-items-center justify-content-start">
                
                <!-- Language -->
                <div class="info_languages has_children">
                    <div class="language_flag"><img src="<?= $this->request->base ?>/images/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div class="dropdown_text">english</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    
                    <!-- Language Dropdown Menu -->
                     <ul>
                        <li><a href="#">
                            <div class="language_flag"><img src="<?= $this->request->base ?>/images/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">french</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="<?= $this->request->base ?>/images/flag_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">japanese</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="<?= $this->request->base ?>/images/flag_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">anassian</div>
                        </a></li>
                        <li><a href="#">
                            <div class="language_flag"><img src="<?= $this->request->base ?>/images/flag_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">spanish</div>
                        </a></li>
                     </ul>

                </div>

                <!-- Currency -->
                <div class="info_currencies has_children">
                    <div class="dropdown_text">mad</div>
                    <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                    <!-- Currencies Dropdown Menu -->
                     <ul>
                        <li><a href="#"><div class="dropdown_text">EUR</div></a></li>
                        <li><a href="#"><div class="dropdown_text">YEN</div></a></li>
                        <li><a href="#"><div class="dropdown_text">GBP</div></a></li>
                        <li><a href="#"><div class="dropdown_text">CAD</div></a></li>
                     </ul>

                </div>

            </div>
        </div>

        <!-- Logo -->
        <div class="sidebar_logo">
            <?php
            echo $this->Html->image("logo2.png", [
                "alt" => "Fashion Shifter",
                'url' => ['controller' => 'Pages', 'action' => 'index'],
                "width" => "220"
            ]);
            ?>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="sidebar_nav">
            <ul>
                <li><a href="http://localhost/fashion/users/login">login<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost/fashion/">home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost/fashion/pieces/buy">buy<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost/fashion/pieces/sell">sell<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost/fashion/pieces/remake">remake<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="http://localhost/fashion/pages/aboutus">about us<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <!-- Search -->
        <div class="search">
            <form action="#" class="search_form" id="sidebar_search_form">
                <input type="text" class="search_input" placeholder="Search" required="required">
                <button class="search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Cart -->
        <div class="cart d-flex flex-row align-items-center justify-content-start">
            <div class="cart_icon"><a href="cart.html">
                <img src="<?= $this->request->base ?>/images/bag.png" alt="">
                <div class="cart_num">2</div>
            </a></div>
            <div class="cart_text">bag</div>
            <div class="cart_price">$39.99 (1)</div>
        </div>
    </div>

    


















    <?= $this->fetch('content') ?>
    





















    <footer class="footer">
        <div class="footer_content">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <p>
                            Made by : <br>
                            <em><b>ELBAZ Anass</b></em><br>
                             & <br>
                            <em><b>BEAILA Younes</b></em><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="footer_social">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_social_container d-flex flex-row align-items-center justify-content-between">
                                <!-- Instagram -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">instagram</div>
                                    </div>
                                </a>
                                <!-- Google + -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">google +</div>
                                    </div>
                                </a>
                                <!-- Pinterest -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-pinterest" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">pinterest</div>
                                    </div>
                                </a>
                                <!-- Facebook -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">facebook</div>
                                    </div>
                                </a>
                                <!-- Twitter -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">twitter</div>
                                    </div>
                                </a>
                                <!-- YouTube -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">youtube</div>
                                    </div>
                                </a>
                                <!-- Tumblr -->
                                <a href="#">
                                    <div class="footer_social_item d-flex flex-row align-items-center justify-content-start">
                                        <div class="footer_social_icon"><i class="fa fa-tumblr-square" aria-hidden="true"></i></div>
                                        <div class="footer_social_title">tumblr</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
        </div>

        <!-- Credits -->
        <div class="credits">
            <div class="section_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="credits_content d-flex flex-row align-items-center justify-content-end">
                                <div class="credits_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>



    <script src="<?= $this->request->base ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?= $this->request->base ?>/styles/bootstrap-4.1.3/popper.js"></script>
    <script src="<?= $this->request->base ?>/styles/bootstrap-4.1.3/bootstrap.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/greensock/TweenMax.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?= $this->request->base ?>/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?= $this->request->base ?>/plugins/easing/easing.js"></script>
    <script src="<?= $this->request->base ?>/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="<?= $this->request->base ?>/js/blog.js"></script>
</body>
</html>

<style type="text/css">
    input, select {
        height: 30px;
        width: 100%;
        background-color: #fcfcfd;
        border-radius: 1px;
        border: solid 1px #bbe432;
        margin: 5px;
        padding: 5px;
    }

</style>