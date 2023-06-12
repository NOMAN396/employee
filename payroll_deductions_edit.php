<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Payroll Deductions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Add New</li>
    </ol>
    

    <div class="row">
        <div class="col-md-12">
        <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_payroll_deductions','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>
        <form method="post">
            <div class="col-md-6">
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="<?= $d->name ?>">
            </div>
            </div>

           

            <div class="col-md-6">
            <div class="form-group">
                <label>Unit Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" class="form-control" name="unit_amount" value="<?= $d->unit_amount ?>">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 my-3">
            <div class="form-group">
                <label class="d-block">Assignee</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="deduction_no_emp" value="option1" checked="">
                    <label class="form-check-label" for="deduction_no_emp">
                    No assignee
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="deduction_all_emp" value="option2">
                    <label class="form-check-label" for="deduction_all_emp">
                    All employees
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio"  id="deduction_single_emp" value="option3">
                    <label class="form-check-label" for="deduction_single_emp">
                    Select Employee
                    </label>
                </div>
                </div>
                <div class="col-md-6 my-2">
                <div class="form-group">
                    <select class="form-select form-select-md">
                        <option>-</option>
                        <option>Select All</option>
                        <option>John Doe</option>
                        <option>Richard Miles</option>
                    </select>
                </div>
                </div>
            </div>
               <div class="submit-section">
                <button class="btn btn-primary submit-btn">Submit</button>
               </div>

               <?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_payroll_deductions',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='payroll_deductions.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>
    
            </form>
        </div>
    </div>
</div>
<?php require_once('include/footer.php') ?>
                