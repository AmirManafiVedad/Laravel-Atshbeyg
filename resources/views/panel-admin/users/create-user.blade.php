@extends('panel-admin.Panel-Admin')

@section('content')

    <div class="row _Margin_padding">
        <div class="col-8 _Margin_padding">
            <div class="_Create">
                <h2 class="font40"> ایجاد کاربر </h2>
                {!! Form::open (['method' => 'POST' , 'action' => 'Admin\AdminUserController@storeUser' , 'files' => true]) !!}
                {!! Form::label ('firstname' , 'نام :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::text ('firstname' , null , ['class' => '_Create_input font18']) !!}
                <br>
                {!! Form::label ('lastname' , 'نام خانوادگی :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::text ('lastname' , null , ['class' => '_Create_input font18 ']) !!}
                <br>
                {!! Form::label ('username' , 'نام کاربری :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::text ('username' , null , ['class' => '_Create_input font18']) !!}
                <br>
                {!! Form::label ('email' , 'ایمیل :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::email ('email' , null , ['class' => '_Create_input font18']) !!}
                <br>
                {!! Form::label ('pohto_id' , 'تصویر پروفایل :' , ['class' => 'font18']) !!}
                {!! Form::file ('photo_id' , null , ['class' => 'form-control font18']) !!}
                <br>
                {!! Form::label ('roles' , 'نقش کاربر :' , ['class' => 'font18']) !!}

                <div class="_Create_select">
                    {!! Form::select ('roles[]' , $roles , null , ['multiple' => 'multiple'] , ['class' => '_Create_select font18']) !!}
                </div>
                <br>
                {!! Form::label ('password' , 'رمز عبور :' , ['class' => 'font18']) !!}
                <br>
                <div class="_Create_password">
                    {!! Form::password ('password' , null , ['class' => '_Create_password font18']) !!}
                </div>
                {!! Form::submit ('ذخیره' , ['class' => '_Create_submit font18']) !!}
                {!! Form::reset ('انصراف' , ['class' => '_Create_reset font18']) !!}
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-4 _Margin_padding">
            <div class="_Error_paneleadmin">
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
