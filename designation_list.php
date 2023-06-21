<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Designation List</li>
    </ol>
    
    <a href="<?= $base_url?>designation_create.php" class="btn btn-primary">Add New</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Designation</th>
            <th>House Rent</th>
            <th>Medical Allowance</th>
            <th>Provident Fund</th>
            <th>Tax</th>
            <th>Bonus</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_designations');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->designation ?></td>
            <td><?= $d->house_rent ?></td>
            <td><?= $d->medical_allowance ?></td>
            <td><?= $d->pf ?></td>
            <td><?= $d->tax ?></td>
            <td><?= $d->bonus ?></td>
            <td>
                <a title="Update" href="<?= $base_url?>designation_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="designation_delete.php?id=<?= $d->id ?>">
                            <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        <?php
        }
                  }
                  ?>

    </table>
</div>
<?php require_once('include/footer.php') ?>
                