{* Шаблон страницы News in *}

  <div class="main">
    <div class="container news-in">

      <div class="page row justify-content-end m-0">
        <p class="page-title d-inline-block col-12 col-md-8 m-0">{$rsPost[0]['name']}</p>
        <span class="page-date d-inline-block col-12 text-center text-md-right col-md-2 m-0">{$rsPost[0]['date']|date_format:"%d | %m | %Y"}</span>
      </div>

      <div class="page-content">
        <img class="main-image" src="img/{$rsPost[0]['image']}" srcset="img/{$rsPost[0]['image_2x']} 2x, img/{$rsPost[0]['image_3x']} 3x">
        <p class="paragraph paragraph_bold mt-5 text-justify text-md-left">{$rsPost[0]['description']}</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block">{$rsPost[0]['title_1']}</span>
          {$rsPost[0]['paragraph_1']}
        </p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block">{$rsPost[0]['title_2']}</span>
          {$rsPost[0]['paragraph_1']}
        </p>

        <div class="social row justify-content-center align-items-center m-0">
          <a class="google icon-google" href="#">
            <span>Google</span>
          </a>
          <a class="facebook icon-facebook" href="#">
            <span>Facebook</span>
          </a>
          <a class="instagram icon-instagram" href="#">
            <span>Instagram</span>
          </a>
          <a class="telegram icon-telegram" href="#">
            <span>Telegram</span>
          </a>
          <a class="youtube icon-youtube" href="#">
            <span>Youtube</span>
          </a>
          <a class="twitter icon-twitter" href="#">
            <span>Twitter</span>
          </a>
        </div>

      </div>

      <div class="main-posts pb-4 pb-md-5">

        <p class="read-also m-0 pt-4 pb-4 text-left">Read also</p>

        <div class="row justify-content-center m-lg-0">
          {section name=post loop=2}
          <div  class="col-md-6 col-sm-12 col-12 main-posts__post">
            <a href="./?controller=post&id={$rsReadAlsoPosts[post].id}">
              <div>
                <img src="img/{$rsReadAlsoPosts[post].preview_image}" srcset="img/{$rsReadAlsoPosts[post].preview_image_2x} 2x, img/{$rsReadAlsoPosts[post].preview_image_3x} 3x">
                <p class="main-posts__post-title">{$rsReadAlsoPosts[post].name}</p>
                <p class="main-posts__post-date">{$rsReadAlsoPosts[post].date|date_format:"%d | %m | %Y"}</p>
              </div>
              <div>
                <p class="main-posts__post-tag">
                  {foreach $rsReadAlsoPosts[post].tags as $item}
                    <span class="tag">{$item['name']}</span>
                  {/foreach}
                </p>
                <p class="main-posts__post-text text-justify text-sm-left">{$rsReadAlsoPosts[post].description}</p>
              </div>
            </a>
          </div>
          {/section}
        </div>

      </div>
      <!-- main-posts -->

    </div>