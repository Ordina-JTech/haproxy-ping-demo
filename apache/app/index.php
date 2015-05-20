
<!doctype html>
<html >
<head>

<style media="screen" type="text/css">
td, th, h3, body
{
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #444444;
	font-size: 40px;

}

table{
    border-spacing: 0px 10px;
}


h3
{
	font-size: 50px;
	color: #FFFFFF;
}


.header {
    background-color: #e88200;
    layer-background-color: #e88200;
    padding-top: 0px;
    padding-bottom: 0px;
}



.headerTitle {
    padding-top: 1px;
    padding-left: 1px;
    padding-right: 1px;
    text-align: center;
}


body {
  padding-top: 0px;
  padding-bottom: 0px;
  margin-top: 0px;
  margin-bottom: 0px;
}

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>

<script>

 $(document).ready(function(){
 	setInterval(function(){cache_clear()},1000);
 });

 function cache_clear(){
    window.location.reload(true);
 }
</script>

</head>
<body >

<div class="container" >
    <div class="header">
        <div class="headerTitle">
        	<table width=100% border=0>
        	<tr>
        	<td width=20>
        	</td>
        	<td width=320>
			<img src="http://www.mmwb.nl/wp-content/uploads/2014/10/ordina-logo-455x300.jpg?81fc35" height=200/>
        	</td>
        	<td>
            <h3>Sample webpage</h3>
        	</td>
        	</tr>
        	</table>
        </div>
    </div>
	<br>
	Sample webpage hosted on server <?php echo $_SERVER['SERVER_ADDR']; ?>

</div>


</body>
</html>
