$(document).ready(function(){
  $('.modal').modal();

getContent();


console.log(data);
  function getContent(){
    for (var i = 0; i <= 5; i++) {
      $('body').append(`
        <div class="row content">
          <div class="col-main s6">
            <div class="col-item">
                <img src=<?php echo $file_array[2]?> alt="">
                <div class="book-titles">
                  <div class="col-item-author">
                    <?php echo $file_array[4]?>
                  </div>
                  <div class="col-item-title">
                    <?php echo $file_array[3]?>
                  </div>
                </div>  
            </div>
          </div>
          <div class="col-main s6">
            <div class="col-item">
                <img src=<?php echo $file_array[2]?> alt="">
                <div class="book-titles">
                  <div class="col-item-author">
                    <?php echo $file_array[4]?>
                  </div>
                  <div class="col-item-title">
                    <?php echo $file_array[3]?>
                  </div>
                </div>  
            </div>
          </div>
      </div>  
        `);
    }
  }

});