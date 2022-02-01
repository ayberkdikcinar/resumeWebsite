@extends('adminPanel.layouts.master')
@section('content')
    <div class="container m-1">
        <a href="{{route('admin.user.index')}}" class="btn btn-sm btn-warning" style="display: inline-block;"><i class="fas fa-arrow-circle-left" style="color: darkblue; font-size: 18px"> Go back to user list</i></a>
        <h1 class="lead mt-3">Send mail to {{$user->username}}</h1>
        <div class="row">
            <div class="col md-12">
                <div class="card">
                    <div class="class-body">
                        @if(\Session::has('success'))
                            <div class="alert alert-success m-3">{{ \Session::get('success') }}</div>
                            {{ \Session::forget('success') }}
                        @endif
                        @if(\Session::has('error'))
                            <div class="alert alert-danger m-3">{{ \Session::get('error') }}</div>
                            {{ \Session::forget('error') }}
                        @endif
                        <form method="post" action="{{ route('admin.mailSend',$user->id)}}" enctype="multipart/form-data" class="m-5">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{$user->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="attachment" class="form-label">Mail Body</label>
                                <textarea class="form-control" name="email_body" id="" cols="30" rows="6" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="attachment" class="form-label">Attachment</label>
                                <input class="form-control" type="file" id="attachment" name="attachment">
                            </div>                           
                            <input type="submit" name="Send mail" class="form-control btn btn-primary" value="Send">  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection