<footer id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" id="contactinfo">
                <h2>@if(session('language')=='bn') {{'যোগাযোগের ঠিকানা'}}@else {{'Our contact details'}}@endif </h2>
                <div class="footer-text" style="color:#222;font-size:16px;">
                    <p><b>@if(session('language')=='bn'){{$company_info[0]->company_name_bn}}@else{{$company_info[0]->company_name}}@endif</b><br>
                        @if(session('language')=='bn') {{$contact_info[0]->address_bn}}@else {{$contact_info[0]->address}}@endif </p>
                    <p><b>@if(session('language')=='bn') {{'প্যাকেজ সংক্রান্ত তথ্যের জন্য'}}@else {{'For Package Information :'}}@endif </b><br>@if(session('language')=='bn'){{$contact_info[0]->package_info_bn}}@else{{$contact_info[0]->package_info}}@endif </p>
                    <p><b>@if(session('language')=='bn') {{'এয়ার টিকেট সংক্রান্ত তথ্যের জন্য'}}@else {{'For Air Ticket Information :'}}@endif </b><br>@if(session('language')=='bn'){{$contact_info[0]->air_ticket_info_bn}}@else{{$contact_info[0]->air_ticket_info}}@endif
                    </p>
                    <p><b>@if(session('language')=='bn') {{'ইমেইল :'}}@else {{'Email:'}}@endif  </b>{{$contact_info[0]->email}}</p>
                </div>
                <div class="social-icons">
                    <a href="#" class="icon-social-facebook"></a>
                    <a href="#" class="icon-social-twitter"></a>
                    <a href="#" class="icon-social-google-plus"></a>
                    <a href="#" class="icon-social-envato"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <h2>@if(session('language')=='bn') {{'যোগাযোগ করুন'}}@else {{'Contact form'}}@endif </h2>
                <form action="{{url('send_mail')}}" method="post">
                    {{csrf_field()}}
                    <div class="form">
                        <input type="text" name="name" id="name" placeholder="Your Name" required/>
                        <input type="text" name="email" id="email" placeholder="Your Email Address" required/>
                        <input type="text" name="phone" id="phone" placeholder="Your Phone Number" required/>
                        <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <h2>@if(session('language')=='bn') {{'ম্যাপ'}}@else {{'Where we are'}}@endif </h2>

                <div id="maps">
                    <div class="overlay" onClick="style.pointerEvents='none'"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.114000280169!2d90.39169171444675!3d23.778954484575312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c769def59429%3A0x240418e35310f8e!2sGeeksnTechnology+Ltd!5e0!3m2!1sen!2sbd!4v1495368418380" width="100%" height="325" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-lg-4">--}}
                {{--<img src="{{url('resources')}}/assets/vantage_home/img/afiliation.jpg" alt="Affiliations">--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<img src="{{url('resources')}}/assets/vantage_home/img/CreditCard.jpg" alt="Credit Card">--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<img src="{{url('resources')}}/assets/vantage_home/img/weaccept.png" alt="We Accept">--}}
            {{--</div>--}}

        {{--</div>--}}
        <div class="row">
            <div class="col-md-12 text-center" style="font-weight:bold;padding-top:18px;font-size:20px;"><h6>
                    Developed by <a href="http://inbackoffice.com/" target="_new">Inback Office Ltd</a></h6>
                <!-- hitwebcounter Code START -->
                <img src="http://hitwebcounter.com/counter/counter.php?page=6612627&amp;style=0009&amp;nbdigits=9&amp;type=page&amp;initCount=54634"
                     title="my widget for counting" Alt="my widget for counting" border="0">
            </div>
        </div>
    </div>

</footer>