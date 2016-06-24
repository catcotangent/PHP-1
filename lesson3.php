<html>
<head>
    <meta charset="UTF-8">
    <title>PHP-1, урок 3</title>
</head>
<body>
<?php
    // Задание массива
    $page = [];
    $page[0] = [
        'link' => '#',
    ];
    $page[1] = [
        'link' => 'index.php?page=1',
        'text' => 'Я тот, кто есть,',
    ];
    $page[2] = [
        'link' => 'index.php?page=2',
        'text' => 'И ни к чему стыдится,',
    ];
    $page[3] = [
        'link' => 'index.php?page=3',
        'text' => 'Быть честным - это, право, не порок.',
    ];
    $page[4] = [
        'link' => 'index.php?page=4',
        'text' => 'Хула и лесть - ',
    ];
    $page[5] = [
        'link' => 'index.php?page=5',
        'text' => 'Как облака для птицы',
    ];
    $page[6] = [
        'link' => 'index.php?page=6',
        'text' => 'И недостойны стихотворных строк.',
    ];
function pageLink($pageArray)
{
    if (substr($pageArray['link'], -1) == $_GET['page']) {
        return '#';
    } else {
        return $pageArray['link'];
    }
}
function pageText($pageArray)
{
    return $pageArray[$_GET['page']]['text'];
}
function classer($pageArray)
{
    if (substr($pageArray['link'], -1) == $_GET['page']) {
        return 'passive';
    } else {
        return 'active';
    }
}
?>
<ul>
    <li><a href="<?php echo pageLink($page[1]) ?>" class="<?php echo classer($page[1]) ?>">Раз строка</a></li>
    <li><a href="<?php echo pageLink($page[2]) ?>" class="<?php echo classer($page[2]) ?>">Два строка</a></li>
    <li><a href="<?php echo pageLink($page[3]) ?>" class="<?php echo classer($page[3]) ?>">Три строка</a></li>
    <li><a href="<?php echo pageLink($page[4]) ?>" class="<?php echo classer($page[4]) ?>">И четвертая строка</a></li>
    <li><a href="<?php echo pageLink($page[5]) ?>" class="<?php echo classer($page[5]) ?>">Даже пятая есть!</a></li>
    <li><a href="<?php echo pageLink($page[6]) ?>" class="<?php echo classer($page[6]) ?>">Ух ты, шестая!</a></li>
</ul>
<p><?php echo pageText($page) ?></p>
</body>
</html>
