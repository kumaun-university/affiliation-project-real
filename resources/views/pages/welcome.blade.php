@extends('main')

@section('title','| Homepage')

@section('stylesheets')
{!! Html::style('css/font-awesome-animation.css') !!}
@endsection

@section('content')

<div class="row white_bg">
    <div class="col-md-3 p-4">
        <div class="left-box">
            <h2 class="top_heading m-2">
              <i class="fas fa-calendar-alt "></i> Latest Events
                </h2>
            
            <ul class="list-group p-1">
                <li class="list-group-item"><i class="fa fa-bell faa-shake animated"></i> Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>    
        </div>
        
        <a href="http://kunainital.ac.in" target="_blank" class="btn ext-link btn-outline-success btn-block mt-2" role="button" aria-pressed="true"><i class="fa 2x fa-external-link-alt"></i> Kumaun University Nainital</a>
    </div>

    <div class="col-md-6 cntr p-4">
      <h2 class="main_heading">Heading</h2><hr>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p>
        
          <a class="btn btn-primary btn-lg btn-block badge-pill" href="{{ route('login') }}" role="button">Start Online Affilation</a>
        
    </div>

    <div class="col-md-3 p-4">
      <div class="right-box">
          <h2 class="top_heading"> <i class="far fa-newspaper"></i> News</h2>
          <div class="vticker">
          <ul class="list-group list-group-flush news-list p-1">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          </div>
      </div>  

     
      <div class="card text-white bg-info mb-3 mt-3">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Danger card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
        </div>
      </div>
    </div>
  </div>
    
@endsection

@section('scripts')

    
@endsection