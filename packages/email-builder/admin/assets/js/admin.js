$(document).on('click','[data-type="template-show"]',function () {
  _element=$(this);
  _dataId=_element.attr('data-id');
  $('#modalTemplateContent').modal('show');
  $('.modal-title').text('');
  $('.modal-body').html('Loading...');

  $.ajax({
      url: 'template-data.php',
      type: 'POST',
      data: {
          templateId: _dataId
      },
      dataType: 'json',
      success: function(data) {

          if (data.code==0) {
            $('.modal-title').text('Template : '+data.name);

            _html = '';
            // $('.modal-body').find('.sortable-row').each(function() {
            //     _html += $(this).find('.sortable-row-content').html().split('contenteditable="true"').join('');
            // });
          //  $('.modal-body').html(_html);

          $('.modal-body').html('');
          for (var i = 0; i < data.blocks.length; i++) {
            _content='';


            _content +=

            '<div class="sortable-row-content" data-id='+	data.blocks[i].block_id+' >' +
              data.blocks[i].content.split('contenteditable="true"').join('')+
            '</div></div></div>';
            $('.modal-body').append(_content);

          }




          }else {
            $('.modal-body').html('Ooopps.Something went wrong');
          }
      },
      error: function() {}
  });

});
$(document).on('click','[data-type="template-delete"]',function () {
  if (confirm('Are you sure?')==false) {
   return;
  }


  _element=$(this);
  _dataId=_element.attr('data-id');
  $.ajax({
      url: 'template-delete.php',
      type: 'POST',
      data: {
          templateId: _dataId
      },
      dataType: 'json',
      success: function(data) {
          if (data.code==0) {
            _element.parents('tr').remove();
            $('#datatable-responsive').DataTable();
          }else {
            alert('Ooopps.Something went wrong');
          }

      },
      error: function() {}
  });
});


$(document).on('click','[data-type="user-delete"]',function () {
  if (confirm('Are you sure?')==false) {
   return;
  }


  _element=$(this);
  _dataId=_element.attr('data-id');
  $.ajax({
      url: 'user-delete.php',
      type: 'POST',
      data: {
          userId: _dataId
      },
      dataType: 'json',
      success: function(data) {
          if (data.code==0) {
            _element.parents('tr').remove();
            $('#datatable-responsive').DataTable();
          }else {
            alert('Ooopps.Something went wrong');
          }
      },
      error: function() {}
  });
});

$(document).on('submit','.users-insert-form',function () {
  $('.label-error').text('');
  _element = $('#send');
  if (_element.attr('disabled') == 'disabled') {
      return;
  }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   _element.attr('disabled', 'disabled');
   _element.text('Loading...');

   _name=$('#name').val();
   _login=$('#login').val();
   _email=$('#email').val();
   _password=$('#password').val();
   _isAdmin=$('#isAdmin').is(':checked')==true?'1':'0';
   _isUser=$('#isUser').is(':checked')==true?'1':'0';


   $.ajax({
       url: 'users-insert.php',
       type: 'POST',
       data: {
           Login: _login,
           Pass: _password,
           Name: _name,
           Email: _email,
           isAdmin: _isAdmin,
           isUser: _isUser
       },
       dataType: 'json',
       success: function(data) {
           if (data.code==0) {
             window.location.href='index.php?page=users';
           }else {
             $('.label-error').text(data.message);
             _element.removeAttr('disabled');
             _element.text('Submit');
           }
       },
       error: function() {
         $('.label-error').text('Has an error');
         _element.removeAttr('disabled');
         _element.text('Submit');
       }
   });

   return false;

});

$(document).on('submit','.users-edit-form',function () {
  $('.label-error').text('');
  _element = $('#send');
  if (_element.attr('disabled') == 'disabled') {
      return;
  }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   _element.attr('disabled', 'disabled');
   _element.text('Loading...');

   _dataId = $(this).attr('data-id');
   _name=$('#name').val();
   _login=$('#login').val();
   _email=$('#email').val();
   _password=$('#password').val();
   _passwordOld=$('#passwordOld').val();
   _isAdmin=$('#isAdmin').is(':checked')==true?'1':'0';
   _isUser=$('#isUser').is(':checked')==true?'1':'0';



   $.ajax({
       url: 'users-update.php',
       type: 'POST',
       data: {
           id: _dataId,
           Login: _login,
           Pass: _password,
           PassOld:_passwordOld,
           Name: _name,
           Email: _email,
           isAdmin: _isAdmin,
           isUser: _isUser
       },
       dataType: 'json',
       success: function(data) {
           if (data.code==0) {
             window.location.href='index.php?page=users';
           }else {
             $('.label-error').text(data.message);
             _element.removeAttr('disabled');
             _element.text('Submit');
           }
       },
       error: function() {
         $('.label-error').text('Has an error');
         _element.removeAttr('disabled');
         _element.text('Submit');
       }
   });

   return false;

});

