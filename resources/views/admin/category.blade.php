@extends('layouts.master')
@section('title')
 Admin | Category
@endsection

@section('content')
	<div class="row">
		<div class="col-md-12 col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">
				    <h2 class="panel-title">Create Product Category</h2>
				</div>
				<div class="panel-body">
				  	<div class="row">
				  		<div class="col-md-4 product-left">
				  			@include('partials.adminleft')	
						</div>
						<div class="col-md-8 product-right">
							<div class="row">
								<div class="row category-form">
									<div class="col-md-6 col-md-6 col-md-offset-2">
										<div class="row">
											<div class="col-md-8">
												@if (Session::has('category'))
												<div class="alert alert-success" data-dismiss = "alert" role="alert">
												    {{ Session::get('category') }}
												</div>
												@endif
											</div>									
										</div>

										<h3>Create Category</h3>
										<hr>
										<form class="form-vertical" role="form" method="post" action="#">
										<input type="hidden" value="{{ csrf_token() }}" name="_token">
								            <div class="form-group{!! $errors->has('name') ? ' has-error' : '' !!}">
								                <input type="text" name="name" class="form-control" id="name"
								               	value="{{ Request::old('name') ?: '' }}">
					                            @if ($errors->has('name'))
					                              	<span class="help-block">
					                                  {{ $errors->first('name') }}
					                              	</span>
					                            @endif
								            </div>
								            <div class="form-group">
								            	<button type="submit" class="btn btn-sm btn-info">Create Category</button>
								            </div>
							            </form>
							        </div>    
								</div>
							</div>
						</div>
				  	</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="panel-footer default">
					@include('partials.footer')
				</div>

			</div>
		</div>
	</div>
@endsection