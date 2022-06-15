<?php
$indmonth=0;
$indop=0;
$link = mysqli_connect("localhost", "root", "root","kalmal");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    mysqli_set_charset($link, "utf8");
    if(isset($_POST['month']) && isset($_POST['price']) && isset($_POST['FIO']) && isset($_POST['koldn']) && isset($_POST['dop']) && isset($_POST['sum'])){
        if($_POST['dop']=="Не выбрано"){
            $indop=4;
        }else if($_POST['dop']=="Веселый мяч"){
            $indop=1;
        }else if($_POST['dop']=="Каляка-Маляка"){
            $indop=2;
        }else if($_POST['dop']=="Вокал"){
            $indop=3;
        }
        
        if($_POST['month']=="Январь"){
            $indmonth=1;
        }else if($_POST['month']=="Февраль"){
            $indmonth=2;
        }else if($_POST['month']=="Март"){
            $indmonth=3;
        }else if($_POST['month']=="Апрель"){
            $indmonth=4;
        }else if($_POST['month']=="Май"){
            $indmonth=5;
        }else if($_POST['month']=="Июнь"){
            $indmonth=6;
        }else if($_POST['month']=="Июль"){
            $indmonth=7;
        }else if($_POST['month']=="Август"){
            $indmonth=8;
        }else if($_POST['month']=="Сентябрь"){
            $indmonth=9;
        }else if($_POST['month']=="Октябрь"){
            $indmonth=10;
        }else if($_POST['month']=="Ноябрь"){
            $indmonth=11;
        }else if($_POST['month']=="Декабрь"){
            $indmonth=12;
        } 

        $query='insert into attendance (code_month,FIO,att_days,code_dop,sum) values('.$indmonth.',"'.$_POST['FIO'].'",'.$_POST['koldn'].','.$indop.','.$_POST['sum'].')';
            
        $result = mysqli_query($link, $query);
        
        if ($result == false) {
            print("Произошла ошибка при выполнении запроса");
            print(mysqli_error($link));
        }
        header('Location: index.php');
        
}
}