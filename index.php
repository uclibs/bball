<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include($path. "/templates/arb.inc");
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- COPYRIGHT NOTICE                                                       -->
<!-- All original material on this page and all associated pages are        -->
<!-- Copyright 2001 University of Cincinnati.                               -->
<!-- All rights reserved.                                                   -->
<!-- Users may download, transmit and print out images for personal study   -->
<!-- and for educational or research use only.  Images and documents found  -->
<!-- on this page and all associated pages shall not be downloaded, copied, -->
<!-- retained, printed, shared, modified or otherwise used, except as       -->
<!-- provided for above.                                                    -->

   <TITLE>A Hundred Years of Hoops: Coloring the History of Bearcat Basketball</TITLE>
   <META NAME="Author" CONTENT="Kevin Grace (content), Jacob Hand (images), Linda Newman (html coding)">
   <META name="copyright" content="All original material on this page & all associated pages are Copyright 2001 University of Cincinnati. All rights reserved. Users may download, transmit and print out images for personal study & for educational or research use only.  Images & documents found on this page & all associated pages shall not be downloaded, copied, retained, printed, shared, modified or otherwise used, except as provided for above.">
   <META NAME="description" CONTENT="Photographs of The University of Cincinnati Bearcats Basketball Team, 1898-2000. Jacob Hand, UC photojournalism major and worker in the Archives & Rare Books Dept., used Photoshop to tint the images.">
   <META NAME="keywords" CONTENT="University of Cincinnati, Bearcats, Basketball, Jacob Hand, Oscar Robertson, Anthony Chez, Charles Sims, Clark Ballard, John Socko Wiethe, George Smith, Jack Twyman, Ed Jucker, Tony Yates, Gale Catlett, Bob Huggins, Nick Van Exel, Kenyon Martin">
   <META HTTP-EQUIV="Reply-To" content="ucdp@uc.edu">
   <meta http-equiv="Publication_Date" content="February 2001">
<style>
#leftFrame {
	width: 125px;
	height: 750px;
	float: left;
}
#rightFrame {
	width: 775px;
	float: left;
	height: 750px;
}
</style>
</head>

<body>
<?php include($path. "/includes/analytics.html"); ?>
<?php  echo $top ; ?>
<h2>A Hundred Years of Hoops: Coloring the History of Bearcat Basketball</h2>
<div id="leftFrame">
  <iframe src="pics.html" name="leftFrame" width="125" height="800" frameborder="0"></iframe>
</div>
<div id="rightFrame">
  <iframe src="narrative.html" name="rightFrame" width="775" height="800" frameborder="0"></iframe>
</div>





<?php echo $bottom ; ?>
<!-- Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8099459-5', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>
