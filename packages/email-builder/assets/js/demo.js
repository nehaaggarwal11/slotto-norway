
$(function () {
  //load default email

  $.ajax({
      url: 'load_templates.php',
      type: 'GET',
      dataType: 'json',
      success: function(data) {
          if (data.code == 0) {
            _templateItems='';

            _templateListItems=data.files;

            _dataId=4;
            //search template in array
            var result = $.grep(_templateListItems, function(e){
              return e.id == _dataId;
            });

            _contentText = $('<div/>').html(result[0].content).text();
            $('.bal-content-wrapper').html(_contentText);

            $('#popup_load_template').modal('hide');

            makeSortable();
          }
      },
      error: function() {}
  });



});
