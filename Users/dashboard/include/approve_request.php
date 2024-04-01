<div class="container-fluid p-0" id="approveRequest" style="display: none;">
    <div class="container-fluid bg-dark"></div>
    <div class="container ">
        <div class=" container-fluid shadow p-0 border">
            <?php
            $requestFetctQuery = $con->query("SELECT * From products,request where products.prod_id=request.prod_id");
            $num_per_page = 3 ;
            if (isset($_GET['page'])) {
                $page = $_GET['page']; 
            }
            else{
                $page = 1 ;
            }
            $start_from = ($page-1) * $num_per_page;
            $requestFetctQuery = $con->query("SELECT * From products,request where products.prod_id=request.prod_id limit $start_from,$num_per_page");
            if ($nums = $requestFetctQuery->num_rows) {
                $n=1;
               while (($fetch = mysqli_fetch_array($requestFetctQuery))) {
                $img = $fetch['prod_image'];
                $name = $fetch['prod_name'];
                $prod_id = $fetch['prod_id'];

                $quantity = $fetch['Quantity'];

                $price_unity = $fetch['price_unity'];
                //    data allow modify =
                $sendRequest = "upd_button".$requestFetctQuery->num_rows;
                $open_requestForm = "openRequestForm".$requestFetctQuery->num_rows;

                $approve = "approve_".$n;

                ?>
                <div class="row m-0 p-0 border-bottom">
                    <div class="col-2 p-0">
                        <img src="<?=$img?>" alt="No image on this product" class="img-thumbnail rounded-circle" style="max-height: 75px;max-width: 75px;">
                    </div>
                    <div class="col-6 py-3">
                        <span class="text-secondary h6 py-3"> <?=$name?></span>
                    </div>
                    <div class="col-3 py-3">
                           
                        <form method="POST">
                            <input type="text" name="product_id"  value="<?=$prod_id?>" style='display: none;'>
                            <input type="text" name="product_quantity" value="<?=$quantity?>" style='display: none;'>
                        <button type="submit" name="<?=$approve?>" class="btn btn-sm btn-outline-primary"><span class="fa fa-share-o"></span> Approve</button>
                        </form>


                        
                     <!-- approve php form codes--> 
                       <?php
                            if (isset($_POST[$approve])) {
                                $product_id = $_POST['product_id'];
                                $product_quantity = $_POST['product_quantity'];

                                $selectApproved = $con->query("SELECT * from approved where prod_id ='$product_id'");
                                if ($selectApproved->num_rows<=0) {
                                    # insert new...
                                    $insertapproved = $con->query("INSERT INTO approved values('$product_id','$product_quantity')");
                                    if ($insertapproved) {
                                        $deleteRequestedIt = $con->query("DELETE from request where prod_id ='$product_id'");
                                        if ($deleteRequestedIt) {
                                            // code...
                                            ?>
                                       <script type="text/javascript">alert("Record approved Success");window.location.href='?';</script>
                                    <?php
                                        }
                                    }
                                    
                                }
                                else{
                                  # update existed...
                                    $fetchOldQuantityApprove = mysqli_fetch_array($selectApproved);
                                    $oldQuantityApprove = $fetchOldQuantityApprove['Quantity'];
                                    $new_quantity_Approve = $oldQuantityApprove + $product_quantity;

                                    $appendToApproved = $con->query("UPDATE approved SET Quantity='$new_quantity_Approve' where prod_id ='$product_id'");
                                    if ($appendToApproved) {
                                        $deleteRequestedIt = $con->query("DELETE from request where prod_id ='$product_id'");
                                        if ($deleteRequestedIt) {
                                            // code...
                                            ?>
                                       <script type="text/javascript">alert("Record approved Success");window.location.href='?';</script>
                                    <?php
                                        }
                                    }

                                }
                              }
                            ?>
                     <!-- end of php approve Codes -->
                     
                        </div>
                       

                    </div>
                
                <?php
                $n++;
               }
            }
            ?>

            <?php 

            $requestFetctQuery = $con->query("SELECT * From products");
            $nums_total_rec = $requestFetctQuery->num_rows ;
            $total_pages = $nums_total_rec / $num_per_page ;
?>
               <div class="container-fluid">
                    <center>
                      <div class="button-group">
<?php
            if ($page>1) {
                ?>
                 <a href="?page=<?=($page-1)?>" class="btn btn-sm btn-info"><span class="fa fa-angle-left"></span> Preview</a>
                <?php
            }

for ($i=1; $i < $total_pages; $i++) { ?>
           <a href="?page=<?=$i?>" class="btn btn-sm btn-info px-3"><?=$i?></a>
           <?php
}
        
 if ($i>$page) {
                ?>
                
            <a href="?page=<?=($page+1)?>" class="btn btn-sm btn-info">Next <span class="fa fa-angle-right"></span></a>
                <?php
            }
            ?>

                      </div>
                    </center>
                </div><!-- end of button group -->
        </div>
        
        
    </div>
</div>