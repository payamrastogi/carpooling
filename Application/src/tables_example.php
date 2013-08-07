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
padding:0px;
display:none;
}
.nodisplay tr td
{
	background-color: #ffffff;
	padding: 50px 50px;
}
		</style>
		<script>
			$(document).ready(function() {

    $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
		//alert(href);
		var div = $(this).find("div").attr("id");
		//alert(div);
        if(href) {
           // window.location = href;
		 // alert(href);
		   $("#"+href).slideToggle();
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
    <td><a href="panel1">Edit</a></td>
    <td>Blah blah blah blah</td>
    <td>10.23</td>
</tr>
<tr class="nodisplay">
	 <td class="nodisplay"><div id="panel1">Apples</div></td>
</tr>
<tr>
    <td><a href="panel2">Edit</a></td>
    <td>Blah blah blah blah</td>
    <td>11.45</td>
</tr>
<tr class="nodisplay">
	<td class="nodisplay"><div id="panel2">Bananas</div></td>
</tr>
<tr>
    <td><a href="panel3">Edit</a></td>
    <td>Blah blah blah blah</td>
    <td>12.56</td>
</tr>
<tr class="nodisplay">
	<td class="nodisplay"><div id="panel3">Oranges</div></td>
</tr>
</table>	
	</body>
</html>

