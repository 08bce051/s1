<html>
<head>
<link href="css/style.css" rel="stylesheet">
<script type="text/javascript" src="includes/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
var i=8;
var i1=0;
var k=0;
var images=new Array(); // regular array (add an optional integer
<?php 
$i=0;
$dir = opendir("images");

//List files in images directory
while (($file = readdir($dir)) !== false)
  {
  if(!is_dir($file))
  {
  $images[$i]=$file;
 
?>
  images[<?php echo $i;?>]= "images/<?php echo $file ;?>";
 <?php 
 $i=$i+1;
 }
 }
closedir($dir);
?>
var no=<?php echo $i-1; ?>;
$(document).ready(function(){
<?php
for($k=1;$k<=9;$k++)
{
?>

$(<?php echo "\"#i".$k."\"";?>).hover(function(){

  $(<?php echo "\"#i".$k."\"";?>).css("height","500px");
  $(<?php echo "\"#i".$k."\"";?>).css("width","500px");
  },function(){
  $(<?php echo "\"#i".$k."\"";?>).css("height","300px");
  $(<?php echo "\"#i".$k."\"";?>).css("z-index","-1");
  $(<?php echo "\"#i".$k."\"";?>).css("width","300px");
});
<?php
}
?>
//alert(i1+"--"+i);
if(i1==0)
 $("#left").hide();
 else if(i1!=0)
  $("#left").show();
if (i>=no)
$("#right").hide();
 else if(i<no)
  $("#right").show();
  $("#right").click(function(){

            $("#i1").attr("src", $("#i4").attr("src"));
			 $("#i2").attr("src", $("#i5").attr("src"));
			// $("#i5").attr("src", $("#i4").attr("src"));
			  $("#i4").attr("src", $("#i7").attr("src"));
			   $("#i5").attr("src", $("#i8").attr("src"));
			   // $("#i6").attr("src", $("#i7").attr("src"));
				 $("#i3").attr("src", $("#i6").attr("src")); 
				 $("#i6").attr("src", $("#i9").attr("src"));
				 i=i+1;
				 i1=i1+1;
				 if(i<=no)
				 {var src=images[i];
				 
				
				  $("#i7").attr("src",  src);}
				  else
				  {
				   $("#i7").attr("src",  "#");
				  } i=i+1;
				 i1=i1+1;
				  if(i<=no)
				 {var src=images[i];
				
				  $("#i8").attr("src",  src);}
				   else
				  {
				   $("#i8").attr("src",  "#");
				  } i=i+1;
				 i1=i1+1;
				  if(i<=no)
				 {var src=images[i];
				
				  $("#i9").attr("src",  src);}
				   else
				  {
				   $("#i9").attr("src",  "#");
				  }
				  if(i1==0)
 $("#left").hide();
 else if(i1!=0)
  $("#left").show();
if (i>=no)
$("#right").hide();
 else if(i<no)
  $("#right").show(); // alert(i1+"--"+i);

  });
  $("#left").click(function(){

            $("#i7").attr("src", $("#i4").attr("src"));
			 $("#i4").attr("src", $("#i1").attr("src"));
			// $("#i6").attr("src", $("#i5").attr("src"));
			  $("#i8").attr("src", $("#i5").attr("src"));
			   $("#i5").attr("src", $("#i2").attr("src"));
			   // $("#i6").attr("src", $("#i7").attr("src"));
				 $("#i9").attr("src", $("#i6").attr("src")); 
				 $("#i6").attr("src", $("#i3").attr("src"));
				 i=i-1;
				 i1=i1-1;
				 if(i1>=0)
				 {var src=images[i1];
				 
				 
				  $("#i3").attr("src",  src);}
				  else
				  {
				   $("#i3").attr("src",  "#");
				  }i=i-1;
				 i1=i1-1;
				  if(i1>=0)
				 {var src=images[i1];
				 
				  $("#i2").attr("src",  src);}
				   else
				  {
				   $("#i2").attr("src",  "#");
				  }i=i-1;
				 i1=i1-1;
				  if(i1>=0)
				 {var src=images[i1];
				
				  $("#i1").attr("src",  src);}
				   else
				  {
				   $("#i1").attr("src",  "#");
				  }if(i1==0)
 $("#left").hide();
 else if(i1!=0)
  $("#left").show();
if (i>=no)
$("#right").hide();
 else if(i<no)
  $("#right").show();
  //alert(i1+"--"+i);
   
  });
 }); 
</script>
</script>
</head>
<body bgcolor="#000000">



<center><table border="0" size="30px" >
<tr>
<td></td>
<td><a href="1.html"><img id="i1" src="images/<?php echo $images[0]; ?>" class="image" /></td>
<td><a href="2.html"><img id="i4" src="images/<?php echo $images[3]; ?>" class="image" /></a></td>
<td><a href="3.html"><img id="i7" src="images/<?php echo $images[6]; ?>" class="image" /></a></td>
</td><td>
</tr>
<tr>
<td><input id="left" value="<" type="button" ></td>
<td><a href="4.html"><img id="i2" src="images/<?php echo $images[1]; ?>" class="image" /></a></td>
<td><a href="5.html"><img id="i5" src="images/<?php echo $images[4]; ?>"  class="image" /></a></td>
<td><a href="6.html"><img id="i8" src="images/<?php echo $images[7]; ?>" class="image"  /></a></td>
<td><input id="right" value=">" type="button" ></td>
</tr>
<tr>
<td></td>
<td><a href="7.html"><img id="i3" src="images/<?php echo $images[2]; ?>" class="image" /></a></td>
<td><a href="8.html"><img id="i6" src="images/<?php echo $images[5]; ?>" class="image" /></a></td>
<td><a href="9.html"><img id="i9" src="images/<?php echo $images[8]; ?>" class="image" /></a></td>
<td></td></tr></table>
</center></body>
</html>
