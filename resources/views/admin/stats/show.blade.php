@extends('layouts.admin')

@section('content')
<div class="card">
   <div class="card-header">
      <h1 class="card-title">List of Products</h1>
      <!-- /.card-tools -->
   </div>
   <!-- /.card-header -->
   <div class="card-body table-responsive p-0">
      <table class="table table-borded table-striped p-2">
         <thead>
            <tr>
               <th>Tip ID</th>
               <th>Tip Date</th>
               <th>Tip Game</th>
               <th>Tip Type</th>
               <th>Tip Comment</th>
               <th>Tip Status</th>
               <th>Current Tipster</th>
               <th>Tipster Pricing Monthly</th>
               <th>Tipster Pricing Yearly</th>
               <th>Sport Name</th>
               <th>Sport Icon</th>
            </tr>
         </thead>
         <tbody>
            <th>{{ $tips->id }}</th>
            <th>{{ $tips->date }}</th>
            <th>{{ $tips->game }}</th>
            <th>{{ $tips->tip }}</th>
            <th>{{ $tips->comment }}</th>
            <th>{{ $tips->status }}</th>
            <th>{{ $tips->tipster['name'] }}</th>
            <th>{{ $tips->tipster['pricing_monthly'] }}</th>
            <th>{{ $tips->tipster['pricing_yearly'] }}</th>
            <th>{{ $tips->sport['name'] }}</th>
            <th>{{ $tips->sport['icon'] }}</th>
         </tbody>
      </table>
   </div>
   <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection