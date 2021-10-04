<?php
include_once 'includes/db.class.php';

$db = new Db();
$blocks_category=$db->get_blocks_category();

$iconList = array(
  'fa fa-asterisk' => 'asterisk',
  'fa fa-barcode' => 'barcode',
  'fa fa-bolt' => 'bolt',
  'fa fa-bell' => 'bell',
  'fa fa-battery-full' => 'battery-full',
  'fa fa-bus' => 'bus',
  'fa fa-check-square' => 'check-square',
  'fa fa-check' => 'check',
  'fa fa-circle' => 'circle',
  'fa fa-circle-thin' => 'circle-thin',
  'fa fa-close' => 'close',
  'fa fa-comment' => 'comment',
  'fa fa-clone' => 'clone',
  'fa fa-certificate' => 'certificate',
  'fa fa-circle-o-notch' => 'circle-o-notch',
  'fa fa-cloud' => 'cloud',
  'fa fa-cog' => 'cog',
  'fa fa-code' => 'code',
  'fa fa-comments' => 'comments',
  'fa fa-cube' => 'cube',
  'fa fa-dot-circle-o' => 'dot-circle-o',
  'fa fa-database' => 'database',
  'fa fa-gear' => 'gear',
  'fa fa-globe' => 'globe',
  'fa fa-paper-plane' => 'paper-plane',
  'fa fa-send' => 'send',
  'fa fa-send-o' => 'send-o',
  'fa fa-star' => 'star',
  'fa fa-square' => 'square',
  'fa fa-align-left' => 'align-left',
  'fa fa-align-right' => 'align-right',
  'fa fa-certificate' => 'certificate',
  'fa fa-columns' => 'columns',
  'fa fa-globe' => 'globe',
  'fa fa-header' => 'header',
  'fa fa-life-ring' => 'life-ring',
  'fa fa-list-ol' => 'list-ol',
  'fa fa-list-ul' => 'list-ul',
  'fa fa-minus' => 'minus',
  'fa fa-paragraph' => 'paragraph',
  'fa fa-picture-o' => 'picture-o',
  'fa fa-share' => 'share',
  'fa fa-share-square' => 'share-square',
  'fa fa-share-square-o' => 'share-square-o',
  'fa fa-square-o' => 'square-o',
  'fa fa-usd' => 'usd',
  'fa fa-video-camera' => 'video-camera',
);


?>

<div class="right_col" role="main">
  <div class="">


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add template block </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form class="form-horizontal form-label-left block-insert-form" novalidate>
              <div class="item form-group">
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Category <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="category"  name="category" class="form-control col-md-7 col-xs-12" >
                      <option value="0" selected>Select category</option>
                      <?php
                          for ($i=0; $i < sizeof($blocks_category); $i++) {
                              echo '<option value="'.$blocks_category[$i]['id'].'">'.$blocks_category[$i]['name'].'</td>';
                          }
                       ?>
                    </select>
                  </div>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="login">Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12"  name="name"
                   required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Icon <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="icon" name="icon" required="required" class="form-control col-md-7 col-xs-12">
                    <?php
                      foreach ($iconList as $key => $value) {
                        echo '<option value="'.$key.'" >'.$value.'</option>';
                      }
                     ?>
                  </select>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-12">

                  <span class="icon-preview" style="  ">

                  </span>

                </div>
              </div>
              <div class="item form-group" style="display:none">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Property <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="block_property" multiple="multiple" class="form-control col-md-7 col-xs-12">
                        <option selected="selected" value="background">background</option>
                        <option selected="selected" value="padding">padding</option>
                        <option selected="selected" value="border-radius">border-radius</option>
                        <option selected="selected" value="image-settings">image-settings</option>
                        <option selected="selected" value="hyperlink">hyperlink</option>

                  </select>
                </div>
              </div>
              <div class="item form-group">
                <label for="password" class="control-label col-md-3">HTML</label>
                <div class="col-md-6 col-sm-6 col-xs-12">


                  <!-- <div id="editor">

                  </div> -->
                  <textarea name="editor" id="editor"></textarea>

                </div>

                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isUser">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <label class="label-error "></label>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <a href="index.php?page=blocks" class="btn btn-primary">Cancel</a>
                  <button id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="assets/vendor/validator/validator.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>


<!-- validator -->
   <script>
     // initialize the validator function
     validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
     $('form')
       .on('blur', 'input[required], input.optional, select.required', validator.checkField)
       .on('change', 'select.required', validator.checkField)
       .on('keypress', 'input[required][pattern]', validator.keypress);

     $('.multi.required').on('keyup blur', 'input', function() {
       validator.checkField.apply($(this).siblings().last()[0]);
     });

     $(function () {

       CKEDITOR.config.protectedSource.push(/<i[^>]*><\/i>/g);
       CKEDITOR.config.extraAllowedContent = '*{*}';
        CKEDITOR.replace( 'editor',{toolbar: [
          ['Styles','Format','Font','FontSize'],
'/',
['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
'/',
['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
['Image','Table','-','Link','Smiley','TextColor','BGColor','Source']
                ],
        } );
       $('#block_property').select2({
         data: ["background","padding","border-radius","image-settings","hyperlink","social-content","youtube-frame"],
          tags: true,
          tokenSeparators: [','],
          placeholder: "Add your properties here"
      });
      $('#icon').select2();
     });



    //  $('form').submit(function(e) {
    //   //  e.preventDefault();
    //   //  var submit = true;
    //    //
    //   //  // evaluate the form using generic validaing
    //   //  if (!validator.checkAll($(this))) {
    //   //    submit = false;
    //   //  }
    //    //
    //   //  if (submit)
    //   //    this.submit();
     //
    //    return false;
    //  });
   </script>
   <!-- /validator -->

   <style>
   .x_content{
     float: unset !important;
   }
   </style>
