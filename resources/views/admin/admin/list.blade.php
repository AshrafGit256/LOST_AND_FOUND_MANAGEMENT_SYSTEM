@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     
    <section class="content-header">

      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin List</h1>
          </div>
          <div class="col-sm-6" style="text-align:right">
            <a href="{{ url('admin/admin/add') }}" class="btn btn-primary"> <i class="fas fa-plus-circle"></i>  Add New Admin</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          
          <div class="col-md-12">
          @include('admin.layouts._message')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Amin List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr class="btn-primary">
                      <th>#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($getRecord as $value)
                  <tr>
                    <td>{{$value->id}}</td>

                    <td>
                        @if(!empty($value->getImage()))
                            <img src="{{ $value->getImage() }}" style="height: 60px; width: 60px; border-radius: 50%">
                        @else
                            <img src="{{ asset('upload/user/h2.jpg') }}" style="height: 60px; width: 60px; border-radius: 50%">
                        @endif
                    </td>


                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{ ($value->status == 0) ? "active" : "Inactive"}}</td>
                    <td width="350px">
                      <a href="{{ url('admin/admin/edit/'.$value->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                      <a href="{{ url('admin/admin/delete/'.$value->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>

                      <a href="{{ url('chat2?receiver_id='.base64_encode($value->id)) }}" class="btn btn-warning"><i class="fas fa-paper-plane"></i> Send Message</a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          
        </div>
        
      </div>
    </section>
    
</div>
@endsection

@section('script')
@endsection