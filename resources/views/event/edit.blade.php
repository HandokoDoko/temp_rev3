@extends('layouts.site')


@section('content')
<div class="section section section-regist margin-top-min20 container">
    <!-- start: MAIN CONTAINER -->
    <div class="panel-body">
		<div class="row">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Edit Your Event</h4>
                    <div class="panel-tools">                                       
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                <i class="fa fa-cog"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-light pull-right" role="menu">
                                <li>
                                    <a class="panel-collapse collapses" href="#"><i class="fa fa-angle-up"></i> <span>Collapse</span> </a>
                                </li>
                                <li>
                                    <a class="panel-refresh" href="#"> <i class="fa fa-refresh"></i> <span>Refresh</span> </a>
                                </li>
                                <li>
                                    <a class="panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> <span>Configurations</span></a>
                                </li>
                                <li>
                                    <a class="panel-expand" href="#"> <i class="fa fa-expand"></i> <span>Fullscreen</span></a>
                                </li>                                       
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- detail evnt isi disini -->
                    <form action="/event/{{$events->id}}" role="form" id="form" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Event Info</h3>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Event Name
                                    </label>
                                    <input type="text" placeholder="Event Name" value="{{$events->eventName}}" class="form-control" id="eventName" name="eventName">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Event Speaker
                                    </label>
                                    <input type="text" placeholder="Speaker" value="{{$events->eventSpeaking}}" class="form-control" id="eventSpeaking" name="eventSpeaking">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Date
                                    </label>
                                    <input type="date" placeholder="Date" value="{{ $events->date }}" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Enroll Key
                                    </label>
                                    <input type="text" placeholder="Enroll Key" value="{{$events->enrollKey}}" class="form-control" id="enrollkey" name="enrollKey">
                                </div>                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Sertificate Template</h3>
                                <hr />
                            </div>
                            <div class="col-md-12">
                                <label>
                                     Sertivicate Kode : <strong>{{$events->template}}</strong>
                                </label><br>
                                <img src="{{ asset('') }}assets/img/cth1.png" style="width: 80%; margin: 10px;" data-src="holder.js" class="img-thumbnail" alt="140x140" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                </p>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-grey btn-block" href="{{ url('event/') }}">
                                    Cancel
                                </a>
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-green btn-block" type="submit" onclick="$(this).closest('form').submit()">
                                    <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="template" value="{{$events->template}}">

                                    
                                    Update <i class="fa fa-arrow-circle-right"></i>

                                </button>
                            </div>
                        </div>
                    </form>

                    <!--end Detail-->
                </div>
            <hr>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript">
        </script>
@endsection