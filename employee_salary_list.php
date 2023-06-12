<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <a href="employee_salary_add.php"class="btn btn-primary align-right">ADD NEW</a>
    <table class="table">
        <tr>
            <th>#</th>
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
                  $data=$mysqli->common_select_query("SELECT employee_salary.*,tbl_employees.first_name,tbl_employees.last_name,tbl_employees.employee_id,tbl_employees.email,tbl_employees.joining_date
                  FROM `employee_salary`
                  join tbl_employees on tbl_employees.id=employee_salary.id Where employee_salary.deleted_at is null
                  ");
               if(!$data['error']){
                    foreach($data['data'] as $d){
                ?>
        <tr>
            <td><?= $d->id ?></td>
            <td><?= $d->first_name ?> <?= $d->last_name ?></td>
            <td><?= $d->employee_id ?></td>
            <td><?= $d->email ?></td>
            <td><?= $d->joining_date ?></td>
            <td><?= $d->designation ?></td>
            <td><?= $d->salary ?></td>
            <td><?= $d->payslip ?></td>
            <td>
                <a title="Update" href="employee_salary_edit.php?id=<?= $d->id ?>">
                            <i class="fa fa-edit"></i>
                </a>
                <a title="Delete" class="text-danger" href="employee_salary_delete.php?id=<?= $d->id ?>">
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
                