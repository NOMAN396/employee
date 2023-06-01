<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee salary_list</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary_list</li>
    </ol>
    <a href="#"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>Employee</th>
            <th>Employee_ID</th>
            <th>Email</th>
            <th>Join Date</th>
            <th>Role</th>
            <th>Salary</th>
            <th>Payslip</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select('employee_salary');
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->name ?></td>
            <td><?= $d->employee_id ?></td>
            <td><?= $d->email ?></td>
            <td><?= $d->joining_date ?></td>
            <td><?= $d->designation ?></td>
            <td><?= $d->salary ?></td>
            <td><?= $d->payslip ?></td>
            <td>
                <a title="Update" href="user_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="user_delete.php?id=<?= $d->id ?>">
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
                