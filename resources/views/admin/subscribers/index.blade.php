@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.subscriber.title_singular') }} {{ trans('global.list') }}
        </div>
        <div class="card-body">
            <div class="clearfix mb-4">
                <div class="float-right">
                    <h6 class="card-sub-title">FILTERS</h6>
                    <form action="" method="get" id="subscribers_filter_form" class="form-inline">
                        <div class="form-group mr-3 mb-2">
                            <label for="status" class="sr-only">Status</label>
                            <select id="status" name="status" class="form-control" data-selected="{{ $filters->status }}">
                                <option value="">All</option>
                                <option value="pending">Pending to verify email</option>
                                <option value="unsubscribed">Unsubscribed</option>
                                <option value="subscribed">Subscribed</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Filter</button>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-subscriber">
                    <thead>
                        <tr>
                            <th width="10"></th>
                            <th>{{ trans('cruds.subscriber.fields.id') }}</th>
                            <th>{{ trans('cruds.subscriber.fields.email') }}</th>
                            <th>{{ trans('cruds.subscriber.fields.status') }}</th>
                            <th>{{ trans('cruds.subscriber.fields.created_at') }}</th>
                            <th>{{ trans('cruds.subscriber.fields.updated_at') }}</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscribers as $key => $subscriber)
                            <tr data-entry-id="{{ $subscriber->id }}" data-entry-email="{{ $subscriber->email }}">
                                <td></td>
                                <td>{{ $subscriber->id ?? '' }}</td>
                                <td>{{ $subscriber->email ?? '' }}</td>
                                <td>{{ $subscriber->status ?? '' }}</td>
                                <td>{{ $subscriber->created_at ?? '' }}</td>
                                <td>{{ $subscriber->updated_at ?? '' }}</td>
                                <td>
                                    <a class="btn btn-xs btn-{{ $subscriber->status == 'subscribed' ? 'success': 'warning' }}" href="{{ route('admin.subscribers.email', ['emails[]' => $subscriber->email]) }}">
                                        {{ trans('cruds.subscriber.fields.email') }}
                                    </a>
                                    @can('subscriber_delete')
                                        <form action="{{ route('admin.subscribers.destroy', $subscriber->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
            @can('subscriber_send_email')
                let sendEmailButtonTrans = '{{ trans('global.send') }} {{ trans('cruds.subscriber.fields.email') }}'
                let sendEmailButton = {
                    text: sendEmailButtonTrans,
                    url: "{{ route('admin.subscribers.email') }}",
                    className: 'btn-success',
                    action: function (e, dt, node, config) {
                        var emails = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                            return $(entry).data('entry-email')
                        });
                        if (emails.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')
                            return
                        }
                        emails = $.map(emails, function (email) {
                            return 'emails[]='+email;
                        });
                        emails = emails.join('&');
                        window.location.href = "{{ route('admin.subscribers.email') }}?" + emails;
                    }
                }
                dtButtons.push(sendEmailButton)
            @endcan
            @can('subscriber_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.subscribers.massDestroy') }}",
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
            $('.datatable-subscriber:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
