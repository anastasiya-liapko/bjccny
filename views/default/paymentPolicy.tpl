{* Шаблон страницы Payment Policy *}

  <div class="main">
    <div class="container payment-policy">

      <div class="page row justify-content-end m-0">
        <p class="page-title d-inline-block col-12 m-0 text-center mt-5 mb-4">{$rsPosts[0]['name']}</p>
      </div>

      <div class="page-content pb-4 mb-5 text-justify text-md-left">
        <p class="paragraph paragraph_bold mt-3">{$rsPosts[0]['description']}</p>
        <p class="paragraph text-justify text-md-left">
          <span class="paragraph-title d-block">{$rsPosts[0]['title_1']}</span>
          {$rsPosts[0]['paragraph_1']}
        </p>

      </div>

    </div>