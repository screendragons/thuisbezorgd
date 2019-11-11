@extends('partials.header')
@extends('layouts.default')

<div class="createconsumables">
    <title>Edit a consumable</title>
</div>

<div class="container padding createrestaurants">
  <h2>Edit a consumable</h2>
  {!! Form::open(['route' => 'consumable.edit', 'method' => 'POST', 'files' => true]) !!}
    <label for="title">Title</label>
    <div class="input-group mb-3">
      {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' =>
      'Title','autocomplete' => 'off']); !!}
    </div>

    <label for="price">Price</label>
    <div class="input-group mb-3">
      {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' =>
      'Price','autocomplete' => 'off']); !!}
    </div>

    <label for="category">Category</label>
    <div class="input-group mb-3">
      {!! Form::text('category', null , ['class' => 'form-control', 'placeholder' =>
      'Hoofdgerechten, bijgerechten, dranken','autocomplete' => 'off']); !!}
    </div>
    <br>
    <button type="submit" class="btn btn-success">Update</button>

    {{-- <div>
      <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$consumable['id']}}').submit();">
        Delete
      </a>

     <form id="remove-form-{{$consumable['id']}}" action="{{route('consumable.destroy', $consumable->id)}}" method="POST" style="display: none;">
       @csrf
       @method('DELETE')
      </form>
    </div> --}}
  {!! Form::close() !!}
</div>


  {{--  <div class="col-md-3 container edit-consumable">
     <form method="post" action="{{ route('consumable.update', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id]) }}">
       @csrf
       @method('PUT')
       <h3>Consumable</h3>
       <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
       <div class="form-group">
         <label for="title">
           Name
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
         <label for="catergory">
           Category
           <span class="required">*</span>
         </label>
         <input placeholder="Enter category" id="category" required name="category" spellcheck="false" class="form-control" value="{{ $consumable->category }}"
         />
       </div>
       <div class="form-group">
         <button type="submit" class="btn btn-primary">Edit</button>
       </div>
     </form> --}}
     {{-- <div class="card-body"> --}}
       {{-- <a href="{{ route('order.index', ['id' => $consumable->id])}}" class="btn btn-primary">
         Add to cart
       </a>
--}}      {{-- </div> --}}
    {{--  <div>
       <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$consumable['id']}}').submit();">
         Delete
       </a>

      <form id="remove-form-{{$consumable['id']}}" action="{{route('consumable.destroy', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id])}}" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
       </form>
     </div>
   </div>
 --}}
