<html>
<head>
<link rel="stylesheet" type="text/css" href="resources/css/style4.css">
<style>
#loading {
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: fixed;
  display: block;
  opacity: 0.7;
  background-color: #fff;
  z-index: 99;
  text-align: center;
}

#loading-image {
 width: 128px;
 height: 128px;
 position: absolute;
 left: 50%;
 top: 50%; 
 margin-left: -64px;
 margin-top: -64px;
}

html { 
  background: url(resources/images/bg/background.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.logo {
position:absolute;
margin-left:-77px;
margin-right:-77px;
left:50%;
right:50%;
width:154px;
height:77px;
background-image:url('resources/images/logoanim.gif')
}
</style>
<script type="text/javascript" src="resources/js/jquery-2.0.0.min.js"></script>
<?php
$dir = "resources/images/favicon/";
$files = array();
if ($handle = opendir($dir)) {
while (false !== ($file = readdir($handle))) {
$files[] = $file;
}
}
$icon = $files[rand(2,count($files)-1)];
echo "<LINK REL=\"SHORTCUT ICON\" HREF=\"resources/images/favicon/" . $icon . "\">";
?>
</head>
<body>

<div id="loading">
  <img id="loading-image" src="resources/images/loader.gif" alt="Loading..." > 
</div>

<script language="javascript" type="text/javascript">

  $(window).load(function() {
    $('#loading').hide();
  });
</script>

<a href="#" class="a-btn" onclick="window.location.replace('skype:aw9292929296983244?add')">
    <span class="a-btn-text">Add</span>
    <span class="a-btn-slide-text">aw9292929296983244 (Andrew Wong) on Skype!</span>
    <span class="a-btn-icon-right"><span></span></span>
</a>

<div class="logo"></div>
</body>
</html>