$(document).on('click','[data-type="block-delete"]',function () {
  if (confirm('Are you sure?')==false) {
   return false;;
  }


  _element=$(this);
  _dataId=_element.attr('data-id');
  $.ajax({
      url: 'block-delete.php',
      type: 'POST',
      data: {
          dataId: _dataId
      },
      dataType: 'json',
      success: function(data) {
          if (data.code==0) {
            _element.parents('tr').remove();
            $('#datatable-responsive').DataTable();
          }else {
            alert('Ooopps.Something went wrong');
          }
      },
      error: function() {}
  });

  return  false;
});
$(document).on('submit','.block-insert-form',function () {
  $('.label-error').text('');
  _element = $('#send');
  if (_element.attr('disabled') == 'disabled') {
      return false;
  }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   _element.attr('disabled', 'disabled');
   _element.text('Loading...');

   _name=$('#name').val();
   _category=$('#category').val();
   _icon=$('#icon').val();
   _html= CKEDITOR.instances['editor'].getData();
   _property=$('#block_property').val().toString();

   if ( _category==='0' ) {
     $('.label-error').text(data.message);
     _element.removeAttr('disabled');
     _element.text('Submit');
     return false;
   }

  var myTemp= $('<div/>');
  myTemp.html(_html);
  myTemp.find('table:first').addClass('main');

  myTemp.find('table td').addClass('element-content');
  myTemp.find('table td').attr('contenteditable','true');
  myTemp.find('img').addClass('content-image');

   $.ajax({
       url: 'block-insert.php',
       type: 'POST',
       data: {
           Category: _category,
           Icon: _icon,
           Name: _name,
           Property:_property,
           HTML: myTemp.html()
       },
       dataType: 'json',
       success: function(data) {
           if (data.code==0) {
             window.location.href='index.php?page=blocks';
           }else {
             $('.label-error').text(data.message);
             _element.removeAttr('disabled');
             _element.text('Submit');
           }
       },
       error: function() {
         $('.label-error').text('Has an error');
         _element.removeAttr('disabled');
         _element.text('Submit');
       }
   });

   return false;

});

$(document).on('submit','.block-edit-form',function () {
  $('.label-error').text('');
  _element = $('#send');
  if (_element.attr('disabled') == 'disabled') {
      return false;
  }
   // evaluate the form using generic validaing
   if (!validator.checkAll($(this))) {
     return false;
   }
   _element.attr('disabled', 'disabled');
   _element.text('Loading...');

   _dataId = $(this).attr('data-id');
   _name=$('#name').val();
   _category=$('#category').val();
   _icon=$('#icon').val();
   _html= CKEDITOR.instances['editor'].getData();
   _property=$('#block_property').val().toString();
   _isUpdate=$('#isUpdate').is(':checked')==true?'1':'0';

   if ( _category==='0' ) {
     $('.label-error').text(data.message);
     _element.removeAttr('disabled');
     _element.text('Submit');
     return false;
   }

  var myTemp= $('<div/>');
  myTemp.html(_html);
  myTemp.find('table:first').addClass('main');

  myTemp.find('table td').addClass('element-content');
  myTemp.find('table td').attr('contenteditable','true');
  myTemp.find('img').addClass('content-image');




   $.ajax({
       url: 'block-update.php',
       type: 'POST',
       data: {
           id: _dataId,
           Category: _category,
           Icon: _icon,
           Name: _name,
           Property:_property,
           isUpdate :_isUpdate,
           HTML: myTemp.html()
       },
       dataType: 'json',
       success: function(data) {
           if (data.code==0) {
             window.location.href='index.php?page=blocks';
           }else {
             $('.label-error').text(data.message);
             _element.removeAttr('disabled');
             _element.text('Submit');
           }
       },
       error: function() {
         $('.label-error').text('Has an error');
         _element.removeAttr('disabled');
         _element.text('Submit');
       }
   });

   return false;

});

$(document).on('submit','.settings',function () {
  $('.label-error').text('');
  _element = $('#send');
  if (_element.attr('disabled') == 'disabled') {
      return;
  }

   _element.attr('disabled', 'disabled');
   _element.text('Loading...');

   _azure_account=$('#azure_account').val();
   _azure_key=$('#azure_key').val();
   _azure_container=$('#azure_container').val();

   if (_azure_account.length<1 || _azure_key.length<1 || _azure_container.length<1 ) {
     $('.label-error').text('Fill inputs');
     _element.removeAttr('disabled');
     _element.text('Submit');
   }

   $.ajax({
       url: 'settings-update.php',
       type: 'POST',
       data: {
           azure_account: _azure_account,
           azure_key: _azure_key,
           azure_container: _azure_container
       },
       dataType: 'json',
       success: function(data) {
           if (data.code==0) {
             window.location.href='index.php?page=settings';
           }else {
             $('.label-error').text(data.message);
             _element.removeAttr('disabled');
             _element.text('Submit');
           }
       },
       error: function() {
         $('.label-error').text('Has an error');
         _element.removeAttr('disabled');
         _element.text('Submit');
       }
   });

   return false;

});



$(document).on('change','#icon',function () {

  $('.icon-preview').find('i').remove();
  $('.icon-preview').html('<i class="'+  $(this).val()+'"></i>')
});

$(function () {
  $('#icon').change();
});
