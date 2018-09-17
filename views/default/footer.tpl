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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.js"></script>
  <script src="js/swiper.js"></script>
  
  </body>

</html>