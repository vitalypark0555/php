<?php

/**
 * 1 пункт
 */
$a = 0;
while ($a <= 100) {
    if ($a % 3 == 0)
        echo $a . '</br>';
    $a++;
}

echo '</br>';

/**
 * 2 пункт
 */
$i = 0;

do {
    if ($i == 0)
        echo $i . ' - это ноль</br>';
    else if ($i % 2 == 0)
        echo $i . ' - это четное число</br>';
    else {
        echo $i . ' - это нечетное число</br>';
    }
    $i++;
} while ($i < 10);

echo '</br>';

/**
 * 3 пункт
 */
for ($i = 0; $i < 10; print $i . '</br>', $i++) {

}

echo '</br>';

/**
 * 4 пункт
 */
$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Касимов', 'Кораблино', 'Михайлов'],
];

foreach ($regions as $key => $values) {
    echo $key . ':</br>';
    foreach ($values as $city)
        echo $city . '</br>';
}

echo '</br>';

/**
 * 5 пункт
 */
foreach ($regions as $key => $values) {
    echo $key . ':</br>';
    foreach ($values as $city) {
        if (mb_substr($city, 0, 1) == 'К')
            echo $city . '</br>';
    }
}

echo '</br>';

/**
 * 6 пункт
 * @param $str
 * @return string
 */
function translit($str)
{
    $transliteration = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',

        'А' => 'A', 'Б' => 'B', 'В' => 'V',
        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
    ];

    return strtr($str, $transliteration);

}

echo translit("Привет Мир!");

echo '</br>';
echo '</br>';

/**
 * 7 пункт
 * @param $str
 * @return mixed
 */
function spacebar_replace($str)
{
    return str_replace(' ', '_', $str);
}

echo spacebar_replace("- Скоро пасха... - Яйца красить будем... - Ох и щекотно будет!");

echo '</br>';
echo '</br>';

/**
 * 8 пункт
 * @param $str
 * @return mixed|string
 */
function get_slug($str)
{
    $str = translit($str);
    $str = spacebar_replace($str);
    return $str;
}

echo get_slug("Спят усталые игрушки, книжки спят...");