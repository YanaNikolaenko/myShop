
function message(type, duration, value){

    //фиксируем область объекта
    var obj=this;
    //

    this.type; //тип сообщения
    this.value; //содержания сообщения
    this.duration;//продолжительность сообщения


    //проверяем наличие переданных перемен
    if(typeof(duration)=="undefined" && typeof(value)=="undefined"){//если продолжительно и содержание на переданы, то проверим не JSON ли это
        try{//попытка разпарсить JSON
            this.json = JSON.parse(type);
            obj.type=this.json['type']; //тип сообщения
            obj.value=this.json['value']; //содержания сообщения
            obj.duration=this.json['duration'];//продолжительность сообщения
        }catch(e){//если разпарсить не удалось то выдаем сообщение
            console.log("Неудачная попытка разпарсить JSON файл\n");
        };
    }else{//если не json
        obj.type=type; //тип сообщения
        obj.value=value; //содержания сообщения
        obj.duration=duration;//продолжительность сообщения
    };



    this.container=document.createElement('div');//контейнер с сообщением


    //стили для контейнера с сообщением ошибка
    this.error="border: 1px solid #A83B2D;\
			background: #D44B38;\
			padding: 10px;\
			color: #fff;\
		    position: fixed;\
		    z-index: 9999999;\
		    width: 100%;\
		    ";
    //


    //стили для контейнера с сообщением успех
    this.error_bootstrap="border: 1px solid #ebccd1;\
			background: #f2dede;\
			padding: 10px;\
			color: #a94442;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //

    //стили для контейнера с сообщением успех
    this.success="border: 1px solid #0a6900;\
			background: rgb(24, 132, 0);\
			padding: 10px;\
			color: #fff;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //


    //стили для контейнера с сообщением успех
    this.success_bootstrap="border: 1px solid #d6e9c6;\
			background: #dff0d8;\
			padding: 10px;\
			color: #3c763d;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //


    //стили для контейнера с сообщением предупреждения
    this.warning="border: 1px solid rgb(169, 132, 23);\
			background: rgb(204, 160, 54);\
			padding: 10px;\
			color: #fff;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //

    //стили для контейнера с сообщением предупреждения
    this.warning_bootstrap="border: 1px solid #faebcc;\
			background: #fcf8e3;\
			padding: 10px;\
			color: #8a6d3b;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //



    //стили для контейнера с сообщением информация
    this.info="border: 1px solid rgb(0, 7, 97);\
			background: #0b539a;\
			padding: 10px;\
			color: #fff;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //


    //стили для контейнера с сообщением информация
    this.info_bootstrap="border: 1px solid #bce8f1;\
			background: #d9edf7;\
			padding: 10px;\
			color: #31708f;\
			position: fixed;\
			z-index: 9999999;\
			width: 100%;\
			";
    //

    //метод покзаать сообщение
    this.show=function(){
        document.body.insertBefore(obj.container, document.body.firstChild);
        obj.container.style.cssText=obj[obj.type]; //return error or success or warning
        obj.container.innerHTML=obj.value;
    };


    //метод скрыть сообщение
    this.hide=function(){
        obj.container.remove();
    };


    //конструктор
    (function(){
        obj.show();
        setTimeout(obj.hide, obj.duration);
    })();

    //тип возвращаемого значения
    if(obj.type=="error" || obj.type=="error_bootstrap"){return false;}else{return true;}
}



//new message('error', 5000, 'Ошик');
//new message("warning", 5000, "Успешная регистрация на сайте");
//new message('{"type":"success","duration":3000,"value":"\u0422\u043e\u0432\u0430\u0440 \u0443\u0441\u043f\u0435\u0448\u043d\u043e \u0443\u0434\u0430\u043b\u0435\u043d"}');


