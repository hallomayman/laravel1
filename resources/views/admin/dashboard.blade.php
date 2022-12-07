@extends('layouts.admin')
@section('content')



<div class="row">
    <div class="col-lg-9">

                @if(session('message'))
                <h2>{{session('message')}}</h2>
                <h2 style="background-color: red">hello</h2>

                   @endif

        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-1">Referral Earnings</h5>
                <h3 class="font-light">$769.08</h3>
                <div class="mt-3 text-center">
                    <div id="earnings"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
           <h4 class="card-title mb-0">Users</h4>
                <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span>
                </h2>
                <div class="mt-4">
                    <div class="row text-center">
                        <div class="col-6 border-right">
                            <h4 class="mb-0">58%</h4>
                            <span class="font-14 text-muted">New Users</span>
                        </div>
                        <div class="col-6">
                            <h4 class="mb-0">42%</h4>
                            <span class="font-14 text-muted">Repeat Users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

