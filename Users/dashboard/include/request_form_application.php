<?php
                                            if (isset($_POST[$sendRequest])) {
                                               $ProductId = $_POST['ProductId'];
                                               $ProductQuantity = $_POST['ProductQuantity'];

                                               $queryreq = $con->query("SELECT * from request where prod_id='$ProductId'");
                                               if ($queryreq->num_rows<=0) {
                                                $insertData=$con->query("INSERT into request values('$ProductId','$ProductQuantity')");
                                                if($insertData){
                                                    ?><script>alert("Request sent successfull")</script> <?php
                                                }
                                               }
                                               else{
                                                $fetchrequest1 = mysqli_fetch_array($queryreq);
                                                $db_request_quantity =  $fetchrequest1['Quantity'];
                                                $new_quantity_now = $db_request_quantity+$ProductQuantity;
                                                echo"$db_request_quantity";
                                                $newQuantity_update = $con->query("UPDATE request set Quantity='$new_quantity_now' where prod_id='$ProductId'");
                                                if($newQuantity_update){
                                                    ?><script>alert("Request sent successfull")</script> <?php
                                                }
                                               }
                                            }
                                            ?> 