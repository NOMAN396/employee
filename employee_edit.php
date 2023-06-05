<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Employee Information</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title"> Edit Employee Information</h3>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_employees','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


                <div class="card-body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" value="<?= $d->first_name ?>" name="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" value="<?= $d->last_name ?>" name="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" value="<?= $d->email ?>" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" value="<?= $d->phone ?>" name="phone" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Employee_ID:</label>
                                <input type="text" value="<?= $d->employee_id ?>" name="employee_ID" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Department:</label>
                                <select class="form-control" id="department_id" name="department_id">
                                  <?php
                                      $data=$mysqli->common_select('tbl_department');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option <?= $d->department_id==$dt->id?"selected":"" ?> value="<?= $dt->id ?>"><?= $dt->department_name ?></option>
                                  <?php } } ?>
                              </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Designation:</label>
                                <select class="form-control" id="designation_id" name="designation_id">
                                  <?php
                                      $data=$mysqli->common_select('tbl_designations');
                                      if(!$data['error']){
                                          foreach($data['data'] as $dt){
                                  ?>
                                      <option <?= $d->designation_id==$dt->id?"selected":"" ?> value="<?= $dt->id ?>"><?= $dt->designation ?></option>
                                  <?php } } ?>
                              </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Joining_Date:</label>
                            <input type="date" value="<?= $d->joining_date ?>" name="joining_date" class="form-control">
                          </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Yearly Leave:</label>
                                <input type="text" value="<?= $d->yearly_leave ?>" name="yearly_leave" class="form-control">
                            </div>
                        </div> 

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Picture:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div>
                        <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                        </div>
                  </div>
                 

<?php
  if($_POST){
    if($_FILES['image']['name']){
      $imgname=time().rand(1111,9999).'.'.pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $rs=move_uploaded_file($_FILES['image']['tmp_name'],"upload/users/$imgname");
      if($rs)
        $_POST['image']=$imgname;
    }
    if($_POST['password']){
      $_POST['password']=sha1(md5($_POST['password']));
    }
      
    $rs=$mysqli->common_update('tbl_employees',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='employee_list.php'</script>";
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
                