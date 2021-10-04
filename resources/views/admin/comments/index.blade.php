@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.comment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Casino">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>{{ trans('cruds.comment.fields.id') }}</th>
                        <th>{{ trans('cruds.comment.fields.news') }}</th>
                        <th>{{ trans('cruds.comment.fields.comments') }}</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $key => $comment)
                        @if($comment->comments_count>0)
                            <tr data-entry-id="{{ $comment->id }}">
                                <td></td>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->name ?? '' }}</td>
                                <td>{{ $comment->comments_count }}</td>
                            
                                <td>
                                    @can('comment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.comments.show', $comment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                    @endcan

                                </td>

                            </tr>
                        @endif
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
