<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <a href="employee_salary_add.php"class="btn btn-primary align-right mb-2">ADD NEW</a>
    <table class="table table-striped table-bordered">
        <thead class="bg-dark text-white">
            <tr>
                <th>Year</th>
                <th>Month</th>
                <th>Basic</th>
                <th>House Rent</th>
                <th>Medical Allowance</th>
                <th>Bonus</th>
                <th>Provident Fund</th>
                <th>Leave deduction</th>
                <th>Tax</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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
                    
                    <td><?= $d->s_year ?> </td>
                    <td><?php echo date('F', mktime(0, 0, 0, $d->s_month, 1)); ?></td>

                    <td><?= $d->basic ?> </td>
                    <td><?= $d->house_rent ?></td>
                    <td><?= $d->medical_allowance ?></td>
                    <td><?= $d->bonus ?></td>
                    <td><?= $d->provident_fund ?></td>
                    <td><?= $d->leave_deduction ?></td>
                    <td><?= $d->tax ?></td>
                    <td><?= $d->total ?></td>
                    <td>
                        <a title="Show" href="<?= $base_url?>employee_salary_show.php?year=<?= $d->s_year ?>&month=<?= $d->s_month ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
                <?php } } ?>
        </tbody>         
    </table>
</div>
<?php require_once('include/footer.php') ?>
                