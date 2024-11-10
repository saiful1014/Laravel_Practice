<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CURD operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header text-warning" >
           Doing Card Operation Using Laravel and mysql
        <a href="/add/user" class="btn btn-success btn-sm float-end">Add New User</a>
        </div>
        @if (Session::has('success'))
        <span class="alert alert-success p-2">{{Session::get('success')}}</span>
    @endif
    @if (Session::has('fail'))
        <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
    @endif

    </div>

    <div class="card-body">
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <th>Full name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Registration Date</th>
            <th>Last Update</th>
            <th>Update User</th>
            <th>Delete User</th>
        </thead>
        @if (count($all_user)>0)

            @foreach ($all_user as $singleuser )
            <tr>
            <td>{{$singleuser->name}}</td>
            <td>{{$singleuser->email}}</td>
            <td>{{$singleuser->phone_number}}</td>
            <td>{{$singleuser->created_at}}</td>
            <td>{{$singleuser->updated_at}}</td>
            <td><a href="/edit/{{$singleuser->id}}" class="btn btn-primary btn-sm">edit</a></td>
            <td><a href="/delete/{{$singleuser->id}}" class="btn btn-danger btn-sm">delete</a></td>
            </tr>
            @endforeach




        @else
        <tr>
            <td>
                There is no User.
            </td>
        </tr>

        @endif
    </table>
    {{--<a href="/practice" class="btn btn-primary btn-sm">Practice</a>--}}
    </div>
</div>

</body>
</html>
