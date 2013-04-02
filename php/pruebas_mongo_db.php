<?php

error_reporting(E_ALL);

$m = new Mongo();
$db = $m->comercio; //creando la db
$diarios = $db->diarios; //creando la colección diarios

list_collection($diarios);
insert_record(array('site'=>'Correo','url'=>'http://diariocorreoooooooooooooooo.pe'),$diarios);

delete_record("515aa7215e6ed93223000002",$diarios);
//$diarios->remove(array('url' => "http://peru21.pe"), true);

// http://peru21.pe

// Operaciones basicas.

function insert_record($data,$collection){
	$collection->insert($data);
}

function delete_record($mongo_id,$collection){ // Orientado a borrar solo uno.
	$collection->remove(array('_id' => new MongoId($mongo_id)), array("justOne" => false)); 

	// Imagino que esto sera para que borre el primero que pilla.
}

function list_collection($collection){

	$iterator = $collection->find();

	foreach($iterator as $item){
	 echo "Este es el id" .$item['_id']; echo "<br />";
	 echo "Este es el site" .$item['site']; echo "<br />";
	 echo "Este es el url" .$item['url']; echo "<br />";

	 //delete_record($item['_id'],$collection);
	}
}