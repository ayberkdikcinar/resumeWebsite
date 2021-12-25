@extends('front.layouts.master')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="px-4 pt-4 pb-0 mt-3 mb-3">
			<form id="form">
				<ul id="progressbar">
					<li class="active" id="step1"><strong>About Me</strong></li>
					<li id="step2"><strong>My Experience</strong></li>
					<li id="step3"><strong>My Education</strong></li>
					<li id="step4"><strong>Languages I Know</strong></li>
					<li id="step5"><strong>My Skills</strong></li>
					<li id="step6"><strong>Courses I Have Completed</strong></li>
					<li id="step7"><strong>Contact Details</strong></li>
					<li id="step8"><strong>Job Preferences</strong></li>
					<li id="step9"><strong>Documents</strong></li>
				</ul>
				<div class="progress">
					<div class="progress-bar"></div>
				</div> <br>

				<fieldset>

					<div class="form-row">
						<h2>ABOUT ME</h2>
						<hr width="15%" />
						<img src="{{asset('back/')}}/img/undraw_profile.svg" alt="Profile-Picture" class="profile-picture">
						<hr />
						<div class="form-group col-md-12">
							<label for="current-position">Current Position</label>
							<input type="text" class="form-control" id="current-position" placeholder="Current Position">
						</div>
						<div class="form-group col-md-6">
							<label for="first-name">First Name</label>
							<input type="text" class="form-control" id="first-name" placeholder="First Name">
						</div>
						<div class="form-group col-md-6">
							<label for="last-name">Last Name</label>
							<input type="text" class="form-control" id="last-name" placeholder="Last Name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="date-of-birth">Date of Birth</label>
							<input type="date" class="form-control" name="date-of-birth">
						</div>
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
					<input type="button" name="next-step" class="next-step" value="Next Step" />
				</fieldset>

				<fieldset>
					<h2>Welcome To GFG Step 2</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>

				<fieldset>
					<h2>Welcome To GFG Step 3</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>

				<fieldset>
					<h2>Welcome To GFG Step 4</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>
				<fieldset>
					<h2>Welcome To GFG Step 5</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>
				<fieldset>
					<h2>Welcome To GFG Step 6</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>
				<fieldset>
					<h2>Welcome To GFG Step 7</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>
				<fieldset>
					<h2>Welcome To GFG Step 8</h2>
					<input type="button" name="next-step" class="next-step" value="Next Step" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
				</fieldset>
				<fieldset>
					<h2>Welcome To GFG Step 9</h2>
					<input type="submit" name="next-step" class="next-step" value="Submit" id="submit" />
					<input type="button" name="previous-step" class="previous-step" value="Previous Step" />
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