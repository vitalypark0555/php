# php

Решения практических задач по основам PHP.
Для проверки поместить в xampp/htdocs.

Основы PHP.
1. С помощью оператора echo выведите на страницу:
a. Строковую переменную
b. Целочисленную переменную
c. Переменную дробного типа
d. константу
e. число в восьмеричной нотации
f. число в шестнадцатеричной нотации


2. Повторите вывод, заключив переменные в двойные кавычки (“). Посмотрите, что
получится.
Повторите вывод, заключив переменные в одинарные кавычки (‘). Посмотрите, что
получится.


3. Выведите в восьмеричной системе числа от 10 до 20 (echo 010; echo 011; echo 012; …
echo 019; echo 020;) Объясните результат.

4. Выведите 16 чисел в шестнадцатеричной системе, так чтобы в браузере отобразилось
«0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15»


5. Выведите на экран любое четверостишие. Пример:
”Я помню чудное мгновенье:
Передо мной явилась ты,
Как мимолетное виденье,
Как гений чистой красоты.”
А.С. Пушкин
Для каждой новой строки используйте отдельный оператор echo. Каждая строчка
должна быть отдельной строковой переменной. Также необходимо использовать
переводы строки. После четверостишия поставьте инициалы автора и выделите их
курсивом.


6. Выполните эти же действия, с помощью одного оператора echo.

7. Попробуйте в выражении использовать разные типы, например, сложите число «10» и
строку «привет». Что получится? Объясните результат.


8. Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает
значение true, в каких – false? Для этого напишите скрипт, который выводит значения
операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor
$a для любых значений $a?

Ветвления и функции
1. Объявите в начале скрипта две целочисленных переменных $a и $b, начальные
значения определите с помощью констант. Написать скрипт:
a. если $a и $b положительные – выведите их сумму.
b. если $а и $b отрицательные – выведите из разность.
c. если $а и $b разных знаков – выведите их произведение.
Ноль можно считать положительным числом.


2. Выведите большее из чисел используя тернарный оператор.


3. Присвойте $а значение в промежутке [0..9]. С помощью оператора switch
организуйте вывод чисел от $a до 9;

4. Реализуйте все арифметические операции в виде функций с двумя параметрами.

5. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
$operation), где $arg1, $arg2 – значения аргументов. $operation – строка с названием
операции. В зависимости от переданного значения операции выполните одну из
арифметических операций (используйте функции из пункта 4) и верните
полученное значение (используйте switch).

6. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
function power($val, $pow), где $val – заданное число, $pow – степень.

7. Написать функцию, которая принимают в качестве аргументов два числа и
вычисляет из них большее. Написать такую же функцию, чтобы она вычисляла
меньшее число.
Проверить, если произведение $a и $b больше 100, но меньше 1000, то от большего
числа отнять меньшее и вывести результат на экран. А если произведение этих
чисел больше 1000, то произведение этих чисел разделить на большее из чисел.

Циклы и массивы
1. С помощью цикла while выведите все числа в промежутке от 0 до 100, которые
делятся на 3 без остатка.

2. С помощью цикла do…while напишите функцию для вывода чисел от 0 до 10,
чтобы результат выглядел так:
0 – это ноль
1 – нечетное число
2 – четное число
3 – нечетное число
…
10 – четное число

3. Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ
используя тело цикла. То есть выглядеть должно вот так:
for(…){// здесь пусто}

4. Объявите массив, где в качестве ключей будут использоваться названия областей, а
в качестве значений – массивы с названиями городов из соответствующей области.
Выведите в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область
…
(названия городов можно найти на maps.yandex.ru)

5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
только города, начинающиеся с буквы «К».

6. Объявите массив, индексами которого являются буквы русского языка, а
значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’
=> ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Напишите функцию транслитерации строк.

7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
возвращает видоизмененную строчку.

8. Объедините две ранее написанные функции в одну, которая получает строку на
русском языке, производит транслитерацию и замену пробелов на подчеркивания
(аналогичная задача решается при конструировании url-адресов на основе названия
статьи в блогах).

Запросы HTTP, параметры URL и формы HTML
1. Сделать калькулятор

Cookies и сессии PHP.
1. Создайте главную страницу сайта index.php, которая будет неавторизованных
пользователей отправлять на страницу авторизации, а авторизованных на ту
страницу, которую они посещали последний раз ("А" или "Б"). Для пользователя
главной страницы не будет видно, она нужна только для перенаправления.

Работа с файлами.
Создайте галерею фотографий.
Требования:
1. возможность загрузки фотографии на сервер (при загрузке должен проверяться тип
файла)

2. при загрузке должна автоматически создаваться ее уменьшенная копия (не более
200 пикселей по наибольшей стороне)

3. возможность просмотра уменьшенных фотографий (все на одной странице)

4. возможность увеличения фотографии при клике по ней (переход на отдельную
страницу)
Комментарии:
для хранения файлов создайте два каталога – один для маленьких изображений,
другой – для больших, для получения списка фотографий галереи воспользуйтесь механизмом обхода каталога.

Работа с базой данных.
В прошлом задании надо было реализовать галерею фотографий с помощью
файлов и папок. Теперь необходимо доработать сайт с использованием базы данных.
Требования:
1. На странице просмотра фотографии полного размера под картинкой должно быть
указано число ее просмотров.

2. На странице просмотра галереи список фотографий должен быть отсортирован по
популярности. В начале списка должны находиться наиболее популярные
фотографии. Популярность определяется числом кликов по фотографии
(просмотров увеличенного изображения).
Комментарии:
при загрузке фотографии ей следует выделять уникальный идентификатор
помимо идентификатора в базе следует хранить тип картинки («gif», «jpg» и т.д.) и
число кликов по ней
уменьшенные изображения следует хранить в отдельной папке с именами вида
«идентификатор.тип»
изображения полного размера также следует хранить в отдельной папке с именами
вида «идентификатор.тип»

