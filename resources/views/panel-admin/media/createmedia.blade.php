@extends('panel-admin.Panel-Admin')
@section('styles')
    <link rel="stylesheet" href="{{url('css/dropzone.min.css')}}">
@endsection
@section('content')
    <div class="row _Margin_padding">

        <div class="col-8 _Margin_padding">
            <div class="_Create">
                <h2 class="font40"> آپلود فایل </h2>
                {!! Form::open (['method' => 'POST' , 'action' => 'Admin\AdminMediaController@storeMedia' ,'class'=>'dropzone' , 'files' => true]) !!}
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-4 _Margin_padding">

            <div class="_Error_paneleadmin">
                <br>
                <h5 class="font23">لیست خطـا ها</h5>
                @if(count($errors)>0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="font18">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>

        </div>

    </div>
@endsection
@section('scripts')
    <script src="{{url('js/dropzone.min.js')}}"></script>
@endsection
