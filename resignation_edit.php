<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">RESIGNATION</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Resignation List</li>
    </ol>
    
    <section class="content">
   
        <div class="row">
          <div class="col-md-12">

         
              <form enctype="multipart/form-data" action="" method="post">
              
                  <h3 class="title"> Edit Employee Resignation</h3>
               

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_resignation','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


              <div class="body">
                
                    <div class="col-sm-8">
                            <div class="form-group">
                            <label>Resigning Employee <span class="text-danger">*</span></label>
                            <select name="resigning_employee" id="" class="form-control">
                                <?php
                                $data=$mysqli->common_select('tbl_employees');
                                if(!$data['error']){
                                    foreach($data['data'] as $dt){
                                        ?>
                                        <option value="<?= $dt->id ?>"><?= $dt->first_name." ".$dt->last_name ?></option>
                                   <?php } } ?>
                            </select>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="form-group">
                            <label>Department<span class="text-danger">*</span></label>
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
                        </div>


                          <div class="col-sm-8">
                            <div class="form-group">
                            <label>Notice Date<span class="text-danger">*</span></label>
                            <input name="notice_date" value="<?= $d->notice_date ?>" class="form-control" type="date">	
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                            <label>Resignation Date<span class="text-danger">*</span></label>
                            <input name="resignation_date" value="<?= $d->resignation_date ?>" class="form-control" type="date">	
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                            <label>Reason<span class="text-danger">*</span></label>
							      <textarea name="reason" value="<?= $d->reason ?>" class="form-control" type="text"></textarea>
                            </div>
                          </div>

                         
                       
                        <div class="col-sm-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                            </div>
                        </div>
                  
                  

<?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_resignation',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='resignation_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>
              
                
              </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
<?php require_once('include/footer.php') ?>
                