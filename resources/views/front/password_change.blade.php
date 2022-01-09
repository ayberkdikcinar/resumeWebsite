@extends('front.layouts.master')
@section('title')
Password Change
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Change Password</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3"><br>
			<form amethod="post" id="passwordForm">
				<input type="password" class="input-lg form-control" name="old_password" id="old_password" placeholder="Old Password" autocomplete="on"><hr>
				<input type="password" class="input-lg form-control" name="password" id="password1" placeholder="New Password" autocomplete="off">
				<div class="row">
					<div class="col-sm-6">
						<span id="8char" class="fa fa-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
						<span id="ucase" class="fa fa-remove" style="color:#FF0004;"></span> One Uppercase Letter
					</div>
					<div class="col-sm-6">
						<span id="lcase" class="fa fa-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
						<span id="num" class="fa fa-remove" style="color:#FF0004;"></span> One Number
					</div>
				</div><br>
				<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
				<div class="row">
					<div class="col-sm-12">
						<span id="pwmatch" class="fa fa-remove" style="color:#FF0004;"></span> Passwords Match
					</div>
				</div><br>
				<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
			</form>
		</div>
		<!--/col-sm-6-->
	</div>
	<!--/row-->

	<br>
</div>
@endsection
@section('js')
<script>
	$("input[type=password]").keyup(function() {
		var ucase = new RegExp("[A-Z]+");
		var lcase = new RegExp("[a-z]+");
		var num = new RegExp("[0-9]+");

		if ($("#password1").val().length >= 8) {
			$("#8char").removeClass("fa-remove");
			$("#8char").addClass("fa-check");
			$("#8char").css("color", "#00A41E");
		} else {
			$("#8char").removeClass("fa-check");
			$("#8char").addClass("fa-remove");
			$("#8char").css("color", "#FF0004");
		}

		if (ucase.test($("#password1").val())) {
			$("#ucase").removeClass("fa-remove");
			$("#ucase").addClass("fa-check");
			$("#ucase").css("color", "#00A41E");
		} else {
			$("#ucase").removeClass("fa-check");
			$("#ucase").addClass("fa-remove");
			$("#ucase").css("color", "#FF0004");
		}

		if (lcase.test($("#password1").val())) {
			$("#lcase").removeClass("fa-remove");
			$("#lcase").addClass("fa-check");
			$("#lcase").css("color", "#00A41E");
		} else {
			$("#lcase").removeClass("fa-check");
			$("#lcase").addClass("fa-remove");
			$("#lcase").css("color", "#FF0004");
		}

		if (num.test($("#password1").val())) {
			$("#num").removeClass("fa-remove");
			$("#num").addClass("fa-check");
			$("#num").css("color", "#00A41E");
		} else {
			$("#num").removeClass("fa-check");
			$("#num").addClass("fa-remove");
			$("#num").css("color", "#FF0004");
		}

		if ($("#password1").val() == $("#password2").val()) {
			$("#pwmatch").removeClass("fa-remove");
			$("#pwmatch").addClass("fa-check");
			$("#pwmatch").css("color", "#00A41E");
		} else {
			$("#pwmatch").removeClass("fa-check");
			$("#pwmatch").addClass("fa-remove");
			$("#pwmatch").css("color", "#FF0004");
		}
	});
</script>

@endsection