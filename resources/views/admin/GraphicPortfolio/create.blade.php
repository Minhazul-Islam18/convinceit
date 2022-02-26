@extends('layouts.admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-tooltip-plus-outline"></i>
          </span> Add Graphic Portfolio
        </h3>
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
                        <form class="forms-sample" action="{{ route('graphicportfolio.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                        @include('includes.errors')
                        <div class="form-group row">
                            <label for="client" class="col-sm-3 col-form-label">
                              Title:</label>
                            <div class="col-sm-9">
                            <input name="title" type="text" class="form-control" id="title" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="project_date" class="col-sm-3 col-form-label">
                              Project Date:</label>
                            <div class="col-sm-9">
                              <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="project_url" class="col-sm-3 col-form-label">
                              Project URL:</label>
                            <div class="col-sm-9">
                            <input name="project_url" type="text" class="form-control" id="title" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleFormControlSelect3" class="col-sm-3 col-form-label">Select Category</label>
                            <div class="col-sm-9">
                          <select class="form-control form-control-sm" name="category_id" id="exampleFormControlSelect3">
                            <option value="" style="display: none" selected>Choose Option</option>
                            @foreach ($categories as $item)
                            <option value="{{$item -> id}}">{{$item -> name}}</option> 
                            @endforeach
                            
                          </select>
                        </div>
                        </div>
                        <div class="form-group row justify-content-between">
                          <div class="d-flex align-items-center col-form-label px-4">

                            <label>Featured Image</label>
                          <input type="file" name="featured_image" class="file-upload-default">
                          </div> 
                          <div class="input-group col-sm-9">   
                            <input type="file" name="featured_image" class="form-control" id="customFile" style="background: linear-gradient(to right, #da8cff, #9a55ff);border-radius: .5rem;color: #fff;">
                          </div>
                        </div>
                        <div class="form-group row justify-content-between">
                          <div class="d-flex align-items-center col-form-label px-4">

                            <label>Site Images</label>
                          <input type="file" name="image[]" class="file-upload-default" multiple>
                          </div> 
                          <div class="input-group col-sm-9">   
                            <input type="file" name="image[]" multiple class="form-control" id="customFile" style="background: linear-gradient(to right, #da8cff, #9a55ff);border-radius: .5rem;color: #fff;">
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <label for="description">Decription</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" id="description" rows="4"></textarea>
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
<script>
   $(function () {
   var bindDatePicker = function() {
		$(".date").datetimepicker({
        format:'YYYY-MM-DD',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('YYYY-MM-DD');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
</script>