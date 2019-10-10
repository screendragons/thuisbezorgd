@extends('partials.header')

{{-- @section('content') --}}
<div class="container padding contact">
  <h2>Contact</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Message</label>
      <input type="text" class="form-control" id="message" placeholder="Enter your message" name="message">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
{{-- @endsection --}}
