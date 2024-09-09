<!-- footer -->
      <footer class="l-footer">
        <div class="container">
          <div class="l-footer__bar">
            <div class="l-footer__info">© 2008-2024, “Наказ” <br>Всі права захищені</br>
<a href = "privacy-policy.html" target="_blank">Privacy Policy</a> | <a href = "cookie-policy.html" target="_blank">Cookie Policy</a>     
      </div>
            <p><a onclick="return addFavorite(this);" class="btn btn-lg btn-wired">Додати в закладки</a></p>
            <address class="l-footer__address"><!--<a href="tel:380678468181" class="tel">+38 (067) 846 81 81</a>--><span class="location">Київ, вул. Гетьмана Павла Скоропадського, 41 (колишня вул. Льва Толстого)</span></address>
          </div>
        </div>
      </footer>

    </article>

    <!-- callback modal -->
    <div class="w-modal modal fade" id="callbackmodal" tabindex="-1" role="dialog" aria-labelledby="callbackmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="callbackmodalLabel">Напишіть нам</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <p>Для зв'язку скористайтеся одним із месенджерів.</p>
        <ul class="social-btns text-center">
    <li><a onclick="telegramFunction()" class="btn btn-telegram ga_order order-btn" aria-label="Telegram"><img style = "width: 25px; float:left;" src = "img/icons/telega.png"> Telegram</a></li>
    <li><a onclick="viberFunction()" class="btn btn-viber ga_order order-btn" aria-label="Viber"><img style = "width: 25px; float:left;" src = "img/icons/vibe.png"> Viber</a></li>
   
  </ul>
        <hr>
        <p>Або лишіть ваш номер та ми зв'яжемося з вами через telegram або viber.</p>
        <form method="post" action="send.php" id ="callback-modal">
<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">
          <input type="hidden" name="currenctURL" value="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']?>">
          <input type="hidden" name="pack">
          <div class="form-group"><input class="jcf-phone form-control" required name="phone" type="text" placeholder="Ваш номер telegram или viber"></div>
          <div class="form-submit"><button id = "callback-btn" class="btn btn-lg btn-orange" type="submit">Заказать
          </button></div>
        </form>
        </div>
      </div>
      </div>
    </div>

    <!-- vng modal -->
    <div class="w-modal modal fade" id="vngmodal" tabindex="-1" role="dialog" aria-labelledby="vngmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="vngmodalLabel">Замовити</h5>
            <div class="headline-form"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Для узгодження деталей скористайтеся месенджерами, розташованими нижче.</p>
                          <div class="w-scl__list">
                            <div class="row">
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                                <a href="viber://pa?chatURI=nakazfamily" class="is-skype">Viber</a>
                              </div>
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                                <a href="https://m.me/nakaz.family" class="is-fbm">Facebook</a>
                              </div>
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                      <a href="https://teleg.one/nakazfamily_bot" class="is-telegram">Telegram</a>
                    </div>
                             
                            </div>
                          </div>
          </div>
        </div>
      </div>
    </div>

    <!-- order service modal -->
    <div class="w-modal modal fade" id="orderservicemodal" tabindex="-1" role="dialog" aria-labelledby="orderservicemodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="orderservicemodalLabel">Замовити послугу <small>“Юрист з нерухомості”</small></h5>
            <div class="headline-form"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Для узгодження деталей скористайтеся месенджерами, розташованими нижче.</p>
<ul class="social-btns text-center">
<li><a onclick="javascript:window.open('https://teleg.one/nakazfamily_bot')" target="_blank" class="btn btn-telegram">Telegram</a></li>
  <li><a href="https://m.me/nakaz.family" target="_blank" class="btn btn-facebook">Facebook Messenger</a></li>
  <li><a href="viber://pa?chatURI=nakazfamily" target="_blank" class="btn btn-viber">Viber</a></li>
  <li><a href="whatsapp://send?text=Здравствуйте я с сайта RealEstate.nakaz.ua, хочу записаться на консультацию, сколько это стоит?&phone=+380678468181" class = "btn btn-whatsapp">WhatsApp</a></li>
</ul>
          </div>
        </div>
      </div>
    </div>

    <!-- download modal -->
    <div class="w-modal modal fade is-wide" id="downloadfilemodal" tabindex="-1" role="dialog" aria-labelledby="downloadfilemodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="downloadfilemodalLabel">Скачати файл</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="w-modal__download">
              <div class="row">
                <div class="col-12 col-md-7">
                  <p>Скористайтеся месенджерами, розташованими нижче.</p>
                          <div class="w-scl__list">
                            <div class="row">
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                                <a href="viber://pa?chatURI=nakazfamily" class="is-skype">Viber</a>
                              </div>
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                                <a href="https://m.me/nakaz.family" class="is-wapp">Facebook</a>
                              </div>
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
                      <a href="https://teleg.one/nakazfamily_bot" class="is-telegram">Telegram</a>
                    </div>
                              <div class="col-6 col-sm-4 col-md-6 col-xl-4">
