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
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
