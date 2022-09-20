@extends('users.dashboard_admin')

@section('content')
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="float-left">
            <h2>Add new</h2>
         </div>
         <div class="float-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
         </div>
      </div>
   </div>
   <br>
   @if ($errors->any())
      <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Nis:</strong>
               <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Nama:</strong>
               <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Rombel:</strong>
               <input type="text" name="student_group" class="form-control" placeholder="Rombel">
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Rayon:</strong>
               <select class="form-control" name="region_id">
                  @foreach ($regions as $region)
                     <option value="{{ $region->id }}">{{ $region->region_name }}</option>
                  @endforeach
               </select>
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>

   </form>
@endsection
