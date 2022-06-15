<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MyStyle.css">
    <title>Каляка-Маляка</title>
</head>
<body>
    <div class="container">
        <form action="bdquery.php" method="POST">
        <div class="head">
        <p>Расчет стоимости</p>
        </div>
    <div class="month">
        <p>Месяц</p>
        <select name="month" class="choose-month">
            <option value="Не выбрано">Не выбрано</option>
            <option value="Январь">Январь</option>
            <option value="Февраль">Февраль</option>
            <option value="Март">Март</option>
            <option value="Апрель">Апрель</option>
            <option value="Май">Май</option>
            <option value="Июнь">Июнь</option>
            <option value="Июль">Июль</option>
            <option value="Август">Август</option>
            <option value="Сентябрь">Сентябрь</option>
            <option value="Октябрь">Октябрь</option>
            <option value="Ноябрь">Ноябрь</option>
            <option value="Декабрь">Декабрь</option>
        </select>
    </div>
    <div class="price">
        <p>Стоимость 1 дня:</p>
        <input name="price" readonly class="oneday" type="number">
    </div>
    <div class="FIO">
        <p>ФИО ребенка</p>
        <input name="FIO" class="fio" type="text">
    </div>
    <div class="koldn">
        <p>Количество дней</p>
        <input name="koldn" class="kolday" oninput="validity.valid||(value='')" type="number">
    </div>
    <div class="dop">
        <p>Доп. услуга</p>
        <select name="dop" class="vibdop">
            <option value="Не выбрано">Не выбрано</option>
            <option value="Веселый мяч">Веселый мяч</option>
            <option value="Каляка-Маляка">Каляка-Маляка</option>
            <option value="Вокал">Вокал</option>
        </select>
    </div>
    <div class="sum">
        <p>Сумма к оплате за месяц</p>
        <input name="sum" readonly class="itog" type="number">
    </div>
    <div class="buttons">
        <button class="save">Сохранить</button>
    </div>
    </form>
    <div class="buttons">
    <button class="btn1">Расчитать</button>
    <button class="btn2">Очистить</button>
    </div>
</div>
<script src="js/script.js"></script>
</body>
</html>