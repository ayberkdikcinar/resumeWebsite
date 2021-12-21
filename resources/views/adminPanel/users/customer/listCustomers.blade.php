@extends('adminPanel.layouts.master')
@section('title','Customers')
@section('content')

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><strong>{{$users->count()}} </strong>customers have been found.</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Current Position</th>  
                        <th>Operations</th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">
                            <img src="{{$user->photo_url}}" width="90">
                        </td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->current_position}}</td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="#" title="Show Details" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.userCustomers.edit', $user->id)}}" title="Update" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="#" title="Send Email" class="btn btn-sm btn-warning"><i class="fa fa-envelope-open"></i></a>
                            <a href="#!" data-toggle="modal" data-url="{{ route('admin.userCustomers.destroy', $user->id)}}" 
                                data-target="#deleteUserModal" title="Delete" class="btn btn-sm btn-danger delete"><i class="fa fa-times delete"></i></a>
                        </td>
                    </tr>   
                    @endforeach
                   
              
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection