<div class="container-fluid p-0 "  id="dashboardHomeContainer" style="display:none">
    <div class="container-fluid row m-0 p-0">
        <?php
        $selProductAllowed = $con->query("SELECT * from products,approved where products.prod_id=approved.prod_id");
        if ($selProductAllowed->num_rows>0) {

            ?>
                 <div class="container text-center h5 border-bottom">
                     
                    product on the market are: 
                    <span class="text-info"> <?=$selProductAllowed->num_rows?>(product type)</span>
                 </div>
                 <div class="text-secondary h4 shadow container-fluid px-4 py-1 text-start">
                     User clients overView
                 </div>
            <?php
             $s = 1;
            while($fetchMarketableProd = mysqli_fetch_array($selProductAllowed)){
                $prodName = $fetchMarketableProd['prod_name'];
                $unitPrice = $fetchMarketableProd['price_unity'];
                $prodImage = $fetchMarketableProd['prod_image'];
                $prodDescrip = $fetchMarketableProd['ProductDesc'];
                $prodQuantity = $fetchMarketableProd['Quantity'];

                ?>
                     
            <div class="col-sm-12 col-md-4 col-lg-3 my-2">
                <div class="container shadow p-0 card" style="min-height: 410px">
                <img src="<?=$prodImage?>" class=" img-fluid" alt="Cinque Terre" style="border-top-left-radius:5px;border-top-right-radius:5px; min-height: 250px;max-height: 250px;">
                <div class="label px-2">
                    <!-- product basic details -->
                    <div class="row m-o p-0">
                        <div class="col-12">
                            <div class="py-2 border-bottom text-secondary small">product information</div>
                        
                        </div>
                        <div class="col-6">
                            <span class="text-info h6">Product:</span>
                            <br>
                            <span class="text-secondary"><?=$prodName?></span>
                        </div>
                        <div class="col-6">
                           <span class="text-info h6">price per one:</span>
                            <br>
                            <span class="text-secondary"><?=$unitPrice?> <span style="font-family:cursive;color: indianred;">Frw</span></span>
                        </div>
                    </div>
                    <!-- buy and read more -->
                    <div class="m-0 p-0 modal-header my-2">
                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.querySelector('#more_<?=$s?>').style.display='block'">
                            <span class="fa fa-eye"></span> Read more...
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-primary" disabled>
                            <span class="fa fa-shopping-cart"></span> Buy
                        </button>
                        
                    </div>
                    <!-- more contents -->
                    <div class="container-fluid fixed-top" id="more_<?=$s?>" style="background-color: rgba(0, 0, 0, 0.6);height: 100%;display: none;">
                        <div class="container-fluid text-start">
                            <button type="button" class="btn btn-sm h3 m-3 btn-outline-danger"  onclick="document.querySelector('#more_<?=$s?>').style.display='none'">
                                <span class="h1">&times;</span>
                            </button>
                        </div>
                        <div class="container my-4 card">
                            <div class="text-info h5">More details...</div>
                            <hr>
                            <div class="row m-0 p-0">
                                <div class="col-lg-6 col-md-6 col-sm-10">
                                    <img src="<?=$prodImage?>" class=" img-fluid" alt="Cinque Terre" style="border-top-left-radius:5px;border-top-right-radius:5px; min-height: 400px;max-height: 400px;">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-10">
                                    <span class="text-secondary h6">P/Name:</span> 
                                    <span class="text-info h6"><?=$prodName?></span>
                                    <hr>
                                    <span class="text-secondary h6">price/Per:</span> 
                                    <span class="text-info h6"><?=$unitPrice?> <span style="font-family:cursive;color: indianred;">Frw</span></span>
                                    <hr>
                                    <span class="text-secondary h6">Total Quantity:</span> 
                                    <span class="text-info h6"><?=$prodQuantity?></span>
                                    <hr>
                                    <span class="text-secondary h6">Product Description:</span> 
                                    <div class="text-secondary h6 container my-2 py-2 rounded shadow border"><?=$prodDescrip?></div>
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of read more contents -->
                </div>
                </div>
            </div>

                <?php
                $s++;
            }
        }
        else{
            ?>
            <div class="card p-0 shadow container my-4">
                <div class="container-fluid bg-dark text-light text-center h5 py-2">
                  <span class="fa fa-bell"></span>  Message Notification
                </div>
                <div class="text-secondary py-4">No Products on the Market</div>
            </div>
            <?php
        }
        ?>
    </div>
</div>