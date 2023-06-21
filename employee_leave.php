<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mx-auto">Employee Leave</li>
    </ol>
    <a href="<?= $base_url?>employee_leaves_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>EMPLOYEE</th>
                <th>FROM</th>
                <th>TO</th>
                <th>No of Days</th>
                <th>Reason</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $data=$mysqli->common_select_query('SELECT tbl_leaves.*,tbl_employees.first_name,tbl_employees.last_name,tbl_employees.employee_id FROM `tbl_leaves`
                    join tbl_employees on tbl_employees.id=tbl_leaves.employee_id
                    WHERE tbl_leaves.deleted_at is null');
                if(!$data['error']){
                        foreach($data['data'] as $d){
                    ?>
            <tr>
                <td><?= $d->first_name ?> <?= $d->last_name ?> (<?= $d->employee_id ?>)</td>
                <td><?= $d->starting_at ?></td>
                <td><?= $d->ending_on ?></td>
                <td><?= $d->days ?></td>
                <td><?= $d->reason ?></td>
                <td>
                    <a title="Update" href="<?= $base_url?>employee_leaves_edit.php?id=<?= $d->id ?>">
                                <i class="fa fa-edit"></i>
                    </a>
                    <a title="Delete" class="text-danger" href="employee_leaves_delete.php?id=<?= $d->id ?>">
                                <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php
            }
                    }
                    ?>
        </tbody>    
    </table>
</div>
<?php require_once('include/footer.php') ?>
                