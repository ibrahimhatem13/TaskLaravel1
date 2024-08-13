<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update</title>
    <link href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

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
        <tr>
          <td>{{$thecompany['id']}}</td>
          <td>{{$thecompany['Company Name']}}</td>
          <td>{{$thecompany['Company Country']}}</td>
          <td>{{$thecompany['Company City']}}</td>
          <td>{{$thecompany['Created at']}}</td>
          <td>
            <a href="#" class="btn btn-primary">Update</a>
          </td>
        </tr>
      
        
        
      </tbody>
    </table>
  </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>