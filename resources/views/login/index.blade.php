@extends('layouts.designLogin')
@section('content')
<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>Bienvenid@ A Cisco</h3>
				<p>Sistema de inventario!</p>
			</div>
            @if(Session::has('flash_message_error'))
            <div class="alert alert-danger alert-mg-b" role="alert">
                                <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
            @endif
            @if(Session::has('flash_message_success'))
            <div class="alert alert-success" role="alert">
                                <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
            @endif
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form method="POST" action="{{ url('LoginAuth') }}" id="loginForm">@csrf
                            <div class="form-group">
                                <label class="control-label" for="username">User Name</label>
                                <input type="text" placeholder="User Name" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Lab Username</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password Lab</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Password Lab</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
                                <p class="help-block small">(unique access account)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
			</div>
	
    @endsection