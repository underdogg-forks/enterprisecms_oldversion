@if ( Auth::user() )
@if (Auth::user()->can('manage_shisan'))
@if ( Module::exists('shisan') )


@if (count($site->rooms))
<h3>
	{{ Lang::choice('core::general.room', 2) }}
</h3>

<div class="row">
<table id="table_rooms" class="table table-striped table-hover">
	<thead>
		<tr>
			<th>{{ trans("core::table.name") }}</th>
			<th>{{ trans("core::table.description") }}</th>
			<th>{{ trans("core::table.barcode") }}</th>
			<th>{{ Lang::choice('core::table.user', 1) }}</th>
			<th>{{ trans("core::table.status") }}</th>

			<th>{{ Lang::choice('core::table.action', 2) }}</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($rooms as $room)
		<tr>
			<td>
				{{ $room->name }}
			</td>
			<td>
				{{ $room->description }}
			</td>
			<td>
				{{ $room->barcode }}
			</td>
			<td>
				{{-- $room->present()->employeeName($room->user_id) --}}
				{{ $room->last_name }},&nbsp;{{ $room->first_name }}&nbsp;{{ $room->middle_initial }}
			</td>
			<td>
				{{-- $room->present()->status($room->status_id) --}}
				{{ $room->status_id == 1 ? trans('core::general.enabled') : trans('core::general.disabled') }}
			</td>
			<td>
				<a href="{{ URL::to('/admin/rooms/' . $room->id . '/edit' ) }}" class="btn btn-success" >
					<span class="glyphicon glyphicon-pencil"></span>  {{ trans("core::button.edit") }}
				</a>
				<a href="{{ URL::to('/admin/rooms/' . $room->id ) }}" class="btn btn-info" >
					<span class="glyphicon glyphicon-search"></span>  {{ trans("core::button.view") }}
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>

</table>
</div>


@else
	<div class="alert alert-info">
		{{ trans('core::general.no_records') }}
	</div>
@endif

@endif
@endif
@endif
