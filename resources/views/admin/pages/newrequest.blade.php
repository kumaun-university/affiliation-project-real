@extends('admin')

@section('content')

@section('stylesheets')
    {!! Html::style('css/dataTables.bootstrap4.min.css') !!} 
@endsection

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">New Registration</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i> Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Name of Institute</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Name of Institute</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                @php $i=1; @endphp                   
                @foreach($users as $user)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->mobile}}</td>
                        <td>@if($user->status)  <span class="badge badge-pill badge-success">{{ __('Active')  }}</span>
                            @else  <span class="badge badge-pill badge-danger">{{ __('Inactive')  }}</span>  @endif</td>
                        <td>@if($user->status)  
                            <a href="#" class="btn btn-outline-danger btn-sm " role="button" aria-pressed="true">{{ __('Deactivate')  }}</a> 
                            @else 
                            <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#confirmActivationmodal" data-userid="{{ $user->id }}">{{ __('Activate')  }}</button>
                            {!!Form::open(['route' => ['admin.newrequest.active',$user->id], 'method' => 'POST','id' => 'activeform_'.$user->id.'']) !!}
                                    
                            {!! Form::close() !!}
                            @endif
                            
                        </td>
                    </tr>
                @php $i++; @endphp
                @endforeach     
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


<!-- Modal -->
<div class="modal fade" id="confirmActivationmodal" tabindex="-1" role="dialog" aria-labelledby="confirmActivationmodalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmActivationmodalTitle">Activate User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            You are going to activae this user. Are you sure?
            <input type="hidden" id="touserid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id='submithisauform' class="btn btn-success">Activate</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
    <!-- Page level plugin JavaScript-->
    {!! Html::script('js/jquery.dataTables.js') !!} 
    {!! Html::script('js/dataTables.bootstrap4.js') !!} 
      
    <!-- Demo scripts for this page-->
    
    {!! Html::script('js/datatables-demo.js') !!} 
    
    <script>
            $('#confirmActivationmodal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var userid = button.data('userid')
                //alert(userid);
                var modal = $(this)
                //modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('#touserid').val(userid)
              })

       jQuery('#submithisauform').on('click',function(){
            userid=jQuery('#touserid').val();
            jQuery('#activeform_'+userid).submit();
       });
    </script>
   
@endsection