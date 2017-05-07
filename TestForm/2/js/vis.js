  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
var kof_p=1

var start_width=100
var start_height=133

var div1_width=100
var div1_height=133

var div2_width=100
var div2_height=133

var img_width=100
var img_height=133

var m_width=400
var m_height=500
var scale_num=1
function m2()
	{
	m_width=document.body.clientWidth-400
	m_height=document.body.clientHeight-150
	}
function m()
	{
	m2()
	document.getElementById("div1").style.width=m_width+2
	document.getElementById("div1").style.height=m_height+2
	document.getElementById("div2").style.width=m_width
	document.getElementById("div2").style.height=m_height
	}

function swap_image()
	{
	var reg=/(.+)\.(.+)$/
	var arr=reg.exec(document.form_1.load.value)
	if(arr[2]!="gif" && arr[2]!="GIF" && arr[2]!="jpg" && arr[2]!="JPG" & arr[2]!="png" && arr[2]!="PNG") alert("Неверный формат изображения.")
		else
			{
			m2()
			var reg=/(.+)\\(.+)$/
			var arr=reg.exec(document.form_1.load.value)
			document.getElementById("nm").childNodes[0].nodeValue=arr[2]
			document.form_1.image1.src=document.form_1.load.value
			document.form_1.image2.src=document.form_1.load.value
			setTimeout("scale()",500)
			document.getElementById("div2").style.top=0
			document.getElementById("div2").style.left=0
			}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	