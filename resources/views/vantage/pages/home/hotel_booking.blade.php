@extends('home.layout.app')

@section('content')
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if(session('language') == 'en'){ ?>
                    <div class="well" style="color:#730dbd">
                        <h3>Special Note:</h3>
                        <ul style="list-style-type:circle">
                            <li>All reservation depends on subject to availability</li>
                            <li>This is regular normal price And price can change any time.</li>
                            <li>This Price Not Valid For Eid Time, christmas Time, Puja Time , 15th December to 10th
                                January
                                New Year , Any Special Holiday
                            </li>
                        </ul>

                    </div>
                    <?php } else { ?>
                    <div class="well" style="color:#730dbd">
                        <h3>বিশেষ তথ্য:</h3>
                        <ul style="list-style-type:circle">
                            <li>সকল বুকিং রুম খালি থাকার উপর নির্ভর করবে।</li>
                            <li>ভাড়ার পরিমান যেকোনো সময় পরিবর্তন হতে পারে।</li>
                            <li>টাকার পরিমান সমূহ ঈদ , ক্রিস্টমাস, পূজা, ১৫ ডিসেম্বর - ১০ জানুয়ারী, নতুন বছরের জন্য
                                প্রযোজ্য নয়।
                            </li>
                        </ul>

                    </div>
                    <?php } ?>


                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#50b37c; color:#fff;">
                            <h2 class="panel-title">@if(session('language')=='bn'){{'হোটেলের বিস্তারিত'}}@else{{'Hotel Description'}}@endif </h2>
                        </div>
                        <form method="post" action="{{url('hotel_booking')}}">
                            {{csrf_field()}}
                            <div class="filter-container">
                                <div style="display: inline-block;position: relative;top: 0px;padding-right:20px">
                                    <strong>@if(session('language')=='bn'){{'নির্বাচন করুন'}}@else{{'Select By'}}@endif </strong>
                                </div>
                                <div class="selectize-container" style="width:30%;display:inline-block!important;">
                                    <select id="country_name" name="country_name" class="form-control"
                                            style="padding-top:0px!important;">
                                        <?php foreach ($country as $u) { ?>
                                        <option value="{{$u->id}}" @if($countryID==$u->id){{'selected'}}@endif
                                        style="padding-top: 0px!important;">@if(session('language')=='bn'){{$u->country_name_bn}}@else{{$u->country_name}}@endif</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div style="display: inline-block!important;">
                                    <button type="submit" name='submit' value='1'
                                            style='background-color:#50b37c !important; color:#fff'
                                            class='btn btn-raised'>@if(session('language')=='bn'){{'সাবমিট'}}@else{{'Submit'}}@endif</button>
                                </div>
                            </div>
                        </form>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>@if(session('language')=='bn'){{'দেশের নাম'}}@else{{'Country Name'}}@endif </th>
                                        <th>@if(session('language')=='bn'){{'শহরের নাম'}}@else{{'City Name'}}@endif </th>
                                        <th>@if(session('language')=='bn'){{'হোটেলের নাম'}}@else{{'Hotel Name'}}@endif </th>
                                        <th>@if(session('language')=='bn'){{'হোটেলের ক্যাটাগরি'}}@else{{'Hotel Category'}}@endif </th>
                                        <th>@if(session('language')=='bn'){{'হোটেল এবং রুম সুবিধা'}}@else{{'Hotel & Room Facility'}}@endif </th>
                                        <th>@if(session('language')=='bn'){{'রুম ভাড়া'}}@else{{'Per Room Price'}}@endif </th>
                                    </tr>

                                    @if(session('language') == 'en')
                                        @if(sizeof($hotel)==0)
                                            <tr>
                                                <td colspan="6">No Data Found</td>
                                            </tr>
                                        @else
                                            @foreach ($hotel as $key=>$u)
                                                <tr>
                                                    <td>{{$u->hasCountry->country_name}}</td>
                                                    <td>{{$u->city_name}}</td>
                                                    <td>{{$u->hasHotel->hotel_name}}</td>
                                                    <td>{{$u->hotel_category}}</td>
                                                    <td>{{$u->room_category}}.{{$u->room_facility}}</td>
                                                    <td>{{$u->room_price}}/- BDT</td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    @else
                                        @if(sizeof($hotel_bn)==0)
                                            <tr>
                                                <td colspan="6">কোনো তথ্য নেই</td>
                                            </tr>
                                        @else
                                            @foreach ($hotel_bn as $key=>$u)
                                                <td>{{$u->hasCountry->country_name_bn}}</td>
                                                <td>{{$u->city_name}}</td>
                                                <td>{{$u->hasHotel->hotel_name}}</td>
                                                <td>{{$u->hotel_category}}</td>
                                                <td>{{$u->room_category}}.{{$u->room_facility}}</td>
                                                <td>{{$u->room_price}}/- টাকা</td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection