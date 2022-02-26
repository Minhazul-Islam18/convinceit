@extends('layouts.admin')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-bulletin-board"></i>
          </span>Website post
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
              <h4 class="card-title">Table with All post.</h4>
              <a href="{{ route('post.create')}}" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-gradient-success btn-fw">Add post</button></a> </div>
            <table class="table table-bordered">
              <thead>
                <tr class="table-warning">
                  <th> # </th>
                  <th> Title </th>
                  <th> Images </th>
                  <th> Description </th>
                  <th> Published Date </th>
                  <th class="text-center"> Action </th>
                </tr>
              </thead>
              <tbody>
                @if ($posts ->count())
                @foreach ($posts as $post)
                <tr class="table-success">
                  <td>{{ $post -> id}}</td>
                  <td> {{ $post -> title}} </td>
                  <td class="d-flex flex-wrap">
                    @foreach (json_decode($post->image) as $item)
                    <img src="{{ URL::to('/website/images/post_images/'.$item) }}" alt="{{ $post -> title}}" title="" />
                    @endforeach
                      </td>
                  <td> 
                    <?php 
                    $category_id = $post -> category_id;
                  
                  $PDO = \DB::connection()->getPdo();
                  $QUERY = $PDO->prepare("SELECT * FROM `g_categories` WHERE `id` = '$category_id'");
                  $QUERY->execute();
                  $users=$QUERY->fetchAll(PDO::FETCH_OBJ);

                  echo($users[0]->name);
                      ?> 
                  </td>
                  <td> {{ $post -> published_at}} </td>
                  <td>
                    <a href="{{ route('post.edit', $post -> id)}}" class="btn btn-gradient-primary btn-fw">EDIT</a>
                    <form action="{{ route('post.destroy',[$post -> id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-gradient-danger btn-fw">DELETE</button>
                  </form>
                </td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td class="alert-class table-danger text-center" colspan="6">No Posts to Show</td>
                </tr>
                @endif
                
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
