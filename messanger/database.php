<?php


if (isset($_POST['submit'])) {
    add($_POST);
    echo 'Сообщение отправлено';
}

function getAll()
{
    $elements = [];
    foreach (file('./messages.csv') as $row) {
        $element = explode("\t", $row);
        $elements[] = $element;
    }
    return $elements;
}
function add($data)
{
    $title = $data['title'];
    $price = $data['price'];

    $row = $title . "\t" . $price . PHP_EOL;
    file_put_contents('./messages.csv', $row, FILE_APPEND);
}