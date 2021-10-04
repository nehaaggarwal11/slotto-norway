@extends('layouts.admin')
@section('content')
@can('game_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.games.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.game.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.game.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Game">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('cruds.game.fields.id') }}</th>
                        <th>{{ trans('cruds.game.fields.logo') }}</th>
                        <th>{{ trans('cruds.game.fields.bg_image_text') }}</th>
                        <th>{{ trans('cruds.game.fields.bg_image_button_text') }}</th>
                        <th>&nbsp;</th>
                    </tr> 
                </thead>
                <tbody>
                  @foreach($games as $key => $game)
                    <tr data-entry-id="{{ $game->id }}">
                        <td></td>
                        <td>{{ $game->id ?? '' }}</td>
                        <td> @if($game->logo)
                            <a href="{{ $game->logo->getUrl() }}" target="_blank">
                                <img src="{{ $game->logo->getUrl('thumb') }}" width="50px" height="50px">
                            </a>
                        @endif</td>
                        <td>{{ $game->bg_image_text ?? '' }}</td>
                        <td>{{ $game->bg_image_button_text ?? '' }}</td>
                        <td>
                            <a class="btn btn-xs btn-success" href="{{ $game->route }}" target="_blank">
                                {{ trans('global.slug') }}
                            </a>
                            
                            @can('game_show')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.games.show', $game->id) }}">
                                    {{ trans('global.view') }}
                                </a>
                            @endcan

                            @can('game_edit')
                                <a class="btn btn-xs btn-info" href="{{ route('admin.games.edit', $game->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endcan

                            @can('game_delete')
                                <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('game_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.games.massDestroy') }}",
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
  $('.datatable-Game:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
