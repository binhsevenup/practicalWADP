<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListBook</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">LIST BOOK</h1>
    <form  role="form" action="{{url("/search")}}" method="POST"  >
        @method("POST")
        @csrf
        <div class="form-group" style="width: 30%">
            <label for="book"></label>
            <input type="text" name="bookname" class="form-control" id="book1" placeholder="Search....">
            <button class="btn btn-dark">Search</button>
        </div>
    </form>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Author</th>
            <th scope="col">Available</th>
            <th scope="col">ISBN</th>
            <th scope="col">Publishing Year</th>
        </tr>
        </thead>
        @foreach($books as $book)
        <tbody>
            <tr>
                <th scope="row">{{$book->__get("id")}}</th>
                <td>{{$book->__get("title")}}</td>
                <td>{{$book->__get("author_id")}}</td>
                <td>{{$book->__get("ISBN")}}</td>
                <td>{{$book->__get("available")}}</td>
                <td>{{$book->__get("pub_year")}}</td>
            </tr>

        </tbody>
        @endforeach
    </table>
</div>

</body>
</html>
