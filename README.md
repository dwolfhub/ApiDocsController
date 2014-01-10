# ApiDocsController

Laravel controller class that allows for output of API docs if the "accept" header is not set to json.

### Set up

Add the following to your app/config/app.php providers array

```php
'Dwolf555\ApiDocsController\ApiDocsControllerServiceProvider',
```

### Example

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
            'content' => ['message' => 'ok'],
            'statusCode' => [200],
            'inputs' => [
                'limit' => 10,
                'offset' => 0
            ],
            'errors' => [
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