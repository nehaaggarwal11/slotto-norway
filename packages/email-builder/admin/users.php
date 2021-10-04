<?php
include_once 'includes/db.class.php';

$db = new Db();
$users=$db->getUsers();

?>




  <!-- page content -->
  <div class="right_col" role="main">
      <div class="">

          <div class="clearfix"></div>
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Users
                            <!-- <small>Users</small> -->
                          </h2>
                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                            <a href="index.php?page=users-insert-form" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add user</a>
                          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                              <thead>
                                  <tr>
                                      <th>Id</th>
                                      <th>Login</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>isAdmin</th>
                                      <th>isUser</th>
                                      <th style="width:150px;">Options</th>
                                  </tr>
                              </thead>
                              <tbody>

                                  <?php

                                      for ($i=0; $i < sizeof($users); $i++) {
                                        echo '<tr>';
                                          echo '<td>'.$users[$i]['Id'].'</td>';
                                          echo '<td>'.$users[$i]['Login'].'</td>';
                                          echo '<td>'.$users[$i]['Name'].'</td>';
                                          echo '<td>'.$users[$i]['Email'].'</td>';
                                          echo '<td>'.($users[$i]['isAdmin']=='1'?'Yes':'No').'</td>';
                                          echo '<td>'.($users[$i]['isUser']=='1'?'Yes':'No').'</td>';
                                          echo '<td>
                                                  <a href="index.php?page=users-edit-form&id='.$users[$i]['Id'].'" data-id='.$users[$i]['Id'].' data-type="user-edit" class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i> Edit</a>
                                                  <a href="#" data-id='.$users[$i]['Id'].' data-type="user-delete" class="btn btn-sm btn-danger" ><i class="fa fa-remove"></i> Delete</a>
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
