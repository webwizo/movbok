<?php 

$pdo = require 'connection.php'; 

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM contact_entries WHERE id = $id");

$row = $stmt->fetch();

?>
<?php include "header.php"; ?>
<section class="py-4 bg-light  inner-header">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-6">
                <h4 class="mt-0 mb-0 text-dark">
                    Contact Entry of <?php echo $row['fullname']; ?>
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <div class="breadcrumbs">
                    <p class="mb-0"><a href="#"><i class="icofont-ui-home"></i> Home</a> / <span><a href="entries.php">Contact Entries</a></span> / <span><?php echo $row['fullname']; ?></span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq-page py-5 bg-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bg-white p-4 shadow-sm rounded h-100">
                            <h3 class="mt-0 mb-3">Contact Entries of <?php echo $row['fullname']; ?></h3>
                            Message: <?php echo  $row['message']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>