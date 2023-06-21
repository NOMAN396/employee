<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <?php
        $year=$_GET['s_year']??date('Y');
        $month=$_GET['s_month']??date('m');
        $bonus_act=$_GET['bonus']??0;
    ?>
    <form action="" method="get">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Salary Year</label>
                    <select class="form-control" name="s_year">
                        <?php for($i=2022; $i <= date('Y'); $i++){ ?>
                        <option value="<?= $i ?>" <?= $year==$i?"selected":"" ?>><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Salary Month</label>
                    <select class="form-control" name="s_month">
                        <?php for($i=1; $i <= 12; $i++){ ?>
                        <option value="<?= $i ?>" <?= $month==$i?"selected":"" ?>><?= date('F', mktime(0, 0, 0, $i, 10)); ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <!-- <div class="col-sm-3">
                <div class="form-group">
                    <label for="">Bonus</label>
                    <select class="form-control" name="bonus">
                        <option value="0" <?= $bonus_act==0?"selected":"" ?>>No</option>
                        <option value="1" <?= $bonus_act==1?"selected":"" ?>>Yes</option>
                    </select>
                </div>
            </div> -->
            <div class="col-sm-3">
                <div class="form-group"><br>
                    <button class="btn btn-primary" type="submit">Get List</button>
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
                        </tr>
                        <tbody>
                            <?php
                                
                                $data=$mysqli->common_select_query("SELECT tbl_employees.id,
                                    (select count(*) from tbl_attendance where
                                     tbl_attendance.employee_id=tbl_employees.id
                                      and tbl_attendance.att_status=0
                                       and month(tbl_attendance.att_date)=$month
                                       and year(tbl_attendance.att_date)=$year
                                       ) as absent,
                                 tbl_employees.first_name, tbl_employees.last_name, tbl_employees.phone, tbl_employees.basic_salary,tbl_employees.yearly_leave, tbl_designations.house_rent, 
                                tbl_designations.medical_allowance,tbl_designations.designation,tbl_designations.pf,tbl_designations.bonus,
                                tbl_designations.tax FROM `tbl_employees`
                                join tbl_designations on tbl_designations.id=tbl_employees.designation_id
                                WHERE tbl_employees.deleted_at is null");
                                if(!$data['error']){
                                    foreach($data['data'] as $dt){
                                        $house_rent=($dt->basic_salary*($dt->house_rent/100));
                                        $medical_allowance=($dt->basic_salary*($dt->medical_allowance/100));
                                        $bonus=$bonus_act?($dt->basic_salary*($dt->bonus/100)):0;
                                        $pf=($dt->basic_salary*($dt->pf/100));
                                        $tax=($dt->basic_salary*($dt->tax/100));
                                        $per_month_leave_allowed=ceil($dt->yearly_leave/12);
                                        $leav_d=0;
                                        $leav="";
                                        if($dt->absent > $per_month_leave_allowed){
                                            $leav=($dt->absent - $per_month_leave_allowed);
                                            $leav_d=round($leav * ($dt->basic_salary / 30));
                                        }
                            ?>
                            <tr>
                                <td>
                                    <?= $dt->first_name ?> <?= $dt->last_name ?> (<?= $dt->phone ?>)
                                    <input type="hidden" name="employee_id[]" value="<?= $dt->id ?>">
                                </td>
                                <td>
                                    <?= $dt->basic_salary ?>
                                    <input type="hidden" name="basic_salary[]" value="<?= $dt->basic_salary ?>">
                                </td>
                                <td>
                                    (<?= $dt->house_rent ?>%) <br> <?= $house_rent ?>
                                    <input type="hidden" name="house_rent[]" value="<?= $house_rent ?>">
                                </td>
                                <td>
                                    (<?= $dt->medical_allowance ?>%) <br> <?= $medical_allowance ?>
                                    <input type="hidden" name="medical_allowance[]" value="<?= $medical_allowance ?>">
                                </td>
                                <td>
                                    <?php if($bonus_act){ ?>(<?= $dt->bonus ?>%) <br> <?= $bonus ?> <?php } ?>
                                    <input type="hidden" name="bonus[]" value="<?= $bonus ?>">
                                </td>
                                <td>
                                    (<?= $dt->pf ?>%) <br> <?= $pf ?>
                                    <input type="hidden" name="pf[]" value="<?= $pf ?>">
                                </td>
                                <td>
                                    <?php if($leav){ ?>(<?= $leav ?>Days)<?php } ?> <br> <?= $leav_d ?>
                                    <input type="hidden" name="leav_d[]" value="<?= $leav_d ?>">
                                </td>
                                <td>
                                    (<?= $dt->tax ?>%) <br> <?= $tax ?>
                                    <input type="hidden" name="tax[]" value="<?= $tax ?>">
                                </td>
                                <td>
                                    <?= ($dt->basic_salary+$house_rent+$medical_allowance+$bonus)-($pf+$tax) ?>
                                    <input type="hidden" name="total[]" value="<?= ($dt->basic_salary+$house_rent+$medical_allowance+$bonus)-($pf+$tax) ?>">
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
                