{{-----------  Profile Information Panel User -----------}}
<div class="_Profile_panel_menu_left_user_title">

    {{-----------  Profile Information User -----------}}
    <div class="row _Margin_padding">

        {{-----------  Profile Information Box Right User -----------}}
        <div class="col-4 _Margin_padding">

            {{-----------  Profile Information User Image -----------}}
            <div class="_Profile_information_user_image">
                <img src="{{url('Image/Profileuser/'.$image)}}" >
            </div>
            {{-----------  Profile Information User Image -----------}}
            <div class="_Profile_information_user_name">
{{--                <span class="font20">{{auth()->user()->firstname}}{{auth()->user()->lastname}}</span>--}}

                {{-----------  Description User -----------}}
                <p class="font16">{{auth()->user()->about_me}}</p>

                {{-----------  Social Networks User -----------}}
                <p class="font18">شبکه های اجتماعی</p>
                <br>
                <div class="_Profile_information_user_social_networks">
                    <a><i class="fab fa-telegram-plane font28"></i></a>
                    <a><i class="fab fa-instagram font28"></i></a>
                    <a><i class="fab fa-twitter font28"></i></a>
                    <a><i class="fab fa-facebook font28"></i></a>
                    <a><i class="fab fa-linkedin font28"></i></a>
                </div>
            </div>
        </div>

        {{-----------  Profile Information Box Left User -----------}}
        <div class="col-8 _Margin_padding">
            <p class="font19 _Profile_information_user_box_title">درباره ی من :</p>
            <div class="row _Margin_padding">

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_user_box_label">
                        <p class="font17">نام و نام خانوادگی&nbsp;:&nbsp; </p>
                        <p class="font17">ایمیل&nbsp;:&nbsp; </p>
                        <p class="font17">محل تولد&nbsp;:&nbsp; </p>
                        <p class="font17">شغل&nbsp;:&nbsp; </p>
                        <p class="font17">شماره تلفن&nbsp;:&nbsp; </p>
                    </div>
                </div>

                <div class="col-4 _Margin_padding">
                    <div class="_Profile_information_user_box_value">
                        <p class="font17">{{auth()->user()->firstname}}{{auth()->user()->lastname}}</p>
                        <p class="font17">{{auth()->user()->email}}</p>
                        <p class="font17">آذربایجان شرقی / تبریز</p>
                        <p class="font17">{{auth()->user()->work}}</p>
                        <p class="font17">{{auth()->user()->phone}}</p>
                    </div>
                </div>

                <div class="col-2 _Margin_padding">
                    <div class="_Profile_information_user_box_label">
                        <p class="font17">فرزند&nbsp;:&nbsp; </p>
                        <p class="font17">تاریخ تولد&nbsp;:&nbsp; </p>
                        <p class="font17">محل زندگی&nbsp;:&nbsp; </p>
                        <p class="font17 ">آخریت مدرک&nbsp;:&nbsp; </p>
                        <p class="font17">نوع کابر&nbsp;:&nbsp; </p>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_user_box_value">
                        <p class="font17">{{auth()->user()->father_name}}</p>
                        <p class="font17">{{auth()->user()->years}}/{{auth()->user()->month}}/{{auth()->user()->day}}</p>
                        <p class="font17">آذربایجان شرقی / تبریز</p>
                        <p class="font17">{{auth()->user()->education}}</p>
                        <p class="font17">مدیر ارشد</p>
                    </div>
                </div>
            </div>

            <div class="_Profile_information_user_box_honor">

                <p class="font19 _Profile_information_user_box_title">تحصیلات و افتخارات :</p>

                <p class="font18">{{auth()->user()->honors}}</p>
                <br>

            </div>
        </div>
    </div>
</div>

{{-----------  Profile Information Panel User Insert -----------}}
<div class="_Profile_panel_menu_left_user_gallery">

</div>

