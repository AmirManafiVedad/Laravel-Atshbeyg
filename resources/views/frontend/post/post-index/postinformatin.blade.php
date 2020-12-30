
    <div class="row">
        <div class="col-12">
            <div class="_Informating_post">
                <div class="row _Margin_padding" >
                    <div class="col-12 _Margin_padding" onmouseenter="Informatingpostpointstar0()">
                            <form method="post" action="{{url('home/post/'.$post->id.'/score')}}">
                                @csrf
                                <div class="_Informating_post_point">
                                    <i class="fas fa-star font28" id="_Informating_post_star1" onmouseenter="Informatingpostpointstar1()"></i></input>
                                    <i class="fas fa-star font28" id="_Informating_post_star2" onmouseenter="Informatingpostpointstar2()"></i></button>
                                    <i class="fas fa-star font28" id="_Informating_post_star3" onmouseenter="Informatingpostpointstar3()"></i></button>
                                    <i class="fas fa-star font28" id="_Informating_post_star4" onmouseenter="Informatingpostpointstar4()"></i></button>
                                    <i class="fas fa-star font28" id="_Informating_post_star5" onmouseenter="Informatingpostpointstar5()"></i></button>
                                </div>
                            </form>





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
                                        <h6 class="font17"><b>زمان انتشار</b></h6>
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
                                        <h6 class="font17"><b>تعداد لایک</b></h6>
                                        <p class="font19"><b>{{$post->like}}</b></p>
                                    </div>
                                </div>
                                <div class="col-4 _Margin_padding">
                                    <div class="_Informating_post_statistics_comment">
                                        <i class="fas fa-eye font36"></i>
                                        <h6 class="font17"><b>تعداد بازدید</b></h6>
                                        <p class="font19"><b>20366</b></p>
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

