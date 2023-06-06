<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Termination</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Termination List</li>
    </ol>
    <a href="<?= $base_url?>termination_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Terminated Employee</th>
            <th>Department</th>
            <th>Termination Type</th>
            <th>Termination Date</th>
            <th>Reason</th>
            <th>Notice Date</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select_query("SELECT tbl_termination.*, tbl_department.department_name,tbl_employees.first_name,tbl_employees.last_name
                  FROM `tbl_termination`
                                   join tbl_employees on tbl_employees.id=tbl_termination.terminated_employee
                                    join tbl_department on tbl_department.id=tbl_termination.department
                                    WHERE tbl_termination.deleted_at is null");
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?> <?= $d->last_name ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->termination_type?></td>
            <td><?= $d->termination_date?></td>
            <td><?= $d->reason ?></td>
            <td><?= $d->notice_date?></td>
            <td>
                <a title="Update" href="<?= $base_url?>termination_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="termination_delete.php?id=<?= $d->id ?>">
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
                