<?php require_once('include/header.php') ?>
<?php require_once('include/sidebar.php') ?>


<?php
  $where['id']=$_GET['id'];
  $data['deleted_at']=date('Y-m-d H:i:s');
  $rs=$mysqli->common_update('tbl_overtime',$data,$where);
    if(!$rs['error']){
      echo "<script>window.location='overtime_list.php'</script>";
    }else{
        echo $rs['error'];
    }
  
?>


</div>
<?php require_once('include/footer.php') ?>
                
