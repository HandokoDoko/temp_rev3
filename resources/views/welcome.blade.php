@extends('layouts.intro')


@section('css')
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/nvd3/nv.d3.min.css">
@endsection

@section('content')
<div class="section section-header">
    <div class="parallax pattern-image" style="background: rgb(12, 12, 12) none repeat scroll 0% 0%;">
<!--     <img src="https://ununsplash.imgix.net/photo-1427434846691-47fc561d1179?fit=crop&amp;fm=jpg&amp;h=700&amp;q=75&amp;w=1050"/>
         <img src="/assets/img/header6.jpg"/> -->
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Certivy</h1>
                        <h5>The Best Application ever made in the world for your certificate validation</h5>      
                        <p style="margin-top:100px">
                            <a href="{{ url('/event/create') }}" class="btn btn-green">
                                GET STARTED <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" data-scroll="true" data-id="#workflow" class="scroll-arrow hidden-xs hidden-sm">
    <i class="fa fa-angle-down"></i>
    </a>
</div>

<div class="section section-we-do-2" id="workflow">
    <div class="container">
        <div class="row">
            <div class="title add-animation">
                <h2>What we do</h2>
                <div class="separator-container">
                    <div class="separator line-separator">∎</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card add-animation animation-1">
                    <div class="icon">
                        <i class="pe-7s-tools"></i>
                    </div>
                    <h3>Create UI Tools</h3>
                    <p>We have created the tools that will help you in your next design project. From plugins to complex kits, we've got you covered in all areas regarding front-end development. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card add-animation animation-2">
                    <div class="icon">
                        <i class="pe-7s-gift"></i>
                    </div>
                    <h3>Share cer-template</h3>
                    <p>Everything that we used to create our platform can be downloaded for free and guess what, people love free stuff. People have already trusted and used them in thousands of sites.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card add-animation animation-3">
                    <div class="icon">
                        <i class="pe-7s-rocket"></i>
                    </div>
                    <h3>Power Hackatons</h3>
                    <p>We've sponsored many hackatons around the world with the tools that they need to make awesome web applications. We like to help where we can, and our tools go hand in hand with startups. </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-we-are-1" id="whoWeAre">
    <div class="text-area">
        <div class="container">
            <div class="row">
                <div class="title" id="animationTest">
                    <h2>About certivy Tim</h2>
                    <div class="separator-container">
                        <div class="separator line-separator">∎</div>
                    </div>
                    <p class="large">
                        certivy Tim is a startup that creates design tools that make the web development process faster and easier. We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card add-animation animation-2">
                            <img alt="..." src="assets/img/pic10.jpg" />
                        </div>
                        <div class="card add-animation animation-4">
                            <img alt="..." src="assets/img/pic6.jpg" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card add-animation animation-1">
                            <img alt="..." src="assets/img/pic11.jpg"/>
                        </div>
                        <div class="card add-animation animation-3">
                            <img alt="..." src="assets/img/pic1.jpg"/>
                        </div>
                        <div class="card add-animation animation-2">
                            <img alt="..." src="assets/img/pic9.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card add-animation animation-3">
                            <img alt="..." src="assets/img/pic2.jpg"/>
                        </div>
                         <div class="card add-animation animation-1">
                            <img alt="..." src="assets/img/pic4.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section section-we-made-3" id="projects">
    <div class="container">
        <div class="row">
            <div class="title add-animation">
                <h2>Our Famous cer-template</h2>
                <div class="separator-container">
                    <div class="separator line-separator">∎</div>
                </div>
                <p>Check out the most popular cer-template from our platform. We would love to hear your feedback.<br><br></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-1">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/material-kit?ref=presentation-page">
                       <img src="assets/img/opt_mk_thumbnail.jpg"/>
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">Just Launched</h5>
                            <h3>Material Kit</h3>
                            <p>Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. You asked for it, so we built it. It's a great pleasure to introduce...</p>
                            <a target="_blank" href="http://demos.certivy-tim.com/material-kit/index.html?ref=presentation-page" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/material-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-2">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/get-shit-done-kit?ref=presentation-page">
                        <img src="assets/img/opt_GSDK_thumbnail.jpg"/>
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">19.200+ Downloads</h5>
                            <h3>Get Shit Done Kit</h3>
                            <p>Free Bootstrap 3 UI Kit, the best starting point for any online project you are building. It magically offers responsive design and easy to use elements.</p>
                            <a target="_blank" href="http://www.certivy-tim.com/get-shit-done" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/get-shit-done-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-3">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/coming-sssoon-page?ref=presentation-page">
                        <img src="assets/img/opt_coming_sssoon_thumbnail.jpg"/>
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">24.500+ Downloads</h5>
                            <h3>Coming Sssoon Page</h3>
                            <p>Use this page to create a following group users before actually starting your project! It is easy to use and it helps you be in contact with your audience!</p>
                            <a target="_blank" href="http://demos.certivy-tim.com/coming-sssoon-demo-image-background" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/coming-sssoon-page?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="space-50"></div>

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-1">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/light-bootstrap-dashboard?ref=presentation-page">
                        <img src="assets/img/opt_lbd_thumbnail.jpg">
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">8.500+ Downloads</h5>
                            <h3>Light Bootstrap Dashboard</h3>
                            <p>Light Bootstrap Dashboard is an admin dashboard template designed to be beautiful and simple. It is built on top of Bootstrap 3 and it is fully responsive.</p>
                             <a target="_blank" href="http://demos.certivy-tim.com/light-bootstrap-dashboard/dashboard" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/light-bootstrap-dashboard?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-2">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/paper-kit?ref=presentation-page">
                        <img src="assets/img/opt_pk_thumbnail.jpg">
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">6.200+ Downloads</h5>
                            <h3>Paper Kit</h3>
                            <p>Paper Kit is a free Bootstrap UI kit that can get you going in a new certivy direction! To say the least, it's different since it's not material, flat or iOS inspired.</p>
                            <a target="_blank" href="http://demos.certivy-tim.com/paper-kit" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/paper-kit?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="project add-animation animation-3">
                    <a target="_blank" class="img-class" href="http://www.certivy-tim.com/product/awesome-landing-page?ref=presentation-page">
                        <img src="assets/img/opt_alp_thumbnail.jpg">
                    </a>
                    <div class="over-area over-area-sm color-1">
                        <div class="content">
                            <h5 class="text-gray">6.400+ Downloads</h5>
                            <h3>Awesome Landing Page</h3>
                            <p>Be amazed by the best looking bootstrap landing page on the web! Light colours and beautifully aligned elements - they all try to make the users aware of your great app features!
