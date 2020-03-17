@inject('request', 'Illuminate\Http\Request')

@if ($request->session()->has('success'))
	<div class="main-box-body clearfix">
		<div class="alert alert-success fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<i class="fa fa-check-circle fa-fw fa-lg"></i>
			@foreach ($request->session()->get('success') as $message)
				<strong> {!! $message !!} </strong>
			@endforeach
		</div>
	</div>
@endif

@if ($request->session()->has('error'))
	<div class="main-box-body clearfix">
		<div class="alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			@foreach ($request->session()->get('error') as $message)
				<i class="fa fa-times-circle fa-fw fa-lg"></i> <strong> {!! $message !!} </strong> <br />
			@endforeach
		</div>
	</div>
@endif

@if (isset($errors) && !$errors->isEmpty())
	<div class="main-box-body clearfix">
		<div class="alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			@foreach ($errors->all() as $message)
				<i class="fa fa-times-circle fa-fw fa-lg"></i> <strong> {!! $message !!} </strong> <br />
			@endforeach
		</div>
	</div>
@endif