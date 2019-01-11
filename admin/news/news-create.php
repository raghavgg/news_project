<?php
	include_once("./../common/header.php");
?>

<link rel="stylesheet" href="<?php echo $server; ?>/css/sweetalert.min.css">
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
                                <input type="text" class="form-control" id="title" name="title" required="">
                            </div>
                            <div class="form-group">
                                <label for="sub-title">Sub Title :</label>
                                <input type="text" class="form-control" id="sub-title" name="sub_title" required="">
                            </div>
                            <div class="form-group">
                                <label for="text">Text :</label>
                                <textarea class="form-control" rows="5" id="text" name="text"></textarea>
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
                                <input type="text" class="form-control" id="views" name="youtube_url">
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
<script src="<?php echo $server; ?>/js/sweetalert.min.js"></script>
<script type="application/x-javascript"> 
function getUrlValue(varName) {
			var split = $(location).attr('href').split('?');
			var value = '';
			if (split.length == 2) {
				split = split[1].split('&');
				for (var i = 0; i < split.length; i+=1) {
					var keyValue = split[i].split('=');
					if (keyValue.length == 2 && keyValue[0] == varName) {
						value = keyValue[1];
						break;
					}
				}
			}
				return value;
			}
			
function alertfunction()
{
	var status = getUrlValue("status");
	var message = getUrlValue("message");
	message = decodeURI(message);
	if(status=='fail')
	{
		sweetAlert("Oops...", message, "error");
	}
	if(status=='success')
	{
		sweetAlert("Great...", "News created successfully!", "success");
	}
}

addEventListener("load", function() { alertfunction(); }, false);

</script>
<?php
	include_once("./../../common/footer.php");
?>