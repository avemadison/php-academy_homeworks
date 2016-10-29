<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по основам PHP</title>
</head>
<body>

<h1>Задачи по основам PHP</h1>

<p><b>Все задания должны выполняться в папке php_basics_tasks, в отдельных файлах, которые должны называться по номеру задания, например, "17.php".<br>
Если задание требует создания нескольких файлов - то такие файлы необходимо размещать в папке, название которой равно номеру задания.</b>
</p>

<p>
<b>Вопросы можно задавать на <a href="http://ask.php-academy.kiev.ua/" target="_blank">http://ask.php-academy.kiev.ua/</a>.</b>
</p>

<hr>

<p>1. Создайте переменную name и присвойте ей значение, содержащее ваше имя, например "Иннокентий".</p>
<a href="1.php">Go</a>

<p>2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.</p>
<a href="2.php">Go</a>

<p>3. Выведите с помощью echo фразу "Меня зовут: %ваше_имя%", например: "Меня зовут: Иннокентий".</p>
<a href="3.php">Go</a>

<p>4. Выведите фразу "Мне %ваш_возраст% лет", например: "Мне 20 лет".</p>
<a href="4.php">Go</a>

<p>5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).</p>
<a href="5.php">Go</a>

<p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.</p>
<a href="6.php">Go</a>

<p>7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</p>
<a href="7.php">Go</a>

<p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.</p>
<a href="8.php">Go</a>

<p>9. Создайте переменную day и присвойте ей произвольное числовое значение.</p>

<p>10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</p>

<p>11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</p>

<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>
<a href="9-12.php">Go</a>

<p>13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>
<a href="13.php">Go</a>
    
<p>14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).</p>
<a href="14.php">Go</a>
    
<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>
<a href="15.php">Go</a>
    
<p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>
<a href="16.php">Go</a>
    
<p>17. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите "равны" или "не равны".</p>
<a href="17.php">Go</a>

<p>18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".</p>
<a href="18.php">Go</a>
    
<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>
<a href="19.php">Go</a>

<p>20. Приведите число 20 к типу boolean. Объясните результат.</p>
<a href="20.php">Go</a>
    
<p>21. Приведите число 0 к типу boolean. Объясните результат.</p>
<a href="21.php">Go</a>
    
<p>22. Приведите число -20 к типу boolean. Объясните результат.</p>
<a href="22.php">Go</a>
    
<p>23. Напишите 3 строки, используя три разные функции для вывода текста.</p>
<a href="23.php">Go</a>

<p>24. Создайте в файле 3 комментария тремя разными типами.</p>
<a href="24.php">Go</a>

<p>25. Приведите пример, чем отличается &lt;?php от &lt;?=.</p>
<a href="25.php">Go</a>
    
<p>26. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант.</p>
<a href="26.php">Go</a>

<p>27. Выполните скрипт по задаче №4 из консоли (необходимо запустить php скрипт по задаче №4 из командной строки).</p>
<a href="27.php">Go</a>
<hr>

<p>
<b>&copy; 2014-2016 <a href="http://php-academy.kiev.ua/" target="_blank">PHP Academy</a></b>
</p>

</body>
</html>
