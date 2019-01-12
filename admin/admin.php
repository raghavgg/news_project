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
                       
                        </div>
                </div>
            </div>
        </div>

<?php
    include_once("./../common/footer.php");
?>
