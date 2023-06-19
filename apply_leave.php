<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar_2.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">ApplyLeave</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">ApplyLeave</li>
    </ol>
    <form method="post" class="form-valide w-75 justify-content-center">
                      
            <div class="form-group row">
                <div class="col-3">
                    <label for="leave-type"><b>Leave Type</b><span class="text-danger">*</span>
                    </label>
                </div>
                <div class="col-9">
                        <select class="form-control" id="" name="leave-type" >
                            <option value="">Select Leave Type</option>
                            <option  value="CL">CL</option>
                            <option  value="EL">SL</option>
                            <option  value="Others">Others</option>
                        </select>
                </div>
            </div>  
            <div class="form-group row mt-2">
                <div class="col-3">
                    <label><b>Leave Category</b><span class="text-danger">*</span></label>
                </div>
                <div class="col-9">
                    <select class="form-control" id="" name="leave_category">
                            <option  value="">Select Leave Category</option>
                            <option  value="Full Day">Full Day</option>
                            <option  value="Half Day">Half Day</option>
                    </select>
               </div>
            </div>
           
            <div class="form-group row mt-2">
                <div class="col-3">
                    <label><b>Leave Start Date</b><span class="text-danger">*</span></label>
                </div> 
                <div class="col-9">
                    <input type="date" class="form-control" id="start_date" name="start-date" placeholder="Select Leave Start Date">
                </div>
            </div>
                                        
            <div class="form-group row mt-2">
                <div class="col-3">
                    <label><b>Leave End Date </b><span class="text-danger">*</span></label>
                </div>
                <div class="col-9">  
                        <input type="date" class="form-control" id="end_date" name="end-date" placeholder="Select Leave End Date">
                </div>
            </div>
            
                                        
                                        
                <div class="form-group row mt-2">
                    <div class="col-3">
                        <label><b>Description </b><span class="text-danger">*</span>
                        </label>
                    </div> 
                    <div class="col-9">     
                            <textarea rows="3" name="remarks" id="remarks" class="form-control" placeholder="Enter a Remarks.." ></textarea>
                    </div>  
                </div>
                           
                <div class="form-group row mt-2">
                       
                            <button type="submit" name="" class="btn btn-primary">Submit</button>
                       
                </div>
        <?php
            if($_POST){
            $rs=$mysqli->common_create('tbl_leaves',$_POST);
            if(!$rs['error']){
              echo "<script>window.location='view_leave.php'</script>";
            }else{
                echo $rs['error'];
            }
                 }


        ?>
    </form>
</div>
<?php require_once('include/footer.php') ?>

                