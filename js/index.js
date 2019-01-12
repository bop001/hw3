$(document).ready(function(){
  $('.modal').modal();

  console.log(arrayBooks);
getContent();

  function getContent(){
    for (var i = 0; i <= 5; i++) {
      $('body').append(`
        <div class="row content">
          <div class="col-main s6">
            <div class="col-item">
                <img src=${data[2]} alt="">
                <div class="book-titles">
                  <div class="col-item-author">
                    ${data[4]}
                  </div>
                  <div class="col-item-title">
                    ${data[3]}
                  </div>
                </div>  
            </div>
          </div>
          <div class="col-main s6">
            <div class="col-item">
                <img src=${data[2]} alt="">
                <div class="book-titles">
                  <div class="col-item-author">
                    ${data[4]}
                  </div>
                  <div class="col-item-title">
                    ${data[3]}
                  </div>
                </div>  
            </div>
          </div>
      </div>  
        `);
    }
  }

});