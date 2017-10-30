<?php
//creamos el primer array y lo llenamos con los apellidos
$apellidos2=array("Abad", "Menéndez", "Zorrilla" , "Villalba", "Serna","Miguel" , "Serrano"
,"Roma", "Ochoa", "Romero","Ojeda","Oliva", "Olivares","Méndez",
"Mendizábal","Ocaña", "Mendoza", "Mercader", "Segura", "Merino", "Mesa","Serra"
);
//el segundo array
$apellidos1=array("Lara","Larrañaga","Larrea","Lerma","Lillo","Linares","Jaume",
"Jáuregu","Jerez " ,"Jiménez","Jódar"  ,"Jara" , "Muñoz", "Barca", "Rosa", "Casafon",
"Callao", "Baena", "Lillo"
);
//con el array_mrge combinamos los dos arrays osea sea crea otro array con el contenido del uno y del dos
$apellidos12 = array_merge($apellidos1, $apellidos2);
//con el sort ordenamos alfabeticamente el array
sort($apellidos12);
//hacemos un for para printar el array con los dos nombres usando el count para saber cuando hay que parar (devuelve el numero de elementos que hay en u array )
for($i=0;$i<=count($apellidos12);$i++)
{
  echo"<br>".$apellidos12[$i];
}
 ?>
