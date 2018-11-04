
<?php include_once('server.php') ?>
<?php include_once('db.php') ?>

<?php
$sql = "SELECT * FROM products;";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows( $result);
if ( $resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $product = <<<DELIMETER
                 <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <a href="item.php?id={$row['product_id']}"><img src="http://placehold.it/320x150" alt=""></a>
                        <div class="caption">
                            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
                            <h4><a href="product.html">{$row['product_title']}</a>
                            </h4>
                            <p>See more snippets like this online store item at
                             <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.
                             </p>
                                 <a href="#" class="btn btn-primary">Buy Now!</a> 
                                <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>

                        </div>
                    </div>
                </div>

DELIMETER;
        echo $product;
    }
}
