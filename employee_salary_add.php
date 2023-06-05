<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Employee</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee salary</li>
    </ol>
    <div class="content">
            <h5 class="modal-title">Add Staff Salary</h5>
        <div class="body">
    <form method="post">
    <?php
    function calculateSalary($employeeId, $conn) {
    $sql = "SELECT * FROM employees WHERE id = '$employeeId'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error retrieving employee details: " . mysqli_error($conn));
    }
    
    $employee = mysqli_fetch_assoc($result);
    
    // Calculate earnings
    $basic = $employee['basic'];
    $da = $basic * 0.4;
    $hra = $basic * 0.15;
    $conveyance = $employee['conveyance'];
    $allowance = $employee['allowance'];
    $medicalAllowance = $employee['medical_allowance'];
    $othersEarnings = $employee['others_earnings'];
    
    $earnings = $basic + $da + $hra + $conveyance + $allowance + $medicalAllowance + $othersEarnings;
    
    // Calculate deductions
    $tds = $employee['tds'];
    $esi = $employee['esi'];
    $pf = $employee['pf'];
    $leave = $employee['leave'];
    $profTax = $employee['prof_tax'];
    $labourWelfare = $employee['labour_welfare'];
    $othersDeductions = $employee['others_deductions'];
    
    $deductions = $tds + $esi + $pf + $leave + $profTax + $labourWelfare + $othersDeductions;
    
    // Calculate the net salary
    $netSalary = $earnings - $deductions;
    
    // Update the salary in the database
    $updateSql = "UPDATE employees SET salary = '$netSalary' WHERE id = '$employeeId'";
    $updateResult = mysqli_query($conn, $updateSql);
    if (!$updateResult) {
        die("Error updating salary: " . mysqli_error($conn));
    }
    
    echo "Salary updated successfully!";
}
?>

                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="form-group">
                            <label>Select Staff</label>
                            <select class="select"> 
                                <option>John Doe</option>
                                <option>Richard Miles</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <label>Net Salary</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <h4 class="text-primary">Earnings</h4>
                        <div class="form-group">
                            <label>Basic</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>DA(40%)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>HRA(15%)</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Conveyance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Allowance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Medical  Allowance</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Others</label>
                            <input class="form-control" type="text">
                        </div>
                        <!-- <div class="add-more">
                            <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                        </div> -->
                    </div>
                    <div class="col-sm-6">  
                        <h4 class="text-primary">Deductions</h4>
                        <div class="form-group">
                            <label>TDS</label>
                            <input class="form-control" type="text">
                        </div> 
                        <div class="form-group">
                            <label>ESI</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>PF</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Leave</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Prof. Tax</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Labour Welfare</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Others</label>
                            <input class="form-control" type="text">
                        </div>
                        <!-- <div class="add-more">
                            <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                        </div> -->
                    </div>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
            <?php
                $employeeId = 123; // Replace 123 with the actual employee ID
                calculateSalary($employeeId, $conn);
             ?>


</div>
<?php require_once('include/footer.php') ?>
                