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
  <div>
    <ul class="errors" id="name_input_errors"></ul>
  </div>
</div>
<div>
	<label>Description:</label>
	<textarea name="description" id="description_input"></textarea>
  <div>
    <ul class="errors" id="description_input_errors">error</ul>
  </div>
</div>
<div>
	<label>Price:</label>
	<input type="number" id="price_input" 
	name="price" step="0.01"></input>
  <div>
    <ul class="errors" id="price_input_errors"></ul>
  </div>
</div>


<input type="submit" value="Create">



</form>


</div>



<script type="text/javascript">
function createProduct(event)
{
	event.preventDefault();

var settings = {
  "url": "/api/products/",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/json",
    //"XSRF-TOKEN="+document.querySelectorAll('[name="_token"]')[0].value
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  "data": JSON.stringify({
  	"name":name_input.value,
  	"description":description_input.value,
  	"price":price_input.value,
  }),
};

$.ajax(settings)
.done(function (response) {
  window.location.replace("/products/");
})
.catch((err)=>{
  console.log(err.responseJSON.errors);
})
;



}
</script>




@endsection