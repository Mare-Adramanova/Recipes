@extends('layouts.main')
@section('extra-java/script')
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('.ingredient-enable').click(function(){
            
            let id = $(this).attr('data-id')
            let enabled = $(this).is(':checked')
            
            if(enabled == true){
                
                $('.ingredient-quantity[data-id="' + id + '"]').attr('disabled', !enabled);
                $('.ingredient-quantity[data-id="' + id + '"]').removeAttr('disabled');
            }
            
            
        })
        
      });
    </script>
@endsection
@section('content')
    <div class="container bg-dark  p-3 ">
        <form action="{{ route('recipe.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="text-white">Recipe name</label>
                <input type="text" id="name" name="name" placeholder="name:" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <p class="alert alert-danger">{{ $message }}</p> 
                @enderror
            </div>
            <div class="form-group">
                <label for="source" class="text-white">Recipe source</label>
                <input type="text" id="source" name="source" placeholder="source:" class="form-control" value="{{ old('source') }}">
                @error('source')
                    <p class="alert alert-danger">{{ $message }}</p> 
                @enderror
            </div>
            <div class="form-group">
                <label for="hour" class="text-white">Hours for preparation</label>
                <input type="text" id="hour" name="hour" placeholder="hours for preparation: 00" class="form-control" value="{{ old('hour') }}">
                @error('hour')
                    <p class="alert alert-danger">{{ $message }}</p> 
                @enderror
            </div>
            <div class="form-group">
                <label for="preparation_time" class="text-white">Minutes for Preparation </label>
                <input type="text" id="preparation_time" name="preparation_time" placeholder="minutes for preparation:00" class="form-control" value="{{ old('preparation_time') }}">
                @error('preparation_time')
                    <p class="alert alert-danger">{{ $message }}</p> 
                @enderror
            </div>
            <div class="form-group">
                <label for="instructions" class="text-white">Instructions</label>
                <input type="text" id="instructions" name="instructions" placeholder="instructions" class="form-control" value="{{ old('instructions') }}">
                @error('instructions')
                    <p class="alert alert-danger">{{ $message }}</p> 
                @enderror
            </div>
            <hr>
            <h5 class="text-white">Chose ingredients</h5>
            
            <table class="pl-0" style="list-style-type: none;">
                @foreach ($ingredients as $ingredient)
                    <div class="form-check">
                        <tr class="text-white">
                            <td>
                                <input data-id="{{$ingredient->id}}" type="checkbox" class="ingredient-enable">{{ $ingredient->name }}
                            </td>
                            <td>
                                <input type="text" name="ingredients[{{$ingredient->id}}]" data-id="{{$ingredient->id}}" class="ingredient-quantity  ml-2" disabled>
                            </td>
                        </tr>
                    </div>    
                    
                @endforeach
                
                </table>

            <input type="submit" value="create recipe" class="btn btn-success m-3">
        </form>
        
    </div>
    
   
@endsection