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
    <button href="{{route('company.index')}}" type="button" class="btn btn-outline-primary">Add Company</button>
  </div>

  <nav class="text-center">

    <table class="table ">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Company Name</th>
          <th scope="col">Company Country</th>
          <th scope="col">Company City</th>
          <th scope="col">Created at</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($company as $company)
          <tr>
            <td>{{$company['id']}}</td>
            <td>{{$company['Company Name']}}</td>
            <td>{{$company['Company Country']}}</td>
            <td>{{$company['Company City']}}</td>
            <td>{{$company['Created at']}}</td>
            <td>
              <a href="{{route('company.index')}}" class="btn btn-primary">Update</a>
              <a href="{{route('delete.index')}}" class="btn btn-primary">Delete</a>
            </td>
          </tr>
        @endforeach
      
        
        
      </tbody>
    </table>
  </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>