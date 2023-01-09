<?php $pdo = require 'connection.php'; ?>
<?php include "header.php"; ?>
<section class="py-4 bg-light  inner-header">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-6">
                <h4 class="mt-0 mb-0 text-dark">
                    Contact Entries!
                </h4>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <div class="breadcrumbs">
                    <p class="mb-0"><a href="#"><i class="icofont-ui-home"></i> Home</a> / <span>Contact Entries</span></p>
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
                            <h3 class="mt-0 mb-3">Contact Entries</h3>
                            <?php
                            $stmt = $pdo->query('SELECT * FROM contact_entries');
                            ?>

                            <?php if ($stmt->rowCount() > 0) { ?>

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Fullname</th>
                                            <th>Phone Number</th>
                                            <th>Email Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = $stmt->fetch()) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['fullname']; ?></td>
                                                <td><?php echo $row['phone_number']; ?></td>
                                                <td><?php echo $row['email_address']; ?></td>
                                                <td>
                                                    <a href="delete_entry.php?id=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                    <a href="edit_entry.php?id=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <a href="view_entry.php?id=<?php echo $row['id']; ?>">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            <?php } else { ?>
                                NO ENTRY FOUND
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>