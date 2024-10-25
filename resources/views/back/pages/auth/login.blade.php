@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content')

<div class="page page-center">
    <div class="container container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="./back/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
        </a>
      </div>
        @livewire('author-login-form')
    </div>
  </div>

@endsection
