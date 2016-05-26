@extends('layouts.site')


@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/plugins/select2/select2.css" />
    <link href="{{ asset('') }}assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('') }}assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
@endsection



@section('content')

    <!-- start: PAGE CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Event <span class="text-bold">Detail</span></h4>
                </div>
                <div class="panel-body">
                    <div class="invoice">
                        <div class="row invoice-logo">
                            <div class="col-sm-4">
                                <img alt="logo event or poster here" src="{{ asset('') }}assets/img/your-logo-here.png">
                            </div>
                            <div class="col-sm-8">
                                <ul class="list-unstyled invoice-details">
                                    <li>
                                        <strong>Event Name</strong> bla bla bla
                                    </li>
                                    <li>
                                        <strong>Grade</strong> bla bla bla
                                    </li>
                                    <li>
                                        <strong>Date</strong> bla bla bla
                                    </li>
                                    <li>
                                        <strong>TTD</strong> bla bla bla
                                    </li>
                                    <li>
                                        <strong>Enroll Key</strong> bla bla bla
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h4>Certificate Design:</h4>
                                <div class="well center">
                                    <h3>Certificate has not been chosen</h3>
                                    <a href="#responsive" data-toggle="modal" class="demo btn btn-blue">
                                        Choose wisely
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h4>Our goal or bio or something to writedown here</h4>
                                <div class="padding-vertical-20">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Participant :</h4>
                                <div class="row">
                                    <div class="col-md-12 space20">
                                        <button class="btn btn-green add-row">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="eventMember">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Role</th>
                                                <th>Phone</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Peter Clark</td>
                                                <td>UI Designer</td>
                                                <td>(641)-734-4763</td>
                                                <td>
                                                <a href="#" class="edit-row">
                                                    Edit
                                                </a></td>
                                                <td>
                                                <a href="#" class="delete-row">
                                                    Delete
                                                </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 invoice-block">
                            <br />
                                <a class="btn btn-lg btn-green hidden-print">
                                    Back to List Event <i class="fa fa-check"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: PAGE CONTENT-->


    <div id="responsive" class="modal extended-modal fade no-display" tabindex="-1" data-width="760">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">Responsive</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="Awards" style="position:relative;">

                            <!-- ORI    GINAL COMMENTED BY GREG 2014.02.05 -->
                            <!--
                            <h3>Awards Certificate Templates&nbsp;&nbsp;<a href=http://www.certificatefun.com/certificates/awards/><font size=2 color=black><u>View All</u></font></a></h3>
                            <br>
                            -->
                            <!-- NEW TEMP - REMOVED "View All" - I would like to reintroduce "View All" as needed on each category individually as they hit the eleven certs mark - CHANGED BY GREG 2014.02.05 -->
                            <h3>Awards Certificate Templates&nbsp;&nbsp;<a href="http://www.certificatefun.com/certificates/awards/"><font color="black" size="2"><u></u></font></a></h3>
                            <br>


                                  

                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Achievement" alt="Certificate of Achievement" href="http://www.certificatefun.com/certificates/awards/achievement/"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/16.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/achievement/"><font color="black"><strong>Achievement</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Appreciation" alt="Certificate of Appreciation" href="http://www.certificatefun.com/certificates/awards/appreciation/"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/30.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/appreciation/"><font color="black"><strong>Appreciation</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Attendance Certificate" alt="Attendance Certificate" href="http://www.certificatefun.com/certificates/awards/attendance"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/59.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/attendance"><font color="black"><strong>Attendence</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Employee of the Month" alt="Employee of the Month" href="http://www.certificatefun.com/certificates/awards/employee_of_the_month"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/61.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/employee_of_the_month"><font color="black"><strong>Employee of the Month</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Excellence" alt="Certificate of Excellence" href="http://www.certificatefun.com/certificates/awards/excellence"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/24.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/excellence"><font color="black"><strong>Excellence</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Farewell" alt="Certificate of Farewell" href="http://www.certificatefun.com/certificates/awards/farewell/"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/52.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/farewell/"><font color="black"><strong>Farewell</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Healing" alt="Certificate of Healing" href="http://www.certificatefun.com/certificates/awards/healing/"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/31.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/healing/"><font color="black"><strong>Healing</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <a title="Certificate of Improvement" alt="Certificate of Improvement" href="http://www.certificatefun.com/certificates/awards/certificate_of_improvement"><img class="ninjabox" src="http://www.certificatefun.com/images/samples/60.gif" height="120"></a>
                            <br><a href="http://www.certificatefun.com/certificates/awards/certificate_of_improvement"><font color="black"><strong>Improvement</strong></font></a>
                            </div>
                                  
                                  
                                  


                            </div>
                            <div id="Baby" style="margin-top:50px;position:relative;">

                            <!-- ORIGINAL COMMENTED BY GREG 2014.02.05 -->
                            <!--
                            <h3>Baby Certificate Templates&nbsp;&nbsp;<a href=http://www.certificatefun.com/certificates/baby/><font size=2 color=black><u>View All</u></font></a></h3>
                            <br>
                            -->
                            <!-- NEW TEMP - REMOVED "View All" - I would like to reintroduce "View All" as needed on each category individually as they hit the eleven certs mark - CHANGED BY GREG 2014.02.05 -->
                            <h3>Baby Certificate Templates&nbsp;&nbsp;<a href="http://www.certificatefun.com/certificates/baby/"><font color="black" size="2"><u></u></font></a></h3>
                            <br>


                                  

                            <div style="float:left;text-align: center;margin:5px;">
                            <div class="slingpic  right" data-img-hash="56235" style="bottom:auto;display:inline-block;float:none;left:auto;margin-top:5px;margin-right:5px;margin-bottom:5px;margin-left:5px;max-width:none;position:relative;right:auto;top:auto;height:121px;width:165px;"><a title="Certified Handprints" alt="Certified Handprints" href="http://www.certificatefun.com/certificates/baby/handprints/"><img class="ninjabox slingpic_reset" src="http://www.certificatefun.com/images/samples/34.gif" height="120"></a><div class="slingpicShareCount" data-base-state="33" style="display: none ! important; right: 63px; top: 6px ! important;">
                                <span class="slingpicShareCountValue">0</span>
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/i/4eef53b4d52bc56cf4000063" alt="" height="1" width="1">
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/map/sp/1v9gu7g8" alt="" height="1" width="1">
                            </div>
                            <div class="slingpicShareBtn" style="display: none !important;right: 5px !important;top: 6px !important;"></div>
                            <div class="slingpicWidgetContainer" style="display: none !important;right: 5px !important;top: 41px !important;">
                                <div class="slingpicArrow"></div>
                                <div class="slingpicHeader"><a class="slingpicWidgetClose"></a>Share this image</div>
                                <ul class="slingpicSocialBtnContainer">
                                    <li class="first-child">
                                <a data-social-network="facebook" class="slingpicSocialBtn slingpicShare-facebook external" href="http://www.facebook.com/share.php?s=100&amp;p[title]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;p[summary]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;p[url]=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.fa&amp;&amp;p[images][0]=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=670,height=350'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="twitter" class="slingpicSocialBtn slingpicShare-twitter external" href="http://twitter.com/share?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.tw&amp;text=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;count=horiztonal" "="" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=252'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="pinterest" class="slingpicSocialBtn slingpicShare-pinterest external" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.pi&amp;media=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif&amp;description=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="email" class="slingpicSocialBtn slingpicShare-email external" href="mailto:?subject=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;body=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif from http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.em" target="_blank" rel="nofollow"></a>
                            </li>
                                </ul>
                                <ul class="slingpicMoreSocialBtnContainer" style="display: none !important">
                                <li class="first-child">
                                <a data-social-network="delicious" class="slingpicSocialBtn slingpicShare-delicious external" href="http://delicious.com/post?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.de&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="linkedin" class="slingpicSocialBtn slingpicShare-linkedin external" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.li&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif&amp;summary=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;source={url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="reddit" class="slingpicSocialBtn slingpicShare-reddit external" href="http://reddit.com/submit?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.re&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="friendfeed" class="slingpicSocialBtn slingpicShare-friendfeed external" href="http://www.friendfeed.com/share?title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif&amp;link=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.ff&amp;image0_url={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="digg" class="slingpicSocialBtn slingpicShare-digg external" href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.di&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;bodytext=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="tumblr" class="slingpicSocialBtn slingpicShare-tumblr external" href="http://www.tumblr.com/share/photo?source=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif&amp;caption=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;click_thru=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.tu" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=450,height=450'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="myspace" class="slingpicSocialBtn slingpicShare-myspace external" href="http://www.myspace.com/Modules/PostTo/Pages/?u=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.56235.ms&amp;t=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;c=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F34.gif&amp;l={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="print" class="slingpicSocialBtn slingpicShare-print external" href="http://www.certificatefun.com/images/samples/34.gif" target="_blank" onclick="var printme = window.open(this.href,'image'); return false;" rel="nofollow"></a>
                            </li>
                            </ul>
                                <div class="slingpicFooter">
                                    <a href="#" class="slingpicWidgetMoreLessBtn">more</a>
                                    <a class="slingpicWidgetSlingpicLink" href="http://slingpic.com" target="_blank">Slingpic</a>
                                    <span class="slingpicWidgetSlingpicText">Powered by </span>
                                </div>
                            </div></div>
                            <br><a href="http://www.certificatefun.com/certificates/baby/handprints/"><font color="black"><strong>Baby Handprints</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <div class="slingpic  right" data-img-hash="61222" style="bottom:auto;display:inline-block;float:none;left:auto;margin-top:5px;margin-right:5px;margin-bottom:5px;margin-left:5px;max-width:none;position:relative;right:auto;top:auto;height:121px;width:165px;"><a title="Certified Baby Name" alt="Certified Baby Name" href="http://www.certificatefun.com/certificates/baby/baby-name/"><img class="ninjabox slingpic_reset" src="http://www.certificatefun.com/images/samples/33.gif" height="120"></a><div class="slingpicShareCount" data-base-state="33" style="display: none !important;right: 33px;top: 6px !important;">
                                <span class="slingpicShareCountValue">0</span>
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/i/4eef53b4d52bc56cf4000063" alt="" height="1" width="1">
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/map/sp/1v9gu7g8" alt="" height="1" width="1">
                            </div>
                            <div class="slingpicShareBtn" style="display: none !important;right: 5px !important;top: 6px !important;"></div>
                            <div class="slingpicWidgetContainer" style="display: none !important;right: 5px !important;top: 41px !important;">
                                <div class="slingpicArrow"></div>
                                <div class="slingpicHeader"><a class="slingpicWidgetClose"></a>Share this image</div>
                                <ul class="slingpicSocialBtnContainer">
                                    <li class="first-child">
                                <a data-social-network="facebook" class="slingpicSocialBtn slingpicShare-facebook external" href="http://www.facebook.com/share.php?s=100&amp;p[title]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;p[summary]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;p[url]=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.fa&amp;&amp;p[images][0]=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=670,height=350'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="twitter" class="slingpicSocialBtn slingpicShare-twitter external" href="http://twitter.com/share?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.tw&amp;text=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;count=horiztonal" "="" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=252'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="pinterest" class="slingpicSocialBtn slingpicShare-pinterest external" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.pi&amp;media=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif&amp;description=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="email" class="slingpicSocialBtn slingpicShare-email external" href="mailto:?subject=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;body=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif from http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.em" target="_blank" rel="nofollow"></a>
                            </li>
                                </ul>
                                <ul class="slingpicMoreSocialBtnContainer" style="display: none !important">
                                <li class="first-child">
                                <a data-social-network="delicious" class="slingpicSocialBtn slingpicShare-delicious external" href="http://delicious.com/post?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.de&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="linkedin" class="slingpicSocialBtn slingpicShare-linkedin external" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.li&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif&amp;summary=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;source={url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="reddit" class="slingpicSocialBtn slingpicShare-reddit external" href="http://reddit.com/submit?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.re&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="friendfeed" class="slingpicSocialBtn slingpicShare-friendfeed external" href="http://www.friendfeed.com/share?title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif&amp;link=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.ff&amp;image0_url={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="digg" class="slingpicSocialBtn slingpicShare-digg external" href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.di&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;bodytext=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="tumblr" class="slingpicSocialBtn slingpicShare-tumblr external" href="http://www.tumblr.com/share/photo?source=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif&amp;caption=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;click_thru=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.tu" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=450,height=450'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="myspace" class="slingpicSocialBtn slingpicShare-myspace external" href="http://www.myspace.com/Modules/PostTo/Pages/?u=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61222.ms&amp;t=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;c=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F33.gif&amp;l={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="print" class="slingpicSocialBtn slingpicShare-print external" href="http://www.certificatefun.com/images/samples/33.gif" target="_blank" onclick="var printme = window.open(this.href,'image'); return false;" rel="nofollow"></a>
                            </li>
                            </ul>
                                <div class="slingpicFooter">
                                    <a href="#" class="slingpicWidgetMoreLessBtn">more</a>
                                    <a class="slingpicWidgetSlingpicLink" href="http://slingpic.com" target="_blank">Slingpic</a>
                                    <span class="slingpicWidgetSlingpicText">Powered by </span>
                                </div>
                            </div></div>
                            <br><a href="http://www.certificatefun.com/certificates/baby/baby-name/"><font color="black"><strong>Baby Name</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <div class="slingpic  right" data-img-hash="61592" style="bottom:auto;display:inline-block;float:none;left:auto;margin-top:5px;margin-right:5px;margin-bottom:5px;margin-left:5px;max-width:none;position:relative;right:auto;top:auto;height:121px;width:165px;"><a title="Certified Baby Prints" alt="Certified Baby Prints" href="http://www.certificatefun.com/certificates/baby/baby-prints/"><img class="ninjabox slingpic_reset" src="http://www.certificatefun.com/images/samples/32.gif" height="120"></a><div class="slingpicShareCount" data-base-state="33" style="display: none !important;right: 33px;top: 6px !important;">
                                <span class="slingpicShareCountValue">0</span>
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/i/4eef53b4d52bc56cf4000063" alt="" height="1" width="1">
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/map/sp/1v9gu7g8" alt="" height="1" width="1">
                            </div>
                            <div class="slingpicShareBtn" style="display: none !important;right: 5px !important;top: 6px !important;"></div>
                            <div class="slingpicWidgetContainer" style="display: none !important;right: 5px !important;top: 41px !important;">
                                <div class="slingpicArrow"></div>
                                <div class="slingpicHeader"><a class="slingpicWidgetClose"></a>Share this image</div>
                                <ul class="slingpicSocialBtnContainer">
                                    <li class="first-child">
                                <a data-social-network="facebook" class="slingpicSocialBtn slingpicShare-facebook external" href="http://www.facebook.com/share.php?s=100&amp;p[title]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;p[summary]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;p[url]=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.fa&amp;&amp;p[images][0]=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=670,height=350'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="twitter" class="slingpicSocialBtn slingpicShare-twitter external" href="http://twitter.com/share?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.tw&amp;text=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;count=horiztonal" "="" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=252'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="pinterest" class="slingpicSocialBtn slingpicShare-pinterest external" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.pi&amp;media=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif&amp;description=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="email" class="slingpicSocialBtn slingpicShare-email external" href="mailto:?subject=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;body=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif from http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.em" target="_blank" rel="nofollow"></a>
                            </li>
                                </ul>
                                <ul class="slingpicMoreSocialBtnContainer" style="display: none !important">
                                <li class="first-child">
                                <a data-social-network="delicious" class="slingpicSocialBtn slingpicShare-delicious external" href="http://delicious.com/post?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.de&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="linkedin" class="slingpicSocialBtn slingpicShare-linkedin external" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.li&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif&amp;summary=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;source={url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="reddit" class="slingpicSocialBtn slingpicShare-reddit external" href="http://reddit.com/submit?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.re&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="friendfeed" class="slingpicSocialBtn slingpicShare-friendfeed external" href="http://www.friendfeed.com/share?title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif&amp;link=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.ff&amp;image0_url={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="digg" class="slingpicSocialBtn slingpicShare-digg external" href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.di&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;bodytext=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="tumblr" class="slingpicSocialBtn slingpicShare-tumblr external" href="http://www.tumblr.com/share/photo?source=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif&amp;caption=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;click_thru=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.tu" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=450,height=450'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="myspace" class="slingpicSocialBtn slingpicShare-myspace external" href="http://www.myspace.com/Modules/PostTo/Pages/?u=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.61592.ms&amp;t=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;c=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F32.gif&amp;l={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="print" class="slingpicSocialBtn slingpicShare-print external" href="http://www.certificatefun.com/images/samples/32.gif" target="_blank" onclick="var printme = window.open(this.href,'image'); return false;" rel="nofollow"></a>
                            </li>
                            </ul>
                                <div class="slingpicFooter">
                                    <a href="#" class="slingpicWidgetMoreLessBtn">more</a>
                                    <a class="slingpicWidgetSlingpicLink" href="http://slingpic.com" target="_blank">Slingpic</a>
                                    <span class="slingpicWidgetSlingpicText">Powered by </span>
                                </div>
                            </div></div>
                            <br><a href="http://www.certificatefun.com/certificates/baby/baby-prints/"><font color="black"><strong>Baby Prints</strong></font></a>
                            </div>
                                  
                                  


                            <div style="float:left;text-align: center;margin:5px;">
                            <div class="slingpic  right" data-img-hash="73320" style="bottom:auto;display:inline-block;float:none;left:auto;margin-top:5px;margin-right:5px;margin-bottom:5px;margin-left:5px;max-width:none;position:relative;right:auto;top:auto;height:121px;width:165px;"><a title="Baby Footprints Certificate" alt="Baby Footprints Certificate" href="http://www.certificatefun.com/certificates/baby/footprints/"><img class="ninjabox slingpic_reset" src="http://www.certificatefun.com/images/samples/29.gif" height="120"></a><div class="slingpicShareCount" data-base-state="33" style="display: none !important;right: 33px;top: 6px !important;">
                                <span class="slingpicShareCountValue">0</span>
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/i/4eef53b4d52bc56cf4000063" alt="" height="1" width="1">
                                <img class="jgiuyviasejybipmwsxs" src="http://go.affec.tv/map/sp/1v9gu7g8" alt="" height="1" width="1">
                            </div>
                            <div class="slingpicShareBtn" style="display: none !important;right: 5px !important;top: 6px !important;"></div>
                            <div class="slingpicWidgetContainer" style="display: none !important;right: 5px !important;top: 41px !important;">
                                <div class="slingpicArrow"></div>
                                <div class="slingpicHeader"><a class="slingpicWidgetClose"></a>Share this image</div>
                                <ul class="slingpicSocialBtnContainer">
                                    <li class="first-child">
                                <a data-social-network="facebook" class="slingpicSocialBtn slingpicShare-facebook external" href="http://www.facebook.com/share.php?s=100&amp;p[title]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;p[summary]=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;p[url]=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.fa&amp;&amp;p[images][0]=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=670,height=350'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="twitter" class="slingpicSocialBtn slingpicShare-twitter external" href="http://twitter.com/share?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.tw&amp;text=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;count=horiztonal" "="" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=626,height=252'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="pinterest" class="slingpicSocialBtn slingpicShare-pinterest external" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.pi&amp;media=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif&amp;description=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="email" class="slingpicSocialBtn slingpicShare-email external" href="mailto:?subject=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;body=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif from http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.em" target="_blank" rel="nofollow"></a>
                            </li>
                                </ul>
                                <ul class="slingpicMoreSocialBtnContainer" style="display: none !important">
                                <li class="first-child">
                                <a data-social-network="delicious" class="slingpicSocialBtn slingpicShare-delicious external" href="http://delicious.com/post?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.de&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="linkedin" class="slingpicSocialBtn slingpicShare-linkedin external" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.li&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif&amp;summary=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;source={url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="reddit" class="slingpicSocialBtn slingpicShare-reddit external" href="http://reddit.com/submit?url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.re&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="friendfeed" class="slingpicSocialBtn slingpicShare-friendfeed external" href="http://www.friendfeed.com/share?title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic) http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif&amp;link=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.ff&amp;image0_url={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="digg" class="slingpicSocialBtn slingpicShare-digg external" href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.di&amp;title=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates&amp;bodytext=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)" target="_blank" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="tumblr" class="slingpicSocialBtn slingpicShare-tumblr external" href="http://www.tumblr.com/share/photo?source=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif&amp;caption=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;click_thru=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.tu" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=450,height=450'); return false;" rel="nofollow"></a>
                            </li><li>
                                <a data-social-network="myspace" class="slingpicSocialBtn slingpicShare-myspace external" href="http://www.myspace.com/Modules/PostTo/Pages/?u=http%3A%2F%2Fcertificatefun.com%2F%231v9gu7g8.73320.ms&amp;t=Certificate%20Creator%20%7C%20Certificate%20Maker%20%7C%20Certificate%20Templates%20(shared%20via%20SlingPic)&amp;c=http%3A%2F%2Fwww.certificatefun.com%2Fimages%2Fsamples%2F29.gif&amp;l={image-url}" target="_blank" rel="nofollow"></a>
                            </li><li class="last-child">
                                <a data-social-network="print" class="slingpicSocialBtn slingpicShare-print external" href="http://www.certificatefun.com/images/samples/29.gif" target="_blank" onclick="var printme = window.open(this.href,'image'); return false;" rel="nofollow"></a>
                            </li>
                            </ul>
                                <div class="slingpicFooter">
                                    <a href="#" class="slingpicWidgetMoreLessBtn">more</a>
                                    <a class="slingpicWidgetSlingpicLink" href="http://slingpic.com" target="_blank">Slingpic</a>
                                    <span class="slingpicWidgetSlingpicText">Powered by </span>
                                </div>
                            </div></div>
                            <br><a href="http://www.certificatefun.com/certificates/baby/footprints/"><font color="black"><strong>Footprints</strong></font></a>
                            </div>
                                  
                                  
                                  


                            </div>







                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-light-grey">
                        Close
                    </button>
                    <button type="button" class="btn btn-blue">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('script')
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/js/table-data.js"></script>

    <script type="text/javascript" src="{{ asset('') }}assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/js/ui-modals.js"></script>

    <script>
        jQuery(document).ready(function() {
            TableData.init('ParticipantList');
        });
    </script>


@endsection