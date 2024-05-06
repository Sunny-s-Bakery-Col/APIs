<?php
namespace app\models;

class viewsModel{

    protected function obtenerVistasModelo($vista){
        
        $listaBlanca=["dashboard", "users", "orders", "products"];

        if(in_array($vista, $listaBlanca)){
            if(is_file("./app/views/content/".$vista."-view.php")){
                $contenido="./app/views/content/".$vista."-view.php";
            }else{
                $contenido="404";
            }
        }elseif($vista=="dashboard" || $vista=="index"){
            $contenido='dashboard';
        }else{
            $contenido=404;
        }
        
        return $contenido;
    }
}
?>