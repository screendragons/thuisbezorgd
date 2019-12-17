@extends('partials.header')
@extends('layouts.default')

@section('content')

  <div class="createconsumables">
      <title>Edit a consumable</title>
  </div>

  <div class="container padding createrestaurants width">
    <h2>Edit a consumable</h2>
    <form method="post" action="{{ route('admin.consumable.update', ['consumable' => $consumable->id]) }}">
      @method('PUT')
      @csrf

      <div class="form-group">
        <label for="title">
          Title
          <span class="required">*</span>
        </label>
        <input placeholder="Enter title" id="title" required name="title" spellcheck="false" class="form-control" value="{{ $consumable->title }}"
        />
      </div>

      <div class="form-group">
        <label for="price">
          Price
          <span class="required">*</span>
        </label>
        <input placeholder="Enter price" id="price" required name="price" spellcheck="false" class="form-control" value="{{ $consumable->price }}"
        />
      </div>

      <div class="form-group">
        <label for="category">
          Category
          <span class="required">*</span>
        </label>
        <input placeholder="Enter category" id="category" required name="category" spellcheck="false" class="form-control" value="{{ $consumable->category }}"
        />
      </div>
      <br>

      <button type="submit" class="btn btn-success">Update</button>

    </form>
  </div>

  @extends('partials.sidebar')
@endsection
