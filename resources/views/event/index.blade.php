@extends('layouts.site')


@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/plugins/select2/select2.css" />
@endsection



@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title"><span class="text-bold">EventList</span> List</h4>
                </div>
                <div class="panel-body">
                    <!-- Referensi : https://datatables.net/examples/data_sources/server_side.html -->
                    <div class="row">
                        <div class="col-md-12 space20">
                            <a href="{{ url('/event/create') }}" class="btn btn-green add-row">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="EventList">
                            <thead>
                                <tr>
                                    <th>Event Name</th>
                                    <th>Date</th>
                                    <th>Speaker Name</th>
                                    <th>Status</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>    
                            <tbody>
                                <!--@foreach($events as $event)
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
                                @endforeach-->
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('script')
    <script type="text/javascript" src="{{ asset('') }}assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/js/table-data.js"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init('EventListInEventIndex');
        });
    </script>


@endsection