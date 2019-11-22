@extends('frontend.layouts.master')
@section('content')

  <!--Page Header-->
  <section class="page-header aboutus_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Terms and Conditions</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Terms and Conditions</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <section class="about_us section-padding">
    <div class="container">
      <div  class="section-header text-center">

  @foreach ($terms as $t)
<h2>{{$t->pagesname}}</h2>
<p>{{$t->details}}</p>
{{-- @php

  echo $a->details ;
@endphp --}}
  @endforeach

</div>
</div>
</section>

@endsection
