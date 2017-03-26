@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::cms.user_preference', 2) }} :: @parent
@stop

@section('styles')
@stop

@section('scripts')
@stop

@section('inline-scripts')
@stop


{{-- Content --}}
@section('content')


<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/user_preferences" class="btn btn-default" title="{{ trans('core::button.back') }}">
		<i class="fa fa-chevron-left fa-fw"></i>
		{{ trans('core::button.back') }}
	</a>
	</p>
	<i class="fa fa-edit fa-lg"></i>
	{{ trans('core::general.command.create') }}
	<hr>
</h1>
</div>

<div class="row">
{!! Form::open([
	'url' => 'admin/user_preferences',
	'method' => 'POST',
	'class' => 'form'
]) !!}

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
		<input type="text" id="key" name="key" placeholder="{{ trans('core::cms.key') }}" class="form-control" autofocus="autofocus">
</div>
</div>

<div class="form-group">
<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-info fa-fw"></i></span>
		<input type="text" id="value" name="value" placeholder="{{ Lang::choice('core::cms.value', 1) }}" class="form-control">
</div>
</div>


<hr>


<div class="row">
<div class="col-sm-12">
	<input class="btn btn-success btn-block" type="submit" value="{{ trans('core::button.save') }}">
</div>
</div>

<br>

<div class="row">
<div class="col-sm-6">
	<a href="/admin/user_preferences" class="btn btn-default btn-block" title="{{ trans('core::button.cancel') }}">
		<i class="fa fa-times fa-fw"></i>
		{{ trans('core::button.cancel') }}
	</a>
</div>

<div class="col-sm-6">
	<input class="btn btn-default btn-block" type="reset" value="{{ trans('core::button.reset') }}">
</div>
</div>

{!! Form::close() !!}


</div> <!-- ./ row -->


@stop
