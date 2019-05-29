<!DOCTYPE html>
 <html>
    <head>
  <?php include 'header.php' ?>
    </head>
    <body>
        <h1><?= "TMNT Store" ?></h1>
        
        <?php
        for($i = 0; $i< 10; $i++){
            jackUpPricing(rand(20, 30), rand(70,80));
            echo "<br /><br />";
        }
        
        function jackUpPricing($vatLevel2, $vatLevel3){
        $product = "Raphael Costume";
        $price = rand(1,99) + rand(0,99) / 100;
        $taxRate1 = 0.0825;
        $taxRate2 = 0.9000;
        $taxRate3 = 2.000;
        $vatLevel2 = 30.0;
        $vatLevel3 = 80.0;
        }
        
        echo "<div> \"$product\" </div>";
        echo "<div> $$price </div>";
        echo "<div>  " . $price * $taxRate . " </div>";
        
        $taxRate = 0;

        if($price >= $vatLevel2){
            $taxRate = $taxRate2;
        }
        else if($price <= $vatLevel2){
            $taxRate = $taxRate2;
        }
        else{
            $taxRate = $taxRate1;
        }

        echo "<div> Tax Rate: $$taxRate </div>";
        echo "<div> Tax: $" .  (1 + $taxRate)
        ?>

        
    </body>
 </html>