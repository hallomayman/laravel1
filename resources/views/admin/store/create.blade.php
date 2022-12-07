@extends('layouts.admin')
@section('content')



<div class="row">
    <div class="col-md-12 ">
        <div class="card">
        <div class="card-header">
            <h3>Add Store
                <a href="{{URL('admin/store/create')}}" class="btn btn-primary btn-sm text-white float-end">Back</a>
            </h3>
        </div>
        <div class="card-content collapse show">
        <div class="card-body">
            <form class="form" action="{{URL ('admin/stores')}}" method="post"
                  enctype="multipart/form-data">
                        @csrf

                <div class="form-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="projectinput1"> Name </label>
                                <input type="text"  id="name"
                                       class="form-control"
                                       name="name">
                                <span class="text-danger"> </span>
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="projectinput1"> Address </label>
                                <input type="text"  id="address"
                                       class="form-control"

                                       name="address">
                                <span class="text-danger"> </span>
                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="projectinput1"> Logo </label>
                                <input type="file" id="name"
                                       class="form-control"

                                       name="number">
                                <span class="text-danger"> </span>
                            </div>
                        </div>

                    </div>




                </div>


                <div class="form-actions">
                    <button type="button" class="btn btn-warning mr-1"
                            onclick="history.back();">
                        <i class="ft-x"></i> تراجع
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="la la-check-square-o"></i> Save
                    </button>
                </div>
            </form>

    </div>
        </div>
    </div>
</div>
@stop
