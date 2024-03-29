<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">PROMOTION</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Edit Employee Promotion </li>
    </ol>
    
    <section class="content">
        <div class="row">
          <div class="col-md-12">

           
              <form enctype="multipart/form-data" action="" method="post">
                
                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_promotion','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


             
                    <div class="col-sm-8">
                            <label>Promotion For <span class="text-danger">*</span></label>
                            <select class="form-control" id="department_id" name="promoted_employee">
                                  <?php
                                      $data=$mysqli->common_select('tbl_employees');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->first_name." ".$dt->last_name ?></option>
                                  <?php } } ?>
                              </select>
                          </div>

                          <div class="col-sm-8">
                            <label>Deprtment</label>
                            <select class="form-control" id="department_id" name="department">
                                  <?php
                                      $data=$mysqli->common_select('tbl_department');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option value="<?= $dt->id ?>"><?= $dt->department_name ?></option>
                                  <?php } } ?>
                              </select>
                            </div>

                      <div class="col-sm-8">
                            <div class="form-group">
                            <label>Promotion From <span class="text-danger">*</span></label>
											      <input name="promoted_designation_from" value="<?= $d->promoted_designation_from ?>" class="form-control" type="text">
                              </div>
                             </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                            <label>Promotion To<span class="text-danger">*</span></label>
										      <input name="promoted_designation_to" value="<?= $d->promoted_designation_to ?>" class="form-control" type="text">
                            </div>
                          </div>

              
                        <div class="col-sm-8">
                            <div class="form-group">
                            <label>Promotion Date<span class="text-danger">*</span></label>
                            <input name="promotion_date" value="<?= $d->promotion_date ?>" class="form-control" type="date">	
                            </div>
                        </div>
                       
                        <div class="col-sm-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                            </div>
                        </div>
                  
                  

<?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_promotion',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='promotion_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>
            
                
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
                