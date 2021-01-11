<div class="container-fluid _Container_fluid_post">

<!------------      ---------------->

    <div class="row">
        <div class="col-12">
            <h4 class=" font25 _Post_title">مطالب سایت</h4>
        </div>
    </div>
</div>
<!------------      ---------------->
<div class="container-fluid _Container_fluid_post_color">

    <div class="row _Post_statistics_background _Margin_padding">
        <img src="{{url('Image/5.jpg')}}">
        <div class="col-12 _Post_statistics_position _Margin_padding">
            <div class="row">
                <div class="col-3">
                    <div class="_Post_statistics">
                        <i class="fas fa-clipboard"></i>
                        <br>
                        <p class="font24"><b>تعداد پست :</b></p>
                        <br>
                        <p class="font30"><b>1235</b></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="_Post_statistics">
                        <i class="fad fa-comments"></i>
                        <br>
                        <p class="font24"><b>تعداد کامنت :</b></p>
                        <br>
                        <p class="font30"><b>1235</b></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="_Post_statistics">
                        <i class="fas fa-heart"></i>
                        <br>
                        <p class="font24"><b>تعداد لایک :</b></p>
                        <br>
                        <p class="font30"><b>1235</b></p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="_Post_statistics">
                        <i class="fad fa-eye"></i>
                        <br>
                        <p class="font24"><b>تعداد بازدید :</b></p>
                        <br>
                        <p class="font30"><b>1235</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!------------      ---------------->

    <div class="row _Post_header">

        <div class="col-6">
            <div class="_Post_menu">
                <ul>
                    <span class="font19">دسته بندی &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <li class=""><a href="#" class="font16">اشعار</a></li>
                    <li class=""><a href="#" class="font16">تاریخچه</a></li>
                    <li class=""><a href="#" class="font16">گالری عکس</a></li>
                </ul>
            </div>
        </div>

        <div class="col-3 _Post_header_search">
            <form method="get" action="{{url('post/search')}}">
                    <input type="search" name="title" class="font16 _Post_header_search_input" id="" placeholder="متن مورد نظر خود را جستوجو کنید ...">
                    <button type="submit"><i class="far fa-search _Post_header_search_i"></i></button>
            </form>
        </div>

        <div class="col-3">
            <div class="_Filter_post">
                <label for="_Filter_post" class="font18">مرتبط سازی بر اساس :</label>
                    <div class="_Filter_post_select">
                        <select class="font16" name="sort" onchange="location=this.value">
                            <option @if(request('sort') == 'desc') selected @endif class="font18" value="{{ url('home') }}?sort=desc">
                                جدید ترین
                            </option>
                            <option @if(request('sort') == 'asc') selected="selected" @endif class="font18" value="{{ url('home') }}?sort=asc">
                                قدیمی ترین
                            </option>
                            <option @if(request('sort') == 'like') selected="selected" @endif class="font18" value="{{ url('home') }}?sort=like">
                                پسندیده ترین
                            </option>
                            <option class="font18" value="comment">
                                کامنت ترین
                            </option>
                            <option class="font18" value="point">
                                امتیاز ترین
                            </option>
                        </select>
                    </div>
            </div>
        </div>

    </div>

<!------------      ---------------->


    <div class="row _Margin_padding">

    @foreach($posts as $post)

        <div class="col-3 _Margin_padding">
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
