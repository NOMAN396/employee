<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Payroll Items(Overtime)</li>
    </ol>
    <div>
    <a href="<?= $base_url?>payroll_additions.php" class="btn btn-primary">Additions</a>
    <a href="<?= $base_url?>payroll_deductions.php" class="btn btn-primary">Deductions</a>
    </div>
    <hr>
    <div class="col-md-12 d-flex justify-content-end">
    <a href="<?= $base_url?>payroll_additions_add.php" class="btn btn-success px-4">Add New</a>
    </div>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Rate</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_payroll_overtime');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->name ?></td>
            <td><?= $d->rate ?></td>
          
          
            <td>
                <a title="Update" href="<?= $base_url?>payroll_overtime_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="payroll_overtime_delete.php?id=<?= $d->id ?>">
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
                