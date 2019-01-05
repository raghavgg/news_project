<?php
	include_once("./../common/header.php");
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
                    <div class="col-lg-9 col-md-8">
                        <div class="container">
                            <h2 class="mb-3 mt-3">Create News</h2>
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="title">Title :</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="sub-title">Sub Title :</label>
                                    <input type="text" class="form-control" id="sub-title" name="sub_title">
                                </div>
                                <div class="form-group">
                                    <label for="text">Text :</label>
                                    <textarea class="form-control" rows="5" id="text" name="text"></textarea>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filenameBig">
                                    <label class="custom-file-label" for="customFile">Choose file Big</label>
                                </div>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filenameSmall">
                                    <label class="custom-file-label" for="customFile">Choose file Small</label>
                                </div>
                                <div class="form-group">
                                    <label for="views">Youtube URL :</label>
                                    <input type="text" class="form-control" id="views" name="youtube_url">
                                </div>
                                <?php
                                	$category = new Category();
                                	$category->getCategoryList(100, 1);
                                ?>
                                <div class="form-group">
                                    <label>Select Category : </label>
                                    <div class="form-check-inline">
                                        <select name="category">
                                        	<option value="categ">Category1</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Select Author : </label>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="author">Author 1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="author">Author 2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="author">Author 3
                                        </label>
                                    </div>
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
        </div>

<?php
	include_once("./../../common/footer.php");
?>