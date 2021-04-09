@extends('layouts.main')


    @section('content')
        
        @if (Route::currentRouteName() === 'recipe.show')
        <div class="container">
            <div class="card bg-dark text-white flex-row flex-wrap">
                <div class="heder mt-3 ml-3 float-left col-lg-5">
                    <h5>RECIPE NAME:</h5>
                    <h6 class="card-title">{{$recipe->name}}</h6>
                    <hr>
                    <h5>SOURCE:</h5>
                    <h6 class="card-text">{{$recipe->source}}</h6>
                    <hr>
                    <h5>TIME FOR PREPARATION :</h5>
                    <h6 class="card-text">
                        @if ($recipe->hour != "")
                            {{ $recipe->hour }} hours, {{$recipe->preparation_time}} minutes
                        @else
                            {{$recipe->preparation_time}} minutes
                        @endif
                       
                    </h6>
                    <hr>
                    <h4>INGREDIENTS :</h4>
                    
                        @foreach ($recipe->ingredients as $ingredient)
                            <h6 class="card-text"><label style="width: 40px">{{$ingredient->pivot->quantity}}</label> - <label class="ml-1">{{$ingredient->name}}</label>, </h6>
                        @endforeach
                        

                </div>
                <div class="card-body card-block px-2 flex-fill col-lg-6 float-left">
                    <h2>RECIPE INSTRUCTIONS </h2>
                    <p class="card-text">{{ $recipe->instructions }}</p>
                </div>
                <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <input onclick="return confirm('Are you sure?')" type="submit" class="btn btn-success" value="delete">
                </form>
            </div>
        </div>    
        @else
          
        <div class="bg-dark text-white">
            <div class="header p-5">
                <h3 class="float-left mr-5">Recipes</h3>
                <a href="{{route('recipe.create')}}" class="btn btn-primary">+add new </a>
            </div>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Recipe id</th>
                        <th>Recipe name</th>
                        <th>Recipe source</th>
                        <th>Number of ingredients</th>
                        <th>List ingredients</th>
                        <th>Preparation instructions</th>
                        <th>Preparation time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
               <tbody>
                   @foreach ($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->id }}</td>
                            <td>{{ $recipe->name }}</td>
                            <td>{{ $recipe->source }}</td>
                            <td>{{ count($recipe->ingredients) }}</td>
                            <td>
                                @if (count($recipe->ingredients) > 3)
                                   
                                    @foreach ($recipe->ingredients->take(3) as $item)
                                        
                                     {{$item->name}}
                                     {{ $loop->last ? '' : ',' }}
                                    @endforeach
                                    
                                
                                    
                                @else
                                    @foreach ($recipe->ingredients as $item)
                                            
                                        {{$item->name}}
                                        {{ $loop->last ? '' : ',' }}
                                    @endforeach
                                
                                @endif...
                            </td>
                            <td>{{ substr($recipe->instructions, 0, 50) }} ...</td>
                            <td>
                                @if ($recipe->hour != "")
                                    {{ $recipe->hour }} hours, {{$recipe->preparation_time}} minutes
                                @else
                                    {{$recipe->preparation_time}} minutes
                                @endif
                                
                            </td>
                            <td style="width: 11%">
                                <a href="{{ route('recipe.show', $recipe->id) }}" class="btn btn-primary float-left mr-1">View</a>
                                <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    
                                    <input onclick="return confirm('Are you sure?')" type="submit" class="btn btn-success" value="delete">
                                </form>
                            </td>

                        </tr>    
                    @endforeach
                        
                    
                </tbody>
            </table>

            
        </div>
        @endif
    @endsection
