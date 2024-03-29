<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Holidays</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">All Holidays</li>
    </ol>
    

    <a href="holiday_add.php"
    button type="submit" class="btn btn-primary mb-3">Add New</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Holiday Date</th>
            <!-- <th>Day</th> -->
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_holidays');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->holiday_name ?></td>
            <td><?= $d->holiday_date?></td>
          
          
            <td>
                <a title="Update" href="<?= $base_url?>holidays_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="holidays_delete.php?id=<?= $d->id ?>">
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
                