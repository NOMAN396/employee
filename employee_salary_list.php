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
            <th>Basic</th>
            <th>Payslip</th>
            <th>Action</th>
        </tr>
        <?php
                  $data=$mysqli->common_select_query("SELECT 
                  sum(`basic`) as basic,
                  sum(`house_rent`) as house_rent,
                  sum(`medical_allowance`) as medical_allowance,
                  sum(`bonus`) as bonus,
                  sum(`provident_fund`) as provident_fund,
                  sum(`leave_deduction`) as leave_deduction,
                  sum(`tax`) as tax,
                  sum(`total`) as total, s_year,s_month
                  FROM `tbl_salary`
                  group by `s_year`,`s_month`");
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
            
        </tr>
        <?php } } ?>
        
    </table>
</div>
<?php require_once('include/footer.php') ?>
                