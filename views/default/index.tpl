{* Шаблон главной страницы *}

  <div class="main">
    <div class="container">

      <div class="main-posts">

        <div class="row justify-content-center m-lg-0">
          {section name=post start=0 loop=1}
          <div class="col-md-12 main-posts__post main-posts__post_main justify-content-center">
            <a href="./?controller=post&id={$rsMainPosts[post].id}">
              <img src="img/{$rsMainPosts[post].image}" srcset="img/{$rsMainPosts[post].image_2x} 2x, img/{$rsMainPosts[post].image_3x} 3x">
              <p class="main-posts__post-title">{$rsMainPosts[post].name}</p>
              <p class="main-posts__post-date">
                {foreach $rsMainPosts[post].tags as $item}
                  <span class="tag">{$item['name']}</span>
                {/foreach}
              </p>
            </a>
          </div>
          {/section}
        </div>

        <div class="row justify-content-center m-lg-0">
          {section name=post start=1 loop=7}
          <div  class="col-md-6 col-sm-12 col-12 main-posts__post">
            <a href="./?controller=post&id={$rsMainPosts[post].id}">
              <div>
                <img src="img/{$rsMainPosts[post].preview_image}" srcset="img/{$rsMainPosts[post].preview_image_2x} 2x, img/{$rsMainPosts[post].preview_image_3x} 3x">
                <p class="main-posts__post-title">{$rsMainPosts[post].name}</p>
                <p class="main-posts__post-date">{$rsMainPosts[post].date|date_format:"%d | %m | %Y"}</p>
              </div>
              <div>
                <p class="main-posts__post-tag">
                  {foreach $rsMainPosts[post].tags as $item}
                    <span class="tag">{$item['name']}</span>
                  {/foreach}  
                </p>
                <p class="main-posts__post-text text-justify text-sm-left">{$rsMainPosts[post].description}</p>
              </div>
            </a>
          </div>
          {/section}
        </div>
        
        <div class="row justify-content-center m-lg-0">
          <div class="col-md-12 main-posts__btn row justify-content-center m-0">
            <a href="#" class="btn">Read more</a>
          </div>
        </div>
        
      </div>
      <!-- main-posts -->

      <div class="row ask-form m-lg-0">
        <div class="col-md-4 pl-lg-0">
          <p class="ask-form__title ask-form__title_blue">Ask Rabbi</p>
          <img src="img/rectangle.png" srcset="img/rectangle@2x.png 2x">
        </div>
        <div class="col-md-8 pr-lg-0">
          <div class="row justify-content-between justify-content-md-end title-wrapper">
            <p class="ask-form__title ask-form__title_gray">User questions</p>
            <p class="ask-form__title ask-form__title_black">Ask</p>
          </div>
          <form class="form-inline justify-content-between" action="#">
            <input type="text" class="title form-control mb-2 mr-sm-2" name="title" id="title" placeholder="Title">
            <input type="text" class="name form-control mb-2 mr-sm-2" name="name" id="name" placeholder="Name">
            <input type="email" class="email form-control mb-2 mr-sm-2" name="email" id="email" placeholder="Email">
            <input type="textarea" class="message form-control mb-2 mr-sm-2" name="message" id="message" placeholder="Message">
            <input type="submit" class="ask-form__btn btn" value="Send">
        </div>
      </div>
      <!-- ask-form -->

      <div class="row secondary-posts">
        <div class="col-md-6">
          <p class="secondary-posts__title">Leisure</p>
          {section name=post loop=2}
            <a href="./?controller=post&id={$rsLeisurePosts[post].id}" class="secondary-posts__post">
              <p class="secondary-posts__post-title">{$rsLeisurePosts[post].name}</p>
              <div class="secondary-posts__post-card">
                <img src="img/{$rsLeisurePosts[post].preview_image}" srcset="img/{$rsLeisurePosts[post].preview_image_2x} 2x, img/{$rsLeisurePosts[post].preview_image_3x} 3x">
                <p class="secondary-posts__post-date">{$rsLeisurePosts[post].date|date_format:"%B %d, %Y"}</p>
                <p class="secondary-posts__post-tag">
                  {foreach $rsLeisurePosts[post].tags as $item}
                    <span class="tag">{$item['name']}</span>
                  {/foreach}
                </p>
                <p class="secondary-posts__post-text">{$rsLeisurePosts[post].description}</p>
              </div>
            </a>
          {/section}

        </div>
        <div class="col-md-6">
          <p class="secondary-posts__title">Judaism</p>

          {section name=post loop=2}
            <a href="./?controller=post&id={$rsJudaismPosts[post].id}" class="secondary-posts__post">
              <p class="secondary-posts__post-title">{$rsJudaismPosts[post].name}</p>
              <div class="secondary-posts__post-card">
                <img src="img/{$rsJudaismPosts[post].preview_image}" srcset="img/{$rsJudaismPosts[post].preview_image_2x} 2x, img/{$rsJudaismPosts[post].preview_image_3x} 3x">
                <p class="secondary-posts__post-date">{$rsJudaismPosts[post].date|date_format:"%B %d, %Y"}</p>
                <p class="secondary-posts__post-tag">
                  {foreach $rsJudaismPosts[post].tags as $item}
                    <span class="tag">{$item['name']}</span>
                  {/foreach}
                </p>
                <p class="secondary-posts__post-text">{$rsJudaismPosts[post].description}</p>
              </div>
            </a>
          {/section}

        </div>
      </div>
      <!-- secondary-posts -->

    </div>
