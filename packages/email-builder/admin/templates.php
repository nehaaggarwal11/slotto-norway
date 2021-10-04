<?php
include_once 'includes/db.class.php';

$db = new Db();

$templates=$db->getTemplates();

?>




  <!-- page content -->
  <div class="right_col" role="main">
      <div class="">

          <div class="clearfix"></div>
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Template list
                            <!-- <small>Users</small> -->
                          </h2>
                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>User name</th>
                                      <th>Template name</th>
                                      <th style="width:150px;">Options</th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <?php
                                      for ($i=0; $i < sizeof($templates); $i++) {
                                        echo '<tr>';
                                          echo '<td>'.$templates[$i]['TemplateId'].'</td>';
                                          echo '<td>'.$templates[$i]['UserName'].'</td>';
                                          echo '<td>'.$templates[$i]['TemplateName'].'</td>';
                                          echo '<td>
                                                  <a href="#" data-id='.$templates[$i]['TemplateId'].' data-type="template-show" class="btn btn-sm btn-success"><i class="fa fa-file-text"></i> Show</a>
                                                  <a href="#" data-id='.$templates[$i]['TemplateId'].' data-type="template-delete" class="btn btn-sm btn-danger" ><i class="fa fa-remove"></i> Delete</a>
                                                </td>';
                                        echo '</tr>';
                                      }
                                      echo "<script>$('#datatable-responsive').DataTable(); </script>";
                                   ?>
                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- /page content -->
  <!-- Modal -->
  <div id="modalTemplateContent" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Template content</h4>
        </div>
        <div class="modal-body">
          <div class="templateContent">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
