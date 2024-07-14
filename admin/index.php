<?php

//require file commons
require_once '../commons/env.php';
require_once '../commons/helper.php';
require_once '../commons/connect-db.php';
require_once '../commons/model.php';
//require file trong controllers và models
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

//điều hướng
$act = $_GET['act'] ?? '/';

 match ($act) {
    '/' => dashboard(),


    //user
    'users' => userListAll(),
    'users-detail' => userShowOne($_GET['id']),
    'users-create' => userCreate(),
    'users-update' => userUpdate($_GET['id']),
    'users-delete' => userDelete($_GET['id']),


    // CRUD Products
    'products' => productListAlls(),
    'product-detail' => productShowOnes($_GET['product_id']),
    'product-create' => productCreates(),
    'product-update' => productUpdates($_GET['product_id']),
    'product-delete' => productDeletes($_GET['product_id']),
    
    //category
    'category' => categoryAll(),
    'category-create' => categoryAdd(),
    'category-update' => categoryEdit($_GET['id']),
    'category-delete' => categoryDelete($_GET['id']),

};
require_once '../commons/disconnect-db.php';
