<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee Overtime</li>
    </ol>

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="content">
              <form  action="" method="post">
                <div class="head">
                  <h3 class="title">Edit Overtime</h3>
                </div>


                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_overtime','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>

                <div class="body">
                  <div class="row ">
                    <div class="col-sm-6">
                    <form method="POST">
									<div class="form-group">
										<label>Employee Name <span class="text-danger">*</span></label>
										<input name="employee" class="form-control" value="<?= $d->employee ?>" required type="text">
									</div>
									<div class="form-group">
										<label>Overtime_Date<span class="text-danger">*</span></label>
										<input class="form-control" name="overtime_date" value="<?= $d->overtime_date ?>" required type="date">
									</div>
									<div class="form-group">
										<label>Type <span class="text-danger">*</span></label>
										<input class="form-control" name="type" value="<?= $d->type ?>" required type="text">
									</div>
									<div class="form-group">
										<label>Hours<span class="text-danger">*</span></label>
										<input class="form-control" name="hours" value="<?= $d->hours ?>" required type="time">
									</div>
									<div class="form-group">
										<label>Description<span class="text-danger">*</span></label>
										<input class="form-control" name="description" value="<?= $d->description ?>" required type="text">
									</div>
                      <div class="col-sm-12">
                           <div class="form-group">
                             <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div> 



            <?php

          if($_POST){
            $rs=$mysqli->common_update('tbl_overtime',$_POST);
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