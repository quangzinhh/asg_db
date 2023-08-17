<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
    require_once('views/admin/header.php'); 
?>

<?php
    require_once('views/admin/content_layouts.php'); 
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Code -->
<div class="content-wrapper">
    <div class="container">
        <h1 style="text-align: center;">Doanh thu năm <?php echo $_COOKIE['year_doanhthu']?></h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Style the table using Bootstrap classes and custom CSS -->
                <div class="table-responsive"> <!-- Make the table responsive on smaller screens -->
                    <?php
                    if (isset($_COOKIE['doanhthu_table'])) {
                        $tableHtml = $_COOKIE['doanhthu_table'];

                        // Display the HTML table
                        echo $tableHtml;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    /* Custom CSS for table styling */

.table td, .table tr{
    text-align: center; /* Justify the text within cells */
    vertical-align: middle;
}
</style>


<?php
require_once('views/admin/footer.php'); ?>

<!-- Add Javascripts -->
<script src="public/js/news/index.js"></script>

</body>

</html>