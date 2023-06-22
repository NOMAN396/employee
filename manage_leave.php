<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Page Name</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Page Name</li>
    </ol>
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Employee Name</th>
                                                <th>Department</th>
                                                <th>Leave Type</th>
                                                <th>Leave Category</th>
                                                <th>Leave Start Date</th>
                                                <th>Leave End Date</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                  $data=$mysqli->common_select_query("SELECT user_leave_details.*,
                  tbl_department.department_name,tbl_employees.first_name,tbl_employees.last_name
                  FROM `user_leave_details`
                  join tbl_employees on tbl_employees.id=user_leave_details.id
                  join tbl_department on tbl_department.id=user_leave_details.id
                  WHERE user_leave_details.deleted_at is null");
                if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?> <?= $d->last_name ?></td>
            <td><?= $d->department_name ?></td>
            <td><?= $d->leave_type ?></td>
            <td><?= $d->leave_category ?></td>
            <td><?= $d->start_date ?></td>
            <td><?= $d->end_date ?></td>
            <td><?= $d->leave_date ?></td>
            <td><?= $d->description ?></td>
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
                