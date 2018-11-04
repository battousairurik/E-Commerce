
<?php include_once('server.php') ?>
<?php include_once('db.php') ?>

<?php
$sql = "SELECT * FROM categories;";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows( $result);
if ( $resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $categories = <<<DELIMETER
               <a href='category.php?id={$row['categories_id']}' class='list-group-item'>{$row['categories_title']}</a>
DELIMETER;
        echo $categories;
    }
}
