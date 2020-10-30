<html>

<head>
    <title>ส่งงาน ITF</title>
    <SCRIPT language=JavaScript>
<!-- Begin
ie4 = document.all?1:0;
ns4 = document.layers?1:0;
ns5 = (document.getElementById && !document.all)?1:0;
time0ID = 0;
time1ID = 0;
time2ID = 0;
wind = 0;
w1 = w2 = -10;
v1 = v2 = -10;
x1 = x2 = -10;
y1 = y2 = -10;
xan = yan = -.25;
// emulate snow or stars? (true | false)
snow = false;  // sinewave controlled
star = true; // mouse controlled path
function wave(){ // for snow
xan = Math.sin(wind/57.3);
wind+=Math.random()*5;
if (wind>360) wind = 0;
// yan = .25 // for water
}
// for stars
function mm(e) {
if (ns5) {
xan = ((e.clientX)-csw)/csw;
yan = ((e.clientY)-csh)/csh;
}
else {
xan = (((ns4)?e.pageX:event.x)-csw)/csw;
yan = (((ns4)?e.pageY:event.y)-csh)/csh;
   }
}
function init() {
if (ns4) {
z0 = document.zen.document.z0;
z1 = document.zen.document.z1;
}
if (ns5) if (document.getElementsByTagName("*")) {
document.all = document.getElementsByTagName("*")
}
if (star) {
if (ns4 || ns5) {
window.captureEvents(Event.MOUSEMOVE);
window.onmousemove = mm;
}
document.onmousemove = mm;
}
fs=(ns4)? "":"; font-size:25px";
ret=""; tem=(ns4)? "<font size=5>":"";
for (t=1;t<sh/28;t++) {
for (u=1;u<sw/6;u++)
tem += (Math.random()>.99)? ((Math.random()>.9)? "<font size="+((Math.random()*50)+12)+"px>.</font size>":"."):" "; tem += "<BR>";
}
tem += (ns4)? "</font size>":"";
ret += "<div style='position:absolute; left:0px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:0px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
if (ns4) {
z0.document.write(ret);
z0.document.close();
}
if (ie4) z0.innerHTML = ret;
if (ns5) document.all.z0.innerHTML = ret;
ret=""; tem=(ns4)? "<font size=5>":"";
for (t = 1; t < sh / 28; t++) {
for (u = 1; u < sw / 6; u++)
tem += (Math.random()>.99)? ((Math.random()>.9)? "<font size="+((Math.random()*50)+12)+"px>.</font size>":"."):" ";
tem+="<BR>";
}
tem += (ns4)? "</font size>":"";
ret += "<div style='position:absolute; left:0px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:0px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
if (ns4) {
z1.document.write(ret);
z1.document.close();
}
if (ie4) z1.innerHTML = ret;
if (ns5) {
document.all.z1.innerHTML = ret;
z0 = document.all.z0;
z1 = document.all.z1;
}
time1ID = setInterval('z1m()',33);
time0ID = setInterval('z0m()',55);
if (snow) time2ID=setInterval('wave()',77);
}
function halt() {
if (time1ID) clearInterval(time1ID);
if (time0ID) clearInterval(time0ID);
if (time2ID) clearInterval(time2ID);
}
function z0m() {
x1 -= 4 * xan;
x2 -= 4 * yan;
a = Math.round(x1);
b = Math.round(x2);
if (w1 != a) {
w1 = a;
if (w1 > 0) x1 = w1 = -sw;
if (w1 < -sw) x1 = w1 = 0;
if (!ns4) z0.style.left = w1 + "px";
}
if (w2 != b) {
w2 = b;
if (w2 > 0) x2 = w2 = -sh;
if (w2 < -sh) x2 = w2 = 0;
if (!ns4) z0.style.top = w2 + "px";
}
if (ns4) z0.moveTo(w1,w2);
}
function z1m() {
y1 -= xan;
y2 -= yan;
a1 = Math.round(y1);
b1 = Math.round(y2);
if (v1 != a1) {
v1 = a1;
if (v1 > 0) y1 = v1 = -sw;
if (v1 < -sw) y1 = v1 = 0;
if (!ns4) z1.style.left = v1 + "px";
}
if (v2 != b1) {
v2 = b1;
if (v2 > 0) y2 = v2 = -sh;
if (v2 < -sh) y2 = v2 = 0;
if (!ns4) z1.style.top = v2 + "px";
}
if (ns4) z1.moveTo(v1,v2);
}
//  End -->
</SCRIPT>
</head>

<BODY onload=init() onunload=halt()>
    <h1>นพณัฐ คำเมือง</h1>
    <p>ชื่อเล่น เติ้ล</p>
    <img src="Cat.jpg">
    <img src="cow.jpg">
    <br>
    <a href="http://http://www.oremanga.com/">This is a Link</a>

    <h2>เรื่องตลก</h2>
    <p>ครบรอบแต่งงาน
      สามีภรรยาฉลองครบรอบแต่งงาน 25 ปี กันสองต่อสองที่บ้าน เมื่อแชมเปญ หมดไปสองขวด สามีก็หันไปถามภรรยา 
      ที่รัก ถามจริงๆ นะ อยู่กันมา 25 ปีนี่ เธอเคยนอกใจฉันบ้างไหม?" 
    "เคยค่ะ ฉันเคยนอกใจคุณสามครั้ง" ภรรยาตอบอย่างไม่ค่อยเต็มใจนัก 
    "เหรอ ทำไมล่ะ?" สามีอยากรู้เหตุผล 
    "คือว่า.." ภรรยาเริ่มเล่า 
    "ครั้งแรกหลังจากที่เราแต่งงานกันใหม่ๆ ตอนที่คุณต้องผ่าตัด แต่เรามีเงิน ไม่พอ ฉันเลยไปนอนกับ หมอศัลยกรรมเพื่อให้เขาไม่คิดค่าผ่าตัด" 
    "อืมม... เธอช่างมีน้ำใจกับฉันจริงๆ" สามีชม "แล้วครั้งที่สองล่ะ?" 
    "จำตอนที่เขาเลือกรองประธานบริษัทได้ไหมคะ เขาจะไม่เลือกคุณอยู่แล้ว ฉันไปนอนกับท่าน ประธานมา เขาถึงเลือกคุณไงคะ" 
    "จริงเหรอ แหมฉันนึกว่าฉันได้มาเพราะฝีมือแท้ๆ นะเนี่ย" สามีชื่นชมภรรยา 
    "แล้วครั้งที่สามล่ะ" 
      "เมื่อปีก่อนนี่เอง ตอนที่คุณอยากเป็นประธานชมรมกอล์ฟ แต่ขาดเสียงสนับสนุนอยู่ 53 เสียงน่ะค่ะ ... "</p>
    <SCRIPT language=JavaScript>
