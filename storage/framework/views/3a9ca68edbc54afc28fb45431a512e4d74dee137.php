<?php $__env->startSection('content'); ?>
    <section id="deals" class="deals">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h1><?php if(session('language')=='bn'): ?><?php echo e($package_bn[0]->hasCountry->country_name_bn); ?><?php echo e(' '); ?>

                        <?php echo e($package_bn[0]->city_name); ?><?php echo e(' '); ?>

                        <?php echo e($package_bn[0]->hasType->package_type_name_bn); ?>

                        <?php else: ?><?php echo e($package[0]->hasCountry->country_name); ?><?php echo e(' '); ?>

                            <?php echo e($package[0]->city_name); ?><?php echo e(' '); ?>

                            <?php echo e($package[0]->hasType->package_type_name); ?><?php endif; ?></h1>
                </div>
            </div>
            <section class="booking">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Multi hotel -->
                        <!-- Multi hotel -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><span class="atta"
                                          style="color:#003463;"><?php if(session('language')=='bn'): ?><?php echo e('হোটেল সমূহ'); ?><?php else: ?><?php echo e('Hotel Category'); ?><?php endif; ?></span>
                                </h2>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <?php if(session('language')=='bn') { ?>
                                    <?php foreach ($package_bn as $h) { ?>
                                    <div class="col-sm-8 fixed_imgdiv">
                                        <img src="<?php echo e(url('public')); ?>/images/hotel/<?php echo e($h->hasHotel[0]->hasHotel->image); ?>"
                                             width="" height="" alt="Hotel Image">
                                        <div style="padding-bottom:5px;" class="hcontent booking_con">
                                            <ul>
                                                <li>
                                                    <b><?php echo e($h->hasHotel[0]->hasHotelBn->hotel_name); ?></b>
                                                </li>
                                                <li>

                                                    
                                                    
                                                </li>
                                                <li>
                                                    <b><?php echo e($h->hasHotel[0]->hasHotelBn->hotel_category); ?></b>
                                                </li>
                                                <li class="text-justify">
                                                    <b>হোটেলের বিস্তারিত:</b>
                                                </li>
                                                <li>
                                                    <b><?php echo e($h->hasHotel[0]->hasHotelBn->room_category); ?></b>
                                                </li>
                                                <li>
                                                    <b><?php echo e($h->hasHotel[0]->hasHotelBn->room_facility); ?></b>
                                                </li>
                                                <li>
                                                    <b><?php echo e($h->hasHotel[0]->hasHotelBn->room_price); ?></b>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                        <?php }} else { ?>
                                        <?php foreach ($package as $h) { ?>
                                        <div class="col-sm-8 fixed_imgdiv">
                                            <img src="<?php echo e(url('public')); ?>/images/hotel/<?php echo e($h->hasHotel[0]->hasHotel->image); ?>"
                                                 width="" height="" alt="Hotel Image">
                                            <div style="padding-bottom:5px;" class="hcontent booking_con">
                                                <ul>
                                                    <li>
                                                        <b><?php echo e($h->hasHotel[0]->hasHotel->hotel_name); ?></b>
                                                    </li>
                                                    <li>

                                                        
                                                        
                                                    </li>
                                                    <li>
                                                        <b><?php echo e($h->hasHotel[0]->hasHotel->hotel_category); ?></b>
                                                    </li>
                                                    <li class="text-justify">
                                                        <b>Hotel Details:</b>
                                                    </li>
                                                    <li>
                                                        <b><?php echo e($h->hasHotel[0]->hasHotel->room_category); ?></b>
                                                    </li>
                                                    <li>
                                                        <b><?php echo e($h->hasHotel[0]->hasHotel->room_facility); ?></b>
                                                    </li>
                                                    <li>
                                                        <b><?php echo e($h->hasHotel[0]->hasHotel->room_price); ?></b>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <?php }} ?>

                                    <div class="col-sm-4">
                                        <div class="" style="text-align: center">
                                            <p>
                                            <p><br></p></p>
                                            <p><?php if(session('language')=='bn'): ?><?php echo e('সর্বমোট '); ?><?php else: ?><?php echo e('Total Amount'); ?><?php endif; ?> </p>
                                            <p><?php if(session('language')=='bn'): ?><?php echo e('পূর্বের মূল্য'); ?><?php else: ?><?php echo e('Previous Amount'); ?><?php endif; ?>
                                                <?php if($package[0]->discount == 0 ) { ?>
                                            <p class="bdt">BDT <?php echo e($package[0]->package_price); ?></p>
                                            <?php } else { ?>
                                                <del><?php echo e($package[0]->package_price); ?></del>
                                            <?php $amount = $package[0]->package_price * $package[0]->discount  ?>
                                            <?php $final_amount = $amount/100 ?>
                                            <?php $result = $package[0]->package_price - $final_amount ?>
                                            <p class="bdt">BDT <?php echo e($result); ?></p>
                                            </p>
                                            <?php } ?>
                                            <button data-toggle="modal" data-target="#myModal"
                                                    class="btn btn-success"><?php if(session('language')=='bn'): ?><?php echo e('বুকিং দিতে যোগাযোগ'); ?><?php else: ?><?php echo e('Call For Booking'); ?><?php endif; ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="booking-left">
                            <div class="package_booking" style="background:#6b6b6b;">
                                <span class="all-hotel">Transsiberian Tour </span>
                                <p class="package_booking_para">package code: (RM0011)</p>
                            </div>

                            <div class="book-left">

                                <div class="item">

                                    <div class="clearfix" style="max-width:474px;">
                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/42053.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/42053.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/95808.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/95808.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/80894.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/80894.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/43339.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/43339.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/62070.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/62070.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/65880.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/65880.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/40956.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/40956.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/76968.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/76968.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                            <li data-thumb="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/12308.jpg">
                                                <img src="<?php echo e(url('resources')); ?>/assets/vantage_home/apanel/tours_and_attractions_image/12308.jpg"
                                                     class="img-responsive" style="width:474px;height: 374px;"/>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="overview">
                            <ul class="nav nav-tabs">
                                <li><a data-toggle="tab"
                                       href="#9"><?php if(session('language')=='bn'): ?><?php echo e('এক নজরে'); ?><?php else: ?><?php echo e('Overview'); ?><?php endif; ?></a>
                                </li>
                                <li><a data-toggle="tab"
                                       href="#menu1"><?php if(session('language')=='bn'): ?><?php echo e('গুরুত্বপূর্ণ তথ্যাবলী'); ?><?php else: ?><?php echo e('Important Notes'); ?><?php endif; ?> </a>
                                </li>
                                <li><a data-toggle="tab"
                                       href="#menu2"><?php if(session('language')=='bn'): ?><?php echo e('শর্তাবলী'); ?><?php else: ?><?php echo e('Terms & Conditions'); ?><?php endif; ?> </a>
                                </li>
                                <!-- <li><a data-toggle="tab" href="#menu3">Visa Information</a></li> -->
                            </ul>

                            <div class="tab-content">
                                <div id="9" class="tab-pane fade in active"><br>
                                    <div class="contentwidht" style="color:#000">
                                        <h4 class="oh">
                                            <b><?php if(session('language')=='bn'): ?><?php echo e('ভ্রমণের বিস্তারিত'); ?><?php else: ?><?php echo e('Tour Details'); ?><?php endif; ?> </b>
                                        </h4>
                                        <p>
                                        <p>
                                            <!--[if gte mso 9]>
                                            <xml>
                                                <o:OfficeDocumentSettings>
                                                    <o:AllowPNG/>
                                                </o:OfficeDocumentSettings>
                                            </xml><![endif]-->
                                            <!--[if gte mso 9]>
                                            <xml>
                                                <w:WordDocument>
                                                    <w:View>Normal</w:View>
                                                    <w:Zoom>0</w:Zoom>
                                                    <w:TrackMoves/>
                                                    <w:TrackFormatting/>
                                                    <w:PunctuationKerning/>
                                                    <w:ValidateAgainstSchemas/>
                                                    <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
                                                    <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
                                                    <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
                                                    <w:DoNotPromoteQF/>
                                                    <w:LidThemeOther>EN-US</w:LidThemeOther>
                                                    <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
                                                    <w:LidThemeComplexScript>BN</w:LidThemeComplexScript>
                                                    <w:Compatibility>
                                                        <w:BreakWrappedTables/>
                                                        <w:SnapToGridInCell/>
                                                        <w:WrapTextWithPunct/>
                                                        <w:UseAsianBreakRules/>
                                                        <w:DontGrowAutofit/>
                                                        <w:SplitPgBreakAndParaMark/>
                                                        <w:EnableOpenTypeKerning/>
                                                        <w:DontFlipMirrorIndents/>
                                                        <w:OverrideTableStyleHps/>
                                                    </w:Compatibility>
                                                    <m:mathPr>
                                                        <m:mathFont m:val="Cambria Math"/>
                                                        <m:brkBin m:val="before"/>
                                                        <m:brkBinSub m:val="&#45;-"/>
                                                        <m:smallFrac m:val="off"/>
                                                        <m:dispDef/>
                                                        <m:lMargin m:val="0"/>
                                                        <m:rMargin m:val="0"/>
                                                        <m:defJc m:val="centerGroup"/>
                                                        <m:wrapIndent m:val="1440"/>
                                                        <m:intLim m:val="subSup"/>
                                                        <m:naryLim m:val="undOvr"/>
                                                    </m:mathPr>
                                                </w:WordDocument>
                                            </xml><![endif]-->
                                            <!--[if gte mso 9]>
                                            <xml>
                                                <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
                                                                DefSemiHidden="true" DefQFormat="false" DefPriority="99"
                                                                LatentStyleCount="267">
                                                    <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Normal"/>
                                                    <w:LsdException Locked="false" Priority="9" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="heading 1"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 2"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 3"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 4"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 5"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 6"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 7"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 8"/>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 9"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
                                                    <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
                                                    <w:LsdException Locked="false" Priority="35" QFormat="true"
                                                                    Name="caption"/>
                                                    <w:LsdException Locked="false" Priority="10" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true" Name="Title"/>
                                                    <w:LsdException Locked="false" Priority="1"
                                                                    Name="Default Paragraph Font"/>
                                                    <w:LsdException Locked="false" Priority="11" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtitle"/>
                                                    <w:LsdException Locked="false" Priority="22" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Strong"/>
                                                    <w:LsdException Locked="false" Priority="20" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Emphasis"/>
                                                    <w:LsdException Locked="false" Priority="59" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Table Grid"/>
                                                    <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                    Name="Placeholder Text"/>
                                                    <w:LsdException Locked="false" Priority="1" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="No Spacing"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Shading"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium Shading 1"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium Shading 2"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium List 1"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium List 2"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium Grid 1"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium Grid 2"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Medium Grid 3"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Colorful Shading"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Colorful List"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Colorful Grid"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 1"/>
                                                    <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                    Name="Revision"/>
                                                    <w:LsdException Locked="false" Priority="34" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="List Paragraph"/>
                                                    <w:LsdException Locked="false" Priority="29" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
                                                    <w:LsdException Locked="false" Priority="30" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Quote"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 1"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 2"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 3"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 4"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 5"/>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light List Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false" Name="Dark List Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 6"/>
                                                    <w:LsdException Locked="false" Priority="19" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtle Emphasis"/>
                                                    <w:LsdException Locked="false" Priority="21" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Emphasis"/>
                                                    <w:LsdException Locked="false" Priority="31" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtle Reference"/>
                                                    <w:LsdException Locked="false" Priority="32" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Reference"/>
                                                    <w:LsdException Locked="false" Priority="33" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Book Title"/>
                                                    <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
                                                    <w:LsdException Locked="false" Priority="39" QFormat="true"
                                                                    Name="TOC Heading"/>
                                                </w:LatentStyles>
                                            </xml><![endif]-->
                                            <!--[if gte mso 10]>
                                            <style>
                                                /* Style Definitions */
                                                table.MsoNormalTable {
                                                    mso-style-name: "Table Normal";
                                                    mso-tstyle-rowband-size: 0;
                                                    mso-tstyle-colband-size: 0;
                                                    mso-style-noshow: yes;
                                                    mso-style-priority: 99;
                                                    mso-style-parent: "";
                                                    mso-padding-alt: 0in 5.4pt 0in 5.4pt;
                                                    mso-para-margin-top: 0in;
                                                    mso-para-margin-right: 0in;
                                                    mso-para-margin-bottom: 10.0pt;
                                                    mso-para-margin-left: 0in;
                                                    line-height: 115%;
                                                    mso-pagination: widow-orphan;
                                                    font-size: 11.0pt;
                                                    font-family: "Calibri", "sans-serif";
                                                    mso-ascii-font-family: Calibri;
                                                    mso-ascii-theme-font: minor-latin;
                                                    mso-hansi-font-family: Calibri;
                                                    mso-hansi-theme-font: minor-latin;
                                                }
                                            </style>
                                            <![endif]-->

                                        </p>
                                        <p class="MsoListParagraphCxSpLast" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;mso-add-space:auto;line-height:normal"><span style="font-size:14px;
font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-weight:bold"><?php if(session('language')=='bn'): ?><?=$package_bn[0]->tour_details?> <?php else: ?> <?=$package[0]->tour_details?><?php endif; ?> </span><span
                                                    style="font-size:14px;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;"></span></p>
                                        <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal">

                                            <!--[if gte mso 9]>
                                            <xml>
                                                <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
                                                                DefSemiHidden="true" DefQFormat="false" DefPriority="99"
                                                                LatentStyleCount="267">
                                                    <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Normal"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="heading 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 7"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 8"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                    Name="heading 9"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 7"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 8"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39"
                                                                    Name="toc 9"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="35" QFormat="true"
                                                                    Name="caption"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="10" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Title"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="1"
                                                                    Name="Default Paragraph Font"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="11" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtitle"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="22" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Strong"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="20" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Emphasis"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="59" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Table Grid"></w:LsdException>
                                                    <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                    Name="Placeholder Text"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="1" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="No Spacing"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                    Name="Revision"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="34" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="List Paragraph"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="29" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Quote"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="30" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Quote"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 1"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 2"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 3"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 4"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 5"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Shading Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light List Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Light Grid Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 1 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Shading 2 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 1 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium List 2 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 1 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 2 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Medium Grid 3 Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Dark List Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Shading Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful List Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                    UnhideWhenUsed="false"
                                                                    Name="Colorful Grid Accent 6"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="19" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtle Emphasis"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="21" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Emphasis"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="31" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Subtle Reference"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="32" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Intense Reference"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="33" SemiHidden="false"
                                                                    UnhideWhenUsed="false" QFormat="true"
                                                                    Name="Book Title"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="37"
                                                                    Name="Bibliography"></w:LsdException>
                                                    <w:LsdException Locked="false" Priority="39" QFormat="true"
                                                                    Name="TOC Heading"></w:LsdException>
                                                </w:LatentStyles>
                                            </xml><![endif]-->
                                            <!--[if gte mso 9]>
                                            <xml>
                                                <w:WordDocument>
                                                    <w:View>Normal</w:View>
                                                    <w:Zoom>0</w:Zoom>
                                                    <w:TrackMoves></w:TrackMoves>
                                                    <w:TrackFormatting></w:TrackFormatting>
                                                    <w:PunctuationKerning></w:PunctuationKerning>
                                                    <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>
                                                    <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
                                                    <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
                                                    <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
                                                    <w:DoNotPromoteQF></w:DoNotPromoteQF>
                                                    <w:LidThemeOther>EN-US</w:LidThemeOther>
                                                    <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
                                                    <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
                                                    <w:Compatibility>
                                                        <w:BreakWrappedTables></w:BreakWrappedTables>
                                                        <w:SnapToGridInCell></w:SnapToGridInCell>
                                                        <w:WrapTextWithPunct></w:WrapTextWithPunct>
                                                        <w:UseAsianBreakRules></w:UseAsianBreakRules>
                                                        <w:DontGrowAutofit></w:DontGrowAutofit>
                                                        <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>
                                                        <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>
                                                        <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>
                                                        <w:OverrideTableStyleHps></w:OverrideTableStyleHps>
                                                    </w:Compatibility>
                                                    <m:mathPr>
                                                        <m:mathFont m:val="Cambria Math"></m:mathFont>
                                                        <m:brkBin m:val="before"></m:brkBin>
                                                        <m:brkBinSub m:val="&#45;-"></m:brkBinSub>
                                                        <m:smallFrac m:val="off"></m:smallFrac>
                                                        <m:dispDef></m:dispDef>
                                                        <m:lMargin m:val="0"></m:lMargin>
                                                        <m:rMargin m:val="0"></m:rMargin>
                                                        <m:defJc m:val="centerGroup"></m:defJc>
                                                        <m:wrapIndent m:val="1440"></m:wrapIndent>
                                                        <m:intLim m:val="subSup"></m:intLim>
                                                        <m:naryLim m:val="undOvr"></m:naryLim>
                                                    </m:mathPr>
                                                </w:WordDocument>
                                            </xml><![endif]-->
                                            <!--[if gte mso 9]>
                                            <xml>
                                                <o:OfficeDocumentSettings>
                                                    <o:AllowPNG></o:AllowPNG>
                                                </o:OfficeDocumentSettings>
                                            </xml><![endif]-->
                                            <!--[if gte mso 10]>
                                            <style>
                                                /* Style Definitions */
                                                table.MsoNormalTable {
                                                    mso-style-name: "Table Normal";
                                                    mso-tstyle-rowband-size: 0;
                                                    mso-tstyle-colband-size: 0;
                                                    mso-style-noshow: yes;
                                                    mso-style-priority: 99;
                                                    mso-style-parent: "";
                                                    mso-padding-alt: 0in 5.4pt 0in 5.4pt;
                                                    mso-para-margin-top: 0in;
                                                    mso-para-margin-right: 0in;
                                                    mso-para-margin-bottom: 8.0pt;
                                                    mso-para-margin-left: 0in;
                                                    line-height: 107%;
                                                    mso-pagination: widow-orphan;
                                                    font-size: 11.0pt;
                                                    font-family: "Calibri", "sans-serif";
                                                    mso-ascii-font-family: Calibri;
                                                    mso-ascii-theme-font: minor-latin;
                                                    mso-hansi-font-family: Calibri;
                                                    mso-hansi-theme-font: minor-latin;
                                                }
                                            </style>
                                            <![endif]--><b><span
                                                        style="font-size:14px;font-family:&quot;Arial&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-language:BN"><br></span></b></p>

                                        </p>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade" style="color:#000"><br>
                                    <h5><b>Important Notes</b></h5>
                                    <p>
                                    <p>
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <o:OfficeDocumentSettings>
                                                <o:TargetScreenSize>800x600</o:TargetScreenSize>
                                            </o:OfficeDocumentSettings>
                                        </xml><![endif]-->
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <w:WordDocument>
                                                <w:View>Normal</w:View>
                                                <w:Zoom>0</w:Zoom>
                                                <w:TrackMoves/>
                                                <w:TrackFormatting/>
                                                <w:PunctuationKerning/>
                                                <w:ValidateAgainstSchemas/>
                                                <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
                                                <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
                                                <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
                                                <w:DoNotPromoteQF/>
                                                <w:LidThemeOther>EN-US</w:LidThemeOther>
                                                <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
                                                <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
                                                <w:Compatibility>
                                                    <w:BreakWrappedTables/>
                                                    <w:SnapToGridInCell/>
                                                    <w:WrapTextWithPunct/>
                                                    <w:UseAsianBreakRules/>
                                                    <w:DontGrowAutofit/>
                                                    <w:SplitPgBreakAndParaMark/>
                                                    <w:EnableOpenTypeKerning/>
                                                    <w:DontFlipMirrorIndents/>
                                                    <w:OverrideTableStyleHps/>
                                                    <w:UseFELayout/>
                                                </w:Compatibility>
                                                <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
                                                <m:mathPr>
                                                    <m:mathFont m:val="Cambria Math"/>
                                                    <m:brkBin m:val="before"/>
                                                    <m:brkBinSub m:val="&#45;-"/>
                                                    <m:smallFrac m:val="off"/>
                                                    <m:dispDef/>
                                                    <m:lMargin m:val="0"/>
                                                    <m:rMargin m:val="0"/>
                                                    <m:defJc m:val="centerGroup"/>
                                                    <m:wrapIndent m:val="1440"/>
                                                    <m:intLim m:val="subSup"/>
                                                    <m:naryLim m:val="undOvr"/>
                                                </m:mathPr>
                                            </w:WordDocument>
                                        </xml><![endif]-->
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
                                                            DefSemiHidden="true" DefQFormat="false" DefPriority="99"
                                                            LatentStyleCount="267">
                                                <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
                                                <w:LsdException Locked="false" Priority="9" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 2"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 3"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 4"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 5"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 6"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 7"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 8"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 9"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
                                                <w:LsdException Locked="false" Priority="35" QFormat="true"
                                                                Name="caption"/>
                                                <w:LsdException Locked="false" Priority="10" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Title"/>
                                                <w:LsdException Locked="false" Priority="0"
                                                                Name="Default Paragraph Font"/>
                                                <w:LsdException Locked="false" Priority="11" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
                                                <w:LsdException Locked="false" Priority="22" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
                                                <w:LsdException Locked="false" Priority="20" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
                                                <w:LsdException Locked="false" Priority="59" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Table Grid"/>
                                                <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                Name="Placeholder Text"/>
                                                <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="No Spacing"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Shading 1"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Shading 2"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Shading"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
                                                <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
                                                <w:LsdException Locked="false" Priority="34" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="List Paragraph"/>
                                                <w:LsdException Locked="false" Priority="29" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
                                                <w:LsdException Locked="false" Priority="30" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Quote"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 1"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 2"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 3"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 4"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 5"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 6"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
                                                <w:LsdException Locked="false" Priority="19" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Subtle Emphasis"/>
                                                <w:LsdException Locked="false" Priority="21" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Emphasis"/>
                                                <w:LsdException Locked="false" Priority="31" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Subtle Reference"/>
                                                <w:LsdException Locked="false" Priority="32" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Reference"/>
                                                <w:LsdException Locked="false" Priority="33" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Book Title"/>
                                                <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
                                                <w:LsdException Locked="false" Priority="39" QFormat="true"
                                                                Name="TOC Heading"/>
                                            </w:LatentStyles>
                                        </xml><![endif]-->
                                        <!--[if gte mso 10]>
                                        <style>
                                            /* Style Definitions */
                                            table.MsoNormalTable {
                                                mso-style-name: "Table Normal";
                                                mso-tstyle-rowband-size: 0;
                                                mso-tstyle-colband-size: 0;
                                                mso-style-noshow: yes;
                                                mso-style-priority: 99;
                                                mso-style-parent: "";
                                                mso-padding-alt: 0in 5.4pt 0in 5.4pt;
                                                mso-para-margin: 0in;
                                                mso-para-margin-bottom: .0001pt;
                                                mso-pagination: widow-orphan;
                                                font-size: 10.0pt;
                                                font-family: "Times New Roman", "serif";
                                            }
                                        </style>
                                        <![endif]-->

                                    </p>
                                    <p class="MsoNoSpacing" style="margin-left:.5in;mso-list:l0 level1 lfo1"><span
                                                style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings"><span style="mso-list:Ignore">Ø<span style="font:14px &quot;Times New Roman&quot;">&nbsp;
