<?php
$colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');
function print_rand_table($cols, $rows)
{
    global $colors;
    echo '<table>';
    for ($i = 0; $i < $rows; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $cols; $j++) {
            echo '<td bgcolor=' . $colors[rand(0, 6)] . '>' . rand(0, 120) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

<?php
print_rand_table(10, 20);
?>