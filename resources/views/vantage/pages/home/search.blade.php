@extends('home.layout.app')

@section('content')    
    <section class="search">
        <div class="container">
            <div class="row" style="padding:50px;"></div>
            <div class="row" style="border:1px solid #50b37c; ">
                <div class="col-lg-12 " style="background-color:#50b37c; color:#fff; padding:5px; font-size: x-large;">                    
                    <i class="fa fa-search"></i> @if(session('language')=='bn'){{'প্যাকেজ কোড দ্বারা অনুসন্ধান'}}@else{{'Search By Product Code'}}@endif
                </div>
                
                <div class="col-lg-12" style="padding:10px;">                    
                    <form action="{{url('search')}}" method="get">
                         <div class="col-md-3">
                             <input type="text" name="p_code" class='form-control' placeholder="@if(session('language')=='bn'){{'অনুসন্ধান'}}@else{{'Search'}}@endif">
                         </div>
                         <div class="col-md-1">
                             <button type="submit" name='submit' value='1' style='background-color:#50b37c !important; color:#fff' class='btn btn-raised'>@if(session('language')=='bn'){{'অনুসন্ধান'}}@else{{'Search'}}@endif</button>
                         </div>
                    </form>
                </div>
                @if($showDiv==1)
                    <div class="col-lg-12">
                       <hr>                       
                       @if(session('language')=='bn')
                           @if($package_bn==null)
                           {{'কোনো তথ্য নেই'}}
                           @else
                            <div class="row">
                                <div class="col-md-3">
                                    <div>{{$package_bn->title}}</div>
                                    <div><img style="height:160px; width:100%;" src="{{url('public/images/package/'.$package_bn->hasImage[0]->image)}}" alt="no img"></div>
                                    <div>প্যাকেজ কোড: {{$package_bn->package_code}}</div>
                                </div>
                                <div class="col-md-6">
                                    <div>{{$package_bn->package_name}}</div>
                                    <div><?= $package_bn->package_description; ?></div>
                                </div>
                                <div class="col-md-2">
                                     <a href="{{url('package/view_details/'.$package_bn->id)}}"><button class="btn btn-raised" style="background-color:#50b37c !important; color:#fff">বিস্তারিত দেখুন</button></a>
                                </div>
                            </div>
                           @endif
                       @else
                           @if($package==null)
                           {{'No Package Found'}}
                           @else
                            <div class="row">
                                <div class="col-md-3">
                                    <div>{{$package->title}}</div>
                                    <div><img style="height:160px; width:100%;" src="{{url('public/images/package/'.$package->hasImage[0]->image)}}" alt="no img"></div>
                                    <div>Package Code : {{$package->package_code}}</div>
                                </div>
                                <div class="col-md-6">
                                    <div>{{$package->package_name}}</div>
                                    <div><?= $package->package_description; ?></div>
                                </div>
                                <div class="col-md-2">
                                     {{--<a href="package/view_details/{{$package->id}}"><button class="btn btn-raised" style="background-color:#50b37c !important; color:#fff">Read More</button></a>--}}
                                     <a href="{{url('package/view_details/'.$package->id)}}   "><button class="btn btn-raised" style="background-color:#50b37c !important; color:#fff">Read More</button></a>
                                </div>
                            </div>
                           @endif
                       @endif
                    </div>
                @endif
                
            </div>
            
        </div><br>
    </section>
@endsection