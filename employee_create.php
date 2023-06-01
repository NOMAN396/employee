<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-center mx-auto">Emoloyee Information</li>
    </ol>
    


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card card-danger">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title">Emoloyee Information</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>User Name:</label>
                            <input type="text" name="user_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                      

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone:</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Employee_ID:</label>
                                <input type="text" name="employee_id" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Department:</label>
                                <input type="text" name="department" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Designation:</label>
                                <input type="text" name="designation" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Joining_Date:</label>
                                <input type="date" name="joining_date" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Picture:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div>
                  <!-- Date dd/mm/yyyy -->

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
      
    $rs=$mysqli->common_create('tbl_employees',$_POST);
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
                