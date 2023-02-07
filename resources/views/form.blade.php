<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Form</title>
    </head>
    <body>
    <h1>Form for enter data new user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form name="createUser" method="post" action="{{Route('create_user')}}">
        @csrf
        <label for="name">Name</label><input id="name" type="text" name="name" required><br>
        <label for="surname">Surname</label><input id="surname" type="text" name="surname" required><br>
        <label for="email">Email</label><input id="email" type="email" name="email" required><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>
