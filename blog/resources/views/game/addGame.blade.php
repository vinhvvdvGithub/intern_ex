@if (!Auth::check())
<a href="{{url('/')}}">vui long dang nhap </a>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
            <form action="{{route('add-game')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="Name">Game Name</label>
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
                
                </div>
                <div class="form-group">
                  <label for="Price">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                </div>
               
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
</body>
</html>
@endif