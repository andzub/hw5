<?php
echo '<h2>task 1</h2>';
function drawTable($cols,$rows,$color){
echo '<table border=1>';
   for($i=1; $i<$cols; $i++){
        echo '<tr align="center">';
        for($j=1; $j<$rows; $j++){
                $rezult = $i * $j;
                echo '<td style="background-color: '.$color.'; text-align:center;">'.$rezult.'</td>';
        }
        echo '</tr>';
    }
echo '</table>';
}
echo drawTable(10,10,'blue');
echo drawTable(10,10, 'green');
echo drawTable(10,10, 'red');
echo '<hr>';

echo '<h2>task 2</h2>';
$menu = array('main', 'about', 'services', 'contucts');
function mainMenu($menu, $type = true) {
  if ($type == true) {
    foreach ($menu as $value) {
      echo '<ul><li style="list-style: none; float: left; padding: 5px; background-color: black; color: white;">'.$value.'</li></ul>';
    }
  } else {
    foreach ($menu as $value) {
      echo '<ul><li style="list-style: none;">'.$value.'</li></ul>';
    }
  }
}
echo mainMenu($menu) . '<br>';
echo mainMenu($menu, false);
echo '<hr>';

// echo '<h2>task 3</h2>';
// include 'categories_example.php';
// function treeCat($categories) {
//   if ($categories) {
//       foreach ($categories as $key => $category) {
//         if ($category->id == $category->parent_id) {
//           foreach ($variable as $key => $value) {
//
//           }
//         }
//       }
//   }
// }
// echo '<hr>';
// echo '<hr>';
// echo '<hr>';
// print_r(treeCat($categories_data));
?>
