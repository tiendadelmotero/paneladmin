<?php
class motos
{
	private $pdo;
    
    public $id;
    public $marca;
    public $referencia;
    public $modelo;  
    public $soat_a;
    public $soat_b;
    public $soat_c;
    public $soat_d;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM preciomotos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM preciomotos WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM preciomotos WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE preciomotos SET 
						marca          	= ?, 
						referencia      = ?,
                        modelo   		= ?,
                        soat_a        	= ?
                        soat_b        	= ?
                        soat_c        	= ?
                        soat_d        	= ?
						
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	
                        $data->marca,                        
                        $data->referencia,
                        $data->modelo,
                        $data->soat_a, 
                        $data->soat_b, 
                        $data->soat_c, 
                        $data->soat_d
                        
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(motos $data)
	{
		try 
		{
		$sql = "INSERT INTO preciomotos (marca,referencia,modelo,soat_a,soat_b,soat_c,soat_d) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					  
                    $data->marca,
                    $data->referencia, 
                    $data->modelo, 
                     $data->soat_a, 
                     $data->soat_b, 
                     $data->soat_c, 
                     $data->soat_d 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}