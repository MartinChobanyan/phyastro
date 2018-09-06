$(document).scroll(function(){ // Функция вызываемая при прокрутке
    var ContainerHeight = $("header").height(); // Получаем высоту блока перед фиксирующимися объектами
    if($(window).width() > 600) ContainerHeight += 23; // Добавляем место прокрутки перед фиксацией для девайсов с шириной больше 600px
    if($(document).scrollTop() >= ContainerHeight){ // Проверяем дистанцию между вершиной страницы и верхней частью браузера
        $("search").addClass("fixed");
        $("ul").addClass("fixed_ul")
    }
    else{
        $("search").removeClass("fixed");
        $("ul").removeClass("fixed_ul")
    }
});