<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar_2.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Page Name</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Page Name</li>
    </ol>
    <table class="table table-bordered" width="100%">
            <tr>
                <th>S.No.</th>
                <th>Leave Type</th>
                <th>Leave Category</th>
                <th>Leave Start Date</th>
                <th>Leave End Date</th>
                <th>Leave Day</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        <?php
                  $data=$mysqli->common_select('user_leave_details');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->leave_type ?></td>
            <td><?= $d->leave_category ?></td>
            <td><?= $d->start_date ?></td>
            <td><?= $d->end_date ?></td>
            <td><?= $d->leave_date ?></td>
            <td><?= $d->description ?></td>
            <td><?= $d->status ?></td>
            <td>
                <a title="Update" href="<?= $base_url?>#?id=<?= $d->id ?>">
                           Pending
                </a>
                <a title="Delete" class="text-danger" href="#?id=<?= $d->id ?>">
                           Approved
                </a>
                <a title="Delete" class="text-danger" href="#?id=<?= $d->id ?>">
                           Rejected
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

<!-- jasim bhai -->
                