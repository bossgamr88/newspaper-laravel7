@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ Session('message') }}
			</div>
			@endif
			<h3>Web Setting</h3>
			<form method="post" action="{{ url('addsettings') }}" enctype="multipart/form-data">
				{{-- CSRF Token --}}
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{ encrypt('settings') }}">
				<div class="form-group">
					<label>Logo</label>
					<input type="file" name="image" class="form-control">
				</div>

				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10">
						
					</textarea>
				</div>
				<div id="socialFieldGroup">
					<div class="form-group">
						<label>Social</label>
						<input type="url" name="social[]" class="form-control">
						<p class="text-muted">e.g. https://web.facebook.com/pakawat.klomyang.5/</p>
					</div>
				</div>
				<div class="text-right form-group"> <!-- Add jquery script -->
					<span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
				</div>
				
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
						<a href="#" class="close" data-dismiss="alert">&times;</a>
						<strong>Sorry !</strong> You've reached the social fields limit.
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>	
		</div>
	</div>
</div>
<style>
	.noshow{display: none;}
</style>
<script>	
		var socialCounter = 1;
		$('#addSocialField').click(function() {
			socialCounter++;
			if (socialCounter > 5) {
				// $('socialAlert').show();
				$('#socialAlert').removeClass('noshow');
				return;
			}
			newDiv = $(document.createElement('div')).attr("class","form-group");
			newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>');
			newDiv.appendTo('#socialFieldGroup');
		});
</script>
@endsection