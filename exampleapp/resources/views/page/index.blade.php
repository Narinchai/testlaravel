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
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2>user information</h2>
        </div>
        <div><a href="{{route('page.create')}}" class="btn btn-primary">create</a></div>
        <div>
            <table class="table table-bordered mt-2">
                    <tr>
                        <th>no.</th>
                        <th>username</th>
                        <th>password</th>
                        <th>name</th>
                        <th>point</th>
                        <th>create at</th>
                        <th>action</th>
                        <th>action</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($userdb as $item)
                        
                   
                <tr>
                    <td> {{$item->id}} </td>
                    <td> {{$item->username}} </td>
                    <td> {{$item->password}}  </td>
                    <td> {{$item->name}}  </td>
                    <td> {{$item->point}} </td>
                    <td>  {{$item->created_at}} </td>
                    <td> 
                        <form action="{{ route('increasePoint',$item->id) }}" method="get">
                            
                            <button type="submit">+</button>
                        </form>
                    </td> <td> 
                        <form action="{{ route('decreasePoint',$item->id) }}" method="get">
                           
                            <button type="submit">-</button>
                        </form>
                    </td>
                    <td>
                        
                        <form action="{{route('page.destroy',$item->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit"class="btn btn-danger">delete</button></form>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>
</html>