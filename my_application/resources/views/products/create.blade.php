@extends("layouts/app")

@section("content")

<h1>
{{$title}}:
</h1>


<div>
	<a href="/products">Return to Products List</a>
</div>
	<br>
	<br>



<div>

<form onsubmit="return createProduct(event)">
	@csrf
<div>
	<label>Name:</label>
	<input type="text" name="name" id="name_input">
</div>
<div>
	<label>Description:</label>
	<textarea name="description" id="description_input"></textarea>
</div>
<div>
	<label>Price:</label>
	<input type="number" id="price_input" 
	name="price" step="0.01"></input>
</div>


<input type="submit" value="Create">



</form>


</div>



<script type="text/javascript">
function createProduct(event)
{
	event.preventDefault();
	console.log("I will create a product");
}
</script>




@endsection