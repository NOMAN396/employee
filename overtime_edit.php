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

                    <form method="POST">
									<div class="form-group col-sm-7">	
                    <select name="employee" id="" class="form-control">
                    <?php
                                      $data=$mysqli->common_select('tbl_employees');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->first_name." ".$dt->last_name ?></option>
                                  <?php } } ?>
                    </select>
									</div>
									<div class="form-group col-sm-7">
										<label>Overtime Date<span class="text-danger">*</span></label>
										<input class="form-control" name="overtime_date" value="<?= $d->overtime_date ?>" required type="date">
									</div>
									<div class="form-group col-sm-7">
										<label>Type <span class="text-danger">*</span></label>
										<input class="form-control" name="type" value="<?= $d->type ?>" required type="text">
									</div>
									<div class="form-group col-sm-7">
										<label>Hours<span class="text-danger">*</span></label>
										<input class="form-control" name="hours" value="<?= $d->hours ?>" required type="number">
									</div>
									<div class="form-group col-sm-7">
										<label>Description<span class="text-danger">*</span></label>
										<input class="form-control" name="description" value="<?= $d->description ?>" required type="text">
									</div>
                      
                    <div>
                      <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                    </div>
              
                  <!-- </div>  -->



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

                  <!-- </div> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
  
  

        <?php require_once('include/footer.php') ?>