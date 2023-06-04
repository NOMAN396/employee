<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Page Name</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Page Name</li>
    </ol>
    <?php
                  $where['id']=$_GET['id'];
                  $data=$mysqli->common_select('tbl_attendance','*',$where);
                 
                  if(!$data['error'] && count($data['data'])>0)
                    $d=$data['data'][0];
                  else{
                    echo "<h2 class='text-danger text-center'>This url is not correct</h2>";
                    exit;
                  }
                ?>

<form action="" method="post">
  employee:
  <input type="text" value="<?= $d->employee_id ?> - <?= $d->first_name ?> <?= $d->last_name ?>" name="employee_id" id="">
  status
  <select name="" id="" value=" <?= $d->att_status==1?"Present":"Absent" ?>">
  <option value="<?= $d->att_status==1?"Present":"Absent" ?>">present</option>
  <option value="<?= $d->att_status==1?"Present":"Absent" ?>">absent</option>
</select>
  <button type="submit">save</button>
</form>


<?php
  if($_POST){
    if($_POST['password']){
      $_POST['password']=sha1(md5($_POST['password']));
    }
      
    $rs=$mysqli->common_update('tbl_attendance',$_POST,$where);
    if(!$rs['error']){
      echo "<script>window.location='attendance_show.php'</script>";
    }else{
        echo $rs['error'];
    }
  }
?>
</div>
<?php require_once('include/footer.php') ?>
                