{{-----------  Profile Information Panel User Insert -----------}}
<div class="_Profile_panel_menu_left_user_insert">
    <div class="_Profile_update_information_user">
        <h2 class="font34">ویرایش اطلاعات </h2>
        <form method="post" action="{{url('/profile/edit_information',auth()->user()->id)}}">
            @csrf
            <div class="row _Margin_padding">
                <div class="col-6 _Margin_padding">
                    <label class="font18">نام :</label>
                    <br>
                    <input type="text" name="firstname" id="" class="font17" placeholder="لطفا نام خود را وارد کنید ..." value="{{auth()->user()->firstname}}">
                    <br>
                </div>
                <div class="col-6 _Margin_padding">
                    <label class="font18">نام خانوادگی :</label>
                    <br>
                    <input type="text" name="lastname" id="" class="font17" placeholder="لطفا نام خانوادگی خود را وارد کنید ..." value="{{auth()->user()->lastname}}">
                    <br>
                </div>
            </div>

            <div class="row _Margin_padding">

                <div class="col-6 _Margin_padding">
                    <label class="font18">نام پدر :</label>
                    <br>
                    <input type="text" name="father_name" id="" class="font17" placeholder="لطفا نام پدر خود را وارد کنید ..." value="{{auth()->user()->father_name}}">
                    <br>
                </div>

                <div class="col-6 _Margin_padding">
                    <label class="font18">شغل :</label>
                    <br>
                    <input type="text" name="work" id="" class="font17" placeholder="لطفا شغل خود را وارد کنید ..." value="{{auth()->user()->work}}">
                    <br>
                </div>

            </div>

            <div class="row _Margin_padding">
                <div class="col-6 _Margin_padding">
                    <label class="font18">ایمیل :</label>
                    <br>
                    <input type="text" name="email_profile" id="" class="font17" placeholder="لطفا ایمیل خود را وارد کنید ..." value="{{auth()->user()->email_profile}}">
                    <br>
                </div>
                <div class="col-6 _Margin_padding">
                    <label class="font18">شماره تماس :</label>
                    <br>
                    <input type="text" name="phone" id="" class="" placeholder="لطفا شماره تماس خود را وارد کنید ..." value="{{auth()->user()->phone}}">
                    <br>
                </div>
            </div>

            <div class="row _Margin_padding">

                <div class="col-6 _Margin_padding">
                    <label class="font18">تاریخ تولد :</label>
                    <br>
                    <div class="row _Margin_padding">

                        <div class="col-4 _Margin_padding">
                            <div class="_Profile_information_data">
                                <select name="years">
                                    <option value="{{auth()->user()->years}}">
                                        @if(auth()->user()->years)
                                            {{auth()->user()->years}}
                                        @else
                                             سال
                                        @endif
                                    </option>
                                    <option value="1320">1320</option>
                                    <option value="1321">1321</option>
                                    <option value="1322">1322</option>
                                    <option value="1323">1323</option>
                                    <option value="1324">1324</option>
                                    <option value="1325">1325</option>
                                    <option value="1326">1326</option>
                                    <option value="1327">1327</option>
                                    <option value="1328">1328</option>
                                    <option value="1329">1329</option>
                                    <option value="1330">1330</option>
                                    <option value="1331">1331</option>
                                    <option value="1332">1332</option>
                                    <option value="1333">1333</option>
                                    <option value="1334">1334</option>
                                    <option value="1335">1335</option>
                                    <option value="1336">1336</option>
                                    <option value="1337">1337</option>
                                    <option value="1338">1338</option>
                                    <option value="1339">1339</option>
                                    <option value="1340">1340</option>
                                    <option value="1341">1342</option>
                                    <option value="1342">1342</option>
                                    <option value="1343">1343</option>
                                    <option value="1344">1344</option>
                                    <option value="1345">1345</option>
                                    <option value="1346">1346</option>
                                    <option value="1347">1347</option>
                                    <option value="1348">1348</option>
                                    <option value="1349">1349</option>
                                    <option value="1350">1350</option>
                                    <option value="1351">1351</option>
                                    <option value="1352">1352</option>
                                    <option value="1353">1353</option>
                                    <option value="1354">1354</option>
                                    <option value="1355">1355</option>
                                    <option value="1356">1355</option>
                                    <option value="1356">1356</option>
                                    <option value="1357">1357</option>
                                    <option value="1358">1358</option>
                                    <option value="1359">1359</option>
                                    <option value="1360">1360</option>
                                    <option value="1361">1361</option>
                                    <option value="1362">1362</option>
                                    <option value="1363">1363</option>
                                    <option value="1364">1364</option>
                                    <option value="1365">1365</option>
                                    <option value="1366">1366</option>
                                    <option value="1367">1367</option>
                                    <option value="1368">1368</option>
                                    <option value="1369">1369</option>
                                    <option value="1370">1370</option>
                                    <option value="1371">1371</option>
                                    <option value="1372">1372</option>
                                    <option value="1373">1373</option>
                                    <option value="1374">1374</option>
                                    <option value="1375">1375</option>
                                    <option value="1376">1376</option>
                                    <option value="1377">1377</option>
                                    <option value="1378">1378</option>
                                    <option value="1379">1379</option>
                                    <option value="1380">1380</option>
                                    <option value="1381">1381</option>
                                    <option value="1382">1382</option>
                                    <option value="1383">1383</option>
                                    <option value="1384">1384</option>
                                    <option value="1385">1385</option>
                                    <option value="1386">1386</option>
                                    <option value="1387">1387</option>
                                    <option value="1388">1388</option>
                                    <option value="1389">1389</option>
                                    <option value="1390">1390</option>
                                    <option value="1391">1391</option>
                                    <option value="1392">1392</option>
                                    <option value="1393">1393</option>
                                    <option value="1394">1394</option>
                                    <option value="1395">1395</option>
                                    <option value="1396">1396</option>
                                    <option value="1397">1397</option>
                                    <option value="1398">1398</option>
                                    <option value="1399">1399</option>
                                    <option value="1400">1400</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4 _Margin_padding">
                            <div class="_Profile_information_data">
                                <select name="month">
                                    <option value="{{auth()->user()->month}}">
                                        @if(auth()->user()->month)
                                            {{auth()->user()->month}}
                                        @else
                                            ماه
                                        @endif
                                    </option>
                                    <option value="01">فروردین</option>
                                    <option value="02">اردیبهشت</option>
                                    <option value="03">خرداد</option>
                                    <option value="04">تیر</option>
                                    <option value="05">مرداد</option>
                                    <option value="06">شهریور</option>
                                    <option value="07">مهر</option>
                                    <option value="08">آبان</option>
                                    <option value="09">آذر</option>
                                    <option value="10">دی</option>
                                    <option value="11">بهمن</option>
                                    <option value="12">اسفند</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4 _Margin_padding">
                            <div class="_Profile_information_data">
                                <select name="day">
                                    <option value="{{auth()->user()->day}}">
                                        @if(auth()->user()->day)
                                            {{auth()->user()->day}}
                                        @else
                                            روز
                                        @endif
                                    </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-6 _Margin_padding">
                    <label class="font18">آخریک مدرک تحصیلی :</label>
                    <br>
                    <div class="row _Margin_padding">
                        <div class="col-12 _Margin_padding">
                            <div class="_Profile_information_select">
                                <select name="education">
                                    <option value="{{auth()->user()->education}}">
                                        @if(auth()->user()->education)
                                            {{auth()->user()->education}}
                                        @else
                                            .. انتخاب کنید ..
                                        @endif
                                    </option>
                                    <option value="بی سواد">بی سواد</option>
                                    <option value="سیکل">سیکل</option>
                                    <option value="دیپلم">دیپلم</option>
                                    <option value="فوق دیپلم">فوق دیپلم</option>
                                    <option value="لیسانس">لیسانس</option>
                                    <option value="فوق لیسانس">فوق لیسانس</option>
                                    <option value="دکترا">دکترا</option>
                                    <option value="فوق دکترا">فوق دکترا</option>
                                    <option value="پرفسور">پرفسور</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <label  class="font18">محل تولد :</label>
            <br>
            <div class="row _Margin_padding">

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">ایران</option>
                            <option value="2">آذربایجان</option>
                            <option value="3">ترکیه</option>
                            <option value="4">افغانستان</option>
                            <option value="5">پاکستان</option>
                            <option value="6">هندوستان</option>
                            <option value="7">عراق</option>
                            <option value="8">سوریه</option>
                            <option value="9">قطر</option>
                            <option value="10">امارات</option>
                            <option value="11">ارمنستان</option>
                            <option value="12">ترکمنستان</option>
                        </select>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select name="province" v-model="province" @change="getAllCities()">
                            <option value="1">آذربایجان شرقی</option>
                            <option value="2">آذربایجان غربی</option>
                            <option value="3">اردبیل</option>
                            <option value="4">اصفهان</option>
                            <option value="5">البرز</option>
                            <option value="6">ایلام</option>
                            <option value="7">بوشهر</option>
                            <option value="8">تهران</option>
                            <option value="9">چهارمحال و بختیاری</option>
                            <option value="10">خراسان جنوبی</option>
                            <option value="11">خراسان رضوی</option>
                            <option value="12">خراسان شمالی</option>
                            <option value="13">خوزستان</option>
                            <option value="14">زنجان</option>
                            <option value="15">سمنان</option>
                            <option value="16">سیستان و بلوچستان</option>
                            <option value="17">فارس</option>
                            <option value="18">قزوین</option>
                            <option value="19">قم</option>
                            <option value="20">کردستان</option>
                            <option value="21">کرمان</option>
                            <option value="22">کرمانشاه</option>
                            <option value="23">کهگیلویه وبویراحمد</option>
                            <option value="24">گلستان</option>
                            <option value="25">گیلان</option>
                            <option value="26">لرستان</option>
                            <option value=27">مازندران</option>
                            <option value="28">مرکزی</option>
                            <option value="29">هرمزگان</option>
                            <option value="30">همدان</option>
                            <option value="31">یزد</option>
                        </select>

                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select name="city">

                        </select>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">بی سواد</option>
                            <option value="2">سیکل</option>
                            <option value="3">دیپلم</option>
                            <option value="4">فوق دیپلم</option>
                            <option value="5">لیسانس</option>
                            <option value="6">فوق لیسانس</option>
                            <option value="7">دکترا</option>
                            <option value="8">فوق دکترا</option>
                            <option value="9">پرفسور</option>
                        </select>
                    </div>
                </div>

            </div>

            <label class="font18">محل زندگی :</label>
            <br>
            <div class="row _Margin_padding">

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">بی سواد</option>
                            <option value="2">سیکل</option>
                            <option value="3">دیپلم</option>
                            <option value="4">فوق دیپلم</option>
                            <option value="5">لیسانس</option>
                            <option value="6">فوق لیسانس</option>
                            <option value="7">دکترا</option>
                            <option value="8">فوق دکترا</option>
                            <option value="9">پرفسور</option>
                        </select>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">بی سواد</option>
                            <option value="2">سیکل</option>
                            <option value="3">دیپلم</option>
                            <option value="4">فوق دیپلم</option>
                            <option value="5">لیسانس</option>
                            <option value="6">فوق لیسانس</option>
                            <option value="7">دکترا</option>
                            <option value="8">فوق دکترا</option>
                            <option value="9">پرفسور</option>
                        </select>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">بی سواد</option>
                            <option value="2">سیکل</option>
                            <option value="3">دیپلم</option>
                            <option value="4">فوق دیپلم</option>
                            <option value="5">لیسانس</option>
                            <option value="6">فوق لیسانس</option>
                            <option value="7">دکترا</option>
                            <option value="8">فوق دکترا</option>
                            <option value="9">پرفسور</option>
                        </select>
                    </div>
                </div>

                <div class="col-3 _Margin_padding">
                    <div class="_Profile_information_select">
                        <select>
                            <option value="1">بی سواد</option>
                            <option value="2">سیکل</option>
                            <option value="3">دیپلم</option>
                            <option value="4">فوق دیپلم</option>
                            <option value="5">لیسانس</option>
                            <option value="6">فوق لیسانس</option>
                            <option value="7">دکترا</option>
                            <option value="8">فوق دکترا</option>
                            <option value="9">پرفسور</option>
                        </select>
                    </div>
                </div>

            </div>
            <label class="font18">تحصیلات و افتخارات :</label>
            <textarea class="font17" name="honors" placeholder="تعداد مدرک تحصیلی و افتخارات و مقام هایی که کسب کرده اید را بنویسید ...">{{auth()->user()->honors}}</textarea>
            <label class="font18">درباره ای من :</label>
            <textarea class="font17" name="about_me" placeholder="جمله ای مختصر از درباره ای شما ...">{{auth()->user()->about_me}}</textarea>

                <button class="_Profile_update_information_user_button_1"><i></i>ثبت اطلاعات</button>
                <button class="_Profile_update_information_user_button_2"><i></i>انصراف</button>
        </form>
    </div>
