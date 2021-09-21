# Laravel-Project


# A) Technologies Used:


<b>

1. php
2. Laravel
3. Blade
4. Eloquent
5. Migrations
6. Pagination
7. Validation
8. API
9. Authentication
10. HTML
11. JavaScript


</b>


# B) How to Run:

```bash
php artisan serve
```



# C) Backend:


## C-1) Models:


### C-1-1) User Model:

The user model is already built in with laravel.


### C-1-2) Products Model:


<img src="images/products_fields.gif">


The products model has these fields:


<table>
	<tr>
		<th>Index</th>
		<th>Field Name</th>
		<th>Type</th>
		<th>Nullable</th>
		<th>Default value</th>
	</tr>
	<tr>
		<td>1</td>
		<td>id</td>
		<td>id (Primary Key)</td>
		<td>False</td>
		<td>Auto Increment</td>
	</tr>
	<tr>
		<td>2</td>
		<td>created_at</td>
		<td>datetime</td>
		<td>True</td>
		<td>Auto Generated by laravel (The moment of the creation of the record)</td>
	</tr>
	<tr>
		<td>3</td>
		<td>updated_at</td>
		<td>datetime</td>
		<td>True</td>
		<td>Auto Generated by laravel (The moment of the modifying record)</td>
	</tr>
	<tr>
		<td>4</td>
		<td>name</td>
		<td>string</td>
		<td>False</td>
		<td>-</td>
	</tr>
	<tr>
		<td>5</td>
		<td>description</td>
		<td>string</td>
		<td>False</td>
		<td>-</td>
	</tr>
	<tr>
		<td>6</td>
		<td>price</td>
		<td>float</td>
		<td>False</td>
		<td>-</td>
	</tr>
</table>





## C-2) API Endpoints:

### C-2-1) (GET) http://127.0.0.1:8000/api/products/ 
**No Authentication required.**  


This endpoint return a list of paginated products.  
10 products per page.  
Example:

<b>

```json
{
  "current_page": 1,
  "data": [
    {
      "id": 2,
      "created_at": null,
      "updated_at": null,
      "name": "GPU",
      "description": "4Gb",
      "price": 70.8
    },
    {
      "id": 5,
      "created_at": "2021-09-20T21:59:28.000000Z",
      "updated_at": "2021-09-20T21:59:28.000000Z",
      "name": "My product",
      "description": "adwkj",
      "price": 70
    },
    ...
  ],
  "first_page_url": "http://127.0.0.1:8000/api/products?page=1",
  "from": 1,
  "last_page": 1,
  "last_page_url": "http://127.0.0.1:8000/api/products?page=1",
  "links": [
    {
      "url": null,
      "label": "&laquo; Previous",
      "active": false
    },
    {
      "url": "http://127.0.0.1:8000/api/products?page=1",
      "label": "1",
      "active": true
    },
    {
      "url": null,
      "label": "Next &raquo;",
      "active": false
    }
  ],
  "next_page_url": null,
  "path": "http://127.0.0.1:8000/api/products",
  "per_page": 10,
  "prev_page_url": null,
  "to": 4,
  "total": 4
}
```


</b>







### C-2-2) (POST) http://127.0.0.1:8000/api/products/
**Requires Authentication.**  



This endpoint is used to create a new product.  


It expects these Inputs:


1. **`name`**
	- Type: string
	- required: True
	- minimum Length: 3 Chars
	- maximum Length: 200 Chars
2. **`description`**
	- Type: string
	- required: True
	- minimum Length: 3 Chars
	- maximum Length: 2000 Chars
3. **`price`**
	- Type: float
	- required: True
	- minimum: .01
	- maximum: 100000

**Eaxmple response:**


<b>

```json
{
	"message":"The given data was invalid.",
	"errors":
	{
		"name":["The name must not be greater than 200 characters."],
		"description":["The description field is required."],
		"price":["The price must be at least .01."]
	}
}
```

</b>







### C-2-3) (DELETE) http://127.0.0.1:8000/api/products/{id}
**Requires Authentication.**  


This endpoint deletes the product with this id.








# D) Frontend:


## D-1) http://127.0.0.1:8000/:
This is the home page.



<img src="images/home_page.gif">


## D-2) http://127.0.0.1:8000/products:

Displays a list of products page.  
You can create products or view product details.


<img src="images/products_list.gif">



## D-3) http://127.0.0.1:8000/products/create:

**Requires Authentication**


<img src="images/create_product.gif">

There is also validation.


<img src="images/create_product_validation.gif">




## D-4) http://127.0.0.1:8000/products/{id}:

Display details of a product.  
Also you can delete a product from this page. (If you are logged in)



<img src="images/product_details.gif">





