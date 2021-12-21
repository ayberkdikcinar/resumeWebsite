@extends('adminPanel.layouts.master')
@section('title','Update Admin')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update: {{$user->username}}</h6>
    </div>
    <div class="card-body">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>           
            @endforeach
            </ul>    
        </div>
        @endif
        <form action="{{route('admin.userAdmins.update',$user->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Username <label style="color: red" title="must containt at least 3, at most 15 character">*</label> </label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}" required>
            </div>
            <div class="form-group">
                <label>Name <label style="color: red" title="must contain at least 3 characters">*</label></label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
            </div>
            <div class="form-group">
                <label>Surname <label style="color: red" title="must contain at least 3 characters">*</label></label>
                <input type="text" name="surname" class="form-control" value="{{$user->surname}}" required>
            </div>
            <div class="form-group">
                <label>Phone </label>
                <input type="text" name="phone" class="form-control"value="{{$user->phone}}">
            </div>
            <div class="form-group">
                <label>Email <label style="color: red" title="Example: example@example.com">*</label></label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Update</button>
            </div>

        </form>


    
    
    </div>
</div>
@endsection