<!-- Begin
ie4 = document.all?1:0;
ns4 = document.layers?1:0;
ns5 = (document.getElementById && !document.all)?1:0;
time0ID = 0;
time1ID = 0;
time2ID = 0;
wind = 0;
w1 = w2 = -10;
v1 = v2 = -10;
x1 = x2 = -10;
y1 = y2 = -10;
xan = yan = -.25;
// emulate snow or stars? (true | false)
snow = false;  // sinewave controlled
star = true; // mouse controlled path
function wave(){ // for snow
xan = Math.sin(wind/57.3);
wind+=Math.random()*5;
if (wind>360) wind = 0;
// yan = .25 // for water
}
// for stars
function mm(e) {
if (ns5) {
xan = ((e.clientX)-csw)/csw;
yan = ((e.clientY)-csh)/csh;
}
else {
xan = (((ns4)?e.pageX:event.x)-csw)/csw;
yan = (((ns4)?e.pageY:event.y)-csh)/csh;
   }
}
function init() {
if (ns4) {
z0 = document.zen.document.z0;
z1 = document.zen.document.z1;
}
if (ns5) if (document.getElementsByTagName("*")) {
document.all = document.getElementsByTagName("*")
}
if (star) {
if (ns4 || ns5) {
window.captureEvents(Event.MOUSEMOVE);
window.onmousemove = mm;
}
document.onmousemove = mm;
}
fs=(ns4)? "":"; font-size:25px";
ret=""; tem=(ns4)? "<font size=5>":"";
for (t=1;t<sh/28;t++) {
for (u=1;u<sw/6;u++)
tem += (Math.random()>.99)? ((Math.random()>.9)? "<font size="+((Math.random()*50)+12)+"px>.</font size>":"."):" "; tem += "<BR>";
}
tem += (ns4)? "</font size>":"";
ret += "<div style='position:absolute; left:0px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:0px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
if (ns4) {
z0.document.write(ret);
z0.document.close();
}
if (ie4) z0.innerHTML = ret;
if (ns5) document.all.z0.innerHTML = ret;
ret=""; tem=(ns4)? "<font size=5>":"";
for (t = 1; t < sh / 28; t++) {
for (u = 1; u < sw / 6; u++)
tem += (Math.random()>.99)? ((Math.random()>.9)? "<font size="+((Math.random()*50)+12)+"px>.</font size>":"."):" ";
tem+="<BR>";
}
tem += (ns4)? "</font size>":"";
ret += "<div style='position:absolute; left:0px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:0px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:0px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
ret += "<div style='position:absolute; left:"+(sw)+"px; top:"+(sh)+"px; width:"+sw+"px; height:"+sh+"px; color:white"+fs+"; font-family:Times'>"+tem+"</DIV>";
if (ns4) {
z1.document.write(ret);
z1.document.close();
}
if (ie4) z1.innerHTML = ret;
if (ns5) {
document.all.z1.innerHTML = ret;
z0 = document.all.z0;
z1 = document.all.z1;
}
time1ID = setInterval('z1m()',33);
time0ID = setInterval('z0m()',55);
if (snow) time2ID=setInterval('wave()',77);
}
function halt() {
if (time1ID) clearInterval(time1ID);
if (time0ID) clearInterval(time0ID);
if (time2ID) clearInterval(time2ID);
}
function z0m() {
x1 -= 4 * xan;
x2 -= 4 * yan;
a = Math.round(x1);
b = Math.round(x2);
if (w1 != a) {
w1 = a;
if (w1 > 0) x1 = w1 = -sw;
if (w1 < -sw) x1 = w1 = 0;
if (!ns4) z0.style.left = w1 + "px";
}
if (w2 != b) {
w2 = b;
if (w2 > 0) x2 = w2 = -sh;
if (w2 < -sh) x2 = w2 = 0;
if (!ns4) z0.style.top = w2 + "px";
}
if (ns4) z0.moveTo(w1,w2);
}
function z1m() {
y1 -= xan;
y2 -= yan;
a1 = Math.round(y1);
b1 = Math.round(y2);
if (v1 != a1) {
v1 = a1;
if (v1 > 0) y1 = v1 = -sw;
if (v1 < -sw) y1 = v1 = 0;
if (!ns4) z1.style.left = v1 + "px";
}
if (v2 != b1) {
v2 = b1;
if (v2 > 0) y2 = v2 = -sh;
if (v2 < -sh) y2 = v2 = 0;
if (!ns4) z1.style.top = v2 + "px";
}
if (ns4) z1.moveTo(v1,v2);
}
//  End -->
</SCRIPT>
</body>

</html>