</span></span>
                                            </span><b
                                                style="mso-bidi-font-weight:normal"><?php if(session('language')=='bn'): ?><?=$package_bn[0]->important_notes?> <?php else: ?> <?=$package[0]->important_notes?><?php endif; ?></b>
                                    </p>

                                    </p>
                                </div>
                                <div id="menu2" class="tab-pane fade" style="color:#000"><br>
                                    <h5><b>Terms and Service</b></h5>
                                    <p>
                                    <p>
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <o:OfficeDocumentSettings>
                                                <o:AllowPNG/>
                                            </o:OfficeDocumentSettings>
                                        </xml><![endif]-->
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <w:WordDocument>
                                                <w:View>Normal</w:View>
                                                <w:Zoom>0</w:Zoom>
                                                <w:TrackMoves/>
                                                <w:TrackFormatting/>
                                                <w:PunctuationKerning/>
                                                <w:ValidateAgainstSchemas/>
                                                <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
                                                <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
                                                <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
                                                <w:DoNotPromoteQF/>
                                                <w:LidThemeOther>EN-US</w:LidThemeOther>
                                                <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
                                                <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
                                                <w:Compatibility>
                                                    <w:BreakWrappedTables/>
                                                    <w:SnapToGridInCell/>
                                                    <w:WrapTextWithPunct/>
                                                    <w:UseAsianBreakRules/>
                                                    <w:DontGrowAutofit/>
                                                    <w:SplitPgBreakAndParaMark/>
                                                    <w:EnableOpenTypeKerning/>
                                                    <w:DontFlipMirrorIndents/>
                                                    <w:OverrideTableStyleHps/>
                                                </w:Compatibility>
                                                <m:mathPr>
                                                    <m:mathFont m:val="Cambria Math"/>
                                                    <m:brkBin m:val="before"/>
                                                    <m:brkBinSub m:val="&#45;-"/>
                                                    <m:smallFrac m:val="off"/>
                                                    <m:dispDef/>
                                                    <m:lMargin m:val="0"/>
                                                    <m:rMargin m:val="0"/>
                                                    <m:defJc m:val="centerGroup"/>
                                                    <m:wrapIndent m:val="1440"/>
                                                    <m:intLim m:val="subSup"/>
                                                    <m:naryLim m:val="undOvr"/>
                                                </m:mathPr>
                                            </w:WordDocument>
                                        </xml><![endif]-->
                                        <!--[if gte mso 9]>
                                        <xml>
                                            <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
                                                            DefSemiHidden="true" DefQFormat="false" DefPriority="99"
                                                            LatentStyleCount="267">
                                                <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
                                                <w:LsdException Locked="false" Priority="9" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 2"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 3"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 4"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 5"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 6"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 7"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 8"/>
                                                <w:LsdException Locked="false" Priority="9" QFormat="true"
                                                                Name="heading 9"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
                                                <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
                                                <w:LsdException Locked="false" Priority="35" QFormat="true"
                                                                Name="caption"/>
                                                <w:LsdException Locked="false" Priority="10" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Title"/>
                                                <w:LsdException Locked="false" Priority="1"
                                                                Name="Default Paragraph Font"/>
                                                <w:LsdException Locked="false" Priority="11" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
                                                <w:LsdException Locked="false" Priority="22" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
                                                <w:LsdException Locked="false" Priority="20" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
                                                <w:LsdException Locked="false" Priority="59" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Table Grid"/>
                                                <w:LsdException Locked="false" UnhideWhenUsed="false"
                                                                Name="Placeholder Text"/>
                                                <w:LsdException Locked="false" Priority="0" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="No Spacing"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Shading 1"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Shading 2"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Shading"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
                                                <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
                                                <w:LsdException Locked="false" Priority="34" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="List Paragraph"/>
                                                <w:LsdException Locked="false" Priority="29" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
                                                <w:LsdException Locked="false" Priority="30" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Quote"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 1"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 2"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 3"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 4"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 5"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
                                                <w:LsdException Locked="false" Priority="60" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
                                                <w:LsdException Locked="false" Priority="61" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="62" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
                                                <w:LsdException Locked="false" Priority="63" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="64" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Medium Shading 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="65" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="66" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="67" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="68" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="69" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
                                                <w:LsdException Locked="false" Priority="70" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Dark List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="71" SemiHidden="false"
                                                                UnhideWhenUsed="false"
                                                                Name="Colorful Shading Accent 6"/>
                                                <w:LsdException Locked="false" Priority="72" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
                                                <w:LsdException Locked="false" Priority="73" SemiHidden="false"
                                                                UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
                                                <w:LsdException Locked="false" Priority="19" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Subtle Emphasis"/>
                                                <w:LsdException Locked="false" Priority="21" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Emphasis"/>
                                                <w:LsdException Locked="false" Priority="31" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Subtle Reference"/>
                                                <w:LsdException Locked="false" Priority="32" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Intense Reference"/>
                                                <w:LsdException Locked="false" Priority="33" SemiHidden="false"
                                                                UnhideWhenUsed="false" QFormat="true"
                                                                Name="Book Title"/>
                                                <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
                                                <w:LsdException Locked="false" Priority="39" QFormat="true"
                                                                Name="TOC Heading"/>
                                            </w:LatentStyles>
                                        </xml><![endif]-->
                                        <!--[if gte mso 10]>
                                        <style>
                                            /* Style Definitions */
                                            table.MsoNormalTable {
                                                mso-style-name: "Table Normal";
                                                mso-tstyle-rowband-size: 0;
                                                mso-tstyle-colband-size: 0;
                                                mso-style-noshow: yes;
                                                mso-style-priority: 99;
                                                mso-style-parent: "";
                                                mso-padding-alt: 0in 5.4pt 0in 5.4pt;
                                                mso-para-margin-top: 0in;
                                                mso-para-margin-right: 0in;
                                                mso-para-margin-bottom: 8.0pt;
                                                mso-para-margin-left: 0in;
                                                line-height: 107%;
                                                mso-pagination: widow-orphan;
                                                font-size: 11.0pt;
                                                font-family: "Calibri", "sans-serif";
                                                mso-ascii-font-family: Calibri;
                                                mso-ascii-theme-font: minor-latin;
                                                mso-hansi-font-family: Calibri;
                                                mso-hansi-theme-font: minor-latin;
                                            }
                                        </style>
                                        <![endif]-->

                                    </p>
                                    <p class="MsoNoSpacing" style="margin-left:.5in;mso-list:l0 level1 lfo1"><span
                                                style="font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings"><span style="mso-list:Ignore">Ø<span style="font:14px &quot;Times New Roman&quot;">&nbsp;
