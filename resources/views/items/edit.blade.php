@extends('layouts.app')

@section ('content')

<div class="container">
    <div class="col-sm-8">

        @include ('layouts.errors')
        <form method="post" action="/items/{{ $item->slug }}/edit" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label for="types">Menu Type</label>
                <select name="type_id" class="form-control">
                @foreach ($types as $type)
                    @if ($type->id === $item->type->id)
                    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                    @else
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endif
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <!-- <input type="text" id="description" name="description" class="form-control" value="{{ $item->description }}"> -->
                <textarea name="description" class="form-control rounded-0" id="item-description" rows="10">{{ $item->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="description">Order</label>
                <input type="text" id="order" name="order" class="form-control" value="{{ $item->order }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                @if (Storage::disk('local')->exists('public/items/' . $item->slug . '.png'))

                    <img class="img-rounded" src="/img/small/{{ $item->slug }}.png" height="125">

                @endif

                <input type="file" id="image" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" name="price" value="{{ $item->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="featured">Featured</label>
                <select name="featured" class="form-control">
                    <option value="1" {{ ($item->featured) ? 'selected' : '' }}>Yes</option>
                    <option value="0"{{ ($item->featured) ? '' : 'selected' }}>No</option>
                </select>
                <!-- <input id="featured" name="featured" value="{{ $item->featured }}"> -->
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
</div>
@endsection