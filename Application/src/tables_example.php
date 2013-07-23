<html>
	<head><script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style>
			table#example {
    border-collapse: collapse;   
}
#example tr {
    background-color: #eee;
    border-top: 1px solid #fff;
}
#example tr:hover {
    background-color: #ccc;
}
#example th {
    background-color: #fff;
}
#example th, #example td {
    padding: 3px 5px;
}
#example td:hover {
    cursor: pointer;
}
			#panel1,#panel2,#panel3
{
padding:50px;
display:none;
}
		</style>
		<script>
			$(document).ready(function() {

    $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
		var div = $(this).find("div").attr("id");
		//alert(div);
        if(href) {
           // window.location = href;
		 // alert(href);
		   $("#"+div).slideToggle();
        }
    });

});
		</script>
		
	</head>
	<body>
	<table id="example">
	<tr>
   	 <th>&nbsp;</th>
  	  <th>Name</th>
   	 <th>Description</th>
  	  <th>Price</th>	
	</tr>
<tr>
    <td><a href="apples">Edit</a></td>
    <td><div id="panel1">Apples</div></td>
    <td>Blah blah blah blah</td>
    <td>10.23</td>
</tr>
<tr>
    <td><a href="bananas">Edit</a></td>
    <td><div id="panel2">Bananas</div></td>
    <td>Blah blah blah blah</td>
    <td>11.45</td>
</tr>
<tr>
    <td><a href="oranges">Edit</a></td>
    <td><div id="panel3">Oranges</div></td>
    <td>Blah blah blah blah</td>
    <td>12.56</td>
</tr>
</table>

		
	</body>
</html>

