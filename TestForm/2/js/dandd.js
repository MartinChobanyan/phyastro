  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////

var obj;

function mousedown(ev) 
{
id_name=event.srcElement.parentElement.attributes("id").value;

 obj = document.getElementById("im").style
 X=event.clientX
 Y=event.clientY

}

function mousemove(ev) 
{
 if (obj) 
 {

  var xx=event.clientX-X
  var yy=event.clientY-Y
  
  obj.pixelLeft=obj.pixelLeft+xx
  obj.pixelTop=obj.pixelTop+yy
  X=event.clientX
  Y=event.clientY
  hog_mouse()
   return false;

 }
}

function mouseup() 
{
 obj = null;
}


document.onmousemove = mousemove;
document.onmouseup = mouseup;