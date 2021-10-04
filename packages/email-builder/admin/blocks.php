<?php
include_once 'includes/db.class.php';

$db = new Db();
$blocks=$db->get_blocks();

?>




  <!-- page content -->
  <div class="right_col" role="main">
      <div class="">

          <div class="clearfix"></div>
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Template Blocks
                            <!-- <small>for creating emails</small> -->
                          </h2>
                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                            <a href="index.php?page=block-insert-form" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add template block</a>
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th width="50">Id</th>
                                      <th width="100">Category</th>
                                      <th>Name</th>
                                      <th width="50">Used count</th>
                                      <th style="width:150px;">Options</th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <?php

                                      for ($i=0; $i < sizeof($blocks); $i++) {
                                        echo '<tr>';
                                          echo '<td>'.$blocks[$i]['id'].'</td>';
                                          echo '<td>'.$blocks[$i]['cat_name'].'</td>';
                                          echo '<td>'.$blocks[$i]['name'].'</td>';
                                          echo '<td>'.$blocks[$i]['used_count'].'</td>';
                                          echo '<td>
                                                  <a href="index.php?page=block-edit-form&id='.$blocks[$i]['id'].'" data-id='.$blocks[$i]['id'].' data-type="block-edit" class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                                  <a href="#" data-id='.$blocks[$i]['id'].' data-type="block-delete" class="btn btn-sm btn-danger" ><i class="fa fa-remove"></i> Delete</a>
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
