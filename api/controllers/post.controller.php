<?php

class PostController
{

    /*=============================================
	Peticion para tomar los nombres de las columnas
	=============================================*/
    static public function getColumnsData($table, $database)
    {
        $response = PostModel::getColumnsData($table, $database);
        return $response;
    }

    /*=============================================
	Peticion POST para crear datos
	=============================================*/
    public function postData($table, $data)
    {
        $response = PostModel::postData($table, $data);

        $return = new PostController();
        $return->fncResponse($response, "postData");
    }

    /*=============================================
	Respuestas del controlador
	=============================================*/
    public function fncResponse($response, $method)
    {
        if (!empty($response)) {
            $json = array(
                'status' => 200,
                "results" => $response
            );
        } else {
            $json = array(
                'status' => 404,
                "results" => "Not Found",
                'method' => $method
            );
        }

        echo json_encode($json, http_response_code($json["status"]));
        return;
    }
}
