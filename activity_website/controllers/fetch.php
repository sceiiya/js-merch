<?php
include("../includes/db_connection.php");

$qSelect = "SELECT * FROM $dbDatabase .`products` ORDER BY `ProductId`"; // query for selecting record
$eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

if ($eSelect == true) {
    $sHtml = "";
    while ($rows = mysqli_fetch_array($eSelect)) {

        $sHtml .= '<a class="card-attr" href="/activity_website/assets/images/">
                <div class="item-img-cont">
                <img src="/activity_website/assets/images/sampleshirt.svg" class="item-img-main" alt="...">
                </div>
                <div class=" item-inf-cont">
                <div class="item-inf-tex-cont">
                    <p class="item-name txt-light-inv">
                    "'.$rows['ProductName'].'"
                    </p>
                </div>
                <div class="item-inf-tex-cont mb-0 pt-0">
                    <p class="item-price">"'.$rows['ProductPrice'].'"</p>
                </div>
                <div class="item-inf-tex-cont mt-0 pt-0">
                    <p class="item-sold-count">"'.$rows['ProductQuantity'].'"</p>
                </div>
                 </div>
                 </a>';
    }
    echo $sHtml;
} else {
    echo "Failed to process, please call system administrator!";
}
