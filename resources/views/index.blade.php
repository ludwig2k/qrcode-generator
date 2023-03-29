@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form method="get" action="/generate">
            @csrf
            <div class="form-group">
              <label for="name">{{ __('Name') }}</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="linkedin_url">{{ __('LinkedIn URL') }}</label>
              <input type="text" class="form-control @error('linkedin_url') is-invalid @enderror" name="linkedin_url" value="{{ old('linkedin_url') }}" required>
              @error('linkedin_url')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="github_url">{{ __('GitHub URL') }}</label>
              <input type="text" class="form-control @error('github_url') is-invalid @enderror" name="github_url" value="{{ old('github_url') }}" required>
              @error('github_url')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">{{ __('Generate QR Code') }}</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
