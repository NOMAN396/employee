<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Overtime</li>
    </ol>
    <a href="<?= $base_url?>overtime_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Overtime_Date</th>
            <th>Hours</th>
            <th>Type</th>
           
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_overtime');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->employee ?></td>
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
        
    </table>
</div>
<?php require_once('include/footer.php') ?>
                