<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Stars and Bloom  - Settings</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-mini-finance.css" rel="stylesheet">

<!--

Tooplate 2135 Stars and Bloom 

https://www.tooplate.com/view/2135-mini-finance

Bootstrap 5 Dashboard Admin Template

-->
    </head>
    
    <body>
        <header class="navbar sticky-top flex-md-nowrap">
            

          

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">Login</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            <div class="custom-block bg-white">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">Please Login here</button>
                                    </li>

                                    
                                </ul>

                                <style>
                                    .stars-error{
                                        color: red;
                                        width: 100%;
                                        text-align: center;
                                        margin-bottom: 15px;
                                    
                                    }

                                </style>

                                <?php

                                    if(isset($error_msg)){
                                        echo "<div class='stars-error'>". $error_msg . "</div>";
                                    }

                                    if(isset($error)){
                                        echo "<div class='stars-error'>". $error . "</div";
                                    }

                                    if(isset($admin_error)){
                                        echo "<div class= 'stars-error'>". $admin_error. "</div>";
                                    }
                                ?>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <form class="custom-form profile-form" action="proc-login.php" method="post" role="form">

                                            <input class="form-control" type="text" name="user" id="profile-name" placeholder="Username">

                                            <input class="form-control" type="password" name="pass" id="profile-email" placeholder="Password">

                                      

                                            <div class="d-flex">
                                                
                                                <button type="submit" class="form-control ms-2">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            
                        </div>
                    </div>

                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-12 col-12">
                                    <p class="copyright-text">Copyright © Valentine Backend
                                   </p>
                                </div>

                            </div>
                        </div>
                    </footer>
                </main>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>