</p>
                            <a target="_blank" href="http://demos.certivy-tim.com/landing-page" class="btn btn-round">Live View</a>
                            <a target="_blank" href="http://www.certivy-tim.com/product/awesome-landing-page?ref=presentation-page" class="btn btn-round btn-fill">Free Download</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


        </div>
        

    </div>
</div>




<div class="section section-team-2" id="team">
    <div class="container">
        <div class="text-area">
            <div class="title add-animation">
                <h2>Meet our Team</h2>
                <div class="separator-container">
                    <div class="separator line-separator">∎</div>
                </div>

            </div>
        </div>
        <div class="team">
            <div class="row">
                <div class="col-md-3">
                    <div class="member add-animation animation-1">
                        <img class="img-circle" src="assets/img/elena.jpg"/>
                        <div class="description">
                            <h3 class="big-text">Elena Conacel </h3>
                            <br>
                            <p class="small-text">Cristina is one of the co-founders and takes care of growth, product development and partnerships. She is analytical, driven and adapts easily to new conditions, while trying to keep everyone on track.
                            </p>
                        </div>
                        <div class="social-buttons hidden-xs">
                           <a target="_blank" href="https://twitter.com/conacelelena" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/profile/view?id=250414665&amp;trk=hp-identity-photo" class="btn btn-social btn-linkedin btn-simple"><i class="fa fa-linkedin-square"></i></a>                                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member add-animation animation-2">
                        <img class="img-circle" src="assets/img/diana.png"/>
                        <div class="description">
                            <h3 class="big-text">Diana Caliman </h3>
                            <br>
                            <p class="small-text">Diana is the person behind our social media channels, she takes care of our users' community and communication. She is ambitious, hard-working, instantly likeable and fun to be around.
                            </p>
                        </div>
                        <div class="social-buttons hidden-xs">
                            <a target="_blank" href="https://twitter.com/eDianaCaliman" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></a>
                             <a target="_blank" href="https://www.linkedin.com/in/diana-caliman-751552b5?authType=NAME_SEARCH&amp;authToken=UNni&amp;locale=en_US&amp;trk=tyah&amp;trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A410432173%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1453464938870%2Ctas%3Adiana%20caliman" class="btn btn-social btn-linkedin btn-simple"><i class="fa fa-linkedin-square"></i></a>
                             <a target="_blank" href="https://www.facebook.com/DianaaCaliman?fref=ts" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></a>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member add-animation animation-3">
                        <img class="img-circle" src="assets/img/alex.png"/>
                        <div class="description">
                            <h3 class="big-text">Alex Paduraru</h3>
                            <br>
                            <p class="small-text">Alex is one of the co-founders and drives the technical strategy of the platform, customer support and brand. He is level-headed, smart and with a taste for simple, aesthetic design.</p>
                        </div>
                        <div class="social-buttons hidden-xs">
                            <a target="_blank" href="https://www.facebook.com/axelut?fref=ts" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></a>
                            <a target="_blank" href="https://twitter.com/Axelut" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/profile/view?id=270589579&amp;authType=NAME_SEARCH&amp;authToken=lBnx&amp;locale=en_US&amp;trk=tyah&amp;trkInfo=clickedVertical%3Amynetwork%2Cidx%3A1-1-1%2CtarId%3A1430838672545%2Ctas%3Aalex%20pa" class="btn btn-social btn-linkedin btn-simple"><i class="fa fa-linkedin-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member add-animation animation-4">
                        <img class="img-circle" src="assets/img/beni.jpg"/>
                        <div class="description">
                            <h3 class="big-text">Beniamin Marcu</h3>
                            <br>
                            <p class="small-text">Beni is the guy responsible for keeping the platform in check, improving its functionality and adding new features. He is driven, always open for learning more, friendly and a fan of Ruby on Rails.
                            </p>
                        </div>

                        <div class="social-buttons hidden-xs">
                           <a target="_blank" href="https://twitter.com/marcu_beniamin" class="btn btn-social btn-twitter btn-simple"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/beniamin-marcu-52856947?authType=NAME_SEARCH&amp;authToken=uRkb&amp;locale=en_US&amp;trk=tyah&amp;trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A165614000%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1453464482516%2Ctas%3Abenia" class="btn btn-social btn-linkedin btn-simple"><i class="fa fa-linkedin-square"></i></a>
                            <a target="_blank" href="https://www.facebook.com/beniamin.marcu.1?fref=ts" class="btn btn-social btn-facebook btn-simple"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




@section('script')
    <script type="text/javascript">
        //$('.navbar').addClass('navbar-transparent');
        //$('.navbar').addClass('navbar-fixed-top');

        $(window).on('scroll',function(){
           if(window_width > 980){
                rubik.checkScrollForParallax();
           }
           
           rubik.checkScrollForTransparentNavbar();    
                 
        });
    </script>
@endsection

