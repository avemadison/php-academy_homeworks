<!-- Циклы while и for-->
<?php
/*13.Вывести таблицу умножения*/
echo  '<table width="50%" cellspacing="0" cellpadding="4" border= "1" bgcolor="navy">';
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j++) {
        $res = $i * $j;
        echo "<td>$res </td>";
    }  echo '<br>';
    echo "</tr>";
}
echo '</table>';