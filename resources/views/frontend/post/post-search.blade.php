@extends('frontend.post.post-index')

@section('content')
    <h1>نتیجه جستوجوی شما : {{$query}} </h1>
    <div class="container-fluid _Margin_padding">
        <div class="row _Margin_padding">
            @foreach($searchtitle as $search)
            <div class="col-4 _Margin_padding">
                <div class="_Post_img">
                    <img src="{{url('Image/Postimage/',$search->photo->path)}}">
                </div>
            </div>

            <div class="col-8 _Margin_padding">
                <div class="_Post_text_col">
                    <div class="row _Margin_padding">
                        <div class="col-9 _Margin_padding">
                            <div class="_Post_text">
                                <h2 class="font32">{{$search->title}}</h2>
                                <div class="_Post_text_categories">
                                    <span class="font16">دسته بندی :
                                    @foreach($search->categories as $category)
                                        #  &nbsp;  {{$category->title}}  &nbsp;
                                    @endforeach

                                    </span>
                                </div>
                                <h6 class="font18">{{$search->description}}</h6>
                                <div class="_Post_link">
                                    <div class="row _Margin_padding">
                                        <div class="col-4 _Margin_padding">
                                            <div class="_Post_link_border_right"></div>
                                        </div>
                                        <div class="col-4 _Margin_padding _Post_link_a">
                                            <a href="{{url('home/post/'.$search->slug)}}" class="font18">ادامه مطلب</a>
                                        </div>
                                        <div class="col-4 _Margin_padding">
                                            <div class="_Post_link_border_left"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 _Margin_padding">
                            <div class="_Post_icon">

                                <div class="_Post_text_icon" id="User">
                                <i class="fa fa-user font22"></i>
                                <p class="font15">{{$search->user->firstname}}{{$search->user->lastname}}</p>
                                </div>

                                <div class="_Post_text_icon" id="Likes">
                                    <i class="fa fa-heart font22"></i>
                                    <p class="font17">{{$search->like}}</p>
                                </div>

                                <div class="_Post_text_icon" id="Points">
                                    <i class="fa fa-star font22"></i>
                                    <p class="font17">4.5</p>
                                </div>

                                <div class="_Post_text_icon" id="Views">
                                    <i class="fa fa-eye font22"></i>
                                    <p class="font17">1020</p>
                                </div>

                                <div class="_Post_text_icon" id="Comment">
                                    <i class="fa fa-comments font22"></i>
                                    <p class="font17">250</p>
                                </div>
                                @php
                                    $datetime = \Hekmatinasser\Verta\Verta::instance($search->created_at);
                                        $result = explode(" ",$datetime);
                                        $date = $result[0];
                                        $clock = $result[1];
                                @endphp
                                <div class="_Post_text_icon" id="Time">
                                    <i class="fa fa-clock font22"></i>
                                    <p class="font17">{{$clock}}</p>
                                </div>

                                <div class="_Post_text_icon" id="Clock">
                                    <i class="fa fa-calendar-alt font22"></i>
                                    <p class="font17">{{$date}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>

@endsection
