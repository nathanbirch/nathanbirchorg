<?php
require('database.php');
require('blog_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

if ($action == 'add_blogEntry_form') {
    $blog_title = filter_input(INPUT_GET, 'blogTitle', 
            FILTER_VALIDATE_INT);
    $blog_entry = filter_input(INPUT_GET, 'blogEntry', 
        FILTER_VALIDATE_INT);
    $user_ID = filter_input(INPUT_GET, 'userID', 
        FILTER_VALIDATE_INT);    
    $blog_ID = filter_input(INPUT_GET, 'blogID', 
        FILTER_VALIDATE_INT);    
    $creation_date = filter_input(INPUT_GET, 'creationDate', 
        FILTER_VALIDATE_INT);    
    $user_IPv4 = filter_input(INPUT_GET, 'userIPv4', 
        FILTER_VALIDATE_INT);       
    if ($blog_title == NULL || $blog_title == FALSE ||
        $blog_entry == NULL || $blog_entry == FALSE ||
        $user_ID == NULL || $user_ID == FALSE) {
        $error = "Please make sure all fields are populated.";
        include('error.php');
    } else { 
        add_blogEntry($blog_ID, $user_ID, $blog_title, $blog_entry, $creation_date, $user_IPv4);
        // header("Location: .?category_id=$category_id");
    }
} 









else if ($action == 'delete_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', 
            FILTER_VALIDATE_INT);
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE ||
            $product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id or category id.";
        include('../errors/error.php');
    } else { 
        delete_product($product_id);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('product_add.php');    
} else if ($action == 'edit_product_form') {
    $product_id = filter_input(INPUT_POST, 'product_id', 
        FILTER_VALIDATE_INT);
    $categories = get_categories();
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);    
    $product = get_product($product_id);
    include('product_edit.php');    
} else if ($action == 'add_product') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        add_product($category_id, $code, $name, $price);
        header("Location: .?category_id=$category_id");
    }
} else if ($action == 'edit_product') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
    $product_id = filter_input(INPUT_POST, 'product_id');
    if ($category_id == NULL || $category_id == FALSE || $code == NULL || 
            $name == NULL || $price == NULL || $price == FALSE || $product_id == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else { 
        edit_product($category_id, $code, $name, $price, $product_id);
        header("Location: .?category_id=$category_id");
    }
}else if ($action == 'list_categories') {
    $categories = get_categories();
    include('category_list.php');
} else if ($action == 'add_category') {
    $name = filter_input(INPUT_POST, 'name');

    // Validate inputs
    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('view/error.php');
    } else {
        add_category($name);
        header('Location: .?action=list_categories');  // display the Category List page
    }
} else if ($action == 'delete_category') {
    $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
    delete_category($category_id);
    header('Location: .?action=list_categories');      // display the Category List page
}
?>