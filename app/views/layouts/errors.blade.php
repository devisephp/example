
<div class="{{ $errors->any() ? '' : 'hidden' }} alert alert-warning" role="alert">
	<strong>Warning!</strong> Better check yourself, you're not looking too good.<br><br>

	@if ($errors->any())
		<ul>
	    	@foreach($errors->getMessages() as $error)
				<li>{{ $error[0] }}</li>
			@endforeach
		</ul>
	@endif

</div>