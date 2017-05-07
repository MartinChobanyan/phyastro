  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
function scale()
	{	
	document.form_1.image1.style.display="none"
	document.form_1.image2.style.display="block"
	
	start_width=document.form_1.image2.width
	start_height=document.form_1.image2.height
	
	img_width=start_width
	img_height=start_height

	document.form_1.image2.style.display="none"
	document.form_1.image1.style.display="block"
	
	document.getElementById("tx_width").value=start_width
	document.getElementById("tx_height").value=start_height
	
	document.getElementById("size_").childNodes[0].nodeValue=start_width+"x"+start_height

	kof_p=start_width/start_height//коэф. пропорциональности	

	
	scale_div1(start_width,start_height)
	scale_div2(start_width,start_height)
	scale2(-1)
	}

function scale_div1(w,h)
	{

	w=w*scale_num
	h=h*scale_num
	var k_w=2
	var k_h=2
	if(w>m_width)
		{
		k_h=20
		div1_width=m_width
		}
	else div1_width=w
	if(h>m_height)
		{
		k_w=20
		div1_height=m_height
		}
	else div1_height=h
	var q1=parseInt(div1_width)+k_w
	var q2=parseInt(div1_height)+k_h
	document.getElementById("div1").style.width=q1
	document.getElementById("div1").style.height=q2
	}

function scale_div2(w,h)
	{
	div2_width=w
	div2_height=h
	document.getElementById("div2").style.width=div2_width*scale_num
	document.getElementById("div2").style.height=div2_height*scale_num
	
	compression()
	}
	
function scale2(num,tip)
	{

		if(num==0) 
			{
			if(tip==0) num=scale_num+0.05
				else if(scale_num>0.1) num=scale_num-0.05
			}
		if(num==-1)
			{
			k=document.form_1.scale_select.selectedIndex
			switch (k)
				{
				case 0:
					if(div2_width>=div2_height) 
						{
						if (div2_width>m_width) num=m_width/div2_width
							else num=1
						}
					if(div2_width<div2_height)
						{
						if (div2_height>m_height) num=m_height/div2_height
							else num=1
						}
					break
				case 1:
					num=5
					break
				case 2:
					num=2
					break
				case 3:
					num=1.5
					break
				case 4:
					num=1
					break
				case 5:
					num=0.75
					break
				case 6:
					num=0.5
					break
				case 7:
					num=0.25
					break
				case 8:
					num=0.1
					break
				}
			}
		scale_num=num
		nn=scale_num*100
		nn=nn.toFixed(2)
		document.getElementById("scale_id").childNodes[0].nodeValue=" "+nn+" "
		scale3()
		compression()
	}

	
	
function scale3()
	{
	num=scale_num
	var w=div2_width*num
	var h=div2_height*num
	document.form_1.image1.width=w
	document.form_1.image1.height=h	
	if(h<m_height)
		{
		k=2			
		if(w>m_width) k=20
		document.getElementById("div1").style.height=h+k
		document.getElementById("div2").style.height=h
		}
	else
		{
		document.getElementById("div1").style.height=m_height+2
		document.getElementById("div2").style.height=h
		}
			
	if(w<m_width)
		{
		k=2
		if(h>m_height)k=20
		document.getElementById("div1").style.width=w+k
		document.getElementById("div2").style.width=w
		}	
	else
		{
		document.getElementById("div1").style.width=m_width+2
		document.getElementById("div2").style.width=w
		}

	}
	
	


	


function key_h()
	{
	var h=document.getElementById("tx_height").value
	if(document.form_1.pos.checked)
		{
		w=h*kof_p
		w=Math.round(w)
		document.getElementById("tx_width").value=w
		}
	else w=document.getElementById("tx_width").value
	scale_div1(w,h)
	scale_div2(w,h)
	scale2(-1)
	}
function key_w()
	{
	var w=document.getElementById("tx_width").value
	if(document.form_1.pos.checked)
		{
		h=w/kof_p
		h=Math.round(h)
		document.getElementById("tx_height").value=h
		}
	else h=document.getElementById("tx_height").value
	scale_div1(w,h)
	scale_div2(w,h)
	scale2(-1)
	}