</span></span>
                                            </span><b
                                                style="mso-bidi-font-weight:normal"><?php if(session('language')=='bn'): ?><?=$package_bn[0]->terms_conditions?> <?php else: ?> <?=$package[0]->terms_conditions?><?php endif; ?></b>
                                    </p>

                                    </p>
                                </div>
                                <div id="menu3" class="tab-pane fade" style="color:#000"><br>
                                    <h5><b>Visa Information</b></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title"
                                        id="myModalLabel"><?php if(session('language')=='bn'): ?><?php echo e('বুকিং দিতে যোগাযোগ'); ?><?php else: ?><?php echo e('Call For Booking'); ?><?php endif; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <h2><?php if(session('language')=='bn'): ?> <?php echo e('যোগাযোগের ঠিকানা'); ?><?php else: ?> <?php echo e('Our Contact Details'); ?><?php endif; ?> </h2>
                                    <div class="footer-text" style="color:#222;font-size:16px;">
                                        <p>
                                            <b><?php if(session('language')=='bn'): ?><?php echo e($company_info[0]->company_name_bn); ?><?php else: ?><?php echo e($company_info[0]->company_name); ?><?php endif; ?></b><br>
                                            <?php if(session('language')=='bn'): ?> <?php echo e($contact_info[0]->address_bn); ?><?php else: ?> <?php echo e($contact_info[0]->address); ?><?php endif; ?>
                                        </p>
                                        <p>
                                            <b><?php if(session('language')=='bn'): ?> <?php echo e('প্যাকেজ সংক্রান্ত তথ্যের জন্য'); ?><?php else: ?> <?php echo e('For Package Information :'); ?><?php endif; ?> </b><br><?php if(session('language')=='bn'): ?><?php echo e($contact_info[0]->package_info_bn); ?><?php else: ?><?php echo e($contact_info[0]->package_info); ?><?php endif; ?>
                                        </p>
                                        <p>
                                            <b><?php if(session('language')=='bn'): ?> <?php echo e('এয়ার টিকেট সংক্রান্ত তথ্যের জন্য'); ?><?php else: ?> <?php echo e('For Air Ticket Information :'); ?><?php endif; ?> </b><br><?php if(session('language')=='bn'): ?><?php echo e($contact_info[0]->air_ticket_info_bn); ?><?php else: ?><?php echo e($contact_info[0]->air_ticket_info); ?><?php endif; ?>
                                        </p>
                                        <p>
                                            <b><?php if(session('language')=='bn'): ?> <?php echo e('ইমেইল :'); ?><?php else: ?> <?php echo e('Email:'); ?><?php endif; ?>  </b><?php echo e($contact_info[0]->email); ?>

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <br>
                    <div class="col-sm-8">

                    </div>
                    


                        
                        
                        
                            
                            
                            
                                      
                            
                            
                            
                            
                        
                    
                </div>

                <br>
            </section>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>