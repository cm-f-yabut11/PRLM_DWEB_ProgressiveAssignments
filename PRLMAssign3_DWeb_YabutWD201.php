<?php
declare(strict_types=1);

//Yabut, Clarence Matthew F. | WD-201 | DWEB

$storeName = "Urban Edge";
$currencySymbol = "₱";

$urbanWear = [
    ["id"=>1,"name"=>"THE Urban Jacket","description"=>"It's a jacket... But urban style ig.","price"=>"1,899.00","stock"=>12,"stock_status"=>"In Stock","rating"=>4.7,"rating_stars"=>"★★★★☆","image"=>"jacket.png"],
    ["id"=>2,"name"=>"(Not Just) A Street Hoodie","description"=>"Plain hoodie, but marketed as urban/street wear","price"=>"1,299.00","stock"=>18,"stock_status"=>"In Stock","rating"=>4.9,"rating_stars"=>"★★★★★","image"=>"hoodie.png"],
    ["id"=>3,"name"=>"(NOT REGULAR) Cargo Pants","description"=>"Cargo pants... marketed as street fashion","price"=>"1,599.00","stock"=>8,"stock_status"=>"Low Stock","rating"=>4.5,"rating_stars"=>"★★★★☆","image"=>"cargo_pants.png"],
    ["id"=>4,"name"=>"IT'S A Graphic Tee","description"=>"Regular Graphic Tee... But in an Urban fashion shop","price"=>"799.00","stock"=>25,"stock_status"=>"In Stock","rating"=>4.3,"rating_stars"=>"★★★★☆","image"=>"tee.png"],
    ["id"=>5,"name"=>"Sneakers, not to be confused by Snickers bar","description"=>"Stock images Sneakers, but marketed as Urban wear as well","price"=>"2,499.00","stock"=>10,"stock_status"=>"Low Stock","rating"=>4.8,"rating_stars"=>"★★★★☆","image"=>"shoes.png"],
    ["id"=>6,"name"=>"Fake Chain, but still Urban","description"=>"A fake chain, but also overpriced","price"=>"1,499.00","stock"=>14,"stock_status"=>"Low Stock","rating"=>4.8,"rating_stars"=>"★★★★☆","image"=>"necklace.png"],
    ["id"=>7,"name"=>"BRACELET (STILL URBAN)","description"=>"A bracelet... with an Urban label","price"=>"999.00","stock"=>30,"stock_status"=>"In Stock","rating"=>4.3,"rating_stars"=>"★★★★☆","image"=>"bracelet.png"],
    ["id"=>8,"name"=>"Ring","description"=>"Just a ring. Not even Urban.","price"=>"50.00","stock"=>3,"stock_status"=>"Low Stock","rating"=>4.8,"rating_stars"=>"★★★★☆","image"=>"ring.png"]
];

$lastminTypejuggling = 4 + true;

$taxRate = 12;
global $taxRate;

$products = [
    "THE Urban Jacket" => ["price"=>1899, "stock"=>12],
    "(Not Just) A Street Hoodie" => ["price"=>1299, "stock"=>18],
    "(NOT REGULAR) Cargo Pants" => ["price"=>1599, "stock"=>8],
    "IT'S A Graphic Tee" => ["price"=>799, "stock"=>25],
    "Sneakers, not to be confused by Snickers bar" => ["price"=>2499, "stock"=>10],
    "Fake Chain, but still Urban" => ["price"=>1499, "stock"=>14],
    "BRACELET (STILL URBAN)" => ["price"=>999, "stock"=>30],
    "Ring" => ["price"=>50, "stock"=>3]
];

function get_reorder_message(int $stock): string {
    return $stock < 10 ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $taxRate = 0): float {
    global $taxRate;
    return ($price * $qty) * ($taxRate / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $storeName; ?> - Street Fits</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body class="minimal-urban-bg">
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

        <div class="product-grid">
            <?php foreach ($urbanWear as $product): ?>
                <?php $stockClass = $product["stock_status"] == "In Stock" ? "in-stock" : ($product["stock_status"] == "Low Stock" ? "low-stock" : "out-of-stock"); ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $product["image"]; ?>" alt="<?php echo $product["name"]; ?>">
                    </div>
                    <h3 class="product-name"><?php echo $product["name"]; ?></h3>
                    <p class="product-description"><?php echo $product["description"]; ?></p>
                    <div class="price"><?php echo $currencySymbol . $product["price"]; ?></div>
                    <span class="stock <?php echo $stockClass; ?>">
                        <?php echo $product["stock"] . " (" . $product["stock_status"] . ")"; ?>
                    </span>
                    <div class="rating"><?php echo $product["rating_stars"]; ?></div>
                    <button>Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>

        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Reorder</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>
            <?php foreach ($products as $product_name => $data): ?>
                <tr>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $data["stock"]; ?></td>
                    <td><?php echo get_reorder_message($data["stock"]); ?></td>
                    <td><?php echo "₱" . number_format(get_total_value($data["price"], $data["stock"]), 2); ?></td>
                    <td><?php echo "₱" . number_format(get_tax_due($data["price"], $data["stock"], $taxRate), 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php include "footer.php"; ?>
    </div>
</body>
</html>
