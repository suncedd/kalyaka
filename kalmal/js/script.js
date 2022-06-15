let month=document.querySelector(".choose-month"),
oneday=document.querySelector(".oneday"),
fio=document.querySelector(".fio"),
kolday=document.querySelector(".kolday"),
dop=document.querySelector(".vibdop"),
btnras=document.querySelector(".btn1"),
btnoch=document.querySelector(".btn2"),
save=document.querySelector(".save"),
itog=document.querySelector(".itog");

month.onclick=function(){
    if(month.value=="Январь" | month.value=="Февраль" | month.value=="Декабрь"){
        oneday.value=600;
    }else if(month.value=="Июнь" | month.value=="Июль" | month.value=="Август"){
        oneday.value=300;
    }else if(month.value=="Не выбрано"){
        oneday.value=0;
    }else{
        oneday.value=400;
    }
}

save.onclick=function(){
    if(fio.value=="" | kolday.value=="" | month.value=="Не выбрано"){
        alert("Не корректно введены данные");
    }else{
        alert("Данные успешно сохраненны");
    }
}

kolday.oninput=function(){
    if(month.value=="Январь" | month.value=="Март" | month.value=="Декабрь" | month.value=="Май" | month.value=="Июль" | month.value=="Август" | month.value=="Октябрь"){
        if(kolday.value>31 | kolday.value<1){
            kolday.value="";
            alert("Не корректно введены данные");
        }
    }else if(month.value=="Апрель" | month.value=="Июнь" | month.value=="Сентябрь" | month.value=="Ноябрь"){
        if(kolday.value>30 | kolday.value<1){
            kolday.value="";
            alert("Не корректно введены данные");
        }
    }else if(kolday.value>28 | kolday.value<1){
        kolday.value="";
        alert("Не корректно введены данные");
    }
}

btnras.onclick=function(){
    if(fio.value=="" | kolday.value=="" | month.value=="Не выбрано"){
        alert("Не корректно введены данные");
    }else if(dop.value=="Не выбрано"){
        itog.value=oneday.value*kolday.value;
    }else if(dop.value=="Веселый мяч"){
        itog.value=oneday.value*kolday.value+2000;
    }else if(dop.value=="Каляка-Маляка"){
        itog.value=oneday.value*kolday.value+3000;
    }else if(dop.value=="Вокал"){
        itog.value=oneday.value*kolday.value+2500;
    }
}
btnoch.onclick=function(){
    dop.value="Не выбрано",
    month.value="Не выбрано",
    fio.value="",
    kolday.value="",
    itog.value="",
    oneday.value="";
}