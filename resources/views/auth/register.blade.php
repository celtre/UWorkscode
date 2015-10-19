@extends('layout2')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('auth.register_title')</div>
				<div class="panel-body">
					@include('partials/errors')

					<body class="login-img3-body">

						<div class="container">

							<form class="login-form" method="POST" action="{{ route('register') }}">
								<div class="login-wrap">
										<p class="login-img"><i class="icon_lock_alt"></i></p>
										<div class="input-group">
											<span class="input-group-addon"><i class="icon_profile"></i></span>
											<input type="text" class="form-control" name="name" placeholder="Username" autofocus>
										</div>
										<div class="input-group">
											<span class="input-group-addon"><i class="icon_profile"></i></span>
											<input type="email" class="form-control" name="email" placeholder="Email">
										</div>
										<div class="input-group">
												<span class="input-group-addon"><i class="icon_key_alt"></i></span>
												<input type="password" class="form-control" name="password"  placeholder="Password">
										</div>
										<div class="input-group">
											<span class="input-group-addon"><i class="icon_key_alt"></i></span>
											<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
										</div>

										<button class="btn btn-primary btn-lg btn-block" type="submit">send</button>


								</div>
							</form>

						</div>


					</body>
					<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">@lang('validation.attribute.name')</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">@lang('validation.attribute.email')</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">@lang('validation.attribute.password')</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">@lang('validation.attribute.password_confirmation')</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									@lang('auth.register_button')
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
