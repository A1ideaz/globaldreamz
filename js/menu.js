

var menu2=new Array()

menu2[0]='<a href="application-timeline.html" >Application Timeline</a>'

menu2[1]='<a href="countries-oppurtunities.html" >Countries and Oppurtunities</a>'

menu2[2]='<a href="university-rankings.html" >University Rankings</a>'

menu2[3]='<a href="Programs-Options.html" > Programs and Options</a>'

menu2[4]='<a href="statistics.html" > Statistics</a>'

/*menu1[2]='<a href="santa-monica-schedule.html"> &nbsp; &nbsp; &#8226; Santa Monica Schedule</a>'

menu1[3]='<a href="marina-del-rey-schedule.html"> &nbsp; &nbsp; &#8226; Marina del Rey Schedule</a>'*/



var menu1=new Array()

menu1[0]='<a href="our-story.html"> &nbsp; Our Story</a>'

menu1[1]='<a href="our-philosophy.html"> &nbsp; Our Philosophy</a>'

menu1[2]='<a href="our-studios.html"> &nbsp; Our Studios</a>'
	
var menu3= new Array()

menu3[0]='<a href="#">BS</a>'
menu3[1]='<a href="#">MBA</a>'
menu3[2]='<a href="#">MS</a>'
menu3[3]='<a href="#">PHD</a>'
menu3[4]='<a href="#">Summer</a>'

var menuwidth='200px'; //default menu width

//var menubgcolor='lightyellow'  //menu bgcolor

var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)

var hidemenu_onclick="yes" //hide menu when user clicks within menu?



/////No further editting needed



var ie4=document.all

var ns6=document.getElementById&&!document.all



if (ie4||ns6)

document.write('<div id="dropmenudiv" style="visibility:hidden;z-index:100;width:290px;" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')



function getposOffset(what, offsettype){

var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;

var parentEl=what.offsetParent;

while (parentEl!=null){

totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;

parentEl=parentEl.offsetParent;

}

return totaloffset;

}





function showhide(obj, e, visible, hidden, menuwidth){

if (ie4||ns6)

dropmenuobj.style.left=dropmenuobj.style.top="-500px"

if (menuwidth!=""){

dropmenuobj.widthobj=dropmenuobj.style

dropmenuobj.widthobj.width='140px'

}

if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")

obj.visibility=visible

else if (e.type=="click")

obj.visibility=hidden

}



function iecompattest(){

return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body

}



function clearbrowseredge(obj, whichedge){

var edgeoffset=0

if (whichedge=="rightedge"){

var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth+15 : window.pageXOffset+window.innerWidth-15

dropmenuobj.contentmeasure=dropmenuobj.offsetWidth

if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)

edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth

}

else{

var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset

var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18

dropmenuobj.contentmeasure=dropmenuobj.offsetHeight

if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?

edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight

if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?

edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge

}

}

return edgeoffset

}



function populatemenu(what){

if (ie4||ns6)

dropmenuobj.innerHTML=what.join("")

}





function dropdownmenu(obj, e, menucontents, menuwidth){

if (window.event) event.cancelBubble=true

else if (e.stopPropagation) e.stopPropagation()

clearhidemenu()

dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv

populatemenu(menucontents)



if (ie4||ns6){

showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)



dropmenuobj.x=getposOffset(obj, "left")

dropmenuobj.y=getposOffset(obj, "top")

dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")-0+"px"

dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+6+"px"

}



return clickreturnvalue()

}



function clickreturnvalue(){

if (ie4||ns6) return false

else return true

}



function contains_ns6(a, b) {

while (b.parentNode)

if ((b = b.parentNode) == a)

return true;

return false;

}



function dynamichide(e){

if (ie4&&!dropmenuobj.contains(e.toElement))

delayhidemenu()

else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))

delayhidemenu()

}



function hidemenu(e){

if (typeof dropmenuobj!="undefined"){

if (ie4||ns6)

dropmenuobj.style.visibility="hidden"

}

}



function delayhidemenu(){

if (ie4||ns6)

delayhide=setTimeout("hidemenu()",disappeardelay)

}



function clearhidemenu(){

if (typeof delayhide!="undefined")

clearTimeout(delayhide)

}



if (hidemenu_onclick=="yes")

document.onclick=hidemenu



