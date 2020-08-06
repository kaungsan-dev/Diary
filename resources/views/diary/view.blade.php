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

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #f5f5f5;
        width: 600px;
        margin: 0 auto;
        padding: 0;
    }

    h4 {
        color: #cd0000;
        font-size: 42px;
        letter-spacing: -2px;
        text-align: left;
        margin-top: 100px;
    }

    .list {
        color: #555;
        font-size: 22px;
        padding: 0 !important;
        width: 500px;
        font-family: courier, monospace;
        border: 1px solid #dedede;
    }

    .list li {
        list-style: none;
        border-bottom: 1px dotted #ccc;
        text-indent: 25px;
        height: auto;
        padding: 10px;
        text-transform: capitalize;
    }

    .list li:hover {
        background-color: #f0f0f0;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -ms-transition: all 0.2s;
        -o-transition: all 0.2s;
    }

    .lines {
        border-left: 1px solid #ffaa9f;
        border-right: 1px solid #ffaa9f;
        width: 2px;
        float: left;
        height: 223px;
        margin-left: 40px;
    }
</style>
<body>
    <h4>Daily Notes</h4>

    <div class="lines"></div>

    <ul class="list">
        <li > ( {{ $Diary->id }} ) => {{ $Diary->date }}</li>
        <li > Title : {{ $Diary->title }}  </li>
        <li > Description : {{ $Diary->description }}</li>
        <li><button type="button" class="btn btn-success"><a href="{{ route('edit.diary', $Diary->id) }}" style="color:white;">Edit</button>
        <button type="button" class="btn btn-danger"><a style="color:white;" href="{{ route('delete.diary', $Diary->id) }}">Delete</button></li>
    </ul>

</body>

</html>
</body>
</html>