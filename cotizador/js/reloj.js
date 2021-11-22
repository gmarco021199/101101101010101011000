var date = new Date();
var d  = date.getDate();
var day = (d < 10) ? '0' + d : d;
var m = date.getMonth() + 1;
var month = (m < 10) ? '0' + m : m;
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;
// document.write(day + "/" + month + "/" + year);


function startTime(){
    today=new Date();
    h=today.getHours();
    m=today.getMinutes();
    s=today.getSeconds();
    m=checkTime(m);
    s=checkTime(s);

    document.getElementById('reloj').innerHTML=(day + "/" + month + "/" + year)+"<br>"+h+":"+m+":"+s;
    t=setTimeout('startTime()',500);
}

function checkTime(i){
	if (i<10) {
		i="0" + i;
	}
	return i;
}
 
 window.onload=function(){
 	startTime();
 }