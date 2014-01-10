# ApiDocsController

Laravel controller class that allows for output of API docs if the "accept" header is not set to json.

### Set up

Add the following to your composer.json and composer update / composer install

```json
{
    "require": {
        "dwolf555/api-docs-controller": "dev-master"
    }
}
```

Add the following to your app/config/app.php providers array

```php
'Dwolf555\ApiDocsController\ApiDocsControllerServiceProvider',
```

### Example Controller

```php
class UserController extends Dwolf555\ApiDocsController\ApiDocsController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // For documentation
        $this->apiDocInfo = [
            'wordOfWarning' => 'Just be ok, ok?',
            'exampleResponse' => ['message' => 'ok'],
            'inputs' => [
                'limit' => 10,
                'offset' => 0
            ],
            'possibleErrors' => [
                'limit' => 'Limit must be a valid integer.',
                'offset' => 'Limit must be a valid integer.',
            ]
        ];

        $content = array(
            'actualcontent' => 'realstuff'
        );
        $statusCode = 200;

        return $this->generateResponse($content, $statusCode);
    }

}
```

### Example Output

![Example Output](https://s3.amazonaws.com/meetapet/site_files/sample-output.png)