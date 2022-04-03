<?php
declare(strict_types=1);

//const OPERATION_EXIT = 0;
//const OPERATION_ADD = 1;
//const OPERATION_DELETE = 2;
//const OPERATION_PRINT = 3;

$operations = [
    '0. Завершить программу.',
    '1. Добавить товар в список покупок.',
    '2. Удалить товар из списка покупок.',
    '3. Отобразить список покупок.',
];
$items = [];

function systemClear() {
    system('cls');
}
function viewList(array $items) {
    if (count($items)) {
        echo 'Ваш список покупок: ' . PHP_EOL;
        echo implode("\n", $items) . "\n";
    } else {
        echo 'Ваш список покупок пуст.' . PHP_EOL;
    }
}
function OperationAdd(array &$items) {
    echo "Введение название товара для добавления в список: \n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName;
}
function OperationDelete(array &$items) {
    if (count($items) === 0) {
        echo 'Выберите другую операцию';
    } else {
        echo 'Введение название товара для удаления из списка:' . PHP_EOL . '> ';
        $itemName = trim(fgets(STDIN));

        if (in_array($itemName, $items, true) !== false) {
            while (($key = array_search($itemName, $items, true)) !== false) {
                unset($items[$key]);
            }
        }
    }
}
function OperationPrint(array $items) {
    viewList($items);
    echo 'Всего ' . count($items) . ' позиций. '. PHP_EOL;
    echo 'Нажмите enter для продолжения';
    fgets(STDIN);
}
function choiceOperation(array $operations, array $items): int|string {
    echo 'Выберите операцию для выполнения: ' . PHP_EOL;
    if (count($items) === 0) {
        $operations[2] = '2. Корзина пуста, удалять нечего.';
    }

    echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';
    $operationNumber = trim(fgets(STDIN));

    if (!array_key_exists($operationNumber, $operations)) {
        systemClear();
        return '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
    }
    return $operationNumber;
}

do {
    systemClear();
    do {
        viewList($items);
        $operationNumber = choiceOperation($operations, $items);
        // Проверить, есть ли товары в списке? Если нет, то не отображать пункт про удаление товаров

    } while (!array_key_exists($operationNumber, $operations));

    echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;

    switch ($operations[$operationNumber]) {
        case $operations[1]:
            OperationAdd($items);
            break;

        case $operations[2]:
            viewList($items);
            OperationDelete($items);
            break;

        case $operations[3]:
            OperationPrint($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
