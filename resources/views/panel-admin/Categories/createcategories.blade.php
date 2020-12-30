@extends('panel-admin.Panel-Admin')

@section('content')
    <div class="row _Margin_padding">

        <div class="col-8 _Margin_padding">
            <div class="_Create">
                <h2 class="font40"> ایجاد دسته بندی جدید </h2>
                {!! Form::open (['method' => 'POST' , 'action' => 'Admin\AdminCategoryController@storeCategories' , 'files' => true]) !!}

                {!! Form::label ('title' , 'عنوان :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::text ('title' , null , ['class' => '_Create_input font18']) !!}
                <br>
                <br>

                {!! Form::label ('pohto_id' , 'تصویر پست در صفحه اصلی :' , ['class' => '_Create_img font18']) !!}
                {!! Form::file ('photo_id' , null , ['class' => 'form-control font18']) !!}
                <br>
                <br>
                {!! Form::label ('slug' , 'نام مستعار :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('slug' , null , ['class' => '_Create_description font18']) !!}
                <br>
                {!! Form::label ('meta_description' , 'متا توضیحات :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('meta_description' , null , ['class' => '_Create_description font18']) !!}
                <br>
                {!! Form::label ('meta_key_words' , 'برچسب :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('meta_key_words' , null , ['class' => '_Create_description font18']) !!}
                <br>
                <br>
            </div>
            <div>
                {!! Form::submit ('ذخیره' , ['class' => '_Create_submit font18']) !!}
                {!! Form::reset ('انصراف' , ['class' => '_Create_reset font18']) !!}
            </div>
            {!! Form::close() !!}

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
