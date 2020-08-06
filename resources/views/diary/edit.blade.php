<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
{{-- <form action="{{ route('update.diary',$Diary->id) }}" method="POST">
        @csrf
        <input type="text" name="date" value="{{ $Diary->date }}">
        <input type="text" name="title" value="{{ $Diary->title }}">
        <input type="text" name="description" value="{{ $Diary->description }}">
        <button type="submit">Update</button></form> --}}


<form action="{{ route('update.diary',$Diary->id) }}" method="POST" style="overflow: hidden; display:block; width:50%; text-align:center; margin-left:320px; margin-top:20px;">
    @csrf
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput2">Date</label>
            <input type="datetime-local" class="form-control" id="formGroupExampleInput2" name="date" value="{{ $Diary->date }}">
        </div>

        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="title" 
            value="{{ $Diary->title }}">
        </div>
    </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
            </div>
             <textarea class="form-control" aria-label="With textarea" name="description">{{ $Diary->description }}</textarea>
        </div>
            <button style="margin-top:15px; margin-left:10%;" class="btn btn-primary" type="submit">Update</button>
</form>
</body>
</html>