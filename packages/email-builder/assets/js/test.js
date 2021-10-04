var _content = $('.content');
var _menu = $('.left-menu-container');
var _is_demo = true;
var _aceEditor;
var _templateListItems;

//



$(document).on('click', '.btn-load-template', function () {
    _dataId = $('.template-list .template-item.active').attr('data-id');
    //search template in array
    var result = $.grep(_templateListItems, function (e) {
        return e.id == _dataId;
    });
    if (result.length == 0) {
        //show error
        $('.template-load-error').text('An error has occurred');
    }
    _contentText = $('<div/>').html(result[0].content).text();
    $('.content-wrapper').html(_contentText);
    $('#popup_load_template').modal('hide');
    makeSortable();
});
