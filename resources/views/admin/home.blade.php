@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Sitemap
                </div>

                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <a href="{{ route("frontend.sitemap-page") }}" class="btn btn-link btn-outline-light" target="_blank">View</a>
                            <span class="input-group-text">{{ route("frontend.sitemap-page") }}</span>
                            <a href="{{ route("frontend.sitemap-page") }}" class="btn btn-link btn-outline-light" target="_blank" download>Download</a>
                        </div>
                    </div>
                    {{--<div class="d-flex">
                        <button class="generate_sitemap btn btn-info">Generate New Sitemap</button>
                        <span class="gs_message p-2 text-danger"></span>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--@section('scripts')
@parent
<script>
    $(".generate_sitemap").click(function () {
        $(this).prop("disable", true);
        $(".gs_message").html('Generating...');
        $.ajax({
            url: '{{ route('admin.generate-sitemap') }}',
            method: "post",
            headers: {
                'X-CSRF-TOKEN': window._token
            },
            success : function (res) {
                $(this).prop("disable", false);
                if(res.success){
                    $(".gs_message").html(res.message);
                }
            }
        });
    });
</script>
@endsection--}}
