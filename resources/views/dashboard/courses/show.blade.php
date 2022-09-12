@extends('dashboard.layouts.master')
@section('title')
    {{trans('dashboard/main-sidebar.services')}}
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link rel="stylesheet" href="{{ URL::asset('dashboard/plugins/sumoselect/sumoselect-rtl.css') }}">

    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{$course->title}}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
              
        
                <div class="card-body">
                   <div class="table-responsive">

                        <table class="table text-md-nowrap" id="example2">
                             <tbody>
                                @include('dashboard.objectives.add')
                                @include('dashboard.contents.add')
                             </tbody>
                        </table> 






                    <div class="table-responsive">
                      <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#addContent{{$course->id}}">Add content</a>
                       <table class="table text-md-nowrap" id="example2">
                            <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">Content</th>
                                <th class="wd-10p border-bottom-0"></th>

                            </tr>
                            </thead>
                            <tbody>
                                @foreach($course->contents as $content)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$content->content}}</td>
                                    <td>
                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$content->id}}"><i class="las la-pen"></i></a>
                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$content->id}}"><i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                <td > @include('dashboard.contents.edit')</td>
                                <td > @include('dashboard.contents.delete')</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                     
                    <div class="table-responsive">
                     <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#addObjective{{$course->id}}">Add objective</a>
                       <table class="table text-md-nowrap" id="example2">
                            <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">objective</th>
                                <th class="wd-10p border-bottom-0"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course->objectives as $objective)
                            <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$objective->objective}}</td>
                                    <td>
                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#editObjective{{$objective->id}}"><i class="las la-pen"></i></a>
                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#deleteObjective{{$objective->id}}"><i class="las la-trash"></i></a>
                                    </td>
                            </tr>
                            <tr>
                                <td>@include('dashboard.objectives.edit')</td>
                                <td>@include('dashboard.objectives.delete')</td>
                            </tr> 
                                @endforeach

                            </tbody>
                        </table>
                      </div><!-- bd -->

                      </div><!-- bd -->
                   </div>      
               </div><!-- bd -->
            </div>
        </div>



    <!-- /row -->

    <!-- row closed -->

    <!-- Container closed -->

    <!-- main-content closed -->
@endsection
