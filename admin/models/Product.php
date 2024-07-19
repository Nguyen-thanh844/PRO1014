
// if (!function_exists('listAllProduct')) {
//     function listAllProduct()
//     {
//         try {
//             $sql = "SELECT 
//                 p.product_id  as p_product_id ,
//                 p.category_id as p_category_id,
//                 p.product_name as p_product_name,
//                 p.image as p_image,
//                 p.price as p_price,
//                 p.so_luong as p_so_luong

//             FROM products  as p
//             INNER JOIN categories as c.id = p.category_id
//             ORDER BY p_product_id DESC;";
//             $stmt = $GLOBALS['conn']->prepare($sql);


//             $stmt->execute();
//             return $stmt->fetchAll();
//         } catch (\Exception $e) {
//             debug($e); //
//         }
//     }
// }
// if (!function_exists('getcategory')) {
//     function getcategory($productID)
//     {
//         try {
//             $sql = "SELECT 
//                 t.id   t_id ,
               
//                 t.name  t_name,
               

//             FROM categories  as t
//             INNER JOIN categories as pt ON t.id = pt.category_id
//             WHERE pt.product_id = :product_id ;";
//             $stmt = $GLOBALS['conn']->prepare($sql);
//             $stmt->bindParam(':product_id',$productID);

//             $stmt->execute();
//             return $stmt->fetchAll();
//         } catch (\Exception $e) {
//             debug($e); //
//         }
//     }
// }
