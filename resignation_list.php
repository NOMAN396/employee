<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Resignation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Resignation List</li>
    </ol>
    <a href="<?= $base_url?>resignation_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Resigning Employee</th>
            <th>Department</th>
            <th>Reason</th>
            <th>Notice Date</th>
            <th>Resignation Date</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select_query("SELECT tbl_resignation.*,
                  tbl_department.department_name,tbl_employees.first_name,tbl_employees.last_name
                  FROM `tbl_resignation`
                  join tbl_employees on tbl_employees.id=tbl_resignation.resigning_employee
                  join tbl_department on tbl_department.id=tbl_resignation.department
                  WHERE tbl_resignation.deleted_at is null");
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?> <?= $d->last_name ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->reason ?></td>
            <td><?= $d->notice_date ?></td>
            <td><?= $d->resignation_date ?></td>
            <td>
                <a title="Update" href="<?= $base_url?>resignation_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="resignation_delete.php?id=<?= $d->id ?>">
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
                