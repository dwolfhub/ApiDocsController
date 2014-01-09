<?php


Class ApiDocsController extends \BaseController
{
    
    protected function generateResponse($content, $statusCode, $inputs, $content, $error)
    {
        if (Request::header('accept') === 'application/json') {
            return Response::json($content, $statusCode);
        } else {
            echo '<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>';
            echo '<link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/flatly/bootstrap.min.css" rel="stylesheet">';

            echo '<h3>Inputs:</h3>';
            echo '<pre>';
            var_dump($inputs);
            echo '</pre>';

            echo '<h3>Response Examples:</h3>';
            echo '<pre>';
            var_dump($content);
            echo '</pre>';

            echo '<h3>Error Examples</h3>';
            echo '<pre>';
            var_dump($error);
            echo '</pre>';
        }
    }
}
