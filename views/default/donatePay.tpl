{* Шаблон страницы Donate pay *}

    <div class="main">
    <div class="container donate-pay">

      <div class="page row justify-content-start m-0 mt-5 mb-5">
        <span class="page-date d-inline-block col-12 text-center text-md-left col-md-2 m-0 p-0 mb-3 mb-md-0">Donation</span>
        <p class="page-title d-inline-block text-center col-12 col-md-8 m-0">{$rsPost[0]['name']}</p>
        
      </div>

      <div class="page-content">
        <div class="row m-0">
          <img class="main-image float-left" src="img/{$rsPost[0]['image']}" srcset="img/{$rsPost[0]['image_2x']}, img/{$rsPost[0]['image_3x']} 3x">
          <div class="col pl-lg-4 pr-lg-0">
            <span class="collected d-block col-12 text-center mt-4 mt-lg-0">Collected</span>
            <span class="sum d-block col-12 text-center">{$rsPost[0]['collected']}$</span>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">TARGET</span>
              <span class="value d-block col-6 text-right p-0">{$rsPost[0]['target']}$</span>
            </div>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">DAY LEFT</span>
              <span class="value d-block col-6 text-right p-0">{$rsPost[0]['day_left']}</span>
            </div>
            <div class="row m-0">
              <span class="name d-block col-6 p-0">START</span>
              <span class="value d-block col-6 text-right p-0">{$rsPost[0]['start']|date_format:"%d.%m.%Y"}</span>
            </div>
            <form class="form-inline" action="#">
              <input class="input form-control" type="text" name="sum" value="78$">
              <button class="btn" type="submit">Donate</button>
            </form>
          </div>
        </div>
        <p class="paragraph paragraph_bold mt-5 text-justify text-md-left">{$rsPost[0]['description']}</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block">{$rsPost[0]['title_1']}</span>
          {$rsPost[0]['paragraph_1']}
        </p>

        <div class="gallery row m-0 mb-3 justify-content-between">
          <a href="#">
            <img class="mb-4 mb-lg-0" src="img/{$rsPost[0]['gallery_image_1']}" srcset="img/{$rsPost[0]['gallery_image_1_2x']} 2x, img/{$rsPost[0]['gallery_image_1_3x']} 3x">
          </a>
          <a href="#">
            <img class="mb-4 mb-lg-0" src="img/{$rsPost[0]['gallery_image_2']}" srcset="img/{$rsPost[0]['gallery_image_2_2x']} 2x, img/{$rsPost[0]['gallery_image_2_3x']} 3x">
          </a>
          <a href="#">
            <img src="img/{$rsPost[0]['gallery_image_3']}" srcset="img/{$rsPost[0]['gallery_image_3_2x']} 2x, img/{$rsPost[0]['gallery_image_3_3x']} 3x">
          </a>
        </div>

        <div class="social row justify-content-center align-items-center m-0">
          <a class="google" href="#">Google</a>
          <a class="facebook" href="#">Facebook</a>
          <a class="instagram" href="#">Instagram</a>
          <a class="telegram" href="#">Telegram</a>
          <a class="youtube" href="#">Youtube</a>
          <a class="twitter" href="#">Twitter</a>
        </div>

      </div>

      <div class="row m-0 posts mt-5 mb-5">
        {section name=post loop=2}
        <div class="post col-12 col-lg-6 p-0 pr-lg-3 mb-4">
          <a href="./?controller=post&id={$rsReadAlsoPosts[post].id}">
            <img class="float-left mb-3" src="img/{$rsReadAlsoPosts[post].preview_image}" srcset="img/{$rsReadAlsoPosts[post].preview_image_2x} 2x, img/{$rsReadAlsoPosts[post].preview_image_3x} 3x">
            <div class="text-center">
              <p class="secondary-posts__post-title text-left pl-2 pl-lg-0">{$rsReadAlsoPosts[post].name}</p>
              <p class="secondary-posts__post-text text-left p-lg-0">{$rsReadAlsoPosts[post].description|truncate:225:"...":true}</p>
              <div class="sum row text-left m-0 pl-2 pl-lg-0">
                <span class="name col-6 p-0">Collected</span>
                <span class="name col-6 p-0">Target</span>
              </div>
              <div class="row text-left m-0 pl-2 pl-lg-0">
                <span class="value col-6 p-0">{$rsReadAlsoPosts[post].collected}$</span>
                <span class="value value_green col-6 p-0">{$rsReadAlsoPosts[post].target}$</span>
              </div>
            </div>
          </a>
        </div>
        {/section}

      </div>

    </div>