<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Emoloyee Information</li>
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

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_department','*',$where);
                 
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
                            <input type="text" value="<?= $d->department_name ?>" name="department_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div>
                 

<?php
  if($_POST){
    if($_POST['password']){
      $_POST['password']=sha1(md5($_POST['password']));
    }
      
    $rs=$mysqli->common_update('tbl_department',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='department_list.php'</script>";
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
                