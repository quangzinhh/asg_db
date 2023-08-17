<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: index.php?page=admin&controller=login&action=index");
	}
	if($_SESSION["user"] != "admin") {
		header("Location: index.php?page=admin&controller=layouts&action=index");
	}
?>
<?php
require_once('views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('views/admin/content_layouts.php'); ?>


<!-- Code -->
<div class="content-wrapper">
<div class="container">
        <h1 style="text-align: center;">Lịch trình <?php echo $_COOKIE['tentour']?></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Style the table using Bootstrap classes and custom CSS -->
                <div class="table-responsive"> <!-- Make the table responsive on smaller screens -->
                    <?php
                    if (isset($_COOKIE['lichtrinhchuyen'])) {
                        $tableHtml = $_COOKIE['lichtrinhchuyen'];

                        // Display the HTML table
                        echo $tableHtml;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<script src="public/js/admin/index.js"></script>
</body>

</html>