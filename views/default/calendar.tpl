{* Шаблон страницы Calendar *}

  <div class="main">
    <div class="container calendar pb-5">

      <div class="row p-0 m-0 pt-4 pb-4">

        <div class="col-12 col-md-6 col-lg-5 p-0 row justify-content-around  m-0 mb-4 mb-md-0">
          <div class="date date_border d-flex flex-nowrap">
            <span class="day align-self-center">27</span>
            <p class="month align-self-center m-0">July<br>
              2018
            </p>
          </div>
          <div class="date-border mt-2 mb-2"></div>
          <div class="date d-flex">
            <span class="day align-self-center">27</span>
            <p class="month align-self-center m-0"><span>AVA</span><br>
              <span>5587</span>
            </p>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-7 p-0 m-0">
          <div class="text-center text-md-right">
            <button class="btn btn_square" type="button" class="date-converter__button" data-toggle="modal" data-target=".date-converter">Date converter</button>
          </div>

          <div class="pick-date ml-auto mr-auto mr-md-0 d-flex justify-content-around align-items-center pl-3 pr-3">
            <button class="calendar__button calendar__button_prev icon-prev"></button>
            <span id="calendar-picked-date" class="d-block text-center"></span>
            <button class="calendar__button calendar__button_next icon-next"></button>
          </div>

        </div>

      </div style="border: 1px solid black;">
        <table id="calendar2" class="table table-bordered mb-5">
          <thead>
            <tr>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">sun</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">Mon</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">tue</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">wed</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">thu</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">fri</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
                <th scope="col">
                  <span class="title title_green d-block text-center mb-1">sat</span>
                  <span class="title title_black d-block text-center">ЙОМ РИшон</span>
                </th>
            </tr>
          </thead>
          <tbody>

          </tbody>

        </table>

      <div>
        

      </div>

    </div>