<?php namespace Dwolf555\ApiDocsController;

use BaseController;
use Request;
use Response;
use View;
use Str;

Class ApiDocsController extends BaseController
{

    /**
     * Documenation of the api request
     * @var array
     */
    protected $apiDocInfo = array();

    protected function generateResponse($content, $statusCode)
    {
        if (Request::header('accept') === 'application/json') {
            return Response::json($content, $statusCode);
        } else {
            Str::macro('decamel', function ($string)
            {
                return ucwords(implode(' ', preg_split('/(?=[A-Z])/', $string)));
            });

            return View::make('api-docs-controller::doc', ['apiDocInfo' => $this->apiDocInfo]);
        }
    }
}