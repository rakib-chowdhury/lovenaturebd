@extends('home.layout.app')

@section('content')
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well" style="color:#730dbd">
                        <h3>@if(session('language')=='en'){{'Special Note:'}}@else{{'বিশেষ তথ্য:'}}@endif</h3>
                        <ul style="list-style-type:circle">
                            @if(session('language') == 'en')
                                <li>This Price Not Valid For Eid Time, christmas Time, Puja Time , 15th December to 10th
                                    January New Year , Any Special Holiday
                                </li>
                            @else
                                <li>টাকার পরিমান সমূহ ঈদ , ক্রিস্টমাস, পূজা, ১৫ ডিসেম্বর - ১০ জানুয়ারী, নতুন বছরের জন্য
                                    প্রযোজ্য নয়।
                                </li>
                            @endif
                        </ul>

                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#50b37c; color:#fff;">
                            <h2 class="panel-title">@if(session('language')=='en'){{'Transport Description'}} @else{{'যানবাহনের বিস্তারিত'}} @endif </h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    @if(session('language')=='en')
                                        <tr>
                                            <th style="text-align: center;">Country Name</th>
                                            <th style="text-align: center;">Transport Name</th>
                                            <th style="text-align: center;">Start From</th>
                                            <th style="text-align: center;">Destination</th>
                                            <th style="text-align: center;">Transport Category</th>
                                            <th style="text-align: center;">Transport Facility</th>
                                            <th style="text-align: center;">Per Vehicle Cost</th>
                                        </tr>
                                    @else
                                        <tr>
                                            <th style="text-align: center;">দেশের নাম</th>
                                            <th style="text-align: center;">যানবাহনের নাম</th>
                                            <th style="text-align: center;">শুরু</th>
                                            <th style="text-align: center;">গন্তব্য</th>
                                            <th style="text-align: center;">যানবাহনের ক্যাটাগরি</th>
                                            <th style="text-align: center;">যানবাহনের সুবিধা</th>
                                            <th style="text-align: center;">ভাড়া</th>
                                        </tr>
                                    @endif
                                    @if(session('language') == 'en')
                                        @foreach ($transport as $key=>$u)
                                        <tr>
                                            <td style="text-align: center;">{{$u->hasCountry->country_name}}</td>
                                            <td style="text-align: center;">{{$u->transport_name}}</td>
                                            <td style="text-align: center;">{{$u->start}}</td>
                                            <td style="text-align: center;">{{$u->destination}}</td>
                                            <td style="text-align: center;">{{$u->transport_category}}</td>
                                            <td style="text-align: center;">{{$u->transport_facility}}</td>
                                            <td style="text-align: center;">{{$u->vehicle_cost}}/- BDT</td>
                                        </tr>
                                        @endforeach
                                    @else
                                        @foreach ($transport as $key=>$u)
                                        <tr>
                                            <td style="text-align: center;">{{$u->hasCountry->country_name_bn}}</td>
                                            <td style="text-align: center;">{{$u->transport_name_bn}}</td>
                                            <td style="text-align: center;">{{$u->start_bn}}</td>
                                            <td style="text-align: center;">{{$u->destination_bn}}</td>
                                            <td style="text-align: center;">{{$u->transport_category_bn}}</td>
                                            <td style="text-align: center;">{{$u->transport_facility_bn}}</td>
                                            <td style="text-align: center;">{{$u->vehicle_cost}}/- টাকা</td>
                                        </tr>
                                        @endforeach
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