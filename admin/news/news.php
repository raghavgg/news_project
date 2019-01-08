<?php
	include_once("./../common/header.php");
?>


<div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                
            	<?php
            		try{
						include_once("./../common/navigation.php");
						$news = new News();
						$newsArray = $news->getNews();
					}catch(Exception $e){
						// Error
						$newsArray = array();
					}
				?>
				<div class="col-md-10 content">
                    <div class="col-lg-12 col-md-12">
                        <div class="container">
                            <h2 class="mb-3 mt-3">News</h2>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Id</th>
                                            <th>News Title</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
                                    	foreach ($newsArray as $newsArr) {
                                    	?>

                                        <tr>
                                            <td><?php echo $newsArr['id']; ?></td>
                                            <td><?php echo $newsArr['title']; ?></td>
                                            <td><?php echo $newsArr['status']==1?'Enabled':'Disabled'; ?></td>
                                            <td class="editing-buttons">
                                                <a href="#" data-target="#myModal" data-toggle="modal" class="btn btn-xs"><i class="fa fa-eye"></i></a>
                                                <a href="./news-edit.php?id=<?php echo $newsArr['id']; ?>" class="btn btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-xs"><i class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php
                                    	}
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            
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
                        </div>
                    </div>
			</div>
		</div>
</div>

<?php
	include_once("./../../common/footer.php");
?>