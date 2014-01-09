<!doctype html>
<html>
      <head>
            <title><?php echo strtoupper(Request::method()); ?> <?php echo Request::path(); ?> Route Documentation</title>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/flatly/bootstrap.min.css" rel="stylesheet">
      </head>
      <body>
            <h1>
                  <?php echo strtoupper(Request::method()); ?> <?php echo Request::path(); ?> Route Documentation
            </h1>

            <h2>Inputs</h2>
            <pre>
                  <?php var_dump($inputs); ?>
            </pre>

            <h2>Inputs:</h2>
            <pre>
                  <?php var_dump($inputs); ?>
            </pre>

            <h2>Response Examples:</h2>
            <pre>
                  <?php var_dump($content); ?>
            </pre>

            <h2>Error Examples:</h2>
            <pre>
                  <?php var_dump($errors); ?>
            </pre>
      </body>
</html>