<a href="whatsapp://send?text=Здравствуйте Наталья я пишу Вам с family.nakaz.ua​&phone=+380678468181???&abid=+380678468181" class="is-fbm">WhatsApp</a>
                              </div>
                            </div>
                          </div>
                </div>
                <div class="col-12 col-md-5">
                  <div class="w-modal__file"><img src="img/modal-file-preview.png" alt=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="w-modal modal fade is-wide" id="pricesmodal1" tabindex="-1" role="dialog" aria-labelledby="pricesmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="pricesmodalLabel">Перевірка та аналіз документів</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <table class="table w-modal__prices">
               <tbody>
               <tr>
                 <th>дозволи на будівництво</th>
               </tr>
               <tr>
                 <th>земельної ділянки</th>
               </tr>
               <tr>
                 <th>ТУ (технічні умови)</th>
               </tr>
               <tr>
                 <th>Містобудівні умови та обмеження</th>
               </tr>
               <tr>
                 <th>наявність арештів/заборон у Реєстрі прав на нерухомість</th>
               </tr>
               <tr>
                 <th>аналіз та опис ризиків схеми інвестування</th>
               </tr>
               <tr>
                 <th>вичитка/корегування договору із Забудовником</th>
               </tr>
               <tr>
                 <th>моніторинг наявності судових спорів</th>
               </tr>
               <tr>
                 <td colspan = "2">В результаті ви отримаєте детальний аналіз документів по об'єкту інвестування та зможете впевнено приймати рішення</td>
               </tr>
               </tbody>
         </table>
        </div>
      </div>
      </div>
    </div>
      <div class="w-modal modal fade is-wide" id="pricesmodal2" tabindex="-1" role="dialog" aria-labelledby="pricesmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="pricesmodalLabel">Повний супровід угоди</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
         <table class="table w-modal__prices">
               <tbody>
               <tr>
                 <th>перевірка документів + супровід на угоді</th>
               </tr>
               <tr>
                 <th>дозвіл на будівництво</th>
               </tr>
               <tr>
                 <th>земельна ділянка</th>
               </tr>
               <tr>
                 <th>ТУ (технічні умови)</th>
               </tr>
               <tr>
                 <th>Містобудівні умови та обмеження</th>
               </tr>
               <tr>
                 <th>наявність арештів/заборон у Реєстрі прав на нерухомість</th>
               </tr>
               <tr>
                 <th>аналіз та опис ризиків схеми інвестування</th>
               </tr>
               <tr>
                 <th>вичитка/корегування договору із Забудовником</th>
               </tr>
               <tr>
                 <th>моніторинг наявності судових спорів</th>
               </tr>
               <tr>
                 <th>переговори з менеджером відділу продаж</th>
               </tr>
               <tr>
                 <th>переговори з нотаріусом</th>
               </tr>
               <tr>
                 <th>супровід на угоді з підписання</th>
               </tr>
               <tr>
                 <th>усна консультація щодо результатів аналізу</th>
               </tr>
               <tr>
                 <td colspan = "2">В результаті ви отримаєте детальний аналіз документів по об'єкту інвестування і ми будемо супроводжувати вас на угоді, щоб ви були впевнені, що все йде за планом</td>
               </tr>
               </tbody>
         </table>
        </div>
      </div>
      </div>
    </div>
  <script>
  function clickFunction() {
  document.querySelector('.b24-widget-button-inner-item').click();
  }    
  function viberFunction() {
  document.querySelector('[data-b24-crm-button-widget="openline_viber"]').click();
  }
  function facebookFunction() {
  document.querySelector('[data-b24-crm-button-widget="openline_facebook"]').click();
  }    
  function telegramFunction() {
  document.querySelector('[data-b24-crm-button-widget="openline_telegrambot"]').click();
  }   
 
$("#headerMain").hide();
$(window).scroll(function() {
    if ($(window).scrollTop() > 50) {
        $("#headerMain").fadeIn("slow");
    }
    else {
        $("#headerMain").fadeOut("fast");
    }
});
</script>
<?php wp_footer(); ?>
  </body>
</html> 
