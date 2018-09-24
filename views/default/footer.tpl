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
            <p class="footer__contacts-address col-7 col-sm-3 text-center"><span>New York, Adress 324324</span></p>
            <p class="footer__contacts-mail col-7 col-sm-3 text-center"><span>default@mail.com</span></p>
            <p class="footer__contacts-phone col-7 col-sm-3 text-center"><span>+329830282-00-0237</span></p>
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
            <span aria-hidden="true"><img src="img/date-converter-modal-close.svg"></span>
          </button>
        </div>
        <div class="modal-body p-0 pl-5 pr-5">
          <p class="title text-left">Date converter</p>
          <p class="descr text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <form>

            <div class="row m-0 justify-content-between select-wrapper">
              <select class="p-0 select select_day select_short mb-2 mb-sm-0" name="day" id="day">
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
              </select>
            </div>

            <div class="row justify-content-center">
              <button class="btn btn-convert mt-3 mb-3" type="button">Convert</button>
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

  <div class="modal photo-gallery" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content shadow">
        <!-- <div class="modal-header p-0">
          
        </div> -->
        <div class="modal-body p-0">
          
          <div id="carouselExampleControls" class="carousel" data-ride="carousel">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="img/modal-close-grey.svg"></span>
            </button>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/rectangle-00.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/rectangle-13.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/rectangle-14.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev control control_prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-icon carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next control control_next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-icon carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
        </div>
        <!-- modal-body -->
        
      </div>
    </div>
  </div>
  <!-- modal gallery -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
  <script src="js/swiper.js"></script>

  <script src="js/jquery.formstyler.min.js"></script>
  <script src="js/formstyler.js"></script>
  
  </body>

</html>