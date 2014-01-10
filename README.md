# ApiDocsController

Laravel controller class that allows for output of API docs if the "accept" header is not set to json.

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
        $content = array('message'=>'ok');
        $statusCode = 200;
        $inputs = array(
            'limit' => 10,
            'offset' => 0
        );
        $errors = array(
            'limit' => 'Limit must be a valid integer.',
            'offset' => 'Limit must be a valid integer.',
        );

        // Is actual api request?
        if (Request::header('accept') === 'application/json') {
            $content = array(
                'actualcontent' => 'realstuff'
            );
            $statusCode = 200;
        }

        return $this->generateResponse($content, $statusCode, $inputs, $errors);
    }

}
```