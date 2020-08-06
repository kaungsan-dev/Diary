<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col" colspan="3" style="text-align: center;">Action</th>
        </tr>
      </thead>

        @foreach ($Diary as $Diarys)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Diarys->date }}</td>
                <td>{{ $Diarys->title }} </td>
                {{-- <td>{{ $Diarys->description }} </td> --}}
                {{-- <td><a href="{{ route('edit.teas', $tea->id) }}">Edit</a></td>
                <td><a href="{{ route('delete.teas', $tea->id) }}">DELETE</a></td> --}}

                <td><button type="button" class="btn btn-primary"><a  style="color:white;" href="{{ route('view.diary', $Diarys->id) }}">View</button></td>
                <td><button type="button" class="btn btn-success"><a  style="color:white;" href="{{ route('edit.diary', $Diarys->id) }}">Edit</button></td>
                <td><button type="button" class="btn btn-danger"><a   style="color:white;" href="{{ route('delete.diary', $Diarys->id) }}">Delete</button></td>
            </tr>
        @endforeach
    </table>
</body>
</html>