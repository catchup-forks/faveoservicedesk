@extends('themes.default1.agent.layout.agent')


@section('content')

    <section class="content-header">
        <h1>{{Lang::get('itil::lang.releases')}} </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        @if (Session::has('message'))
            <div class="alert alert-success fade in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h4>{{Lang::get('itil::lang.list_of_releases')}}</h4>
                        <div class="pull-right">

                            <a href="{!!URL::route('service-desk.releases.create')!!}"
                               class="btn btn-primary">{{Lang::get('itil::lang.new_releases')}} </a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Datatable::table()
                        ->addColumn(
                        Lang::get('itil::lang.subject'),

                        Lang::get('itil::lang.planed_start_date'),
                        Lang::get('itil::lang.planed_end_date'),
                        // Lang::get('itil::lang.status'),
                        //Lang::get('itil::lang.priority'),
                        //Lang::get('itil::lang.release_type'),
                        //Lang::get('itil::lang.location'),
                        //Lang::get('itil::lang.build_plan'),
                        //Lang::get('itil::lang.test_plan'),
                        Lang::get('itil::lang.action'))


                        ->setUrl('get-releases')  // this is the route where data will be retrieved
                        ->render() !!}


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->
    </div>

    <script>

        $('#example1').ready(function () {
            $('#example1').DataTable({});
        });
    </script>


@stop