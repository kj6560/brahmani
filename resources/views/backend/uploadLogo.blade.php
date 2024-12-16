@extends('layouts.dashboard')
@section('content')
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <center>
          <label>Current Logo</label>
          <img src="{{url('storage/')}}/{{$logo}}" alt="">
          </center>
        </div>
      </div>
      <h4 class="card-title">Upload Logo</h4>
      <form class="forms-sample" action="/admin/storeLogo" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>File upload</label>
          <div class="input-group col-xs-12">
            <input type="file" class="form-control file-upload-info" name="logo" placeholder="Upload Image">
          </div>
        </div>

        <button type="submit" class="btn btn-primary me-2">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection