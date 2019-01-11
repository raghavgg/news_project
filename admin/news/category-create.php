<?php
	include_once("../common/header.php");
?>
        <div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                <div class="col-md-2 sideBar">
                    <ul class="nav flex-column pl-1">
                        <li class="nav-item"><a class="nav-link link-text-color" href="../users.html">Users</a></li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu1" data-toggle="collapse" data-target="#submenu1">News ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu1" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="news.html">News List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="news-create.html">Create News</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="category.html">Category List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="category-create.html">Create Category</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu2" data-toggle="collapse" data-target="#submenu2">Employment ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu2" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="../employment/employment-list.html">Employment List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../employment/add-employment.html">Add Employment</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../employment/edit-employment.html">Edit Employment</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../employment/employment-requests.html">View Employment Requests</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu3" data-toggle="collapse" data-target="#submenu3">Sale ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu3" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="../sale/sale-list.html">Sale list</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../sale/add-sale.html">Add for Sale</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../sale/edit-sale.html">Edit for Sale</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../sale/sale-requests.html">View Sale Requests</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-text-color" href="#submenu4" data-toggle="collapse" data-target="#submenu4">CPD Articles ▾</a>
                            <ul class="list-unstyled flex-column pl-3 collapse" id="submenu4" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/articles.html">Articles List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/add-articles.html">Add Article</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/edit-articles.html">Edit Article</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/exam-list.html">Exam List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/exam-questions.html">Exam Question List</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/add-exam.html">Add Exam</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/edit-exam.html">Edit Exam</a></li>
                                <li class="nav-item"><a class="nav-link link-text-color" href="../articles/user-results-list.html">User Exam Result list</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 content">
                    <div class="container">
                        <h2 class="mb-3 mt-3">Create Category</h2>
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="category">Category Name :</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filename">
                                <label class="custom-file-label" for="customFile">Choose Picture</label>
                            </div>
                            <div class="form-group">
                                <label for="views">Youtube URL :</label>
                                <input type="text" class="form-control" id="views" name="views">
                            </div>
                            <div class="form-group">
                                <label>Status : </label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status">Active
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status">Inactive
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Top Products</h4>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">CPD Articles</a></li>
                            <li><a href="#">Employment</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Features</h4>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Sale</a></li>
                            <li><a href="#">Employment</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 single-footer-widget">
                        <h4>Instragram Feed</h4>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="../../img/i1.jpg" alt=""></li>
                            <li><img src="../../img/i2.jpg" alt=""></li>
                            <li><img src="../../img/i3.jpg" alt=""></li>
                            <li><img src="../../img/i4.jpg" alt=""></li>
                            <li><img src="../../img/i5.jpg" alt=""></li>
                            <li><img src="../../img/i6.jpg" alt=""></li>
                            <li><img src="../../img/i7.jpg" alt=""></li>
                            <li><img src="../../img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- &copy; --> © 2019 Mmirwa Knowledge All Rights Reserved </p>
                    <div class="col-lg-4 col-md-12 footer-social"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-behance"></i></a> </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->
        <script src="../../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../../js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="../../js/easing.min.js"></script>
        <script src="../../js/hoverIntent.js"></script>
        <script src="../../js/superfish.min.js"></script>
        <script src="../../js/jquery.ajaxchimp.min.js"></script>
        <script src="../../js/jquery.magnific-popup.min.js"></script>
        <script src="../../js/jquery-ui.js"></script>
        <script src="../../js/jquery.nice-select.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>
</html>
