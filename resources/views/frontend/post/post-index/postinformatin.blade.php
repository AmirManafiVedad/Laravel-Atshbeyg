@php
    $avg=intval($avgScore);
@endphp
    <div class="row">
        <div class="col-12">
            <div class="_Informating_post">
                <div class="row _Margin_padding">
                    <div class="col-3 _Margin_padding _Informating_post_text_border"></div>
                    <div class="col-6 _Margin_padding"><h6 class="_Informating_post_text font22">اطلاعات مطلب</h6></div>
                    <div class="col-3 _Margin_padding _Informating_post_text_border"></div>
                </div>

                {{--      Auth User For Add Point          --}}

                <div class="row _Margin_padding" >
                    <div class="col-12 _Margin_padding" onmouseenter="Informatingpostpointstar0()">
                        @auth()
                            @if($isScore)
                                @if($avg==1)
                                    <style>
                                        #_Informating_post_star1{
                                            color: #ffe502!important;
                                        }
                                    </style>
                                @elseif($avg==2)
                                    <style>
                                        #_Informating_post_star1, #_Informating_post_star2{
                                            color: #ffe502!important;
                                        }
                                    </style>
                                @elseif($avg==3)
                                    <style>
                                        #_Informating_post_star1, #_Informating_post_star2, #_Informating_post_star3{
                                            color: #ffe502!important;
                                        }
                                    </style>
                                @elseif($avg==4)
                                    <style>
                                        #_Informating_post_star1, #_Informating_post_star2, #_Informating_post_star3, #_Informating_post_star4{
                                            color: #ffe502!important;
                                        }
                                    </style>
                                @elseif($avg==5)
                                    <style>
                                        #_Informating_post_star1, #_Informating_post_star2, #_Informating_post_star3, #_Informating_post_star4, #_Informating_post_star5{
                                            color: #ffe502!important;
                                        }
                                    </style>
                                @endif
                                <div class="_Informating_post_point">
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar1()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="1" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star1" onmouseover="Informatingpostpointstar1()"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar2()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="2" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star2"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar3()"  onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="3" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star3"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}"  onmouseover="Informatingpostpointstar4()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="4" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star4"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar5()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="5" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star5"></i>
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="_Informating_post_point">
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar1()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="1" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star1" onmouseover="Informatingpostpointstar1()"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar2()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="2" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star2"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar3()"  onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="3" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star3"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}"  onmouseover="Informatingpostpointstar4()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="4" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star4"></i>
                                        </button>
                                    </form>
                                    <form method="post" action="{{url('home/post/'.$post->id.'/score')}}" onmouseover="Informatingpostpointstar5()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="5" name="point_score">
                                        <button type="submit">
                                            <i class="fas fa-star font28" id="_Informating_post_star5"></i>
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                        @guest()
                                <div class="_Informating_post_point">
                                    <form onmouseover="Informatingpostpointstar1()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="1" name="point_score">
                                        <button type="button">
                                            <i class="fas fa-star font28" id="_Informating_post_star1" onmouseover="Informatingpostpointstar1()"></i>
                                        </button>
                                    </form>
                                    <form onmouseover="Informatingpostpointstar2()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="2" name="point_score">
                                        <button type="button">
                                            <i class="fas fa-star font28" id="_Informating_post_star2"></i>
                                        </button>
                                    </form>
                                    <form onmouseover="Informatingpostpointstar3()"  onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="3" name="point_score">
                                        <button type="button">
                                            <i class="fas fa-star font28" id="_Informating_post_star3"></i>
                                        </button>
                                    </form>
                                    <form onmouseover="Informatingpostpointstar4()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="4" name="point_score">
                                        <button type="button">
                                            <i class="fas fa-star font28" id="_Informating_post_star4"></i>
                                        </button>
                                    </form>
                                    <form onmouseover="Informatingpostpointstar5()" onmouseout="Informatingpostpointstar0()">
                                        @csrf
                                        <input type="hidden" value="5" name="point_score">
                                        <button type="button">
                                            <i class="fas fa-star font28" id="_Informating_post_star5"></i>
                                        </button>
                                    </form>
                                </div>
                            @endguest


                        <div class="font17 _Informating_post_point_text">
                                <span>میانگین</span>

                                &nbsp;{{$avg}}&nbsp;
                                <span>امتیاز از مجموعه تعداد</span>
                                &nbsp;{{$isScore}}&nbsp;
                                <span>رای</span>
                        </div>
                    </div>
                </div>

                <!--                    -->

                <div class="row _Margin_padding">
                    <div class="col-12 _Margin_padding">
                        <div class="_Informating_post_statistics">
                            <div class="row  _Margin_padding">
                                <div class="col-4 _Margin_padding">
                                    <div class="_Informating_post_statistics_time">
                                        <i class="fal fa-calendar-alt font36"></i>
                                        <h6 class="font17">زمان انتشار</h6>
                                        <p class="font19"><b>
                                           @php
                                            $datetime = \Hekmatinasser\Verta\Verta::instance($post->created_at);
                                                $result = explode(" ",$datetime);
                                                $date = $result[0];
                                                echo $date;
                                           @endphp
                                           </b></p>
                                    </div>
                                </div>
                                <div class="col-4 _Margin_padding">
                                    <div class="_Informating_post_statistics_like">
                                        <i class="fas fa-heart font36"></i>
                                        <h6 class="font17">تعداد لایک</h6>
                                        <p class="font19"><b>{{$post->like}}</b></p>
                                    </div>
                                </div>
                                <div class="col-4 _Margin_padding">
                                    <div class="_Informating_post_statistics_comment">
                                        <i class="fas fa-eye font36"></i>
                                        <h6 class="font17">تعداد بازدید</h6>
                                        <p class="font19"><b>{{$post->views}}</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                    -->

                <div class="row _Margin_padding">
                    <div class="col-12 _Margin_padding">
                        <div class="_Informating_post_like _Margin_padding">
                            @guest()
                                    <button type="button" class="_Informating_post_like_buttom" data-toggle="modal" data-target="#exampleModalLong">
                                        <div class="_Informating_post_likes">
                                            <p class="font17"><b>افزودن به علاقه مندی ها</b></p>
                                            <i class="fas fa-heart font26" style="color: #d20000;"></i>
                                        </div>
                                    </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title _Model_title font23" id="exampleModalLongTitle">خطا کاربر</h5>
                                                        <button type="button" class="close _Btn_like" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body _Model_text font17">
                                                        <br>
                                                        برای افزودن پست به علاقه مندی ها باید اکانت کاربری داشته باشید .
                                                        <br>
                                                        <br>
                                                        در صورت داشتن اکانت کاربری دکمه ورود را کلیک کنید .
                                                        <br>
                                                        <br>
                                                        در صورت نداشتن اکانت کاربری به دکمه ثبت نام کلیک کنید .
                                                        <br>
                                                        <br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary _Btn_like_model_close font16" data-dismiss="modal">بستن</button>
                                                        <button type="button" class="btn btn-primary _Btn_like_model font16"><a href="{{url('home')}}">ثبت نام</a></button>
                                                        <button type="button" class="btn btn-primary _Btn_like_model font16"><a href="{{url('home')}}">ورود</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            @endguest
                            @auth()
                                @if($isLiked)
                                    <form method="post" action="{{url('home/post/'.$post->id.'/like')}}">
                                        {{csrf_field()}}
                                        <button type="submit" class="_Informating_post_like_buttom">
                                            <div class="_Informating_post_likes">
                                                <p class="font17"><b>حذف از علاقه مندی ها</b></p>
                                                <i class="fas fa-heart font26" style="color: #d20000;"></i>
                                            </div>
                                        </button>
                                    </form>
                                @else
                                    <form method="post" action="{{url('home/post/'.$post->id.'/like')}}">
                                        {{csrf_field()}}
                                        <button type="submit" class="_Informating_post_like_buttom">
                                            <div class="_Informating_post_likes">
                                                <p class="font17"><b>افزودن به علاقه مندی ها</b></p>
                                                <i class="fas fa-heart font26" style="color: #d20000;"></i>
                                            </div>
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

