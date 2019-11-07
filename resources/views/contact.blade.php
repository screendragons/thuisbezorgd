@extends('partials.header')
@extends('layouts.default')
{{-- @section('content') --}}
<div class="container padding contact">
  <h2>Contact</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        <a href="mailto:chiyuyeung@outlook.com">
          Get in touch
        </a>
      </button>
  </form>
</div>
{{-- @endsection --}}
