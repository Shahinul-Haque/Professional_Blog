@extends('layouts.backend.main')

@section('title', 'MyBlog | Add new post')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Blog
          <small>Add new post</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('backend.backendblog.index') }}">Blog</a></li>
          <li class="active">Add new</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($post, [
                  'method' => 'POST',
                  'route'  => 'backend.backendblog.store',
                  'files'  => TRUE,
                  'id' => 'post-form'
              ]) !!}

 @include('backend.backendblog.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.backendblog.script')
