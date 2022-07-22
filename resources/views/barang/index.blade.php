@extends('layout.backend.app',[
	'title' => 'Tables',
	'pageTitle' => 'Tables',
])

@push('css')
<link href="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="col-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Insert Data</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Phone</th>
                      <th>Picture</th>
                      <th>Description</th>
                      <th>Youtube</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Location</th>
                      <th>Phone</th>
                      <th>Picture</th>
                      <th>Description</th>
                      <th>Youtube</th>
                      <th>Action</th>
                    </tr>
                </tfoot>
                <?php $no = 0; ?>
                <tbody class="text-center">   
                  @foreach ($company as $item)
                  <?php $no++;?>
                  @csrf
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{ $item->name_company }}</td>
                      <td>{{ $item->location_company }}</td>
                      <td>{{ $item->phone_company }}</td>
                      <td>{{ $item->picture_company }}</td>
                      <td>{{ $item->company_description }}</td>
                      <td>{{ $item->link_youtube }}</td>
                      <td>
                        <a href="{{ route('company.edit', $item->id_company) }}"
                          class="btn btn-sm btn-primary">EDIT</a>
                          {{-- <a onsubmit="return confirm('Apakah Anda Yakin ?');"
                          action="{{ route('barang.destroy', $item->id) }}"   class="btn btn-sm btn-danger"> DELETE</a> --}}
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                          action="{{ route('company.destroy', $item->id_company) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                      </form>                    
                          
                      </td>
                    </tr>
                   
                  @endforeach
                </tbody>               
            </table>
        </div>
    </div>
</div>
@stop

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form method="POST" action="{{ route('company.store') }}" role="form" enctype="multipart/form-data">
          @csrf
        
          <div class="form-group">
            <label class="control-label">Name:</label>
            <input type="text" name="name_company" class="form-control" id="name_company">
          </div>
          <div class="form-group">
            <label class="control-label">Location:</label>
            <input type="text" name="location_company" class="form-control" id="location_company">
          </div>
          <div class="form-group">
            <label class="control-label">Phone Number:</label>
            <input type="number" name="phone_company" class="form-control" id="phone_company">
          </div>
          <div class="form-group">
            <label class="control-label">Company Description:</label>
            <textarea name="company_description" class="my-editor form-control" id="my-editor" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <label class="control-label">Youtube:</label>
            <input type="text" name="link_youtube" class="form-control" id="link_youtube">
           
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
@push('js')
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('template/backend/sb-admin-2') }}/js/demo/datatables-demo.js"></script>
<script>  $(document).ready(function (){
  $('#company').addClass('active');
});  
$('#exampleModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) 
var recipient = button.data('whatever') 
var modal = $(this)
modal.find('.modal-title').text('New message to ' + recipient)
modal.find('.modal-body input').val(recipient)
});
</script>
@endpush


