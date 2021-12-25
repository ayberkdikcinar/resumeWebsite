@extends('adminPanel.layouts.master')
@section('title','Add User')
@section('content')

<div class="card shadow mb-4 col-md-8">
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
        <form action="{{route('admin.user.store')}}" method="POST" id="addUserForm">
            @csrf

            <div class="form-group" id="usernameDiv">
                <label>Username <label style="color: red">*</label> </label>
                <input type="text" name="username" class="form-control" pattern=".{3,15}"
                 oninvalid="this.setCustomValidity('must containt at least 3, at most 15 characters')" oninput="this.setCustomValidity('')" required>
            </div>
            <div class="form-group">
                <label>Email <label style="color: red">*</label></label>
                <input type="email" name="email" class="form-control" 
                oninvalid="this.setCustomValidity('must be an email format. Example: example@example.com')" oninput="this.setCustomValidity('')" required >
            </div>
            <div class="form-group">
                <label>Password <label style="color: red">*</label></label>
                <input type="password" name="password" class="form-control"  pattern=".{8,}" 
                oninvalid="this.setCustomValidity('must contain at least 8 or more characters')" oninput="this.setCustomValidity('')" required>
            </div>
            <div class="form-group">
                <label>Retype-Password <label style="color: red">*</label></label>
                <input type="password" name="password_confirmation" class="form-control" pattern=".{8,}" 
                oninvalid="this.setCustomValidity('Should be the same with your password')" oninput="this.setCustomValidity('')" required>
            </div>
            <div class="form-group">
                <label>User Type:  </label>
                <select name="whatIs" id="selectUserType">
                    <option>Customer</option>
                    <option>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Add</button>
            </div>
        </form> 
    </div>
</div>
@section('js')

<script>
    $(document).ready(function(){
        $("#selectUserType").change(function(){
            var selectedUser = $(this).children("option:selected").val();
            var usernameDiv = $("#usernameDiv");
            
            if(selectedUser=="Admin" && (!document.getElementById("firstLastAppend"))){        
                usernameDiv.before(`
                <div class="row" id="firstLastAppend">
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Firstname <label style="color: red">*</label></label>
                        <input type="string" name="name" class="form-control" pattern=".{3,}" 
                        oninvalid="this.setCustomValidity('must contain at least 3 or more characters')" oninput="this.setCustomValidity('')" required>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Lastname <label style="color: red">*</label></label>
                        <input type="string" name="surname" class="form-control" pattern=".{3,}" 
                        oninvalid="this.setCustomValidity('must contain at least 3 or more characters')" oninput="this.setCustomValidity('')" required>
                    </div>
                    </div>
                </div>
                `);
            }else{
                $("#firstLastAppend").remove();
            }
           
        });
    });

</script>
    
@endsection
 
@endsection