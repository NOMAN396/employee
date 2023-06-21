<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Overtime</li>
    </ol>
    <a href="<?= $base_url?>overtime_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Overtime Date</th>
                <th>Hours</th>
                <th>Type</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $data=$mysqli->common_select_query('SELECT tbl_overtime.*,tbl_employees.first_name,tbl_employees.last_name
                    From `tbl_overtime`
                    join tbl_employees on tbl_employees.id=tbl_overtime.employee
                    where tbl_overtime.deleted_at is null');
                if(!$data['error']){
                        foreach($data['data'] as $d){
                    ?>
            <tr>
                <td><?= $d->id ?></td>
                <td><?= $d->first_name ?> <?= $d->last_name ?></td>
                <td><?= $d->overtime_date ?></td>
                <td><?= $d->hours ?></td>
                <td><?= $d->type ?></td>
            
                <td><?= $d->description ?></td>
                
                <td>
                    <a title="Update" href="<?= $base_url?>overtime_edit.php?id=<?= $d->id ?>">
                                <i class="fa fa-edit"></i>
                    </a>
                    <a title="Delete" class="text-danger" href="overtime_delete.php?id=<?= $d->id ?>">
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
                