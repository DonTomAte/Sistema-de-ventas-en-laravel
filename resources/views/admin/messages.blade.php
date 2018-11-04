@if(count($errors)>0)
<div class="container">
	<div class="alert alert-danger">
		<h2>Corrige los errores:</h2>
		<ul>
		@foreach($errors->all() as $message)
			<li> {{ $message}} </li>
		@endforeach
		</ul>
	</div>
</div>
@endif