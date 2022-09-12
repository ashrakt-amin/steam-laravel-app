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
                <h4 class="content-title mb-0 my-auto">Contact</span>
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
                            <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">Name</th>
                                <th class="wd-15p border-bottom-0">Email</th>
                                <th class="wd-15p border-bottom-0">subject</th>
                                <th class="wd-15p border-bottom-0">Message</th>
                                <th class="wd-15p border-bottom-0"></th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$contact->name}}</a></td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->message}}</td>
                                 
                                    <td>
                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$contact->id}}"><i class="las la-pen"></i></a>
                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$contact->id}}"><i class="las la-trash"></i></a>

                                    </td>
                                </tr>
                               
                  
                                @include('dashboard.contact.edit')
                                @include('dashboard.contact.delete')



                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div><!-- bd -->
            </div><!-- bd -->
        </div>
        <!--/div-->


    <!-- /row -->

    </div>
    <!-- row closed -->

    <!-- Container closed -->

    <!-- main-content closed -->
@endsection
@section('js')

    <!-- Internal Data tables -->
    <script src="{{URL::asset('dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('dashboard/js/table-data.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>



    <script src="{{ URL::asset('dashboard/js/select2.js') }}"></script>
    <script src="{{ URL::asset('dashboard/js/advanced-form-elements.js') }}"></script>

    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('dashboard/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
   
@endsection
