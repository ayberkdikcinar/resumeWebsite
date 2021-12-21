@extends('front.layouts.master')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
				<div class="px-4 pt-4 pb-0 mt-3 mb-3">
					<form id="form">
						<ul id="progressbar">
							<li class="active" id="step1">
								<strong>About Me</strong>
							</li>
							<li id="step2"><strong>My Experience</strong></li>
							<li id="step3"><strong>My Education</strong></li>
							<li id="step4"><strong>Languages I know</strong></li>
                            <li id="step5"><strong>My Skills</strong></li>
							<li id="step6"><strong>My Skills</strong></li>
							<li id="step7"><strong>My Skills</strong></li>
							<li id="step8"><strong>My Skills</strong></li>
							<li id="step9"><strong>My Skills</strong></li>
                            
						</ul>
						<div class="progress">
							<div class="progress-bar"></div>
						</div> <br>

						<fieldset>
							
                            <div class="form-row">
                                <h2>Welcome To GFG Step 1</h2>
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">Email</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Password</label>
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputCity">City</label>
                                  <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputState">State</label>
                                  <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputZip">Zip</label>
                                  <input type="text" class="form-control" id="inputZip">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Check me out
                                  </label>
                                </div>
                              </div>
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
						</fieldset>

						<fieldset>
							<h2>Welcome To GFG Step 2</h2>
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>

						<fieldset>
                            <h2>Welcome To GFG Step 3</h2>		
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>

                        <fieldset>
							<h2>Welcome To GFG Step 4</h2>
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>
						<fieldset>
                            <h2>Welcome To GFG Step 5</h2>		
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>
						<fieldset>
                            <h2>Welcome To GFG Step 6</h2>		
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>
						<fieldset>
                            <h2>Welcome To GFG Step 7</h2>		
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>
						<fieldset>
                            <h2>Welcome To GFG Step 8</h2>		
							<input type="button" name="next-step"
								class="next-step" value="Next Step" />
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>
						<fieldset>
							<h2>Welcome To GFG Step 9</h2>
							<input type="submit" name="next-step"
								class="next-step" value="Submit" id="submit"/>
							<input type="button" name="previous-step"
								class="previous-step"
								value="Previous Step" />
						</fieldset>

					</form>
				</div>
		</div>
	</div>
</body>
@section('js')
<script src="{{asset('front')}}/js/resume.js"></script> 
<script src="{{asset('front')}}/js/bootstrap.bundle.min.js"></script>
@endsection
@endsection