<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webservices extends CI_Controller {
 //Constructor del controlador
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('webservices_model');
		$this->load->model('plataforma_model');
	}
	public function index()
	{	
		
	}
	//carga los registros de la tabla de usuarios dados de altas y les aplica los webservices a cada registro.
	public function webservice_dummy()
	{
		//Carga los registros de la tabla servicio1
		$numeros= $this->plataforma_model->getRegistradosServicio(); 
		//Recorre los registros llamando a las funciones que usan los webservices
		foreach ($numeros as $numerof) {
			$numeroz = $numerof->telefono;
			$tokensaved=$this->getToken();
			//Mientras el  estatus code no sea 'TOKEN_SUCCESS' genera peticiones de tokens
			while ( $tokensaved['statusCode']!='TOKEN_SUCCESS'){
				$tokensaved=$this->getToken();
			}				
			$billsaved=$this->getBill($tokensaved,$numeroz);
			//$billsaved=$this->getBill($tokensaved,$numeroz);
			$wololo=$billsaved['statusCode'];

			//Si el statusCode es NO_FUNDS el mensaje que se envia difiere al que tiene fondos,ademas da de baja al usuario.

			if($wololo=='NO_FUNDS')
			{
				$this->getSmsNoSaldo($numeroz);
				$this->webservices_model->delete($numeroz);
			}
			else
			{
				$this->getSms($numeroz);
				
			}			
		}
	}
	//Obtiene el saldo mediante un token request y billrequest para comprobar si el usuario se puede dar de alta mediante la web
	public function webservice_getSaldo()
	{
		$numeroz = $this->session->userdata('username');
		$tokensaved=$this->getToken();
		$billsaved=$this->getBill($tokensaved,$numeroz);
		$id_telefono = $this->session->userdata('username');
		$data['usuario'] = $this->plataforma_model->getUserInfo($id_telefono);
		$data['estado'] = $this->plataforma_model->getEstado($id_telefono); 
		$data['saldo'] = $this->plataforma_model->getSaldo($id_telefono); 
		$data['dinero']=$billsaved;
		$this->load->view('panel_control.php',$data);	
	}	
	
	//Obtiene el token del webservice llamando a la funcion getTokenModel del modelo, ademas guarda lo que recibe en la base de datos y en un array que devuelve
	public function getToken()
	{
		//Obtiene el token
		$outputToken= $this->webservices_model->getTokenModel(); 
		
		//$xml = simplexml_load_string($output);

		$output2=new SimpleXMLElement($outputToken);
		//Guardamos los resultados del response en un array para guardarlo en la base de datos
		$dataToken = array(
			'statusCode'  =>$output2->statusCode ,
			'statusMessage'=>$output2->statusMessage ,
			'txId'=>$output2->txId ,
			'token'=>$output2->token ,           
			'time' => date('Y-m-d H:i:s'),
			); 	 
		//lo guardamos en la base de datos	
		$this->webservices_model->insert('tokenresponselog',$dataToken);
		return $dataToken;
	}
	//Obtiene la bill del webservice llamando a la funcion getBillModel del modelo, ademas guarda lo que recibe en la base de datos y en un array que devuelve
	public function getBill($tokensaved,$numeroz)
	{
		$outputBill= $this->webservices_model->getBillModel($tokensaved,$numeroz); 

		$output2=new SimpleXMLElement($outputBill);
		//Guardamos los resultados del response en un array para guardarlo en la base de datos
		$dataBill = array(
			'statusCode'  =>$output2->statusCode ,
			'statusMessage'=>$output2->statusMessage ,
			'txId'=>$output2->txId ,        
			'time' => date('Y-m-d H:i:s'),
			); 	
		//Lo guardamos en la base de datos
		$this->webservices_model->insert('billresponselog',$dataBill);
		return	$dataBill;		
	}
	//Obtiene el sms del webservice llamando a la funcion getSmsModel del modelo, ademas guarda lo que recibe en la base de datos esta 			funcion es llamada en caso de que se tengan fondos.
	public function getSms($numeroz)
	{
		$outputSms= $this->webservices_model->getSmsModel($numeroz); 

		$output2=new SimpleXMLElement($outputSms);
		//Guardamos los resultados del response en un array para guardarlo en la base de datos
		$dataSms = array(
			'statusCode'  =>$output2->statusCode ,
			'statusMessage'=>$output2->statusMessage ,
			'txId'=>$output2->txId ,   
			'time' => date('Y-m-d H:i:s'),     
			); 
		//Lo guardamos en la base de datos
		$this->webservices_model->insert('smsresponselog',$dataSms);	
	}
	//Obtiene el sms del webservice llamando a la funcion getSmsModel del modelo, ademas guarda lo que recibe en la base de datos,este es llamado en caso de que no se tengan fond.os
	public function getSmsNoSaldo($numeroz)
	{
		$outputSms= $this->webservices_model->getSmsModelNoSaldo($numeroz); 

		$output2=new SimpleXMLElement($outputSms);
		//Guardamos los resultados del response en un array para guardarlo en la base de datos
		$dataSms = array(
			'statusCode'  =>$output2->statusCode ,
			'statusMessage'=>$output2->statusMessage ,
			'txId'=>$output2->txId ,   
			'time' => date('Y-m-d H:i:s'),     
			); 
		//Lo guardamos en la base de datos
		$this->webservices_model->insert('smsresponselog',$dataSms);	
	}
}
