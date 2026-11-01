<?php
$products = [
    ["name" => "Laptop", "price" => 30000000, "stock" => 2 , "category" => "دیجیتال"],
    ["name" => "Mouse", "price" => 500000, "stock" => 0 , "category" => "دیجیتال"],
    ["name" => "Keyboard", "price" => 1200000, "stock" => 5 , "category" => "دیجیتال"]
];
$availableProduct = 0;
    foreach($products as $product){
            echo " نام : " . $product["name"] . " | قیمت : " . $product["price"] . " | موجودی : " . ($product["stock"] == 0 ? "ناموجود" : $product["stock"]) . " | دسته بندی : " . $product["category"] ;
        if($product["price"]>10000000){echo "| گران";};
        echo "<br>";
        if($product["stock"]>0){
            $availableProduct++;
        }
    }
echo "تعداد محصولات موجود فروشگاه : " . $availableProduct;
?>‍