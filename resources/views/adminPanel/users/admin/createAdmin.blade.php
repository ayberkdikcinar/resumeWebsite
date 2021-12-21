@extends('adminPanel.layouts.master')
@section('title','Add Admin')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
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
        <div class="col">
        <form action="{{route('admin.userAdmins.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Username <label style="color: red" title="must containt at least 3, at most 15 character">*</label> </label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6">
            <div class="form-group">
                <label>Firstname <label style="color: red" title="must contain at least 3 characters">*</label></label>
                <input type="text" name="name" class="form-control" required>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Lastname <label style="color: red" title="must contain at least 3 characters">*</label></label>
                <input type="text" name="surname" class="form-control" required>
            </div>
        </div>
            </div>
            <div class="form-group">
                <label>Phone </label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label>Email <label style="color: red" title="Example: example@example.com">*</label></label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password <label style="color: red" title="must contain at least one number and one letter, and at least 8 or more characters">*</label></label>
                <input type="password" name="password" class="form-control" pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
            </div>
            <div class="form-group">
                <label>Retype-Password <label style="color: red" title="Should be same with your password">*</label></label>
                <input type="password" name="password_confirmation" class="form-control " pattern="(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Add</button>
            </div>

        </form>
        </div>

    
    
    </div>
</div>
@endsection