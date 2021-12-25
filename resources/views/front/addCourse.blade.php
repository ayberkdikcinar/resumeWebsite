@extends('front.layouts.master')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
				<div class="px-4 pt-4 pb-0 mt-3 mb-3">
					<form id="form" action="{{route('course.store')}}" method="POST">	
                        @csrf			
                            <div class="form-row">
                                <h2>Welcome To GFG Step 1</h2>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">name</label>
                                  <input type="text" class="form-control" name="course_name" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">provider</label>
                                  <input type="text" class="form-control" name="provider" placeholder="Password">
                                </div>
                              <div class="form-group col-md-12">
                                <label for="inputAddress">description</label>
                                <input type="text" class="form-control" name="description" placeholder="1234 Main St">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputAddress2">time</label>
                                <input type="date" class="form-control" name="completed_time" placeholder="Apartment, studio, or floor">
                              </div>
							  <div class="col-md-12">
                                <label>Submit</label>
                                <button type="submit" name="submit" class="btn-block btn btn-primary">Add</button>	
                              </div>
								
					</form>
                    <div>
                        <ul>
                        @foreach (Auth::User()->courses as $collection)
                            <li>
                                {{$collection->name}}
                            </li>
                
                        @endforeach
                        </ul>
                        
                    </div>
				</div>
		</div>
	</div>
</body>
@section('js')
<script src="{{asset('front')}}/js/bootstrap.bundle.min.js"></script>

@endsection
@endsection