<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        
 
    <table class="table">
        <thead>
            <tr>
                <th>Dep id</th>
                <th>Dep Name</th>
                <th>Emp Count</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dep as $department)
            <tr>
                <td scope="row">{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ count($department->employees)}}</td>
            </tr>
            @endforeach
            
             
        </tbody>
    </table>

</div>
</body>
</html>