<?php
class Pais{
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
         
    
    public function verificaCodigoIso($codigoIso){
            if ($this->codigo == $codigoIso){
				return TRUE;
             }else{ 
				return FALSE;
			}
         }
          
	public function setCodigo($codigo){
		$this->codigo = $codigo;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}

	public function setPopulacao($populacao){
		$this->populacao = $populacao;
	}
	public function getPopulacao(){
		return $this->populacao;
	}

	public function setDimensao($dimensao){
		$this->dimensao = $dimensao;
	}
	
	public function getDimensao(){
		return $this->dimensao;
	} 
	
    public function getPaisVizinho(){
        return $paisVizinho;       
    }
	
	public function setPaisVizinho($paisVizinho){
		$this->paisVizinho = $paisVizinho;
	}
	
	public function densidadePopulacao(){
		return $this->populacao / $this->dimensao;
	}
	
	public function buscaFronteira($paisVizinho){
		foreach($paisVizinho->paisVizinho as $key => $value){
		if($this->paisVizinho[$key]->codigoIso == $paisVizinho->codigoIso){
					echo "O ".$value->nome." faz frenteira com o ". $paisVizinho->nome;
			}
		}
	}
		
	public function listarVizinhos($paisVizinho){
		foreach($this->paisVizinho as $chave => $value1){
			foreach($paisVizinho->paisVizinho as $key => $value2){
				if($this->paisVizinho[$chave]->codigoIso == $paisVizinho[$key]->codigoIso){
						$lista .= $this->paisVizinho[$chave]->nome.", ";
				}
			}
		}
		return $lista;
	}
}


	