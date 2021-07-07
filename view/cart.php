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

<section  ng-controller="cart-controller">
	
	<div class="container">

		<div class="row text-center title-default-roxo" style="margin:40px auto;">
			<h2>carrinho de compras</h2>
			<hr>	
		</div>

		<table id="cart-products" class="table table-bordered">
			<thead>
				<tr>
					<th colspan="2">Produto(s)</th>
					<th class="text-center">Quantidade</th>
					<th class="text-center">Entrega</th>
					<th class="text-center">Valor Unitário</th>
					<th class="text-center">Valor Total</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="produto in produtos">
					<td class="text-center"><img style="width: 120px;" src="IMAGENS/produtos/{{produto.foto_principal}}"></td>
					<td>{{produto.nome_prod_long}}</td>
					<td class="col-xs-2">
						<div class="input-group">
					      <span class="input-group-btn">
					        <button class="btn text-roxo" ng-click="removeQtd(produto)" type="button"><i class="fa fa-chevron-down"></i></button>
					      </span>
					      <input type="text" class="form-control" ng-model="produto.qtd_car">
					      <span class="input-group-btn">
					       <button class="btn text-roxo" ng-click="addQtd(produto)" type="button"><i class="fa fa-chevron-up"></i></button>
					      </span>
					    </div>
					</td>
					<td class="text-center col-xs-2">
						<p>Entrega para o<br/>CEP: {{carrinho.cep}}</p>
						<strong class="text-roxo">{{produto.prazo}}</strong>
					</td>
					<td class="text-center">R$ {{produto.preco}}</td>
					<td class="text-center">R$ {{produto.total}}</td>
					<td class="text-center"><button class="btn text-roxo" ng-click="removeAll(produto)" type="button"><i class="fa fa-close"></i></button></td>
				</tr>
			</tbody>
		</table>

		<div id="calculo-de-frete" class="row">
			<div class="col-sm-8">
				<div class="box-outline-grey">
					<p style="margin:28px auto;">Simule o prazo de entrega e o frete para seu CEP abaixo:</p>
					<div class="input-group col-xs-4" style="margin:0 auto;">
				      <input type="text" class="form-control" ng-model="cep">
				      <span class="input-group-btn">
				      	<button class="btn btn-default" ng-click="calcularFrete(cep)" type="button">Calcular Frete</button>
				      </span>
				    </div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-cart-totais">
					<table class="table">
						<tr>
							<td>Subtotal ({{produtos.length}} item):</td>
							<td class="text-right">R$ {{carrinho.subtotal}}</td>
						</tr>
						<tr>
							<td>Frete:</td>
							<td class="text-right">R$ {{carrinho.frete}}</td>
						</tr>
						<tr style="border-top:#999 1px solid;">
							<td class="text-roxo text-bold">Total:</td>
							<td class="text-roxo text-bold text-right">R$ {{carrinho.total}}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<button type="button" class="btn btn-roxo pull-right" style="margin-top:10px">comprar</button>

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

<script>
angular.module("shop", []).controller("cart-controller", function($scope, $http){

	var carregarCarrinho = function(){

		$http({
			method:'GET',
			url:'carrinho-dados'
		}).then(function(response){

            $scope.carrinho = {
                cep: response.data.cep_car,
                subtotal: response.data.subtotal_car,
                frete: response.data.frete_car,
                total: response.data.total_car
            };

            $scope.produtos=response.data.produtos;

		}, function(response){

			console.error(response);

		});

	};
	$scope.addQtd = function(_produto){

    $http({
        method:'POST',
        url:'carrinho-produto',
        data:JSON.stringify({
            id_prod:_produto.id_prod
        })
    }).then(function(response){

        carregarCarrinho();

    }, function(){



    });

    };

    $scope.removeQtd = function(_produto){

        $http({
            method:'DELETE',
            url:'carrinho-produto',
            data:JSON.stringify({
                id_prod:_produto.id_prod
            })
        }).then(function(response){
            carregarCarrinho();

        }, function(){



        });

    };

    $scope.removeAll = function(_produto){

		$http({
			method:'DELETE',
			url:'carrinhoRemoveAll-'+_produto.id_prod
		}).then(function(response){

            carregarCarrinho();

		}, function(){



		});
    }


	$scope.calcularFrete = function(_cep){

        $http({
            method:'GET',
            url:'calcular-frete-'+_cep
        }).then(function(response){

            carregarCarrinho();

        }, function(){



        });

    };

    carregarCarrinho();

});
</script>