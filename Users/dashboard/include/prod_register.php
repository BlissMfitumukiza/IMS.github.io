
<div style="display:none">
<?php
if(isset($_POST['prod_register'])){
    $name=$_POST['prod_name'];
    $ProductPri_POST=$_POST['ProductPrice'];
    $ProductDesc = $_POST['ProductDesc'];
   
  
    $dir="images/";
    $file=$_FILES['prod_img']['name'];
    $path=pathinfo($file);
    $tmp=$_FILES['prod_img']['tmp_name'];
    $ext=$path['extension'];
    $filename=$path['filename'];
    $dest=$dir.$filename.".".$ext;
    $o_ext=strtolower($ext);
    $prod_id = date('miYs-Ndysh');
    $arr=array("jpg","jpeg","png","pdf");
    if(in_array($o_ext, $arr)){
      if(move_uploaded_file($tmp, $dest)){
    $sql=$con->query("INSERT into products values('$prod_id','$name','$ProductPri_POST','$dest','$ProductDesc')");
      echo '<script>alert("added successfully");</script>';
    }else{
      echo "product not added";
    }
  }else{
    echo '<script>alert("invalid type");</script>';
  }
  }
?>

</div>


<div class="container-fluid p-0" id="dashboardRegisterContainer" style="display: none;">
    <div class="container-fluid my-5 p-0">
        <div class="container col-lg-4 col-md-5 col-sm-12 shadow-lg p-0 border ">
            <div class="container-fluid bg-secondary text-light h6 text-center py-2">
                New product register
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="container-fluid my-3">
                    <label for="productName" class=" text-secondary">Product Name</label>
                    <div class="input-group">
                        <span class="input-group-item input-group-prepend border left-rounded px-2 py-2">
                            <i class="fa fa-info-circle"></i>
                        </span>
                        <input type="text" name="prod_name" id="productName" class="form-control form-control-sm border-left-0 right-rounded">
                    </div>
                    <div class="container-fluid my-2 p-0">
                        <label for="prodUnity" class="text-secondary">Price/Unit</label>
                        <input type="number" min="1" name="ProductPrice" class="form-control form-control-sm"paceholder="Enter product Price" id="prodUnity">
                    </div>
                    <label for="productImage" class=" text-secondary">Product Image</label>
                    <div class="input-group">
                        <span class="input-group-item input-group-prepend border py-2 left-rounded px-2">
                            <label for="productImage" class="fa fa-image"></label>
                        </span>
                        <input type="file" name="prod_img" id="productImage" class="form-control form-control-sm  border-left-0 right-rounded">
                    </div>
                    
                    <!-- description -->
                    <div class="container-fluid my-2">
                        <label for="prodDescription" class="text-secondary">Description</label>
                        <textarea name="ProductDesc" id="prodDescription" cols="30" rows="10" class="form-control text-secondary" style="min-width:100%;max-width:100%;min-height:100px;max-height:100px;"></textarea>
                    </div>
            
                    <div class="container-fluid my-2 p-0 modal-footer">
                        <button type="submit" name="prod_register" class="btn btn-outline-secondary btn-sm"> <span class="fa fa-folder-open"></span> Register</button>
                    </div>
                </div>
            </form>
            </div>
        
    </div>
</div>
