@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-tooltip-plus-outline"></i>
          </span>Website Category
        </h3>
        <p class="alert-class alert-success">{{$w_cat[0] -> name}}</p>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                    <div class="card-body">
                      @if(Session::has('success'))

                        <p class="alert
                        {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('success') }}</p>

                      @endif
                        <form class="forms-sample" action="{{ route('category.update',[$w_cat[0]->id])}}" method="POST">
                            @csrf

                            @method('PUT')
                        @include('includes.errors')

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                            <input name="name" type="text" class="form-control" id="name" value="{{$w_cat[0] -> name}}" placeholder="{{$w_category -> name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="description">Decription</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description" rows="4">
                                  {{$w_cat[0] -> description}}
                                </textarea>
                            </div>
                          </div>
                        
                        <button type="submit" class="btn btn-gradient-primary mr-2">Confirm</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
@endsection