<?php
	session_start();
	include_once("./../common/header.php");
	include_once("./../common/common.php");
	$news = new News();
	$news->checkAdminLogin();
?>
<link rel="stylesheet" href="<?php echo $server; ?>/css/sweetalert.min.css">
<div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                
            	<?php
				
            		try{
						include_once("./../common/navigation.php");
						$categoryArray = $news->getCategory();
					}catch(Exception $e){
						// Error
						$categoryArray = array();
					}
				
				?>

                <div class="col-md-10 content">
                        <div class="container">
                        <h2 class="mb-3 mt-3">Category</h2>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	foreach ($categoryArray as $categoryArr) {
                                    	?>
                                        <tr>
                                            <td><?php echo $categoryArr['id']; ?></td>
                                            <td><?php echo $categoryArr['name']; ?></td>
                                            <td><?php echo $categoryArr['status']==1?'Active':'Inactive'; ?></td>
                                            <td class="editing-buttons">
                                                <a href="#" data-target="#myModal" data-toggle="modal" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                                <a href="./category-edit.php?id=<?php echo $categoryArr['id']; ?>" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    	}
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Pagination code -->
                            <div class="center">
                                <div class="pagination">
                                  <a href="#">&laquo;</a>
                                  <a class="active" href="#">1</a>
                                  <a href="#">2</a>
                                  <a href="#">3</a>
                                  <a href="#">4</a>
                                  <a href="#">5</a>
                                  <a href="#">6</a>
                                  <a href="#">&raquo;</a>
                              </div>
                          </div>
                          <!-- Pagination ends -->
                        </div>
                    </div>
            </div>
        </div>
<script src="<?php echo $server; ?>/js/sweetalert.min.js"></script>

<?php
	include_once("./../../common/footer.php");
?>