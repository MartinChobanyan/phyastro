  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
function hog()
	{
	var t=0
	var l=0
	if(document.form_1.cntr[0].checked)
		{
		l=(div2_width-img_width)/2
		t=(div2_height-img_height)/2
		}
	if(document.form_1.cntr[2].checked)
		{
		l=div2_width-img_width
		}
	if(document.form_1.cntr[4].checked)
		{
		l=div2_width-img_width
		t=div2_height-img_height
		}
	if(document.form_1.cntr[3].checked)
		{
		t=div2_height-img_height
		}
	document.form_1.image1.style.top=t*scale_num
	document.form_1.image1.style.left=l*scale_num
	document.form_1.pos_x.value=l
	document.form_1.pos_y.value=t

	}
	
	
function hog_(n1,n2)
	{
	var l=0
	var t=0
	var z=0
	if(n1==1) z=10
		else z=-10
	if(n2==0) t=z
		else l=z
	document.form_1.image1.style.top=(parseInt(document.form_1.pos_y.value)+t)*scale_num
	document.form_1.image1.style.left=(parseInt(document.form_1.pos_x.value)+l)*scale_num
	document.form_1.pos_x.value=parseInt(document.form_1.pos_x.value)+l
	document.form_1.pos_y.value=parseInt(document.form_1.pos_y.value)+t
	}

function hog_key()
	{
	var x=document.form_1.pos_x.value
	document.form_1.image1.style.left=parseInt(x)*scale_num
	var y=document.form_1.pos_y.value
	document.form_1.image1.style.top=parseInt(y)*scale_num
	}

function hog_mouse()
	{
	document.form_1.pos_x.value=document.getElementById("im").style.pixelLeft
	document.form_1.pos_y.value=document.getElementById("im").style.pixelTop
	}