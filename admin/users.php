<?php
    session_start();
    include_once("./common/header.php");
    include_once("./common/check-login.php");
?>

<div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                <?php
                    include_once("./common/navigation.php");
                ?>
                <div class="col-md-10 content">
                        <div class="container">
                        <h2 class="mb-3 mt-3">Users</h2>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" data-target="#myModal" data-toggle="modal" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1,001</td>
                                        <td>Test</td>
                                        <td>test@gmail.com</td>
                                        <td>12345676</td>
                                        <td>active</td>
                                        <td class="editing-buttons">
                                            <a href="#" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
      </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">User Name</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
        </div>
        <div class="modal-body">
          <table class="table table-borderless">
    <tbody>
      <tr>
        <td>Id</td>
        <td>1001</td>
      <tr>
        <td>Name</td>
        <td>Test</td>
      </tr>
      <tr>
        <td>Surname</td>
        <td>Testing</td>
      </tr>
      <tr>
        <td>Password</td>
        <td>Testing</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>test@example.com</td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td>123456789</td>
      </tr>
      <tr>
        <td>Country</td>
        <td>India</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>Active</td>
      </tr>
    </tbody>
  </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary-outline" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
      
<?php
    include_once("./../common/footer.php");
?>