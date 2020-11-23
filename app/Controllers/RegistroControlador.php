<?php namespace App\Controllers;

use App\Models\Modelopersonas;

class RegistroControlador extends BaseController
{
	//desplegar vista
	public function index()
	{
		return view('vistaRegistro');
	}

	public function registrar(){

		//echo("VOY A CARGAR DATOS EN EL MODELO"); 
		//1)recibir datos desde la vista
		$nombre=$this->request->getPost("nombre");

		$edad=$this->request->getPost("edad");

		$cedula=$this->request->getPost("cedula");

		$poblacion=$this->request->getPost("poblacion");

		$descripcion =$this->request->getPost("descripcion");

		$foto =$this->request->getPost("foto");



		//2)organizar datos que llegan de las vistas
		//en un arreglo asociativo
		//(las claves deben ser iguales a los campos o atributos de la tabla de la BD)

		$datosEnvio=array(

			"nombre"=>$nombre,
			"edad"=>$edad,
			"cedula"=>$cedula,
			"poblacion"=>$poblacion,
			"descripcion"=>$descripcion,
			"foto"=>$foto

		);

		//3) crear un objeto del modelo para poder realizar la transaccion en BD
		$modeloPersonas=new Modelopersonas();
		

		//4)utilizar el modelo para insertar los datos
		try{

			$modeloPersonas->insert($datosEnvio);
			//echo("Registro agregado");
			$mensaje="registro agregado con Exito";
			return redirect()->to(base_url("public/animales"))->with('mensaje',$mensaje);

		}catch(\Exception $error){

			echo($error->getMessage());
		}



		



		

	}

	public function buscar(){
		//1)crear un objeto del modelo

		$modeloPersonas=new Modelopersonas();

		//2. ejecutar la busqueda

		try{


			//2.1Ejecutar el findAll
			$datosConsultados=$modeloPersonas->findAll();

			//2.2 preparar datos para la vista
			$datosParaVista=array("usuarios"=>$datosConsultados);

			//2.3 Lllamar a la vista que va a mostrar l9s datos
			return view('vistaListado',$datosParaVista);


		}catch(\Exception $error){

			echo($error->getMessage());
		}

	}

	public function eliminar($id){

		//1. crear objeto del modelo

		$modeloPersonas=new Modelopersonas();

		//2. ejecutar funcion delete del modelo identificando el registro a aleiminar
		try{

		$modeloPersonas->where('id',$id)->delete();
		//echo("usuario eleiminado con Exito");
		$mensaje="registro Eliminado con éxito";
			return redirect()->to(base_url("public/animales/listado"))->with('mensaje',$mensaje);

		}catch(\Exception $error){

			echo($error->getMessage());
		}


		
	}

	public function editar($id){

		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombreEditar");
		$descripcion=$this->request->getPost("descripcionEditar");
		$cedula=$this->request->getPost("cedula");
		$cedula=$this->request->getPost("cedula");
		$poblacion=$this->request->getPost("poblacion");



		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"cedula"=>$cedula,
			"poblacion"=>$poblacion



		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloPersonas= new Modelopersonas();

		//4. Ejecutar el metodo update del modelo
		try{

			$modeloPersonas->update($id,$datosEnvio);
			//echo("Registro editado con exito");

			$mensaje="registro Actualizado con éxito";
			return redirect()->to(base_url("public/animales/listado"))->with('mensaje',$mensaje);

		}catch(\Exception $error){

			echo($error->getMessage());

		}
		

		

	}

	//--------------------------------------------------------------------

}
