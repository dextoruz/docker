<html>
    <head>
        <title>Online Website</title>
    </head>

    <body>
        <h1>Welcome to the gaming store</h1>
        <ul>
            <?php 
                $json =file_get_contents("http://product-services");
                $obj = json_decode($json);

                $products = $obj->products;

                foreach($products as $product){
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>