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
          <a class="google" href="#">Google</a>
          <a class="facebook" href="#">Facebook</a>
          <a class="instagram" href="#">Instagram</a>
          <a class="telegram" href="#">Telegram</a>
          <a class="youtube" href="#">Youtube</a>
          <a class="twitter" href="#">Twitter</a>
        </div>

      </div>

      <div class="main-posts pb-4 pb-md-5">

        <p class="read-also m-0 pt-4 pb-4 text-left">Read also</p>

        <div class="row justify-content-center m-0">
          {section name=post loop=2}
          <a href="./?controller=post&id={$rsReadAlsoPosts[post].id}" class="col-md-6 col-sm-12 col-12 main-posts__post">
            <div>
              <img src="img/{$rsReadAlsoPosts[post].preview_image}" srcset="img/{$rsReadAlsoPosts[post].preview_image_2x} 2x, img/{$rsReadAlsoPosts[post].preview_image_3x} 3x">
              <p class="main-posts__post-title">{$rsReadAlsoPosts[post].name}</p>
              <p class="main-posts__post-date">{$rsReadAlsoPosts[post].date|date_format:"%d | %m | %Y"}</p>
            </div>
            <p class="main-posts__post-tag pl-0">
              {foreach $rsReadAlsoPosts[post].tags as $item}
                <span class="tag">{$item['name']}</span>
              {/foreach}
            </p>
            <p class="main-posts__post-text text-justify text-sm-left pl-0 pr-0">{$rsReadAlsoPosts[post].description}</p>
          </a>
          {/section}
        </div>

      </div>
      <!-- main-posts -->

    </div>