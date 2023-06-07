<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee Overtime</li>
    </ol>

 <section class="content">
        <div class="row">
          <div class="col-md-12">

            <div class="content">
              <form  action="" method="post">
               
                  <h3>Add Overtime</h3>
               
                <div class="body">
                  <div class="row ">
                    <div class="col-sm-6">
                    <form method="POST">
									<div class="form-group">
										<label>Employee Name <span class="text-danger">*</span></label>
										
                    <select name="employee" id="" class="form-control">
                    <?php
                                      $data=$mysqli->common_select('tbl_employees');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->first_name.$dt->last_name ?></option>
                                  <?php } } ?>
                    </select>
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
                             <button type="submit" class="btn btn-primary  px-5 py-2 my-2">Save</button>
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