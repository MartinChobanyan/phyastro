function SearchAlgoritm() {
    var SearchingLine, q, BooksList, BookType = document.getElementById("book-type").value;
    SearchingLine = document.getElementById("SearchingLine");
    SearchingLine.value = SearchingLine.value.replace(/[^\sа-яА-Яa-zA-Z1-9.-]+/g, ''); // Редактирование строки поиска "в прямом эфире"
    q = SearchingLine.value.trim().toUpperCase().replace(/[\s.-]+/g, ''); // Формирование поискогого запроса
    BooksList = document.getElementById("G").getElementsByTagName("li"); // Список книг
    if (q) { // если есть запрос
        for (var i = 0; i < BooksList.length; i++) {
            var book = BooksList[i].getElementsByTagName("a")[0];
            if (book.className == 'header') { // Убераем если попался по пути заголовк
                BooksList[i].style.display = "none";
                continue;
            } else if (book.innerHTML.toUpperCase().replace(/[^а-яА-Яa-zA-Z1-9]+/g, '').indexOf(q) != -1) { // Рассматриваемая книга соответствует запросу?
                if (BookType) // Если указан конкретный тип
                    if (BookType == book.getAttribute('t')) // Тип рассмариваемой книги соответсвует указанному? 
                        BooksList[i].style.display = ""; // Включаем в результат
                    else 
                        BooksList[i].style.display = "none"; // Исключаем из результата
                else BooksList[i].style.display = ""; // Если тип не указан и рассматриваемая книга подходит запросу
            }
            else { // Если не заголовок и не соответсвтует запросу
                BooksList[i].style.display = "none"; 
            }
        }
    } else if(BookType){ // выведение по указанному типу
        for (var i = 0; i < BooksList.length; i++) {
            var booktype = BooksList[i].getElementsByTagName('a')[0].getAttribute('t'); // BooksList[i]'s book type
            if (BookType == booktype) BooksList[i].style.display = ""; else BooksList[i].style.display = "none";
        }
    }else for (var i = 0; i < BooksList.length; i++) BooksList[i].style.display = ""; // Если ни один параметр поиска не указан
}