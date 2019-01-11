<?php
	include_once("./../common/header.php");
    $id = isset($_GET['id'])?$_GET['id']:0;
    try{
        $news = new News();
        $newsArray = $news->getNewsDetail($id);
        if(empty($newsArray)){
            $news->redirect("./news.php");
            exit;
        }
    }catch(Exception $e){
        // Error
        $news->redirect("./news.php");
        exit;
    }
?>

<div class="container-fluid bg-white p-3" id="main">
            <div class="clear">
                <button id="show" class="btn btn-secondry btn-sm float-right d-none">Admin Menu</button>
            </div>

            <div class="row">
                
            	<?php
					include_once("./../common/navigation.php");
				?>

                <div class="col-md-10 content">
                    <div class="container">
                        <h2 class="mb-3 mt-3">Create News</h2>
                        <form action="./action/news-create.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title :</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?php echo $newsArray['title']; ?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="sub-title">Sub Title :</label>
                                <input type="text" class="form-control" id="sub-title" name="sub_title" value="<?php echo $newsArray['subtitle']; ?>" required="">
                            </div>
                            <div class="form-group">
                                <label for="text">Text :</label>
                                <textarea class="form-control" rows="5" id="text" name="text"><?php echo $newsArray['text']; ?></textarea>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filenameBig" required="">
                                <label class="custom-file-label" for="customFile">Choose file Big</label>
                            </div>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filenameSmall" required="">
                                <label class="custom-file-label" for="customFile">Choose file Small</label>
                            </div>
                            <div class="form-group">
                                <label for="views">Youtube URL :</label>
                                <input type="text" class="form-control" id="views" name="youtube_url"  value="<?php echo $newsArray['youtube_video_url']; ?>">
                            </div>
                            <?php
                            	try{
                                	$category = new Category();
                                	$categoryArray = $category->getCategoryList(100, 1);
                            	}catch(Exception $e){ 
                            		// Error 
                            		$categoryArray = array();
                            	}

                            ?>
                            <div class="form-group">
                                <label>Select Category : </label>
                                <div class="form-check-inline">
                                    <select name="category" required="">
                                    	<option value="0">Select Category</option>
                                    	<?php
                                    		foreach($categoryArray as $categoryArr){
                                    			echo "<option value=\"".$categoryArr['id']."\">".$categoryArr['name']."</option>";
                                    		}
                                    	?>
                                    	
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Status : </label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" value="1" checked="">Active
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" value="0">Inactive
                                    </label>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
	include_once("./../../common/footer.php");
?>