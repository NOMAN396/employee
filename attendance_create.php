<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-start">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-start">Employee Attendance</li>
    </ol>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

         
              <form enctype="multipart/form-data" action="" method="post">
               
              
              
                <div class="body">
                  
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Attendance Date:</label>
                        <input type="date" value="<?= date('Y-m-d') ?>" name="att_date" class="form-control">
                      </div>
                    </div> 
                    <div class="col-12">
                      <table class="table">
                        <tr>
                          <td>Employee</td>
                          <td>Status</td>
                        </tr>
                        <?php
                          $data=$mysqli->common_select('tbl_employees');
                          if(!$data['error']){
                              foreach($data['data'] as $dt){
                        ?>
                          <tr>
                            <td>
                              <?= $dt->employee_id ?> - <?= $dt->first_name ?> <?= $dt->last_name ?>
                              <input type="hidden" name="employee_id[]" value="<?= $dt->id ?>">
                            </td>
                            <td>
                              <select name="att_status[]" class="form-control">
                                <option value="1">Present</option>
                                <option value="0">Absent</option>
                              </select>
                            </td>
                          </tr>
                        <?php } } ?>
                      </table>
                    </div>
                    
                     
                        <button type="submit" class="btn btn-primary px-5 py-2 my-2">Save</button>
                    
                    </div>
                 

<?php
  if($_POST){
    if($_POST['employee_id']){
      foreach($_POST['employee_id'] as $i=>$emp){
        $datas['att_date']=$_POST['att_date'];
        $datas['employee_id']=$emp;
        $datas['att_status']=$_POST['att_status'][$i];
        $rs=$mysqli->common_create('tbl_attendance',$datas);
      }
    }
      
    
    if(!$rs['error']){
      echo "<script>window.location='attendence_list.php'</script>";
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
                