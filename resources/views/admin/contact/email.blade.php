@extends('admin.admin-app')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contact Email Panel
        <small>- Contact Emails  </small>
      </h1>
    </section>
    <!-- Main content -->
        <section class="content">    
     <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Email List</h3>
                @include('admin.partials.error_section')              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="userTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($emails as $value)
                      <tr>
                        <td class="fullname_get">{{$value->full_name}}</td>
                        <td class="email_get">{{$value->email}}</td>
                        <td>{{$value->phone}}</td>
                        <td class="subject_get">{{$value->subject_description}}</td>
                        <td>{{$value->message_description}}</td>
                        <td>
                        	<button type="button" class="btn btn-info f_view email_model" data-toggle="modal" data-target="#myModal">View</button>
                        </td>
                      </tr>                
                    @endforeach              
                  </tbody>
              </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">
	        
	        <form class="form-horizontal" action="{{route('admin_reply_email')}}" method="post">
	        {{csrf_field()}}
			  <input type="hidden" class="fullname_set" name="full_name" >
			  <input type="hidden" class="subject_set" name="subject_description" >

	          <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control email_set" id="email" name="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="description">Description:</label>
			    <div class="col-sm-10"> 
			      <textarea class="form-control" name="reply_description"  rows="8" id="description" name="description"></textarea>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-10 col-sm-2">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
			</form>

	      </div>

	    </div>

	  </div>
	</div>
@endsection