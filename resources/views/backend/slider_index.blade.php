@extends('layouts.dashboard')
@section('content')
<div class="col-11 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title">Sliders</h4>
        <div class="col-sm-12">
          <a class="btn btn-primary" href="/admin/sliders/create"><i class="fa fa-solid fa-plus"></i>
            Create</a>
        </div>
      </div>
      <div class="table-responsive text-nowrap" style="margin: 10px;padding: 10px;">
        <table class="table .table-bordered " id="sliders">
          <thead>
            <tr class="text-nowrap">
              <th>Id</th>
              <th>Slider</th>
              <th>Page</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- DataTables will fill this dynamically -->
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

@endsection
@section('custom_javascript')


<script>
  $(document).ready(function () {

    let ajaxUrl = window.location.pathname; // This dynamically builds the AJAX URL
    console.log(ajaxUrl);
    // Initialize DataTable
    $('#sliders').DataTable({
      processing: true,
      serverSide: true,
      ajax: ajaxUrl, // Use the dynamically generated URL
      columns: [{
        data: 'id',
        name: 'id',
        orderable: true
      },
      {
        data: 'path',
        name: 'path',
        orderable: true,
        render: function (data, type, row) {
          if (type === 'display') {
            return `<img src="{{url('/storage')}}/${data}" alt="Slider Image" style="width: 100px; height: auto;">`;
          }
          return data;
        }
      },
      {
        data: 'page_name',
        name: 'page_name',
        orderable: true,
        
      },
      {
        data: 'is_active',
        name: 'is_active',
        orderable: true,
        render: function (data, type, row) {
          if (type === 'display') {
            switch (data) {
              case 1:
                return 'Active';
              case 0:
                return 'InActive';

              default:
                return 'Unknown';
            }
          }
          return data;
        }
      },
      {
        data: 'action',
        name: 'action',
        orderable: false,
        searchable: false
      }
      ],
      order: [
        [0, 'desc']
      ], // Default order

      pagingType: "full_numbers", // Optional: Show full pagination controls
      language: {
        search: "Search Sliders:" // Customize the search label
      }
    });
  });
</script>




@stop