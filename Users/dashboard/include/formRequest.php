
                        <!-- request form here -->
                        <div class="container-fluid fixed-top p-0 bg-secondary" id="requestContainer_<?=$n?>"  style="height:100%;overflow:scroll;display:none">
                            <div class="row m-0 p-0 bg-dark">
                               <div class="col-3">
                                <button type="button" class="btn btn-outline-light border-0 rounded-0"><span class="fa fa-home"></span> Home</button>
                                <button type="button" class="btn btn-outline-light border-0 rounded-0 btn-sm p-1"  onclick=" document.querySelector('#requestContainer_<?=$n?>').style.display='none';"><span class="fa fa-close p-1 rounded btn btn-sm btn-dark"></span> exit</button>
                               </div>
                               <div class="col h2 text-light">
                                 Coordinator Request
                               </div>
                            </div>
                             <!-- before request header -->
                               <div class="row m-0 my-5">
                                <div class="container">
                                    <div class="row m-0 p-0">
                                        
                                    <div class="col-lg-5 col-md-6 col-sm-12 card my-5 p-0 mx-2">
                                        <div class=" p-0 rounded-pill">
                                            <img src="<?=$img?>" alt="No image on this product" class="img-thumbnail rounded-ill" style="max-height:300px; width:auto;">
                                            <div class="label p-2 h6 text-secondary">
                                                image of  <span class="text-info"><?=$name?></span>
                                                <hr>
                                                is this product you want to request , if it is make request by following the system instructions
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 card my-5 p-0 border-0">
                                        <div class="container-fluid bg-dark text-light h6 py-2">Request new product </div>
                                            <form action="" method="post">
                                                <div class="container col-11">
                                                    <input type="text" name="ProductId" class="form-control form-control-sm" value="<?=$prod_id?>"  hidden>
                                                    <div class="container-fluid my-2">
                                                        <label for="pname" class="text-secondary">Product Name</label>
                                                        <input type="text" name="ProductName" class="form-control form-control-sm" id="pname" value="<?=$name?>" disabled readonly>
                                                    </div>
                                                    <div class="container-fluid my-2">
                                                        <label for="prodQuantity" class="text-secondary" required>Quantity</label>
                                                        <input type="number" min="1" name="ProductQuantity" required class="form-control form-control-sm"paceholder="Enter Number of product" id="prodUnity">
                                                    </div>
                                                    <div class="container-fluid my-2">
                                                        <label for="prodUnity" class="text-secondary">Price/Unit</label>
                                                        <input type="number" min="1" name="ProductPrice" value="<?=$price_unity?>" disabled readonly class="form-control form-control-sm"paceholder="Enter product Price" id="prodUnity">
                                                    </div>
                                                </div>
                                                <div class="container-fluid my-2 px-5">
                                                    <button type="submit" name="<?=$sendRequest?>" class="btn btn-sm btn-outline-info float-start col-12">Request</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               <!-- end of request header -->
                               <!-- request form -->
                               
                            </div> <!-- End request form here -->