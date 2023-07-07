<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div><h1>Create</h1></div>
    <form action="{{route('page.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">username</label>
        <input type="username" name="username" class="form-control" id="exampleFormControlInput1" placeholder="username">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">password</label>
        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">point</label>
        <input type="text" name="point" class="form-control" id="exampleFormControlInput1" placeholder="point">
      </div>
     <div> <button type="submit" class="btn btn-success">Create</button></div>
    </form>
</body>
</html>