  ///////////////////////////////////////////////////
  // Image Java Editor v1.1.#
  // 2005 - 2006 (C) Выскорко М.С. (aspid02@ngs.ru)
  // описание работы скрипты Вы можете прочитать по адресу http://www.mv.hut2.ru/?caption=article&id=3&num=4
  ///////////////////////////////////////////////////
var n_color="ffffff"
function null_format(num)
	{
	num=num.toString(16)
	while (num.length<2)
		{
		num="0"+num
		}
	return num
	}

function fff(st)
{
document.form_1.qq.value=st
document.getElementById("col_n").style.background=st
} 

function ddd(st)
	{
	n_color=""+st
	}
function ggg()
	{
	fff(n_color)
	}
function bg()
	{
	n_color=document.form_1.qq.value
	document.getElementById("div2").style.background=n_color
	document.getElementById("col_n").style.background=n_color
	
	}
	
function enter_menu()
	{
r=255
g=0
b=0
r_bool=false
g_bool=true
b_bool=true
nn=6
	for (var j=1;j<275;j++)
		{
//		document.write("<tr>")
		var rr=null_format(r)
		var gg=null_format(g)
		var bb=null_format(b)
		var st=rr+gg+bb

		document.write("<td width=1 height=20 bgcolor='"+st+"' onmouseover='fff(\""+st+"\")' onclick='ddd(\""+st+"\")' onmouseout='ggg()'>")
		document.write("</td>")
	
		if (r_bool==false && g_bool==true && b_bool==true) b+=nn
		if (r_bool==false && g_bool==true && b_bool==false) r-=nn
		if (r_bool==true && g_bool==true && b_bool==false) g+=nn
		if (r_bool==true && g_bool==false && b_bool==false) b-=nn
		if (r_bool==true && g_bool==false && b_bool==true) r+=nn
		if (r_bool==false && g_bool==false && b_bool==true) g-=nn
		
		if (b>=255){b=255;b_bool=false}
		if (r<=0){r=0;r_bool=true}
		if (g>=255){g=255;g_bool=false}
		if (b<=0){b=0;b_bool=true}
		if (r>=255){r=255;r_bool=false}
		if (g<=0){g=0;g_bool=true}
		}
	}