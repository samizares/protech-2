@extends('layouts.page')
@section('title')
Create New Products Page | Protech Gas Ltd
@stop

@section('content')
<ul class="nav navbar-nav navbar-right">
 <li><a class="active" href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
<li><a href="/about">About Us <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/about#mission">Mission</a></li>
     <li><a href="/about#vision">Vision</a></li>
     <li><a href="/about#services">Services</a></li>
 </ul></a></li>
<li><a href="">Our Works <span class="caret"></span></a> 
  <ul class="dropdown">
     <li><a href="/works#projects">Projects</a></li>
     <li><a href="/works#products">Products</a></li>
 </ul>
</li>
<li><a href="/downloads">Downloads</a></li>
<li><a href="/testimonials">Testimonials</a></li>
<li><a href="/contacts">Contact</a></li>
</ul>
<!-- End Navigation List -->
</div>
</div>
</div>
<!-- End Header ( Logo & Naviagtion ) -->

</header>
<!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Edit Project Photos</h2>
            <p></p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a></li>
              <li>Edit photo </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

  <div id="content">
  <div class="container">
    <div class="page-content">
      <div class="row">
         <div class="col-md-7">
         <h1>Edit Project photo</h1><hr>

    @if($errors->has())
    <div id="form-errors">
      <p>The following errors have occurred:</p>

      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div><!-- end form-errors -->
    @endif

     {{Form::open(array('url'=>'admin/projects/p/edit','files'=> true)) }}
    <p>
      {{ Form::label('project_id', 'Projects') }}
      {{ Form::select('project_id', $projcat) }}
    </p>
      <p>
      {{Form::label('Photo Name')}}
      {{Form::text('name', $photo->name)}}
    </p>

    <p>
        {{Form::label('Photo Description')}}
        {{Form::textarea('description', $photo->description)}}
    </p>

    <p>
      {{ Form::label('image', 'Choose an image') }}
      {{ Form::file('image') }}
    </p>

    {{ Form::submit('Edit Project Photo', array('class'=>'secondary-cart-btn')) }}
    {{ Form::close() }}

    

  
  </div> 

<section id="signup">
        

    
      <p>{{ HTML::link('admin/projects/', 'Add New Project', array('class'=>'default-btn')) }}
      </p>
      <p>{{ HTML::link('admin/signout/', 'Sign out', array('class'=>'default-btn')) }}
      </p>
    </section>
</div></div>
</div></div>

@stop