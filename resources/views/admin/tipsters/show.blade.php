@extends('layouts.admin')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-body">
               <table class="table table-borded table-striped p-2">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Tipsters Name</th>
                        <th>Monthly Pricing</th>
                        <th>Yearly Pricing</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th>{{ $tipsters->id }}</th>
                        <th>{{ $tipsters->name }}</th>
                        <th>{{ $tipsters->pricing_monthly }}</th>
                        <th>{{ $tipsters->pricing_yearly }}</th>
                     </tr>
                     <th>
                        <a href="{{url('admin/tips/' . $tipsters->id . '/') }}" class="btn btn-info">Show Tips</a>
                        <a href="{{url('admin/stats/' . $tipsters->id . '/') }}" class="btn btn-info">Show Stats</a>
                     </th>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection