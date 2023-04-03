<?php

session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /activity_website/login.php');
    }else{
        $sUsername = $_SESSION['username'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/activity_website/assets/css/styles.css">
    <title>Document</title>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div id="navBarDiv" class="container-fluid">
            <a class="navbar-brand" href="#">DJS Merch</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" id="changePass" href="#!">Change Password</a></li>
                            <li><a class="dropdown-item" href="/activity_website/logout.php" id="logoutClient">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</head>

<body>
    <?php include("../activity_website/includes/pass_modal.php");?>

    <h2>WELCOME <?php echo $sUsername;?>!</h2>

    <section class="content-cards-container">
        <div class="card-cont-attr">
            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

            <a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                    <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                    <div class="item-inf-tex-cont">
                        <p class="item-name txt-light-inv">
                            Sample T-shirt
                        </p>
                    </div>
                    <div class="item-inf-tex-cont mb-0 pt-0">
                        <p class="item-price">$69</p>
                    </div>
                    <div class="item-inf-tex-cont mt-0 pt-0">
                        <p class="item-sold-count">668 Items Left</p>
                    </div>
                </div>
            </a>

        </div>
        
    </section>

</body>

</html>
<script src="/activity_website/assets/js/jquery-3.6.3.min.js"></script>
<script src="/activity_website/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>