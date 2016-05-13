@extends('layouts.site')

@section('subtitle')
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home')}}">
                    Dashboard
                </a>
            </li>
            <li class="active">
                User Profile
            </li>
        </ol>
    </small>
@endsection



@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/plugins/select2/select2.css" />
@endsection



@section('content')
<div class="container">
    <!-- start: DYNAMIC TABLE PANEL -->
    {!! coolRowBox_Begin('List', 'Events') !!}
        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th class="hidden-xs">Event Name</th>
                    <th>Date</th>
                    <th class="hidden-xs">Speaker</th>
                    <th class="hidden-xs" >Status</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    @if( $event->idUser === Auth::user()->id )
                        <tr>
                            <th> {{ $no+=1 }}</th>
                            <th>{{ $event->eventName }}</th>
                            <th>{{ $event->date }}</th>
                            <th>{{ $event->eventSpeaking }}</th>
                            <th> 
                                @if( $event->confirm === 1)
                                    <span class="label label-sm label-success">Approved</span>
                                @else
                                    <span class="label label-sm label-danger">Pending</span>
                                @endif
                            </th>
                            <th>
                                <p>
                                    <form action="event/{{ $event->id}}" method="post">
                                        <input type="hidden" class="form-control" id="token" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="delete">
                                        <a class="btn btn-red" href="#" onclick="$(this).closest('form').submit()"><i class="fa fa-times fa fa-white" width="10"></i></a>
                                        <a class="btn btn-blue" href="event/{{ $event->id}}/edit"><i class="fa fa-pencil"></i></a>
                                    </form>
                                </p>
                            </th>

                        </tr>

                    @endif
                @endforeach
            </tbody>
        </table>
    {!! coolRowBox_End() !!}
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

@endsection



@section('script')
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/table-data.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                TableData.init();
            });
        </script>


@endsection