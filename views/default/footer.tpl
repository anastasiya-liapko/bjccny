{* Шаблон подвала сайта *}
    </div>
    <!-- main -->

    <div class="footer">
      <div class="container">
        <div class="footer__lists row justify-content-between m-sm-0">
          {foreach $rsFooterCategories as $item name=footerCategories}
            <div class="col-md-1.6">
              <ul>
                <li><a href="./?controller=category&id={$item['id']}" class="footer__title">{$item['name']}</a></li>
                {if isset($item['children'])}
                  {foreach $item['children'] as $itemChild}
                    <li><a href="./?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a></li>
                  {/foreach}
                {/if}
              </ul>
            </div>
          {/foreach}
        </div>
        <!-- footer__lists -->

        <div class="footer__contacts row justify-content-center justify-content-sm-around m-sm-0">
            <p class="footer__contacts-address col-7 col-sm-3 text-center">
              <span class="label">New York, Adress 324324</span>
            </p>
            <p class="footer__contacts-mail col-7 col-sm-3 text-center">
              <span class="label">
                <a href="mailto:default@mail.com">default@mail.com</a>
              </span>
            </p>
            <p class="footer__contacts-phone col-7 col-sm-3 text-center">
              <span class="label">
                <a href="tel: +329830282000237">+329830282-00-0237</a>
              </span>
            </p>
        </div>
        <!-- footer__contacts -->

        <div class="footer__info row justify-content-sm-between align-items-center m-sm-0">
          <p class="footer__info-alefdev col-12 col-sm-1 p-0 text-center text-sm-left">Alefdev</p>
          <p class="col-12 col-sm-1 text-center">All rights reserved</p>
          <p class="col-12 col-sm-3 col-md-2 p-0 text-center text-sm-right">New users today : 34434</p>
        </div>
        <!-- footer__info-->

      </div>
    </div>
    <!-- footer -->

  </div>

  <div class="modal date-converter" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content shadow">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="icon-modal-close"></span>
          </button>
        </div>
        <div class="modal-body p-0 pl-5 pr-5">
          <p class="title text-left">Date converter</p>
          <p class="descr text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <form>

            <div class="row m-0 justify-content-between select-wrapper">
              <select class="p-0 select select_day select_short mb-2 mb-sm-0" name="day" id="day">
                <span style="z-index: 100;">1</span>
                <option class="text-center" value="">01</option>
                <option class="text-center" value="">02</option>
                <option class="text-center" value="">03</option>
              </select>
              <select class="col-12 col-sm p-0 ml-sm-4 mr-sm-4 mb-2 mb-sm-0 select select_month select_long" name="month" id="month">
                <option class="text-center" value="">January</option>
                <option class="text-center" value="">March</option>
                <option class="text-center" value="">February</option>
              </select>
              <select class="p-0 select select_year select_short" name="year" id="year">
                <option class="text-center" value="">2018</option>
                <option class="text-center" value="">2018</option>
                <option class="text-center" value="">2018</option>
              </select>
            </div>

            <div class="row justify-content-center">
              <button class="btn btn-convert mt-3 mb-3" type="button">
                <span class="icon-refresh"></span>
                <span class="label">Convert</span>
              </button>
            </div>

            <div class="row m-0 justify-content-between select-wrapper">
              <select class="select select_day-converted select_short mb-2 mb-sm-0" name="day-converted" id="day-converted">
                <option class="text-center" value="">01</option>
                <option class="text-center" value="">02</option>
                <option class="text-center" value="">03</option>
              </select>
              <select class="col-12 col-sm p-0 ml-sm-4 mr-sm-4 mb-2 mb-sm-0 select select_month-converted select_long" name="month-converted" id="month-converted">
                <option class="text-center" value="">Tishrei</option>
                <option class="text-center" value="">Tishrei</option>
                <option class="text-center" value="">Tishrei</option>
              </select>
              <select class="select select_year-converted select_short mb-2 mb-sm-0" name="year-converted" id="year-converted">
                <option class="text-center" value="">5778</option>
                <option class="text-center" value="">5778</option>
                <option class="text-center" value="">5778</option>
              </select>
            </div>

          </form>
        </div>
        <!-- modal-body -->
        <div class="modal-footer justify-content-center pl-5 pr-5">
          <a class="btn btn_green btn_capitalize mt-3 mb-4">View date on calendar</a>
        </div>
        <!-- modal-footer -->
      </div>
    </div>
  </div>
  <!-- modal converter -->

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
      <!-- don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div> 
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
        </div>

      </div>
    </div>
  </div>
  <!-- modal pswp -->

  <div class="modal search" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content shadow">
        <div class="modal-header row">

          <form class="search__form form-inline col-10" name="search-form" action="search-results.html">
            <input class="search__form-input form-control mr-sm-2" type="text" name="search" placeholder="Искать">
          </form>

          <button type="button" class="close p-0 mr-3" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="icon-modal-close"></span>
          </button>

        </div>
      </div>
    </div>
  </div>
  <!-- modal search -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
  <script src="js/swiper.js"></script>

  <script src="js/jquery.formstyler.min.js"></script>
  <script src="js/formstyler.js"></script>

  <script src="js/pickYear.js"></script>

  <script src="photoSwipe/photoswipe.min.js"></script>
  <script src="photoSwipe/photoswipe-ui-default.min.js"></script>

  <script src="js/photoSwipe.js"></script>
  
  <script src="js/calendar.js"></script>

  <script src="js/switchActiveElements.js"></script>

  </body>

</html>