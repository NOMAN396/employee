<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Holidays</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">EMPLOYEE_OVERTIME</li>
    </ol>





 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form  action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">EMPLOYEE_INPUT</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                    <div class="col-sm-6">
                    <form method="POST">
									<div class="form-group">
										<label>Employee Name <span class="text-danger">*</span></label>
										<input name="employee" class="form-control" required type="text">
									</div>
									<div class="form-group">
										<label>Overtime_Date<span class="text-danger">*</span></label>
										<input class="form-control" name="overtime_date" required type="date">
									</div>
									<div class="form-group">
										<label>Type <span class="text-danger">*</span></label>
										<input class="form-control" name="type" required type="text">
									</div>
									<div class="form-group">
										<label>Hours<span class="text-danger">*</span></label>
										<input class="form-control" name="hours" required type="time">
									</div>
									<div class="form-group">
										<label>Description<span class="text-danger">*</span></label>
										<input class="form-control" name="description" required type="text">
									</div>
                      <div class="col-sm-12">
                           <div class="form-group">
                             <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div> 



            <?php

          if($_POST){
            $rs=$mysqli->common_create('tbl_overtime',$_POST);
            if(!$rs['error']){
              echo "<script>window.location='overtime_list.php'</script>";
            }else{
                echo $rs['error'];
            }
                 }


            ?>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  

        <?php require_once('include/footer.php') ?>