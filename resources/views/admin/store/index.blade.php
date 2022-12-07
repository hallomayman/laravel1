@extends('layouts.admin')
@section('content')



<div class="row">
    <div class="col-md-12 ">
        <div class="card">
        <div class="card-header">
            <h3>Store
                <a href="{{URL('admin/store/create')}}" class="btn btn-primary btn-sm float-end">Add Store</a>
            </h3>
        </div>



        <div class="card-body card-dashboard">
            <table
                class="table display nowrap table-striped table-bordered ">
                <thead>
                <tr>
                    <th> name</th>
                    <th>address</th>
                    <th>logo</th>
                    <th>Procedures</th>
                </tr>
                </thead>
                <tbody>


                <tr>
                    <td> </td>
                    <td> </td>
                    <td></td>
                    <td>
                        <div class="btn-group" role="group"
                             aria-label="Basic example">
                            <a href=""
                               class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                            <button type="button"
                                    value=""
                                    onclick=""
                                    class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1"
                                    data-toggle="modal"
                                    data-target="#rotateInUpRight">
                                حذف
                            </button>

                        </div>
                    </td>
                </tr>



                </tbody>
            </table>

    </div>
    </div>
</div>
@stop
