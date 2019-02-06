<?php
class Veiuclo {
	private $placa;

	public function getPlaca() {
		return $this->placa;
	}
	public function setPlaca($placa) {
		$this->placa = $placa;
	}
}

class Proprietario {
	private $nome;
	private $cpf;
	private $contato;

	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getCpf() {
		return $this->cpf;
	}
	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
	public function getContato() {
		return $this->contato;
	}
	public function setContato($contato) {
		$this->contato = $contato;
	}
}

class Estacionamento {
	private $dataEntrada;
	private $horaEntrada;
	private $dataSaida;
	private $horaSaida;
	private $numVagas;
	private $valor;

	public function getEntrada() {
		return $this->dataEntrada.' - '.$this->horaEntrada;
	}
	public function setEntrada($data, $hora) {
		$this->dataEntrada = $data;	
		$this->horaEntrada = $hora;	
	}
	public function getSaida() {
		return $this->dataSaida.' - '.$this->horaSaida;
	}
	public function setSaida($data, $hora) {
		$this->dataSaida = $data;	
		$this->horaSaida = $hora;	
	}
	public function getVagas() {
		return $this->numVagas;
	}
	public function setVagas($numVagas) {
		$this->numVagas = $numVagas;
	}
	public function getValor() {
		return $this->valor;
	}
	public function setValor($valor) {
		$this->valor = $valor;
	}
}