<?PHP
// Создание подключения к базе данных o92
$conn = OCILogon ("system", "oracle", "localhost/orcl");
// Вызов Oracle для разбора инструкции
$stmt = OCIParse($conn,
"begin :res := f_products('100000'); end;");
// Вывод информации об ошибках
if (!$stmt) {
$err = OCIError();
echo "Oops, you broke it: ".$err["message"];
exit;
}
// Привязка 200 символов переменной $result к заполнителю :res
OCIBindByName($stmt, "res", $result, 200);
// Выполнение
OCIExecute($stmt);
// Сохранение значения в переменной
OCIResult($stmt,$result);
// Вывод в стандартный поток
echo "This models $result\n has a promotion on sale";
// Отключение от базы данных
OCILogoff($conn);
?> 