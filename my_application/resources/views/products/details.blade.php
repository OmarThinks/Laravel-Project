@extends("layouts/app")

@section("content")

<h1>
{{$title}}
</h1>

<div>

<p>

Id:
{{$product->id}}
</p>



<p>

Name:
{{$product->name}}
</p>



<p>

Description:
{{$product->description}}
</p>



<p>

Price:
{{$product->price}}
</p>











@if($logged_in)
<div>
<form onsubmit="return deleteProduct(event)">
  @csrf
    <input type="submit" value="Delete This Product">
  </form>
</div>
@endif









</div>

<div>

<a href="/products"> <-Products List</a>

</div>





<script type="text/javascript">

function deleteProduct(event)
{
	event.preventDefault();

var settings = {
  "url": "/api/products/{{$product->id}}",
  "method": "DELETE",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/json",
    //"XSRF-TOKEN="+document.querySelectorAll('[name="_token"]')[0].value
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
};

$.ajax(settings).done(function (response) {
  window.location.replace("/products/");
});



}
</script>




@endsection