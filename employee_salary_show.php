<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <?php
        $year=$_GET['year'];
        $month=$_GET['month'];
    ?>
    <form action="" method="get" class="mb-2">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <h5>Salary Year : <?= $year ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <h5>Salary Year : <?= date('F', mktime(0, 0, 0, $month, 10)); ?></h5>
                </div>
            </div>
            
            <div class="col-sm-3">
                <div class="form-group"><br>
                    <button class="btn btn-success" type="submit">Show List</button>
                </div>
            </div>
        </div>
    </form>
    <form method="post" action="">
        <div class="row"> 
            <div class="col-sm-12"> 
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Employee</th>
                            <th>Basic</th>
                            <th>(+)<br>  House Rent</th>
                            <th>(+)<br>  Medical  Allowance</th>
                            <th>(+)<br>  Bonus</th>
                            <th>(-)<br>  Provident Fund</th>
                            <th>(-)<br> Leave Deduction</th>
                            <th>(-)<br>  Tax</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            <?php
                                $data=$mysqli->common_select_query("SELECT tbl_salary.*,tbl_employees.first_name,tbl_employees.last_name, tbl_employees.phone FROM `tbl_salary`
                                join tbl_employees on tbl_employees.id=tbl_salary.employee_id
                                where tbl_salary.s_year=$year and tbl_salary.s_month=$month",);
                                if(!$data['error']){
                                    foreach($data['data'] as $dt){
                            ?>
                            <tr>
                                <td>
                                    <?= $dt->first_name ?> <?= $dt->last_name ?> (<?= $dt->phone ?>)
                                    <input type="hidden" name="employee_id[]" value="<?= $dt->id ?>">
                                </td>
                                <td><?= $dt->basic ?></td>
                                <td><?= $dt->house_rent ?></td>
                                <td><?= $dt->medical_allowance ?></td>
                                <td><?= $dt->bonus ?></td>
                                <td><?= $dt->provident_fund ?></td>
                                <td><?= $dt->leave_deduction ?></td>
                                <td><?= $dt->tax ?></td>
                                <td><?= $dt->total ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="employee_payslip.php?id=<?= $dt->id ?>">Generate Slip</a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       
        
        <input type="hidden" name="s_year" value="<?= $year ?>">
        <input type="hidden" name="s_month" value="<?= $month ?>">
        <!-- <div class="submit-section">
            <button type="submit" class="btn btn-primary px-5 my-2">Submit</button>
        </div> -->
    </form>

    <?php
  if($_POST){
    $dw['s_year']=$_POST['s_year'];
    $dw['s_month']=$_POST['s_month'];
    $d=$mysqli->common_delete('tbl_salary',$dw);
    foreach($_POST['employee_id'] as $is=>$emp){
        $empdata['employee_id']=$emp;
        $empdata['basic']=$_POST['basic_salary'][$is];
        $empdata['house_rent']=$_POST['house_rent'][$is];
        $empdata['medical_allowance']=$_POST['medical_allowance'][$is];
        $empdata['bonus']=$_POST['bonus'][$is];
        $empdata['provident_fund']=$_POST['pf'][$is];
        $empdata['leave_deduction']=$_POST['leav_d'][$is];
        $empdata['tax']=$_POST['tax'][$is];
        $empdata['total']=$_POST['total'][$is];
        $empdata['s_year']=$_POST['s_year'];
        $empdata['s_month']=$_POST['s_month'];
        $rs=$mysqli->common_create('tbl_salary',$empdata);
    }
    if(!$rs['error']){
      echo "<script>window.location='employee_salary_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>


</div>
<?php require_once('include/footer.php') ?>
                