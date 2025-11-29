<?php
//Yabut, Clarence Matthew F. | WD-201 | DWEB

//variables
$storeName = "Urban Edge";
$currencySymbol = "₱"; 

//product array
$urbanWear = [
    [
        "id" => 1,
        "name" => "THE Urban Jacket",
        "description" => "It's a jacket... But urban style ig.",
        "price" => "1,899.00",
        "stock" => 12,
        "stock_status" => "In Stock",
        "rating" => 4.7,
        "rating_stars" => "★★★★☆",
        "image" => "jacket.png"
    ],
    [
        "id" => 2,
        "name" => "(Not Just) A Street Hoodie",
        "description" => "Plain hoodie, but marketed as urban/street wear",
        "price" => "1,299.00",
        "stock" => 18,
        "stock_status" => "In Stock",
        "rating" => 4.9,
        "rating_stars" => "★★★★★",
        "image" => "hoodie.png"
    ],
    [
        "id" => 3,
        "name" => "(NOT REGULAR) Cargo Pants",
        "description" => "Cargo pants... marketed as street fashion",
        "price" => "1,599.00",
        "stock" => 8,
        "stock_status" => "Low Stock",
        "rating" => 4.5,
        "rating_stars" => "★★★★☆",
        "image" => "cargo_pants.png"
    ],
    [
        "id" => 4,
        "name" => "IT'S A Graphic Tee",
        "description" => "Regular Graphic Tee... But in an Urban fashion shop",
        "price" => "799.00",
        "stock" => 25,
        "stock_status" => "In Stock",
        "rating" => 4.3,
        "rating_stars" => "★★★★☆",
        "image" => "tee.png"
    ],
    [
        "id" => 5,
        "name" => "Sneakers, not to be confused by Snickers bar",
        "description" => "Stock images Sneakers, but marketed as Urban wear as well",
        "price" => "2,499.00",
        "stock" => 10,
        "stock_status" => "Low Stock",
        "rating" => 4.8,
        "rating_stars" => "★★★★☆",
        "image" => "shoes.png"
    ]
];

$lastminTypejuggling = 4 + true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $storeName; ?> - Street Fits</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="graffiti-bg">
        <div class="graffiti-word word1">FASHION</div>
        <div class="graffiti-word word2">STREET</div>
        <div class="graffiti-word word3">STYLE</div>
        <div class="graffiti-word word4">URBAN</div>
        <div class="graffiti-word word5">EDGE</div>
        <div class="graffiti-word word6">VIBE</div>
        <div class="graffiti-word word7">COOL</div>
        <div class="graffiti-word word8">FRESH</div>
        <div class="graffiti-word word9">HIP</div>
        <div class="graffiti-word word10">TREND</div>
        <div class="graffiti-word word11">SWAG</div>
        <div class="graffiti-word word12">Drip</div>
        <div class="graffiti-word word13">Fit</div>
        <div class="graffiti-word word14">Gear</div>
        <div class="graffiti-word word15">Wear</div>
        <div class="graffiti-word word16">Look</div>
        <div class="graffiti-word word17">Mode</div>
        <div class="graffiti-word word18">Urban</div>
    </div>
    
    <div class="container">
        <h1><?php echo $storeName; ?></h1>
        <p class="subtitle">Overpriced Clothes because of the Label "Urban wear"</p>
        
        <!--products grid-->
        <div class="product-grid">
            
        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $urbanWear[0]["image"]; ?>" alt="<?php echo $urbanWear[0]["name"]; ?>">
            </div>
            <h3 class="product-name"><?php echo $urbanWear[0]["name"]; ?></h3>
            <p class="product-description"><?php echo $urbanWear[0]["description"]; ?></p>
            <div class="price"><?php echo $currencySymbol . $urbanWear[0]["price"]; ?></div>
            <span class="stock in-stock">
                <?php echo $urbanWear[0]["stock"] . " (" . $urbanWear[0]["stock_status"] . ")"; ?>
            </span>
            <div class="rating"><?php echo $urbanWear[0]["rating_stars"]; ?></div>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $urbanWear[1]["image"]; ?>" alt="<?php echo $urbanWear[1]["name"]; ?>">
            </div>
            <h3 class="product-name"><?php echo $urbanWear[1]["name"]; ?></h3>
            <p class="product-description"><?php echo $urbanWear[1]["description"]; ?></p>
            <div class="price"><?php echo $currencySymbol . $urbanWear[1]["price"]; ?></div>
            <span class="stock in-stock">
                <?php echo $urbanWear[1]["stock"] . " (" . $urbanWear[1]["stock_status"] . ")"; ?>
            </span>
            <div class="rating"><?php echo $urbanWear[1]["rating_stars"]; ?></div>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $urbanWear[2]["image"]; ?>" alt="<?php echo $urbanWear[2]["name"]; ?>">
            </div>
            <h3 class="product-name"><?php echo $urbanWear[2]["name"]; ?></h3>
            <p class="product-description"><?php echo $urbanWear[2]["description"]; ?></p>
            <div class="price"><?php echo $currencySymbol . $urbanWear[2]["price"]; ?></div>
            <span class="stock low-stock">
                <?php echo $urbanWear[2]["stock"] . " (" . $urbanWear[2]["stock_status"] . ")"; ?>
            </span>
            <div class="rating"><?php echo $urbanWear[2]["rating_stars"]; ?></div>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $urbanWear[3]["image"]; ?>" alt="<?php echo $urbanWear[3]["name"]; ?>">
            </div>
            <h3 class="product-name"><?php echo $urbanWear[3]["name"]; ?></h3>
            <p class="product-description"><?php echo $urbanWear[3]["description"]; ?></p>
            <div class="price"><?php echo $currencySymbol . $urbanWear[3]["price"]; ?></div>
            <span class="stock in-stock">
                <?php echo $urbanWear[3]["stock"] . " (" . $urbanWear[3]["stock_status"] . ")"; ?>
            </span>
            <div class="rating"><?php echo $urbanWear[3]["rating_stars"]; ?></div>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="<?php echo $urbanWear[4]["image"]; ?>" alt="<?php echo $urbanWear[4]["name"]; ?>">
            </div>
            <h3 class="product-name"><?php echo $urbanWear[4]["name"]; ?></h3>
            <p class="product-description"><?php echo $urbanWear[4]["description"]; ?></p>
            <div class="price"><?php echo $currencySymbol . $urbanWear[4]["price"]; ?></div>
            <span class="stock low-stock">
                <?php echo $urbanWear[4]["stock"] . " (" . $urbanWear[4]["stock_status"] . ")"; ?>
            </span>
            <div class="rating"><?php echo $urbanWear[4]["rating_stars"]; ?></div>
            <button>Add to Cart</button>
        </div>
    </div>
        
        <footer>
            <p>&copy; <?php echo date("Y"); ?> <?php echo $storeName; ?>. All rights reserved.</p>
            <p>Images used found from freepik.com</p>
            <p>By: Yabut, Clarence Matthew F. | WD - 201</p>
            <p>Showing <?php echo ($lastminTypejuggling); ?> items</p>
        </footer>
    </div>
</body>
</html>
