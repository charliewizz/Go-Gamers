

<!DOCTYPE HTML>
<html>
<head>



<script type="text/javascript">

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}


</script>



<link href="../css/goGamers.css" rel="stylesheet" type="text/css">
<link href="form.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="MM_preloadImages('../nav/images/navOver_01.gif','../nav/images/navtopover_01.jpg','../nav/images/navtopover_02.jpg','../nav/images/navtopover_03.jpg','../nav/images/navtopover_04.jpg','../nav/images/navOver_02.gif','../nav/images/navOver_03.gif','../nav/images/navOver_04.gif','../nav/images/navOver_05.gif','../nav/images/navOver_06.gif','../nav/images/navBar_07.gif','../nav/images/navOver_08.jpg')" >

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<form name="Tick">
<input type="text" size="11" name="Clock">
</form>
<script>
<!--
function show(){
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM" 
if (hours>12){
dn="PM"
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
document.Tick.Clock.value=hours+":"+minutes+":"
+seconds+" "+dn
setTimeout("show()",1000)
}
show()
//-->
</script>

<div id = "navBanner">
  <nav>
    <a href="feedback.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('feedback','','../nav/images/navtopover_01.jpg',1)"><img src="../nav/images/navtop_01.jpg" name="feedback" width="150" height="30" border="0"></a><a href="contact.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contactus','','../nav/images/navtopover_02.jpg',1)"><img src="../nav/images/navtop_02.jpg" name="contactus" width="192" height="30" border="0"></a><a href="register.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('register','','../nav/images/navtopover_03.jpg',1)"><img src="../nav/images/navtop_03.jpg" name="register" width="204" height="30" border="0"></a><a href="login.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('login','','../nav/images/navtopover_04.jpg',1)"><img src="../nav/images/navtop_04.jpg" name="login" width="108" height="30" border="0"></a>
  <form id="searchbox" action="">
      <input type=search results=5 name=s placeholder="Enter your search" >
      <input id="submit" type="submit" value="Search">
</form></nav>
</div>

<div id="wrapper">

<header>
	<img src="../images/HEADER.jpg" width="968" height="100">
</header>




<div id = "mainNav">

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class ="MenuBarItemSubmenu" href="index.html">Home</a>
  <li><a class ="MenuBarItemSubmenu" href="about.html">About</a>
  <li><a class="MenuBarItemSubmenu">Playstation</a>
    <ul>
      <li><a href="ps4.html">Playstation4</a></li>
      <li><a href="ps3.html">Playstation3</a></li>
      <li><a href="vita.html">Vita</a></li>
    </ul>
  </li>
  <li><a href="microsoft.html">Xbox</a>
  <ul>
      <li><a href="xboxone.html">Xbox One</a></li>
      <li><a href="xbox360.html">Xbox 360</a></li>
    </ul>
  </li>
  <li><a class="MenuBarItemSubmenu" href="pc.html">PC</a>
 
      </li>
    </ul>
  </li>
 

</ul>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</div>

<div id="scriptreturn">

<h2>Feedback Information</h2>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$street = $_POST['street'];
$town = $_POST['town'];
$county = $_POST['county'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$enjoy = $_POST['enjoy'];

echo " Hello   " .$fname." ".$lname." 
<p>Your address is  " .$street. " " .$town." " .$county. " </p>
<p>Your phone number is " .$tel. " </p>
<p>Your email address is " . $email. "</p>
<p>Your comment is " . $comment. "</p>
<p>If you have enjoyed our site " . $enjoy. " ";

?>

</div>

<footer>

<div id="site">
<h3> User CP </h3>

<a href="contact.html">Contact Us</a>
<br>
<a href="feedback.html">Feedback</a>
<br>
<a href="register.html">Register</a>
<br>
<a href="login.html">Login</a>
</div>

<div id="site">
<h3> Home </h3>

<a href="index.html">Homepage</a>
<br>
<a href="about.html">About Us</a>
</div>

<div id="site">
<h3> Playstation </h3>

<a href="ps4t.html">Playstation 4</a>
<br>
<a href="ps3.html">Playstation 3</a>
<br>
<a href="vita.html">Playstation Vita</a>
</div>

<div id="site">
<h3> Microsoft</h3>

<a href="xboxone.html">Xbox One</a>
<br>
<a href="xbox360.html">Xbox 360</a>
</div>

<div id="social">

<div class="fb-page" data-href="https://www.facebook.com/gogamersireland/" data-width="200px" data-height="150px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/gogamersireland/"><a href="https://www.facebook.com/gogamersireland/">GoGamers</a></blockquote></div></div>

</div>

</footer>

</div> <!-- wrapper -->
</body>
</html>

