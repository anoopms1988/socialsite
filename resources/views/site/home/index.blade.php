@extends('layout.sitelayout')

@section('title','Home')

@section('content')
    
        <!-- Marketing Icons Section -->
          <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">New Cars Search</h2>
            </div>
            @foreach ($companies as $companiesValue)
            <div class="col-md-1 col-sm-6">
                <div align="center"><b>{{$companiesValue->name or ''}}</b></div>
                <a href="listcars/{{$companiesValue->id}}">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/{{$companiesValue->logo}}" alt="">
                </a>
            </div>
            @endforeach
        </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">New Cars Search</h2>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>Audi</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/audi.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>Toyoto</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/toyoto.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>BMW</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/bmw.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>Porsche</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/porsche.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>Mercedes</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/benz.jpg" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-6">
                <div align="center"><b>Volkswagen</b></div>
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio " size="700x450" src="site/images/companylogos/volkswagen.jpg" alt="">
                </a>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Upcoming cars
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Latest cars
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- /.row -->

      
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Reviews</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
       <!--  <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div> -->
    
@endsection