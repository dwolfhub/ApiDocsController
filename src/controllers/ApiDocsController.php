<?php
namespace Oncall\dwolf555;

use \BaseController;

Class ApiDocsController extends BaseController
{

    protected function generateResponse($content, $statusCode, $inputs, $content, $errors)
    {
        if (Request::header('accept') === 'application/json') {
            return Response::json($content, $statusCode);
        } else {
            return Response::view('api-docs-controller::doc', array(
                'inputs' => $inputs,
                'content' => $content,
                'errors' => $errors
            ));
        }
    }
}
