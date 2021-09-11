<?php include_once 'app/index_tools.php';?>
<!DOCTYPE html>
<html lang="ua" charset="utf-8">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro Sweet</title>
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
</head>

<body>
    <header id="start_page">
        <div class="hr_middle">
        </div>
        <div class="top_menu">
            <div class="container menu_cont">
                <div class="logo_block">
                    <a title="" href="#"><img alt="Логотип Брати Кукурудзи" src="img/logo.png"></a>
                </div>
                <div class="menu_block">
                    <a title="Перехід на початок сторінки" href="#" class="active">Головна</a>
                    <a title="Перехід до розділу Про нас" href="#about_us">Про нас і кукурудзу</a>
                    <a title="Перехід до розділу Технології" href="#tech">Технології</a>
                    <a title="Перехід до розділу Співпраця" href="#cooperation">Співпраця з нами</a>
                    <a title="Перехід до відеогалереї" href="#videogallery">Відеогалерея</a>
                    <a title="Перехід до форми зворотнього зв'язку та контактної інформаціх" href="#contact">Контакти</a>
                </div>
                <div class="menu_block_mob_top">
                    <img alt="Меню для мобільної версії" src="img/hamburger.svg">
                </div>
            </div>
        </div>
    </header>
    <section class="mobile_menu_container">
        <div class="container">
            <ul class="mobile_menu">
                <a title="Перехід на початок сторінки" href="#" class="header_m_menu_item">
                    <li> > Головна</li>
                </a>
                <a title="Перехід до розділу Про нас" href="#about_us" class="header_m_menu_item">
                    <li> > Про нас і кукурудзу</li>
                </a>
                <a title="Перехід до розділу Технології" href="#tech" class="header_m_menu_item">
                    <li> > Технології</li>
                </a>
                <a title="Перехід до розділу Співпраця" href="#cooperation" class="header_m_menu_item">
                    <li> > Співпраця з нами</li>
                </a>
                <a title="Перехід до відеогалереї" href="#videogallery" class="header_m_menu_item">
                    <li> > Відеогалерея</li>
                </a>
                <a title="Перехід до форми зворотнього зв'язку та контактної інформаціх" href="#contact" class="header_m_menu_item">
                    <li> > Контакти</li>
                </a>
            </ul>
        </div>
    </section>
    <section class="carousel_cont">
        <div id="header_carousel" class="carousel slide carousel_header" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#header_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header_carousel" data-slide-to="1"></li>
                <li data-target="#header_carousel" data-slide-to="2"></li>
                <li data-target="#header_carousel" data-slide-to="3"></li>
                <li data-target="#header_carousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item carousel_item active" align="center">
                    <img alt="Постер СТОВ АГРОСВІТ представляє цукрову кукурудзу" src="img/slider.png" width="1100px">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item carousel_item" align="center">
                    <img alt="Постер Брати кукурудзи із зображенням вареної кукурудзи на тарілці" src="img/slider_corn.jpg" width="1100px">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item carousel_item" align="center">
                    <img alt="Постер Брати кукурудзи із зображенням кукурудзяного поля" src="img/slider_field_corn.jpg" width="1100px">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item carousel_item" align="center">
                    <img alt="Постер Брати кукурудзи із макро зображенням кукурудзи" src="img/slider_zoom_corn.jpg" width="1100px">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item carousel_item" align="center">
                    <img alt="Постер Брати кукурудзи із макро зображенням дитини що смакує кукурудзою" src="img/slider_child_eating_corn.jpg" width="1100px">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us" id="about_us">
        <div class="container">
            <div class="items_block  bottom_revers ">
                <div class="item text_item">
                    <h2>
                        Про нас
                    </h2>
                    <p>
                        СТОВ АГРОСВІТ - це сільськогосподарське
                        товариство , яке з квітня 2000 року ( вже 21 рік !!! )
                        займається вирощуванням сільськогосподарської
                        продукції. </p>
                    <p> Вся випущена нами продукція - вирощена
                        виключно на власних полях з дотриманням всіх
                        санітарних норм і правил. Зіркою в цьому
                        виробництві є цукрова кукурудза супер - солодких
                        сортів провідних селекційних компаній світу... </p>
                    <div class="details_cont">
                        <a title="" href="#" class="details">Детальніше</a>
                    </div>
                </div>
                <div class="item text_item">
                    <img alt="Зображення Качана вавреної кукурудзи" src="img/about_us.jpg" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="how_useful_corn">
        <div class="container">
            <div class="items_block ">
                <div class="item text_item">
                    <img alt="Зображена свіжа кукурудза" src="img/how_useful_corn.jpg" width="100%">
                </div>
                <div class="item text_item">
                    <h2> Чим корисна кукурудза? </h2>
                    <p>У кукурудзі міститься 26 хімічних елементів, які
                        позитивно впливають на організм людини. Злакова
                        культура насичена вітамінами групи В, Е, А, РР. До
                        складу продукту входять магній і кальцій, йод та
                        мідь, фосфор і цінні жири, пектин і клітковина.
                        Кукурудзяні злаки не містять глютен, який є
                        сильним алергеном. Це екологічно чиста та
                        безпечна культура, яка не накопичує небезпечні
                        елементи.</p>
                    <div class="details_cont">
                        <a title="" href="#" class="details">Детальніше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="production_technology" id="tech">
        <div class="container">
            <div class="heading_item item">
                <h2>Технологія виробництва</h2>
            </div>
            <div class="items_block">
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №1 Привозимо" src="img/making_tech1.jpg" width="250px"></div>
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №2 Очищуємо" src="img/making_tech2.jpg" width="250px"></div>
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №3 Обрізаємо" src="img/making_tech3.jpg" width="250px"></div>
            </div>
            <div class="items_block">
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №4 Бланшируємо" src="img/making_tech4.jpg" width="250px"></div>
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №5 Вакумуємо" src="img/making_tech5.jpg" width="250px"></div>
                <div class="item img_item_tech"><img alt="Технологія виробництва крок №6 Стерилізуємо" src="img/making_tech6.jpg" width="250px"></div>
            </div>
        </div>
    </section>
    <section class="tip">
        <div class="container">
            <div class="items_block">
                <div class="item item_tip">
                    <img alt="Веселий персонаж у формі качана кукурудзи" src="img/hint_about_the_technological_process.jpg">
                </div>
                <div class="item item_tip_text">
                    <p>Весь процес від збирання кукурудзи на полі - до її стерилізації триває менше 6
                        годин! Наша кукурудза не містить консервантів , ароматизаторів та барвників!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="consumption_technology">
        <div class="container">
            <div class="s_heading_item item pb25">
                <h2>Технологія споживання</h2>
            </div>
            <div class="items_block">
                <div class="item img_item_tech"><img alt="Пригодування кукурудзи у мікрохвилівці займе 5 хвилин" src="img/consumption_technology.jpg">
                    <p>5 хв.</p>
                </div>
                <div class="item img_item_tech"><img alt="Поставити варити на 2 хвилини" src="img/consumption_technology2.jpg">
                    <p>2 хв.</p>
                </div>
                <div class="item img_item_tech"><img alt="Піджарити на протязі 10 хвилин" src="img/consumption_technology3.jpg">
                    <p>10 хв.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="tip" id="cooperation">
        <div class="container">
            <div class="item pt100 center">
                <h2>Співпраця з нами</h2>
            </div>
            <div class="items_block">
                <div class="item item_tip">
                    <img alt="Веселий персонаж у формі качана кукурудзи" src="img/hint_about_the_cooperation.jpg">
                </div>
                <div class="item item_tip_text">
                    <p>Ми в силі запропонувати цікаві пропозиції для співпраці! Якщо Ви готові
                        приєднатися до найкращої команди і створити регіональне представництво
                        компанії у Вашому місті - звертайся до нас. Ми чекаємо Вас!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="our_advantages">
        <div class="container">
            <div class="s_heading_item item pb25">
                <h2>Наші переваги</h2>
            </div>
            <div class="items_block_center">
                <div class="item img_item_tech_2el">
                    <img alt="Зображення сертифіфкату" src="img/our_advantages1.jpg">
                    <p>Натуральна продукція</p>
                </div>
                <div class="item img_item_tech_2el">
                    <img alt="Зображення монети" src="img/our_advantages2.jpg">
                    <p>Доступна ціна</p>
                </div>
                <div class="item img_item_tech_2el">
                    <img alt="Зображення автомолбіля доставки" src="img/our_advantages3.jpg">
                    <p>Безкоштовна <br>доставка по Україні</p>
                </div>
            </div>
            <div class="items_block_center">
                <div class="item img_item_tech_2el">
                    <img alt="Зображення домовленості та партнерства" src="img/our_advantages4.jpg">
                    <p>Спеціальні пропозиції для закладів громадськго харчування</p>
                </div>
                <div class="item img_item_tech_2el">
                    <img alt="Зображення купона знижки" src="img/our_advantages5.jpg">
                    <p>Знижки для дитячих закладів та некомерційних установ </p>
                </div>
            </div>
        </div>
    </section>
    <section class="video_gallery pb50" id="videogallery">
        <div class="container">
            <div class="s_heading_item item pb50">
                <h2>Відеогалерея</h2>
            </div>
            <div class="items_block">
                <div class="item img_item">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VVJM_TfK_30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="item img_item">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/iFpLEhWbRZg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="thanks contact_form pt50 pb50">
        <div class="container">
            <div class="item" align="center">

                <img alt="Веселий персонаж у формі качана кукурудзи" src="img/get_conversation.jpg">
                <h1 class="">Дякуємо за звернення!</h1>
                <h2 class="">З вами зв'яжуться найближчим часом.</h2>



            </div>
        </div>
    </section>



    <section class="contact_form pt25 pb25" id="contact">
        <div class="container">
            <div class="items_block_center">
                <div class="item title_form_item">
                    <h1 class="pt50">ПОСПІЛКУЄМОСЬ?</h1>
                    <div class="items_block">
                        <div class="item">
                            <img alt="Веселий персонаж у формі качана кукурудзи" src="img/get_conversation.jpg">
                        </div>
                        <div class="item item_tip_contact">
                            <p>Чекаємо на Ваші питання, пропозиції, коментарі.</p>
                        </div>
                    </div>
                </div>
                <form name="contact_form" id="form_body" method="POST" action="action/form.php?type=static">
                    <div class="item form_item_block">
                        <div class="items_block_form">
                            <div class="form_item">
                                <div><label>ПІБ<i class="required"> (Обов'язкове)</i></label></div>
                                <input name="pib" id="pib" value="<?php echo val_from_get('pib'); ?>"  required>
                                <?php echo render_error('pib');?>


                            </div>
                        </div>
                        <div class="items_block_form">
                            <div class="form_item">
                                <div><label>E-mail</label></div>
                                <input type="email" name="email" id="email" value="<?php echo val_from_get('email');?>">
                                <?php echo render_error('email');?>
                            </div>
                        </div>
                        <div class="items_block_form">
                            <div class="form_item">
                                <div><label>Мобільний <i class="required"> (Обов'язкове)</i></label></div>
                                <input name="mobile" id="mobile" data-mask="(000) 000-00-00" placeholder="(___) ___-__-__" value="<?php echo val_from_get('mobile');?>" required>
                                <?php echo render_error('mobile');?>
                            </div>
                        </div>
                        <div class="items_block_form">
                            <div class="form_item">
                                <div><label>Повідомлення</label></div>
                                <textarea name="msg" id="msg" rows="5"><?php echo val_from_get('msg');?>
                                </textarea>
                                <?php echo render_error('msg');?>
                            </div>
                        </div>
                        <div class="items_block_form">
                            <div class="form_item_label"></div>
                            <div class="form_item" align="center">
                                <input type="submit" value="Повідомити" class="submit_bt">
                </form>
            </div>
        </div>
        </div>
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
                    <div class="adress_item mobile"><a href="tel:0974570388" title="Зателефонувати на +380974570388"> +380974570388</a> (вайбер)</div>
                    <div class="adress_item email"> agro.sweet@ukr.net</div>
                </div>
                <div class="item footer_item">
                    <h3 class="pb25">Категорії</h3>
                    <ul class="footer_menu">
                        <li><a title="Перехід на початок сторінки" href="#" class="footer_menu_item"> > Головна</a></li>
                        <li><a title="Перехід до розділу Про нас" href="#about_us" class="footer_menu_item"> > Про нас і кукурудзу</a></li>
                        <li><a title="Перехід до розділу Технології" href="#tech" class="footer_menu_item"> > Технології</a></li>
                        <li><a title="Перехід до розділу Співпраця" href="#cooperation" class="footer_menu_item"> > Співпраця з нами</a></li>
                        <li><a title="Перехід до відеогалереї" href="#videogallery" class="footer_menu_item"> > Відеогалерея</a></li>
                    </ul>
                </div>
                <div class="item">
                    <img alt="Веселий персонаж у формі качана кукурудзи" src="img/footer_poster.jpg">
                </div>
            </div>
        </div>
    </footer>
    <div class="hr_middle">
        <div class="copyrights pt25 pb25">СТОВ АГРОСВІТ</div>
    </div>
    <div id="toTop" style="display: none;">
        <a title="" href="#start_page"> <i class="fa fa-chevron-up"></i></a>
    </div>
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <script src="jquery/jquery.mask.min.js"></script>
    <script src="js/carousel.min.js"></script>
    <script src="js/to_top.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
