  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
function compression()
	{

	if(document.form_1.comp[1].checked)
		{
		document.form_1.image1.width=div2_width*scale_num
		document.form_1.image1.height=div2_height*scale_num
		img_height=div2_height
		img_width=div2_width
		}
	if(document.form_1.comp[0].checked)
		{
		document.form_1.image1.width=start_width*scale_num
		document.form_1.image1.height=start_height*scale_num
		img_height=start_height
		img_width=start_width
		}
	if(document.form_1.comp[2].checked)
		{
		img_width=div2_width
		img_height=div2_width/kof_p
		document.form_1.image1.width=img_width*scale_num
		document.form_1.image1.height=img_height*scale_num
		}
	if(document.form_1.comp[3].checked)
		{
		img_height=div2_height
		img_width=img_height*kof_p
		document.form_1.image1.width=img_width*scale_num
		document.form_1.image1.height=img_height*scale_num
		}
	document.form_1.img_x.value=img_width
	document.form_1.img_y.value=img_height
	hog()
	}
	
	
function compression_(n1,n2)
	{
	var l=0
	var t=0
	var z=0
	if(n1==1) z=10
		else z=-10
	if(n2==0) t=z
		else l=z
	img_width=parseInt(img_width)+l
	img_height=parseInt(img_height)+t
	document.form_1.image1.width=img_width*scale_num
	document.form_1.image1.height=img_height*scale_num
	document.form_1.img_x.value=img_width
	document.form_1.img_y.value=img_height
	}
function compression_key()
	{
	img_width=parseInt(document.form_1.img_x.value)
	document.form_1.image1.width=img_width*scale_num
	img_height=parseInt(document.form_1.img_y.value)
	document.form_1.image1.height=img_height*scale_num
	hog()
	}