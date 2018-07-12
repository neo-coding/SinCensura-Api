@extends('layouts.app')
@section('outer')
    <div class="inner bg-light lter bg-container">
        <div class="row">
            <div class="col-12 data_tables">
                <div class="card">
                    <div class="card-header bg-white">
                        <i class="fa fa-table"></i> <a href=" {{route('bonos.create')}} " class="btn btn-success">CREAR</a>
                    </div>
                    <div class="card-block p-t-25">
                        <div class="">
                            <div class="pull-sm-right">
                                <div class="tools pull-sm-right"></div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Tienda</th>
                                <th>Nombre</th>
                                <th>Valor</th>
                                <th>Tipo</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($bonos as $bono)
                                <tr>
                                    <td> {{$bono->id}} </td>
                                    <td> <img src=" {{$bono->imagen}} " alt="" height="50"> </td>
                                    <td> {{$bono->tienda}} </td>
                                    <td> {{$bono->nombre}} </td>
                                    <td> {{$bono->valor}} </td>
                                    <td> {{$bono->tipo}} </td>
                                    <th>
                                        <a href="{{route('bonos.edit', ['id'=>$bono->id])}}" class="btn btn-success" >Editar</a>
                                        <form action=" {{route('bonos.delete', ['bono'=>$bono->id])}} " method="post">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
        <!--plugin styles-->
        <link type="text/css" rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('vendors/datatables/css/scroller.bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('vendors/datatables/css/dataTables.bootstrap.min.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/pages/dataTables.bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugincss/responsive.dataTables.min.css')}}" />
        <!-- end of plugin styles -->
        <!--Page level styles-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/pages/tables.css')}}" />
        <!--End of page level styles-->
@endsection

@section('js')
        <!--plugin scripts-->
        <script type="text/javascript" src="{{asset('vendors/select2/js/select2.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/pluginjs/dataTables.tableTools.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.colReorder.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/pluginjs/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.rowReorder.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.colVis.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('vendors/datatables/js/dataTables.scroller.min.js')}}"></script>
        <!-- end of plugin scripts -->
        <!--Page level scripts-->
        <script type="text/javascript" src="{{asset('js/pages/datatable.js')}}"></script>
@endsection