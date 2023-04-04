<?php
include("../includes/db_connection.php");

$qSelect = "SELECT * FROM $dbDatabase .`products` WHERE `DateArchived` IS NULL ORDER BY `ProductId` ASC"; // query for selecting record
$eSelect = mysqli_query($dbConnection, $qSelect); // executing the query

if ($eSelect == true) {
    $sHtml = "";
    while ($rows = mysqli_fetch_array($eSelect)) {
        $price = $rows['ProductPrice'];
        $priceFormat = number_format($price);

        $sHtml .= '<div class="card-attr">
                <div class="item-img-cont">
                <div class="item-img-cont"><img class="item-img-main" src="/activity_website/admin/listing/product_img/'.$rows['ProductPhoto'].'"></div>
                </div>
                <div class=" item-inf-cont">
                <div class="item-inf-tex-cont">
                    <p class="item-name txt-light-inv">
                    '.$rows['ProductName'].'
                    </p>
                </div>
                <div class="item-inf-tex-cont mb-0 pt-0">
                    <p class="item-price">₱ '.$priceFormat.'</p>
                </div>
                <div class="item-inf-tex-cont mt-0 pt-0">
                    <p class="item-count">'.$rows['ProductQuantity'].' pieces in stock.</p>
                </div>
                <div class="item-inf-tex-cont mt-0 pt-0" id="cartDiv">
                <button onclick="addToCart('.$rows['ProductId'].')">Add to Cart</button>
                </div>
                </div>
                </div>';
    }
    echo $sHtml;
} else {
    echo "Failed to process, please call system administrator!";
}
