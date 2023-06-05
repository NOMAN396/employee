<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Department List</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="content my-3">
              <form enctype="multipart/form-data" action="" method="post">
                <div class="head my-2">
                  <h3 class="title">Edit Department</h3>
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


                <div class="body">
                  <div class="row ">
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Department:</label>
                            <input type="text" value="<?= $d->department_name ?>" name="department_name" class="form-control">
                                <button type="submit" class="btn btn-primary px-5 my-2">Save</button>
                            </div>
                        </div>
                  </div>
                 

<?php
  if($_POST){
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
                