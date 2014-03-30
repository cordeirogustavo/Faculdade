<?php
class Paises{


	private $codigoIso;
	private $nome;
	private $populacao;
	private $dimensao;
    private $paisVizinho = Array();
         

    public function __construct($codigoIso , $nome, $dimensao){
		$this->codigoIso = $codigoIso;
		$this->nome = $nome;
		$this->dimensao = $dimensao;
	}
	
    public function verificaPaisInserido($codigoIso){
        if ($this->codigoIso == $codigoIso){
            echo 'Pais já foi inserido, inserir outro!';
            exit;
        }     
    }
	
	public function getCodigoIso(){
		return $this->codigoIso;
	}
	
	public function setCodigoIso($codigoIso){
		$this->codigoIso = $codigoIso;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function getPopulacao(){
		return $this->populacao;
	}
	
	public function setPopulacao($populacao){
		$this->populacao = $populacao;
	}
	
	public function getDimensao(){
		return $this->dimensao;
	} 
	
	public function setDimensao($dimensao){
		$this->dimensao = $dimensao;
	}
	
