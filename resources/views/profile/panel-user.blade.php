<div class="_Profile_panel_menu_left_Panel_user_post">
    <div class="row">

        @foreach($posts as $post)
            <div class="col-4 _Margin_padding">
                <div class="_Post_home">
                    <div class="_Post_home_img">
                        <img src="{{url('Image/PostImage',$post->photo->path)}}">
                        <div class="row _Margin_padding _Post_home_img_col">
                            <div class="col-3 _Margin_padding _Post_home_img_icon _Post_home_img_comment">
                                <i class="fas fa-comments"></i>
                                <p class="font18">6516</p>
                            </div>
                            <div class="col-3 _Margin_padding _Post_home_img_icon _Post_home_img_heart">
                                <i class="fas fa-heart"></i>
                                <p class="font18">{{$post->like}}</p>
                            </div>
                            <div class="col-3 _Margin_padding _Post_home_img_icon _Post_home_img_star">
                                <i class="fas fa-star"></i>
                                <p class="font18">6151</p>
                            </div>
                            <div class="col-3 _Margin_padding _Post_home_img_icon _Post_home_img_view">
                                <i class="fas fa-eye"></i>
                                <p class="font18">{{$post->views}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="_Post_home_text">
                        <h5 class="font22"><b>{{$post->title}}</b></h5>
                        <p></p>
                        <h6 class="font16">{{$post->description}}</h6>
                    </div>
                    <div class="_Post_information">
                        <div class="_Post_information_user">
                            <div class="_Post_information_user">
                                <i class="fa fa-user"></i>
                                <p class="font14">{{$post->user->firstname}}{{$post->user->lastname}}</p>
                            </div>
                        </div>
                        @php
                            $datetime = \Hekmatinasser\Verta\Verta::instance($post->created_at);
                                $result = explode(" ",$datetime);
                                $date = $result[0];
                                $clock = $result[1];
                        @endphp
                        <div class="_Post_information_time">
                            <div class="_Post_information_time">
                                <i class="fal fa-clock"></i>
                                <p class="font12">{{$clock}}</p>
                            </div>
                            <div class="_Post_information_time">
                                <i class="fal fa-calendar-alt"></i>
                                <p class="font12">{{$date}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row _Margin_padding">
                        <div class="col-2 _Margin_padding">
                            <div class="_Post_home_link_border"></div>
                        </div>
                        <div class="col-8 _Margin_padding">
                            <div class="_Post_home_link">
                                <a href="{{url('home/post/'.$post->slug)}}" class="font17">بیشتر بخوانید ...</a>
                            </div>
                        </div>
                        <div class="col-2 _Margin_padding">
                            <div class="_Post_home_link_border"></div>
                        </div>
                    </div>

                </div>
            </div>

        @endforeach

    </div>
</div>
