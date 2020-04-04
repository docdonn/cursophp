<?php 

interface Veiculo {


	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha($marcha);



}

	abstract class Automovel implements Veiculo{


			public function acelerar($velocidade)
			{

				echo "O veiculo acelereou até ". $velocidade . " km/h";


			}


			public function frenar($velocidade)
			{

				echo "O veiculo frenou até ". $velocidade . "km/h";


			}

			public function trocarMarcha($marcha)
			{


				echo "o veiculo engatou a marcha " .$marcha;

			}

	}


class Delrey extends Automovel{

public function empurrar(){

	}


}

$carro = new Delrey();
$carro -> acelerar(200);


 ?>