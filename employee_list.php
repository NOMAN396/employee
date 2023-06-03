<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active mx-auto">Employee_List</li>
    </ol>
    <a href="<?= $base_url?>employee_create.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Employee_ID</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Joining Date</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('tbl_employees');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?></td>
            <td><?= $d->last_name ?></td>
            <td><?= $d->user_name ?></td>
            <td><?= $d->email ?></td>
            <td><?= $d->phone ?></td>
            <td><?= $d->employee_id ?></td>
            <td><?= $d->department ?></td>
            <td><?= $d->designation ?></td>
            <td><?= $d->joining_date ?></td>
            <td><img src="upload/users/<?= $d->image ?>" width="50px" alt=""></td>
            <td>
                <a title="view" href="<?= $base_url?>emp_attendance.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                <a title="Update" href="<?= $base_url?>employee_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="employee_delete.php?id=<?= $d->id ?>">
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
                