<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>

<style type="text/css">
table, th, td{
	border-collapse: collapse;
	border:solid 1px black;
	padding: 3px;
}




</style>


</head>
<body>

<h1>{{ $heading }}:</h1>



<table>
	<tr>
		<th>Index</th>
		<th>Name</th>
		<th>Price</th>
	</tr>






@foreach($products as $key=>$product)

<tr> <th>{{ $key }}</th> 
	<td>{{ $product["name"] }} </td> 
<td>${{$product["price"]}}</td>

@endforeach

</table>





@if($just_a_number>1)
	<p>Blade just_a_number is more than 1</p>
@elseif($just_a_number<1)
	<p>Blade just_a_number is less than 1</p>
@else
	<p>Blade just_a_number is equal to 1</p>
@endif


<p>

@php
	echo "This is php using Blade";
@endphp
</p>








<div>

<?php


if ($just_a_number>1) 
{echo "php just_a_number is more than 1";}
elseif($just_a_number<1)
{echo "php just_a_number is less than 1";}
else
{echo "php just_a_number is equal to 1";}

echo "<div>Hi</div>";
echo $heading;
?>

</div>

</body>
</html>