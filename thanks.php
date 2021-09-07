<?php include_once 'app/config.php';?>
<?php include_once 'app/index_tools.php';?>
<!DOCTYPE html>
<html lang="ua" charset="utf-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro Sweet</title>
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
    <link rel="stylesheet" href="css/carousel.css">
</head>

<body>
    <header id="start_page">
        <div class="hr_middle">
        </div>
        <div class="top_menu">
            <div class="container menu_cont">
                <div class="logo_block">
                    <a href="#"><img src="img/logo.png"></a>
                </div>
                <div class="menu_block">
                    <a href="<?php echo $baseurl;?>#" class="active">Головна</a>
                    <a href="<?php echo $baseurl;?>#about_us">Про нас і кукурудзу</a>
                    <a href="<?php echo $baseurl;?>#tech">Технології</a>
                    <a href="<?php echo $baseurl;?>#cooperation">Співпраця з нами</a>
                    <a href="<?php echo $baseurl;?>#videogallery">Відеогалерея</a>
                    <a href="<?php echo $baseurl;?>#contact">Контакти</a>
                </div>
                <div class="menu_block_mob_top">
                    <img src="img/hamburger.svg">
                </div>
            </div>
        </div>
    </header>
    <section class="mobile_menu_container">
        <div class="container">
            <ul class="mobile_menu">
                <a href="<?php echo $baseurl;?>#" class="header_m_menu_item">
                    <li> > Головна</li>
                </a>
                <a href="<?php echo $baseurl;?>#about_us" class="header_m_menu_item">
                    <li> > Про нас і кукурудзу</li>
                </a>
                <a href="<?php echo $baseurl;?>#tech" class="header_m_menu_item">
                    <li> > Технології</li>
                </a>
                <a href="<?php echo $baseurl;?>#cooperation" class="header_m_menu_item">
                    <li> > Співпраця з нами</li>
                </a>
                <a href="<?php echo $baseurl;?>#videogallery" class="header_m_menu_item">
                    <li> > Відеогалерея</li>
                </a>
                <a href="<?php echo $baseurl;?>#contact" class="header_m_menu_item">
                    <li> > Контакти</li>
                </a>
            </ul>
        </div>
    </section>

    <div class="hr_middle">
    </div>

    <section class="thanks contact_form pt50 pb50" style="display:block;">
        <div class="container">
            <div class="item" align="center">

                <img src="img/get_conversation.jpg">
                <h1 class="">Дякуємо за звернення!</h1>
                <h2 class="">З вами зв'яжуться найближчим часом.</h2>



            </div>
        </div>
    </section>

    <div class="hr_middle">
    </div>
    <footer class="footer_section pt50 pb25">
        <div class="container">
            <div class="items_block">
                <div class="item adress_items_block footer_item">
                    <h3 class="pb25">Контакти</h3>
                    <div class="adress_item adress">32400, Хмельницька обл., м. Дунаївці,<br>
                        вул. Шевченка 115/7 </div>
                    <div class="adress_item mobile"> +380974570388 (вайбер)</div>
                    <div class="adress_item email"> agro.sweet@ukr.net</div>
                </div>
                <div class="item footer_item">
                    <h3 class="pb25">Категорії</h3>
                    <ul class="footer_menu">
                        <li><a href="<?php echo $baseurl;?>#" class="footer_menu_item"> > Головна</a></li>
                        <li><a href="<?php echo $baseurl;?>#about_us" class="footer_menu_item"> > Про нас і кукурудзу</a></li>
                        <li><a href="<?php echo $baseurl;?>#tech" class="footer_menu_item"> > Технології</a></li>
                        <li><a href="<?php echo $baseurl;?>#cooperation" class="footer_menu_item"> > Співпраця з нами</a></li>
                        <li><a href="<?php echo $baseurl;?>#videogallery" class="footer_menu_item"> > Відеогалерея</a></li>
                    </ul>
                </div>
                <div class="item">
                    <img src="img/footer_poster.jpg">
                </div>
            </div>
        </div>
    </footer>
    <div class="hr_middle">
        <div class="copyrights pt25 pb25">СТОВ АГРОСВІТ</div>
    </div>
    <div id="toTop" style="display: none;">
        <a href="#start_page"> <i class="fa fa-chevron-up"></i></a>
    </div>
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="jquery/jquery.mask.min.js"></script>
    <script src="js/carousel.min.js"></script>
    <script src="js/to_top.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
