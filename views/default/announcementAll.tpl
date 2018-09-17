{* Шаблон страницы Announcement all *}
  
  <div class="main">
  <div class="container announcement-all">

    <div class="page row justify-content-end m-0 pt-5">
      <p class="page-title d-inline-block col-12 m-0 mb-4 pl-0 pt-3 text-left">{$pageTitle}</p>
    </div>

    <div class="page-content">  
      <div class="announcement-all__posts row m-0 mb-4 justify-content-between">
        {section name=post loop=12}
        <a href="./?controller=post&id={$rsPosts[post].id}" class="col-12 col-md-3 p-0 mb-4 pr-md-4">
          <img src="img/{$rsPosts[post].preview_image}" srcset="img/{$rsPosts[post].preview_image_2x} 2x, img/{$rsPosts[post].preview_image_3x} 3x">
        </a>
        {/section}
      </div>
    </div>     
  </div>

  </div>