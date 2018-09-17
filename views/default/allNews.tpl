{* Шаблон страницы All news *}
  
  <div class="main">
  <div class="container all-news">
    
    <p class="page-title d-block w-100 m-0 mt-5 mb-4">{$pageTitle}</p>
    <div class="all-news-nav row justify-content-center m-0">
      {if $rsCategory[0]['children']}
        {foreach $rsCategory[0]['children'] as $item}
          <a class="mr-md-2 col-12 col-md-2 text-center" href="./?controller=category&id={$item['id']}">{$item['name']}</a>
        {/foreach}
      {/if}
    </div>
    
    <div class="row secondary-posts">
        
      {section name=post loop=6}
      <div class="col-md-6">
      
        <a href="./?controller=post&id={$rsPosts[post].id}" class="secondary-posts__post">
          <p class="secondary-posts__post-title">{$rsPosts[post].name}</p>
          <div class="secondary-posts__post-card">
            <img src="img/{$rsPosts[post].preview_image}" srcset="img/{$rsPosts[post].preview_image_2x} 2x, img/{$rsPosts[post].preview_image_3x} 3x">
            <p class="secondary-posts__post-date">{$rsPosts[post].date|date_format:"%B %d, %Y"}</p>
            <p class="secondary-posts__post-text">{$rsPosts[post].description}</p>
          </div>
        </a>

      </div>
      {/section}

    </div>
    <!-- secondary-posts -->

  </div>
