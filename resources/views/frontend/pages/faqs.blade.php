@extends('frontend.layouts.master')
@section('content')

  <!--Page Header-->
  <section class="page-header aboutus_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>FAQS</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="{{route('index')}}">Home</a></li>
          <li>FAQS</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <section class="about_us section-padding">
    <div class="container">
      <div  class="section-header text-center">

  @foreach ($faqs as $f)
<h2>{{$f->pagesname}}</h2>
<p>{{$f->details}}</p>
{{-- @php

  echo $a->details ;
@endphp --}}
  @endforeach

</div>
</div>
</section>

@endsection
