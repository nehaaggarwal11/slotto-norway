@extends('layouts.admin')
@section('content')
@can('casino_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.casinos.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.casino.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.casino.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Casino">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('cruds.casino.fields.id') }}</th>
                        <th>{{ trans('cruds.casino.fields.name') }}</th>
                        <th>{{ trans('cruds.casino.fields.link') }}</th>
                        <th>{{ trans('cruds.casino.fields.small_description') }}</th>
                        <th>{{ trans('cruds.casino.fields.info') }}</th>
                        <th>{{ trans('cruds.casino.fields.rating') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($casinos as $key => $casino)
                        <tr data-entry-id="{{ $casino->id }}">
                            <td></td>
                            <td>{{ $casino->id ?? '' }}</td>
                            <td>{{ $casino->name ?? '' }}</td>
                            <td>{{ $casino->link ?? '' }}</td>
                            <td>{{ $casino->small_description ?? '' }}</td>
                            <td>{{ $casino->info ?? '' }}</td>
                            <td>{{ $casino->rating ?? '' }}</td>
                            <td>
                                <a class="btn btn-xs btn-success" href="{{ $casino->route }}" target="_blank">
                                    {{ trans('global.slug') }}
                                </a>
                                @can('casino_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.casinos.show', $casino->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('casino_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.casinos.edit', $casino->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('casino_delete')
                                    <form action="{{ route('admin.casinos.destroy', $casino->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('casino_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.casinos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Casino:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
