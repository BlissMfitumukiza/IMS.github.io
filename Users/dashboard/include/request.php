<div class="container-fluid p-0" id="dashboardRequetContainer" style="display:none;">
    <div class="container-fluid bg-dark"></div>
    <div class="container ">
        <div class=" container-fluid shadow p-0 border">
            <?php
            $requestFetctQuery = $con->query("SELECT * From products");
            $num_per_page = 3 ;
            if (isset($_GET['page'])) {
                $page = $_GET['page']; 
            }
            else{
                $page = 1 ;
            }
            $start_from = ($page-1) * $num_per_page;
            $requestFetctQuery = $con->query("SELECT * From products limit $start_from,$num_per_page");
            if ($nums = $requestFetctQuery->num_rows) {
                $n=1;
               while (($fetch = mysqli_fetch_array($requestFetctQuery))) {
                $img = $fetch['prod_image'];
                $name = $fetch['prod_name'];
                $prod_id = $fetch['prod_id'];
                $price_unity = $fetch['price_unity'];
                //    data allow modify =
                $sendRequest = "upd_button".$requestFetctQuery->num_rows;
                $open_requestForm = "openRequestForm".$requestFetctQuery->num_rows;

                ?>
                <div class="row m-0 p-0 border-bottom">
                    <div class="col-2 p-0">
                        <img src="<?=$img?>" alt="No image on this product" class="img-thumbnail rounded-circle" style="max-height: 75px;max-width: 75px;">
                    </div>
                    <div class="col-6 py-3">
                        <span class="text-secondary h6 py-3"> <?=$name?></span>
                    </div>
                    <div class="col-3 py-3">
                        
                        <button  class="btn btn-sm btn-outline-primary" onclick=" document.querySelector('#requestContainer_<?=$n?>').style.display='block';"><span class="fa fa-share-o"></span> Request</button>
                        
                     <!-- request form --> 
                     <?php require'formRequest.php'?>
                        </div>
                       

                    </div>
                
                <?php
                $n++;
               }
            }
            require_once'request_form_application.php';
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

<?php
if (isset($_POST["approve_<?=$n?>"])) {
    ?>
      <script type="text/javascript">alert("user")</script>
    <?php
}

?>