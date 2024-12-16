@extends('layouts.dashboard')
@section('content')
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Homepage Sliders</h4>
      <form class="forms-sample" action="/admin/sliders/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleSelectGender">Pages</label>
          <select name="page_id" class="form-select" id="exampleSelectGender">
            <option selected>Select Page</option>
            @foreach ($pages as $page )
            <option value="{{$page->id}}">{{$page->page_name}}</option>
            @endforeach
            
          </select>
        </div>
        <div class="form-group">
          <label>File upload</label>
          <div class="input-group col-xs-12">
            <input type="file" class="form-control file-upload-info" name="sliderImages[]" multiple
              placeholder="Upload Image">
          </div>
        </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection