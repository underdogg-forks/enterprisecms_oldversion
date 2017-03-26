@extends($theme_back)


{{-- Web site Title --}}
@section('title')
{{ Lang::choice('core::cms.setting', 2) }} :: @parent
@stop

@section('styles')
	<link href="{{ asset('assets/vendors/DataTables-1.10.7/plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script src="{{ asset('assets/vendors/DataTables-1.10.7/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/DataTables-1.10.7/plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
@stop

@section('inline-scripts')
$(document).ready(function() {
oTable =
	$('#table').DataTable({
		stateSave: true,
		'pageLength': 25
	});
});
@stop


{{-- Content --}}
@section('content')

<div class="row">
<h1>
	<p class="pull-right">
	<a href="/admin/settings/create" class="btn btn-primary" title="{{ trans('core::button.new') }}">
		<i class="fa fa-plus fa-fw"></i>
		{{ trans('core::button.new') }}
	</a>
	</p>
	<i class="fa fa-paperclip fa-lg"></i>
		{{ Lang::choice('core::cms.setting', 2) }}
	<hr>
</h1>
</div>

@if (count($settings))

<div class="row">
<table id="table" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ trans('core::table.name') }}</th>
			<th>{{ trans('core::table.value') }}</th>
			<th>{{ Lang::choice('core::table.action', 2) }}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($settings as $setting)
			<tr>
				<td>
					{{ $setting->key }}
				</td>
				<td>
					{{ Setting::get($setting->key) }}
				</td>
				<td>
					<a href="/admin/settings/{{ $setting->key }}/edit" class="btn btn-success" title="{{ trans('core::button.edit') }}">
						<i class="fa fa-pencil fa-fw"></i>
						{{ trans('core::button.edit') }}
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
</div>

@else
<div class="alert alert-info">
	{{ trans('core::general.error.not_found') }}
</div>
@endif

</div>
@stop
