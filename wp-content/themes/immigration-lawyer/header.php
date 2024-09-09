 <!doctype html>
<html lang="ru" class="is-index">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

  </head>
  <style>
 @font-face {
font-family: "AA-Duke_Fill";  
src: url("AA-Duke_Fill.otf") format("truetype"); 
font-style: normal; 
font-weight: normal;
 }
  .b24-widget-button-shadow{display:none!important}.b24-widget-button-wrapper{display:none!important}
  .social-btns {
    font-size: 22px;
    list-style: none;
    padding-left: 5px;
    padding-right: 5px;
    color:#fff;
  }
  .social-btns .btn-telegram {
    background-color: #08c;
    border-color: #00539f;
    color: #fff;
    width: 100%;
    margin-bottom: 10px;
  }
  .social-btns .btn-viber {
    background-color: #8f5db7;
    border-color: #59267c;
    color: #fff;
    width: 100%;
    margin-bottom: 10px;
  }
  .social-btns .btn-facebook {
    background-color: #3b5998;
    border-color: #39589a;
    color: #fff;
    width: 100%;
    margin-bottom: 10px;
  }
@media (min-width: 1200px) {
.is-philipp-orlov .l-person__label {
    bottom:-20px;
    left: 52%;
}
}
  </style>
    <body>  

    <article class="l-page">
<div id="headerMain" class = "d-lg-none">
 <div id="header"><div class = "container">
 <address class="w-address"></address><address class="w-address"><a style = "font-size:1em;float:right;color: black;text-decoration:none;" href="#contacts">Контакты</a></address>
 </div>
</div>
</div>
      <header class="l-header">
        <div class="l-header__bar-wrap">
          <div class="container">
            <div class="l-header__bar">
              <div class="l-header__brand">
                <?php if( has_custom_logo() ){
  echo get_custom_logo();
} ?></div>
              <div class="l-header__bar-panel">
                <div class="w-scl__list">
                  <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6">
                    <?php  wp_nav_menu( [
  'theme_location'  => 'header',
  'container'       => 'false',
  'container_class' => 'navbar-nav',
  'menu_class'      => 'menu',
  'menu_id'         => 'false',
  'echo'            => true,
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',
] ); ?>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6">

                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6">

                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6">
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-xl-6">
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-lg btn-orange" data-toggle="modal" data-target="#callbackmodal">Задать вопрос</button>
<address class="w-address d-lg-none d-md-none"><!---a style = "font-size:0.8em; padding-top:15px;" href="tel:+380678468181" class="tel">+38 (067) 846 81 81</a>--></address>
            </div>
          </div>
        </div>
<div class="l-header__body">
          <div class="l-header__heading">
            <div class="container">

            <h1 class="text-center">
         <small>Зводимо ваші ризики до <b>0</b></small> 
         Юридична перевірка забудовника
         <small>Оцінюємо надійність новобудови <b>калькулятором ризиків</b>, а не відгуками в інтернеті.</small>
             </h1>
             </div>
           </div>
           <div class="w-promo__slider">
             <div class="slick-slide">
               <div class="w-promo__slide" style="background-image: url(img/promo-slide-bg-2.jpg)">
                 <div class="container">
                   <div class="w-promo__slide-panel">
                     <div class="title"><small>Адвокат з нерухомості Наталія Чацькіс</small> </div>
                     <ul>
                       <li><img src = "img/icon-briefcase.svg"><b>100%</b> наших клієнтів уникли проблем при купівлі нерухомості</li>
                       <li><img src = "img/icon-briefcase.svg"><b>68 339</b> переглядів нашого відео на youtube на тему купівлі нерухомості.</li>
                       <li><img src = "img/icon-briefcase.svg"> <b>4</b> незалежних відео оглядів ЖК у Києві та Київській області</li>
                       <li><img src = "img/icon-briefcase.svg"><b>70+</b> супроводжували угод з новобудовами для своїх клієнтів</li>
                       <li><img src = "img/icon-briefcase.svg"><b>21%</b> об'єктів виявилися проблемними</li>

                     </ul>
<button class="btn btn-lg btn-orange" data-toggle="modal" data-target="#callbackmodal">Задати питання адвокату</button>
                  </div>
                  <div class="w-promo__slide-img">
                    <img src="img/main-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
      </header>