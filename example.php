<?php
                                          $conn =include("database.php");
                                          if($conn){
                                            echo ("welcome to database") ;
                                          }
                                          else{
                                            echo "something happend!";
                                          }
                                          ?>