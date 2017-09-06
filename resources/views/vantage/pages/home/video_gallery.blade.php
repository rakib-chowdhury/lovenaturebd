@extends('home.layout.app')

@section('content')
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">@if(session('language')=='bn'){{'ভিডিও গ্যালারি'}}@else{{'Video Gallery'}}@endif</h2>
                        </div>
                        <div class="panel-body text-left" >
                            <?php foreach ($video as $u) { ?>
                            <div class="col-md-3">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <?= $u->video ?>
                                </div>
                                <p style="font-size: 18px;">@if(session('language')=='bn'){{$u->name_bn}}@else{{$u->name}}@endif</p>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection