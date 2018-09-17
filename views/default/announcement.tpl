{* Шаблон страницы Announcement *}

  <div class="main">
    <div class="container announcement">

      <div class="page-content row pt-5 pb-5 m-0">

        <div class="post col-12 p-0 pb-4">
          <img class="main-image float-left mb-4 mr-md-4" src="img/{$rsPost[0]['image']}" srcset="img/{$rsPost[0]['image_2x']} 2x, img/{$rsPost[0]['image_3x']} 3x">
          
            <p class="page-title m-0 col-12">{$rsPost[0]['name']}</p>
          
            <p class="paragraph paragraph_bold mt-5 ml-3 ml-sm-0 text-justify text-md-left">{$rsPost[0]['description']}</p>
            <p class="paragraph ml-3 ml-sm-0 text-justify text-md-left">
              <span class="paragraph-title d-block">{$rsPost[0]['title_1']}</span>
              {$rsPost[0]['paragraph_1']}
            </p>
        </div>

        <p class="read-also m-0 ml-3 ml-sm-0 pt-4 pb-4 text-left">Read also</p>

        <div class="row m-0 justify-content-between">
          {section name=post loop=4}
          <a href="./?controller=post&id={$rsReadAlsoPosts[post].id}" class="col-12 col-sm p-sm-0 mb-4 mb-md-0 mr-sm-4">
            <img src="img/{$rsReadAlsoPosts[post].preview_image}" srcset="img/{$rsReadAlsoPosts[post].preview_image_2x} 2x, img/{$rsReadAlsoPosts[post].preview_image_3x} 3x">
          </a>
          {/section}
        </div>

      </div>
    </div>