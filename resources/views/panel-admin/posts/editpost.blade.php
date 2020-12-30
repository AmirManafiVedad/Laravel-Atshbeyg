@extends('panel-admin.Panel-Admin')

@section('content')

    <div class="row _Margin_padding">
        <div class="col-8 _Margin_padding">
            <div class="_Create">
                @php
                    $a=' ویرایش پست';
                @endphp
                <h2 class="font40">{{$a}} {{$post->title}}</h2>
                {!! Form::model ($post , ['method' => 'PUT' , 'action' => ['Admin\AdminPostController@updatePost',$post->id] , 'files' => true]) !!}

                {!! Form::label ('title' , 'عنوان :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::text ('title' , null , ['class' => '_Create_input font18']) !!}
                <br>

                {!! Form::label ('description' , 'توضیحات پست در صفحه اصلی :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea  ('description' , null , ['class' => '_Create_description font18 ','maxlength' => 300]) !!}
                <br>
                <br>

                {!! Form::label ('photo_id' , 'تصویر پست در صفحه اصلی :' , ['class' => 'font18']) !!}
                {!! Form::file ('photo_id' , null , ['class' => 'form-control font18']) !!}
                <br>
                <br>
                <div class="_Create_Post_Desceditor">
                    {!! Form::label ('desc' , 'متن :' , ['class' => ' font18']) !!}
                    <br>
                    <br>
                    {!! Form::textarea ('desc' , null , ['class' => '_Create_desc font18' , 'id' => 'editor1']) !!}
                    <br>
                </div>
                <br>
                {!! Form::label ('slug' , 'نام مستعار :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('slug' , null , ['class' => '_Create_description font18']) !!}
                <br>
                {!! Form::label ('meta_description' , 'متا توضیحات :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('meta_description' , null , ['class' => '_Create_description font18']) !!}
                <br>
                <br>
                {!! Form::label ('meta_kay_words' , 'برچسب :' , ['class' => 'font18']) !!}
                <br>
                {!! Form::textarea ('meta_kay_words' , null , ['class' => '_Create_description font18']) !!}
                <br>
                <br>
                {!! Form::submit ('ذخیره' , ['class' => '_Create_submit font18']) !!}
                {!! Form::reset ('انصراف' , ['class' => '_Create_reset font18']) !!}
            </div>
        </div>
        <div class="col-4 _Margin_padding">

            <div class="_Editpost_img">
                <img src="{{url('/Image/PostImage/'.$post->photo->path)}}">
            </div>

            <div class="_Create_edit_select_categories">
                <h5 class="font23">دسته بندی</h5>
                <div class="_Create_edit_select">
                    {!! Form::select ('categories[]' , $categories , null , ['multiple' => 'multiple'] , ['class' => '_Create_edit_select font18']) !!}
                </div>
            </div>
            {!! Form::close() !!}

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
