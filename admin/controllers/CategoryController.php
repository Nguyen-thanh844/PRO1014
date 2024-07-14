<?php


function categoryAll()
{
    $title = 'Danh sách danh mục';
    $view = 'categories/index';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';

    $categories = listAll('categories');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryAdd()
{
    $title = 'Thêm mới danh mục';
    $view = 'categories/create';

    if (!empty($_POST)) {
        // debug($_POST);
        $data = [
            'name' => $_POST['name'],
        ];
        insert('categories', $data);
        header('Location: ' . BASE_URL_ADMIN . '?act=category');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function categoryEdit($id)
{
    $category = showOne('categories', $id);
    if (empty($category)) {
        e404();
    }
    $title = 'Cập nhật danh mục:' . $category['name'];
    $view = 'categories/update';
    if (!empty($_POST)) {
        // debug($_POST);
        $data = [
            'name' => $_POST['name'],
        ];
        update('categories', $id, $data);
        header('Location: ' . BASE_URL_ADMIN . '?act=category&id' . $id);
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
function categoryDelete($id)
{
    deleteuser('categories', $id);
    header('Location: ' . BASE_URL_ADMIN . '?act=category');
    exit();
}
