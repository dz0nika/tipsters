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
                     @foreach($tipsters as $tipster)
                     <tr>
                        <th>{{$tipster['id']}}</th>
                        <th>{{$tipster['name']}}</th>
                        <th>{{$tipster['pricing_monthly']}}</th>
                        <th>{{$tipster['pricing_yearly']}}</th>
                        <th>
                           <a href="{{url('admin/tipsters/' . $tipster['id'] . '/') }}" class="btn btn-info">Details</a>
                        </th>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection