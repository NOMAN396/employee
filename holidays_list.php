<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Page Name</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Page Name</li>
    </ol>
    
    <a href="designation_create.php">Add New</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Holiday Date</th>
            <!-- <th>Day</th> -->
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_designations');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->holiday_name ?></td>
            <td><?= $d->holiday_date?></td>
          
          
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
                