</div>

{{-----------  Profile Information Panel User Account -----------}}
<div class="_Profile_panel_menu_left_user_account">
    <div class="_Profile_update_information_user_account">
        <h2 class="font34">ویرایش اکانت کاربری</h2>
        <form>

            <label class="font18">نام کاربری</label>
            <br>
            <input type="text" class="font18" value="{{auth()->user()->username}}">
            <br>

            <label class="font18">رمز عبور فعلی</label>
            <br>
            <input type="password" class="font18" placeholder="رمز عبور فعلی را وارد کنید ..." value="">
            <br>

            <label class="font18">رمز جدید</label>
            <br>
            <input type="password" class="font18" placeholder="رمز عبور جدید را وارد کنید ..." value="">
            <br>
            <label class="font18" style="color: #cd0000!important;">رمز عبور حداقل ۸ کاراکتر و دارای عدد و حروف بزرگ و کوچک باشد.</label>
            <br>

            <label class="font18">تکرار رمز عبور جدید</label>
            <br>
            <input type="password" class="font18" placeholder="رمز عبور جدید را دوباره وارد کنید ..." value="">
            <br>
            <button class="font18 _Profile_update_information_user_button_1">ذخیره اطلاعات</button>
            <button class="font18 _Profile_update_information_user_button_2">انصزاف</button>
        </form>
    </div>
