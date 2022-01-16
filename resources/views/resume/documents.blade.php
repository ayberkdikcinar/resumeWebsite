<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
    <form action="{{route('resume.documents.post','english-test')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id="file-input" type="file" name="file" accept="image/*,.pdf" />
        <input type="submit" name="submit" class="btn btn-warning" value="Set About" />
    </form>
    
</body>
</html>