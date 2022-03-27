@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-bulletin-board"></i>
          </span>Website Category
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
            @if(Session::has('success'))

                        <p class="alert
                        {{ Session::get('alert-class', 'alert-success') }}">{{Session::get('success') }}</p>

                        @endif
            <div class="mb-4 d-flex justify-content-between align-items-center">
              <h4 class="card-title">Table with All Category.</h4>
              <a href="{{ route('category.create')}}" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-gradient-success btn-fw">Add Category</button></a> </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Name </th>
                  <th> Slug </th>
                  <th> Description </th>
                  <th> Item Count </th>
                  <th class="text-center"> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($w_categories as $category)
                <tr class="table-info">
                  <td>{{ $category -> id}}</td>
                  <td> {{ $category -> name}} </td>
                  <td> {{ $category -> slug}} </td>
                  <td> {!! html_entity_decode($category -> description) !!} </td>
                  <td> May 15, 2015 </td>
                  <td>
                    <a href="{{ route('category.edit',$category -> id)}}" class="btn btn-gradient-primary btn-fw">EDIT</a>
                    <form action="{{ route('category.destroy',$w_categories)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-gradient-danger btn-fw">DELETE</button>
                  </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Convince IT Institute 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.convinceit.com/" target="_blank">GO TO</a></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->  
@endsection
