@extends('layouts.main')
@section('header-content')
<div class="templatemo-welcome welcome-slider">
    <div class="container">
      <div class="row">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="about-slider">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                  <h2 class="text-uppercase welcome-title">
                        <span class="welcome-title-1">Performance</span>
                        <span class="welcome-title-2">for the speed</span>
                  </h2>
                  <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
          by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
          modify and use this for your website projects. Please tell your friends about our templates. 
          Thank you for visiting. Have fun!</p>
                </div>              
              </div>  
            </li>
            <li>
              <div class="about-slider">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <img src="img/about/1.jpg" class="img-responsive" alt="Image">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                  <h2 class="text-uppercase welcome-title">
                    <span class="welcome-title-1">Find to own</span>
                    <span class="welcome-title-2">the fast &amp; best</span>
                  </h2>
                  <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                </div>              
              </div>  
            </li>
          </ul>
        </div>                          
      </div>    
    </div>
  </div>
@endsection
@section('container')
<div class="about-container">
      
    <div class="about-container-left">
      <img src="img/about/2.jpg" alt="Image" class="img-responsive">
    </div>
    
    <div class="about-container-right">
      <h2 class="about-title">One Column</h2>
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
      <p class="about-description">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.</p>
      <a href="#" class="about-link">Duised sitDamet</a>
    </div>
    
  </div>

  <div class="about-container-2 margin-bottom-50">
    <div class="about-container-inner">
      <h3 class="about-title-2">Two Columns</h3>
      <img src="img/about/3.jpg" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
    <div class="about-container-inner">
      <h3 class="about-title-2">Two Columns</h3>
      <img src="img/about/4.jpg" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
  </div>
  
  <div class="about-container-2">
    <div class="services-container-inner">
      <h3 class="about-title-2">Three Columns</h3>
      <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
    <div class="services-container-inner">
      <h3 class="about-title-2">Three Columns</h3>
      <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
    <div class="services-container-inner">
      <h3 class="about-title-2">Three Columns</h3>
      <img src="img/services-1.jpg" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
  </div>

@endsection