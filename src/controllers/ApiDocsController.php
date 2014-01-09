<?php namespace Dwolf555\ApiDocsController;

Class ApiDocsController extends \BaseController
{

    protected function generateResponse($content, $statusCode, $inputs, $errors)
    {
        if (\Request::header('accept') === 'application/json') {
            return \Response::json($content, $statusCode);
        } else {
            return \View::make('api-docs-controller::doc', array(
                'inputs' => $inputs,
                'content' => $content,
                'errors' => $errors
            ));
        }
    }
}