</div>

{{-----------  Profile Information Panel User Email -----------}}
<div class="_Profile_panel_menu_left_user_email">
    <div class="_Profile_update_information_user_email">
        <h2 class="font34">ویرایش و تایید ایمیل</h2>
        <form>

            <label class="font18">آدرس ایمیل کنونی :</label>
            <br>
            <input type="text" class="font18" value="{{auth()->user()->email}}">
            <br>
            <label class="font18" style="color: green!important;">آدرس ایمیل شما با موفقیت ثبت و تایید شده است .</label>
            <br>

            <button class="font18 _Profile_update_information_user_button_1">ذخیره اطلاعات</button>
            <button class="font18 _Profile_update_information_user_button_2">انصراف</button>
        </form>
    </div>
</div>

{{-----------  Profile Information Panel User Setting Email -----------}}
<div class="_Profile_panel_menu_left_user_setting_email">
    <div class="_Profile_update_information_user_setting_email">
        <h2 class="font34">تنظیمات ایمیل</h2>
        <h3 class="font22">ما در زمان ارسال ایمیل، تنظیمات زیر را ملاک رفتار قرار خواهیم داد.</h3>

            <div class="row">
                <div class="col-2" >
                    <form action="#">
                        <div class="switch">
                            <input id="switch-1" type="checkbox" class="switch-input" />
                            <label for="switch-1" class="switch-label"></label>
                        </div>
                    </form>
                </div>
                <div class="col-10">
                    <p class="font22">آپدیت سایت ( ایمیل )</p>
                    <p class="font17">هر گونه آپدیت و ویرایش سایت از طریق ایمیل اطلاع رسانی شود .</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-2" type="checkbox" class="switch-input" />
                            <label for="switch-2" class="switch-label">Switch</label>
                        </div>
                    </form>                </div>
                <div class="col-10">
                    <p class="font22">آپدیت سایت (اعلان پروفایل )</p>
                    <p class="font17">هر گونه آپدیت و ویرایش سایت از طریق اعلان پروفایل اطلاع رسانی شود .</p>
                </div>
            </div>

            {{-------- Post --------}}
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-3" type="checkbox" class="switch-input" />
                            <label for="switch-3" class="switch-label">Switch</label>
                        </div>
                    </form>
                </div>
                <div class="col-10">
                    <p class="font22">محتوای جدید ( ایمیل )</p>
                    <p class="font17">هر گونه محتوای جدید که در سایت بار گذاری می شود ، از طریق ایمیل اطلاع رسانی شود .</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-4" type="checkbox" class="switch-input" />
                            <label for="switch-4" class="switch-label">Switch</label>
                        </div>
                    </form>                </div>
                <div class="col-10">
                    <p class="font22">محتوای جدید (اعلان پروفایل )</p>
                    <p  class="font17">هر گونه محتوای جدید که در سایت بار گذاری می شود ، از طریق اعلان پروفایل اطلاع رسانی شود .</p>
                </div>
            </div>

            {{-------- Comment --------}}
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-5" type="checkbox" class="switch-input" />
                            <label for="switch-5" class="switch-label">Switch</label>
                        </div>
                    </form>                </div>
                <div class="col-10">
                    <p class="font22">اطلاع رسانی تعاملات شما ( ایمیل )</p>
                    <p class="font17">هر گونه پاسخ ایمیل و در خوسات ها در  سایت از طریق ایمیل اطلاع رسانی شود .</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-6" type="checkbox" class="switch-input" />
                            <label for="switch-6" class="switch-label">Switch</label>
                        </div>
                    </form>
                </div>
                <div class="col-10">
                    <p class="font22">اطلاع رسانی تعاملات شما (اعلان پروفایل )</p>
                    <p class="font17">هر گونه پاسخ ایمیل و در خوسات ها در  سایت از طریق اعلان پروفایل اطلاع رسانی شود .</p>
                </div>
            </div>

            {{-------- Account --------}}
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-7" type="checkbox" class="switch-input" />
                            <label for="switch-7" class="switch-label">Switch</label>
                        </div>
                    </form>                </div>
                <div class="col-10">
                    <p class="font22">امنیت حساب کاربری شما ( ایمیل )</p>
                    <p class="font17">هر گونه ورود به حساب کاربری، تغییر رمز عبور و ... سایت از طریق ایمیل اطلاع رسانی شود .</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-8" type="checkbox" class="switch-input" />
                            <label for="switch-8" class="switch-label">Switch</label>
                        </div>
                    </form>
                </div>
                <div class="col-10">
                    <p class="font22">امنیت حساب کاربری شما (اعلان پروفایل )</p>
                    <p class="font17">هر گونه ورود به حساب کاربری، تغییر رمز عبور و ... سایت از طریق اعلان پروفایل اطلاع رسانی شود .</p>
                </div>
            </div>
    </div>
</div>
