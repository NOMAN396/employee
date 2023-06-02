<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-center mx-auto">TIMESHEET</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">ADD TIMESHEET</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                  
									
										<div class="form-group col-sm-6">
											<label>Project <span class="text-danger">*</span></label>
											<select class="select" name="projects">
												<option>Office Management</option>
												<option>Project Management</option>
												<option>Video Calling App</option>
												<option>Hospital Administration</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-4">
											<label>Deadline <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control" type="text" name="deadline">
											</div>
										</div>
										<div class="form-group col-sm-4">
											<label>Total Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="a_hours">
										</div>
										<div class="form-group col-sm-4">
											<label>Remaining Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="hours">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
											<label>Date <span class="text-danger">*</span></label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="date" name="a_date">
											</div>
										</div>
										<div class="form-group col-sm-6">
											<label>Hours <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="hours">
										</div>
									</div>
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea rows="7" class="form-control" name="description"></textarea>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
								
<?php
  if($_POST){
   
    $rs=$mysqli->common_create('tbl_timesheet',$_POST);
    if(!$rs['error']){
      echo "<script>window.location='timesheet.php'</script>";
    }else{
        echo $rs['error'];
    }

  }
?>
                </div>
                
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




</div>
<?php require_once('include/footer.php') ?>
                