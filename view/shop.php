<!DOCTYPE html>
<html ng-app="shop">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1,user-scalable=yes">
        <title>Orlando City</title>
        <link rel="shortcut icon" href="IMAGENS/orlando-logo.png" >
        <link rel="stylesheet" href="CSS/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="CSS/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="raty-master/lib/jquery.raty.css">
        <link href="CSS/style.css" rel="stylesheet">
        <link href="CSS/orlando-mobile.css" rel="stylesheet">
        <script src="JSPHP/angular.min.js"></script>

    </head>
    <body>
        <header>
                <div id="menu-mobile-mask" class="d-none d-sm-block"></div>
                <div id="menu-mobile" class="d-none d-sm-block">
                    <ul class="list-unstyled">
                        <li><a href="videos.html">Videos</a></li>
                        <li><a href="#">Tickets</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Schedule</a></li>
                    </ul>
                    <div class="bar-close">
                        <button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
                    </div>
                </div>
            
            <div class="container container-logo">
                <img src="IMAGENS/orlando-logo.png" alt="Logotipo" id="logotipo">
            </div>
            <div class="header-black">
                <div class="container">

                    <input type="search" id="input-search-mobile" placeholder="search">
                    <button id="btn-bars" type="button" id="button-addon2"><i class="fa fa-bars"></i></button>
                    <button id="btn-search" type="button" id="button-addon2"><i class="fa fa-search"></i></button>        
                    <ul>
                        <li class="club-01"><a href="#"></a></li>
                        <li class="club-02"><a href="#"></a></li>
                        <li class="club-03"><a href="#"></a></li>
                        <li class="club-04"><a href="#"></a></li>
                        <li class="club-05"><a href="#"></a></li>
                        <li class="club-06"><a href="#"></a></li>
                        <li class="club-07"><a href="#"></a></li>
                        <li class="club-08"><a href="#"></a></li>
                        <li class="club-09"><a href="#"></a></li>
                        <li class="club-10"><a href="#"></a></li>
                        <li class="club-11"><a href="#"></a></li>
                        <li class="club-12"><a href="#"></a></li>
                        <li class="club-13"><a href="#"></a></li>
                        <li class="club-14"><a href="#"></a></li>
                        <li class="club-15"><a href="#"></a></li>
                        <li class="club-16"><a href="#"></a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row float-right">
                    <nav id="menu">
                        <ul>
                            <li><a href="index">Home</a></li>
                            <li><a href="videos">Videos</a></li>
                            <li><a href="#">Tickets</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Schedule</a></li>
                            <li class="search">
                                <div class="input-group mb-3">
                                    <input type="search" class="form-control" id="input-search" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div><!-- Input group -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section ng-controller="destaque-controller">
            <div class="container" id="destaque-produtos-container">
                <div id="destaque-produtos">
                    <div class="item" ng-repeat="produto in produtos">
                        <div class="col-sm-6 col-imagem" style="float:left;">
                            <a href="produto-{{produto.id_prod}}">
                            <img src="IMAGENS/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
                            </a>
                        </div>
                        <div class="col-sm-6 col-descricao" style="float:left;">
                            <h2>{{produto.nome_prod_longo}}</h2>
                            <div class="box-valor">
                                <div class="text-noboleto text-arial-cinza">no boleto</div>
                                <div class="text-por text-arial-cinza">por</div>
                                <div class="text-reais text-roxo">R$</div>
                                <div class="text-valor text-roxo">{{produto.preco}}</div>
                                <div class="text-centavos text-roxo">,{{produto.centavos}}</div>
                                <div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
                                <div class="text-total text-arial-cinza">total a prazo R${{produto.total}}</div>
                                <a href="produto-{{produto.id_prod}}" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart">COMPRAR</i></a>
                            </div>
                        </div>
                    </div ng-repeat>
                </div>

                <button type="button" id="btn-destaque-prev"><i class="fa fa-chevron-left"></i></i></button>
                <button type="button" id="btn-destaque-next"><i class="fa fa-chevron-right"></i></i></button>
            </div>
            <div id="promocoes" class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="box-promocao box-1">
                            <p>escolha por desconto</p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row-fluid">
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">40</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">60</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">80</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-promocao">
                                    <div class="text-ate">até</div>
                                    <div class="text-numero">85</div>
                                    <div class="text-porcento">%</div>
                                    <div class="text-off">off</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mais-buscados" class="container">
                <div class="row text-center title-default-roxo">
                    <h2>os mais buscados</h2>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-3" ng-repeat="produto in buscados">
                        <div class="box-produto-info">
                            <a href="produto-{{produto.id_prod}}">
                                <img src="IMAGENS/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}" class="produto-img">
                                <h3>{{produto.nome_prod_longo}}</h3>
                                <div class="estrelas" data-score="{{produto.media}}"></div>
                                <div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
                                <div class="text-valor text-roxo">R$ {{produto.total}}</div>
                                <div class="text-parcelado text-arial-cinza">{{produto.parcelas}}x de R$ {{produto.parcela}} sem juros</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            </div>
                <div class="row row-cinza-claro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 text-center d-none d-sm-block">
                                <img class="logotipo" src="IMAGENS/orlando-logo.png" alt="Logotipo">
                            </div>
                            <div class="col-md-10">
                                <div class="row row-cols">
                                    <div class="col-md-4 col-popular-post d-none d-sm-block">
                                        <h4>POPULAR POSTS</h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <h5>Neque porro quisquam est,quiser</h5>
                                                <time>January 05, 2021</time>
                                            </li>
                                            <li>
                                                <h5>Neque porro quisquam est,quiser</h5>
                                                <time>January 05, 2021</time>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-links d-none d-sm-block">
                                        <h4>LINKS</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-angle-right"></i>TICKETS</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>NEWS</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>SCHEDULE</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-get-in-touch">
                                        <h4 class="d-none d-sm-block">GET IN TOUCH</h4>
                                        <address class="d-none d-sm-block">
                                            <i class="fa fa-map-marker"></i> <span>618 E. South Street, Suite 510<br/>Orlando, FL 32801</span>
                                        </address>
                                        <p class="d-none d-sm-block"><a href="tel:1855ORLCITY"><i class="fa fa-microphone-slash"></i>  1.855.ORL.CITY</a></p>
                                        <div class="row">
                                            <div class="col-6">
                                                <a href="" class="btn btn-footer d-none smart"><i class="fa fa-map-marker"></i>Location</a>
                                            </div>
                                            <div class="col-6">
                                                <a href="" class="btn btn-footer d-none smart"><i class="fa fa-phone"></i>Call</a>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled list-socials">
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="fa fa-facebook">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="fa fa-instagram">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="fa fa-twitter">
                                                    </i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="fa fa-pinterest">
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="d-lg-none">
                                                <a href="#" target="_blank" id="page-up">
                                                    <i class="fa fa-chevron-up">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <div class="row row-cinza-escuro">
                <div class="container copyright-mobile">
                    <p class="float-left texto-final">Copyright &copy; Orlando City Soccer 2021. All rights reserved.</p>
                    <p class="float-right text-roxo"><small >Created by  Gabriel Barros de Almeida in Udemy</small></p>
                </div>
            </div>
        </footer>
        <script src="JQUERY/jquery.min.js"></script>
        <script src="CSS/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script src="raty-master/lib/jquery.raty.js"></script>
        <script src="JSPHP/efeitos.js" ></script>
        <script>
            angular.module("shop", []).controller("destaque-controller", function($scope, $http){
            
                $scope.produtos = [];
            
                var initCarousel = function(){
            
                    $("#destaque-produtos").owlCarousel({
                 
                      autoPlay: 5000,
                      items : 1,
                      singleItem: true
                 
                      });
            
                      var owlDestaque = $("#destaque-produtos").data('owlCarousel');
            
                      $('#btn-destaque-prev').on("click", function(){
            
                          owlDestaque.prev();
            
                      });
            
                      $('#btn-destaque-next').on("click", function(){
            
                          owlDestaque.next();
            
                      });
            
                };

                var initEstrelas = function(){
                        $(function(){
                                
                                $('.estrelas').each(function(){
                        
                                    $(this).raty({
                                    starHalf    : 'raty-master/lib/images/star-half.png',                                // The name of the half star image.
                                    starOff     : 'raty-master/lib/images/star-off.png',                                 // Name of the star image off.
                                    starOn      : 'raty-master/lib/images/star-on.png',
                                    score		: parseFloat($(this).data("score"))
                                    });
                        
                                });
                        
                        });
                }
            
                $http({
                  method: 'GET',
                  url: 'produtos'
                }).then(function successCallback(response) {
            
                    $scope.produtos = response.data;
            
                    setTimeout(initCarousel, 1000);
                    setTimeout(initEstrelas, 1000);
            
                  }, function errorCallback(response) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                  });

                  $http({
                    method: 'GET',
                    url: 'produtos-mais-buscados'
                    }).then(function successCallback(response) {

                        $scope.buscados = response.data;
                        setTimeout(initEstrelas, 1000);

                    }, function errorCallback(response) {
                        // called asynchronously if an error occurs
                        // or server returns response with an error status.
                });
	

});
    </script>
    </body>
</html>
