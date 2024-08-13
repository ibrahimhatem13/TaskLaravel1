<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="text-center m-5">
    <button href="{{route('product.index')}}" type="button" class="btn btn-outline-primary">Add Product</button>
  </div>

  <nav class="text-center">

    <table class="table ">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Product Name</th>
          <th scope="col">Product Company</th>
          <th scope="col">Count</th>
          <th scope="col">Created at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{$product['id']}}</td>
            <td>{{$product['Product Name']}}</td>
            <td>{{$product['Product Company']}}</td>
            <td>{{$product['Count']}}</td>
            <td>{{$product['Created at']}}</td>
            <td>
              <a href="{{route('product.index')}}" class="btn btn-primary">Update</a>
              <a href="{{route('deletePro.index')}}" class="btn btn-primary">Delete</a>
            </td>
          </tr>
        @endforeach
      
        
        
      </tbody>
    </table>
  </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>