

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <div class="contact-info">
            <h1>Contact Information</h1>
            <div class="row">
              <div class="col">
                <i class="fas fa-user"></i>
                <span>Name:</span>
              </div>
              <div class="col">
                <span>{{ $data['name'] }}</span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <i class="fab fa-linkedin"></i>
                <span>LinkedIn URL:</span>
              </div>
              <div class="col">
                <a href="{{ $data['linkedin_url'] }}" target="_blank">{{ $data['linkedin_url'] }}</a>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <i class="fab fa-github"></i>
                <span>GitHub URL:</span>
              </div>
              <div class="col">
                <a href="{{ $data['github_url'] }}" target="_blank">{{ $data['github_url'] }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

  