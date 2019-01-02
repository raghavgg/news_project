<?php
	include_once("./common/header.php");
?>


        <div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                <div class="col-md-2 sideBar">
                    <ul class="nav flex-column pl-1">
                        <li class="nav-item"><a class="nav-link link-text-color" href="users.html">Users</a></li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu1" data-toggle="collapse" data-target="#submenu1">News ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="news/news.html">News List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="news/news-create.html">Create News</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="news/category.html">Category List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="news/category-create.html">Create Category</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu2" data-toggle="collapse" data-target="#submenu2">Employment ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu2" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="employment/employment-list.html">Employment List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="employment/add-employment.html">Add Employment</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="employment/edit-employment.html">Edit Employment</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="employment/employment-requests.html">View Employment Requests</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu3" data-toggle="collapse" data-target="#submenu3">Sale ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu3" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="sale/sale-list.html">Sale list</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="sale/add-sale.html">Add for Sale</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="sale/edit-sale.html">Edit for Sale</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="sale/sale-requests.html">View Sale Requests</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu4" data-toggle="collapse" data-target="#submenu4">CPD Articles ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu4" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/articles.html">Articles List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/add-articles.html">Add Article</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/edit-articles.html">Edit Article</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/exam-list.html">Exam List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/exam-questions.html">Exam Question List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/add-exam.html">Add Exam</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/edit-exam.html">Edit Exam</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="articles/user-results-list.html">User Exam Result list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 content">
                    <div class="col-lg-9 col-md-8">
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
	</tr>
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
</div>


<?php
	include_once("../common/footer.php");
?>

