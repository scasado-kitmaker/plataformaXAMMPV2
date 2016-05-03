<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Plataforma_model extends CI_Model
{	
	//Insertar datos en la tabla indicada
	public function insert($table,$data)
	{
		return $this->db->insert($table , $data);
	}
	//Obtiene los registros de la tabla servicio1, que es donde se guarda los usuarios dados de alta
	public function getRegistradosServicio()
	{
		return $this->db->get('servicio1')->result();
	}
	//Obtiene los registros de la tabla getsmslogs
	public function getsmsLogs()
	{
		return $this->db->get('smslogs')->result();
	}
	//Obtiene los registros de la tabla altaslogs
	public function getAltasLogs()
	{
		return $this->db->get('altaslogs')->result();
	}
	//Obtiene los registros de la tablabajaslogs
	public function getBajasLogs()
	{
		return $this->db->get('bajaslogs')->result();
	}
	//Obtiene los registros de la tabla
	public function getCobrosLogs()
	{
		return $this->db->get('cobroslogs')->result();
	}
	//Dar de baja usuarios de los servicios
	public function deleteService($id_telefono)
	{
		return $this->db->delete('servicio1', array('telefono'=>$id_telefono));

	}
	//Actualiza el campo de saldo de la tabla usuario donde el telefono coincida
	public function updateSaldo($id_telefono,$data)
	{
		$this->db->where('telefono', $id_telefono);
		return $this->db->update('usuario', $data);
	}
	//Actualiza el campo de estado_alta de la tabla usuario donde el telefono coincida
	public function updateEstado($id_telefono,$data)
	{
		$this->db->where('telefono', $id_telefono);
		return $this->db->update('usuario', $data);
	}
	//Obtiene el campo de estado_alta de la tabla usuario donde el telefono coincida
	public function getEstado($id_telefono)
	{
		$this->db->where('telefono', $id_telefono);
		return $this->db->get('usuario')->result();
	}
	//Obtiene el campo de saldo de la tabla usuario donde el telefono coincida
	public function getSaldo($id_telefono)
	{
		$this->db->where('telefono', $id_telefono);
		return $this->db->get('usuario')->result();
	}
	//Obtiene los campos de la tabla usuario donde el telefono coincida
	public function getUserInfo($id_telefono)
	{
		$this->db->where('telefono', $id_telefono);
		return $this->db->get('usuario')->result();
	}
}
?>
