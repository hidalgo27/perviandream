@extends('layouts.admin.app')
@section('sidebar')
    @parent
    @include('layouts.admin.sidebar')
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb small font-weight-bold p-0 m-0 bg-white">
                                <li class="breadcrumb-item"><a href="#">1. Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <form action="{{route('admin_destinations_store_path')}}" method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="font-weight-bold text-secondary small" for="txt_destination">Destination</label>
                    <input type="text" name="txt_destination" class="form-control font-weight-bold" id="txt_destination" placeholder="" value="{{old('txt_codigo')}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="font-weight-bold text-secondary small" for="txt_country">Country</label>
                    <input type="text" name="txt_country" class="form-control font-weight-bold" id="txt_country">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">Short</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_short"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">Extended</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_extended"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">History</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_history"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="font-weight-bold text-secondary small">Geography</h3>
                <div class="form-group">
                    <textarea class="textarea-package" name="txta_geography"></textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-3">
            <div class="col text-center">
                {{--<a href="" class="btn btn-primary font-weight-bold">Update Package</a>--}}
                <button type="submit" class="btn btn-primary font-weight-bold">Create itinerary</button>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=m4amx6h3rsnmj9whskr1vn3m6mpv7bi6qwwscvtbam4h0uic "></script>
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.textarea-package',
            height: 250,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tiny.cloud/css/codepen.min.css'
            ]
        });
    </script>
@endpush