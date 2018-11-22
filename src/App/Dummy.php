<?php
namespace App;

class Dummy
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $correo;

    /**
     * 
     */
    public function __construct()
    {
    }

	public function nombreCompleto()
	{
		return $this->nombre . " " . $this->apellido;
	}
	
	public function isValidEmail()
	{
		return (boolean) filter_var($this->correo, FILTER_VALIDATE_EMAIL);
	}
	
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}
	
	public function getApellido()
	{
		return $this->apellido;
	}
	
	public function setCorreo($correo)
	{
		$this->correo = $correo;
	}
	
	public function getCorreo()
	{
		return $this->correo;
	}
}

