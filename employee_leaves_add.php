<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4 text-start">EMPLOYEE</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-start">Emoloyee Leave</li>
    </ol>
    


    <section class="content">
        <div class="row">
          <div class="col-md-12">

            
              <form enctype="multipart/form-data" action="" method="post">
                
                <div class="body">
                 
                    <div class="col-sm-8">
                      <div class="form-group">
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
                    <div class="col-sm-8 ">
                      <div class="form-group">
                        <label>From <span class="text-danger">*</span></label>
										    <input onchange="datecount()" name="starting_at" id="starting_at" class="form-control" type="date">
                      </div>
                    </div>
                    <div class="col-sm-8 ">
                      <div class="form-group">
                        <label>To <span class="text-danger">*</span></label>
											  <input onchange="datecount()" name="ending_on" id="ending_on" class="form-control " type="date">
                      </div>
                    </div>
                    <div class="col-sm-8 ">
                      <div class="form-group">
                        <label>Number of days <span class="text-danger">*</span></label>
										    <input name="days" readonly id="days" class="form-control" type="number">
                      </div>
                    </div>
                    <div class="col-sm-8 ">
                      <div class="form-group">
                        <label>Leave Reason <span class="text-danger">*</span></label>
										    <textarea name="reason" rows="4" class="form-control"></textarea>
                      </div>
                    </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary px-5 py-2 my-2">Save</button>
                            </div>
                        </div>
                  </div>
                  <?php
                    if($_POST){
                      
                      $rs=$mysqli->common_create('tbl_leaves',$_POST);
                      if(!$rs['error']){
                        echo "<script>window.location='employee_leave.php'</script>";
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
                