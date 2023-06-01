<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">DEPARTMENT LIST</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Department list</li>
    </ol>
    <a href="<?= $base_url?>department_create.php">Add New</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Department</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_department');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->date ?></td>
          
            <td>
                <a title="Update" href="<?= $base_url?>department_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="department_delete.php?id=<?= $d->id ?>">
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
                