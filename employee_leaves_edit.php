<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Emoloyee Leaves</li>
    </ol>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

           
              <form enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                  <h3 class="card-title"> Edit Employee Leaves</h3>
                </div>

                <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_leaves','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>


                
                  
                  <div class="col-sm-6">
                      <div class="form-group pt-3">
                        <label>Employee Name <span class="text-danger">*</span></label>
                        <select class="form-control" id="employee_id" name="employee_id">
                            <?php
                                $data=$mysqli->common_select('tbl_employees');
                                if(!$data['error']){
                                    foreach($data['data'] as $dt){
                            ?>
                                <option value="<?= $dt->id ?>"><?= $dt->employee_id ?> - <?= $dt->first_name ?> <?= $dt->last_name ?></option>
                            <?php } } ?>
                        </select>
                      </div>
                    </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>From <span class="text-danger">*</span></label>
											<input onchange="datecount()" class="form-control" value="<?= $d->starting_at ?>" type="date" name="starting_at">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>To <span class="text-danger">*</span></label>
											<input onchange="datecount()" class="form-control" value="<?= $d->ending_on ?>" type="date" name="ending_on">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
										        <input class="form-control" readonly type="text" value="<?= $d->days ?>" name="days">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                            <label>Leave Reason <span class="text-danger">*</span></label>
										<textarea rows="5" name="reason" class="form-control" value="<?= $d->reason ?>"></textarea>
                            </div>
                        </div>
        
                        <div class="col-sm-6">
                            <div class="form-group py-2">
                                <button type="submit" class="btn btn-primary form-control">Save</button>
                            </div>
                        </div>
                  </div>
                  

<?php
  if($_POST){
    $rs=$mysqli->common_update('tbl_leaves',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='employee_leave.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>
               
                
             
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




</div>
<?php require_once('include/footer.php') ?>
<script>
  function datecount(){
    let start=new Date(document.querySelector('#starting_at').value);
    let end=new Date(document.querySelector('#ending_on').value);
    
    if(!isNaN(end.getTime())){
      if(start > end){
        alert("You cant come back before you go for leave!");
        document.querySelector('#days').value=0;
      }else{
        days = parseInt((end - start) / (1000 * 60 * 60 * 24), 10); 
        document.querySelector('#days').value=days+1
      }
    }
  }
</script>