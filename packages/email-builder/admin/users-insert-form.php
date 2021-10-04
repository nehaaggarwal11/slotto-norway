<div class="right_col" role="main">
  <div class="">


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add user </h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left users-insert-form" novalidate>



              <div class="item form-group">
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="login">Login <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="login" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="login"
                   required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="item form-group">
                <label for="password" class="control-label col-md-3">Password</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="password" type="password" name="password" data-validate-length="5" placeholder="Minimum length 5 symbol" class="form-control col-md-7 col-xs-12" required="required">
                </div>
              </div>
              <div class="item form-group">
                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isAdmin">isAdmin
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="checkbox" name="isAdmin" id="isAdmin" value="1"  class="flat" />
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="isUser">isUser
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="checkbox" name="isUser" id="isUser" value="1"  class="flat" />
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
                  <a href="index.php?page=users" class="btn btn-primary">Cancel</a>
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
