@extends('adminPanel.layouts.master')
@section('title','Settings')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>           
                @endforeach
                </ul>    
            </div>
            @endif
            <div class="my-4">
                <form action="{{route('admin.user.update',$user->id)}}" method="POST"> 
                    @method('PUT')
                    @csrf     
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" id="firstname" class="form-control" name="name" value="{{$user->name}}"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Lastname</label>
                            <input type="text" id="lastname" name="surname" class="form-control" value="{{$user->surname}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail4"  value="{{$user->email}}"/>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control"  name="username" value="{{$user->username}}"/>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$user->phone}}"/>
                    </div>   
                    <button type="submit" class="btn btn-primary">Save Changes</button>           
                </form>
                <hr class="my-4" style="border-width:3px; background-color:black">
                <form action="{{route('user.changePassword',$user->id)}}" method="POST">
                    @csrf                      
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Old Password</label>
                                <input type="password" class="form-control" name="old_password" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">New Password</label>
                                <input type="password" class="form-control" name="password" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="inputPassword6" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Password requirements</p>
                            <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li>Fill the old, new and confirm password fields. Otherwise password can not be changed.</li>
                                <li>Minimum 8 character</li>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Password</button> 
                </form>
            </div>
        </div>
    </div>
    
    </div>
@endsection