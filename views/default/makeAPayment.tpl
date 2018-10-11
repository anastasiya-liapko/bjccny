{* Шаблон страницы Make a payment *}

  <div class="main">
    <div class="container make-a-payment mb-5">

      <p class="page-title d-block w-100 m-0 mt-5 mb-4 text-center">{$pageTitle}</p>

      <div class="row m-0">
        {section name=post loop=6}
          <div class="post col-12 col-lg-6 p-0 pr-lg-3 mb-4">
            <a href="./?controller=post&id={$rsPosts[post].id}">
              <img class="float-left mb-3" src="img/{$rsPosts[post].preview_image}" srcset="img/{$rsPosts[post].preview_image_2x} 2x, img/{$rsPosts[post].preview_image_3x} 3x">
              <div class="text-center">
                <p class="secondary-posts__post-title text-left pl-0">{$rsPosts[post].name}</p>
                <p class="secondary-posts__post-text text-left p-0">{$rsPosts[post].description|truncate:225:"...":true}</p>
                <a href="#" class="btn mb-5 mb-md-0">10$</a>
              </div>
            </a>
          </div>
        {/section}
      </div>
      
    </div>