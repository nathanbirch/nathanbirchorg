<?php
function add_blogEntry($blog_ID, $user_ID, $blog_title, $blog_entry, $creation_date, $user_IPv4) {
    global $db;
    $query = 'INSERT INTO BLOGDATA
                 (blogID, userID, blogTitle, blogEntry, creationDate, userIPv4)
              VALUES
                 (:blog_ID, :user_ID, :blog_title, :blog_entry, :creation_date, :user_IPv4)';
    $statement = $db->prepare($query);
    $statement->bindValue(':blog_ID', $blog_ID);
    $statement->bindValue(':user_ID', $user_ID);
    $statement->bindValue(':blog_title', $blog_title);
    $statement->bindValue(':blog_entry', $blog_entry);
    $statement->bindValue(':creation_date', $creation_date);
    $statement->bindValue(':user_IPv4', $user_IPv4);
    $statement->execute();
    $statement->closeCursor();
}




function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.categoryID = :category_id
              ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}
function edit_product($category_id, $code, $name, $price, $product_id) {
    global $db;
    $query = 'UPDATE products
                SET categoryID=:category_id, productCode=:product_code,
                    productName=:product_name, listPrice=:list_price
                WHERE productID=:product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':product_code', $code);
    $statement->bindValue(':product_name', $name);
    $statement->bindValue(':list_price', $price);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}
?>