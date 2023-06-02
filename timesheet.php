<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mx-auto">Timesheet</li>
    </ol>
    <a href="<?= $base_url?>timesheet_create.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Employee</th>
            <th>Date</th>
            <th>Projects</th>
            <th>Assigned Hours</th>
            <th>Hours</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_timesheet');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->employee ?></td>
            <td><?= $d->a_date ?></td>
            <td><?= $d->projects ?></td>
            <td><?= $d->a_hours ?></td>
            <td><?= $d->hours ?></td>
            <td><?= $d->description ?></td>
            <td>
                <a title="Update" href="<?= $base_url?>timesheet_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="timesheet_delete.php?id=<?= $d->id ?>">
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
                