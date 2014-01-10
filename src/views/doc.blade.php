<!doctype html>
<html>
      <head>
            <title><?php echo strtoupper(Request::getMethod()); ?> <?php echo Request::path(); ?> Route Documentation</title>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.3/slate/bootstrap.min.css" rel="stylesheet">
            <style>
                  pre {
                        color: rgb(200, 200, 200);
                  }
            </style>
      </head>
      <body>
            <div class="container">
                  <h1>
                        <?php echo strtoupper(Request::getMethod()); ?> /<?php echo Request::path(); ?>
                  </h1>

                  <h2>Route Documentation</h2>

                  <h3>Inputs</h3>
                  <pre class="well">
<?php echo json_encode($inputs, JSON_PRETTY_PRINT); ?>
                  </pre>

                  <h3>Response Examples</h3>
                  <pre class="well">
<?php echo json_encode($content, JSON_PRETTY_PRINT); ?>
                  </pre>

                  <h3>Error Examples</h3>
                  <pre class="well">
<?php echo json_encode($errors, JSON_PRETTY_PRINT); ?>
                  </pre>
                  <p class="text-center">A package by <a href="https://github.com/dwolf555">Daniel Wolf</a> for <a href="#">RDIA</a></p>
            </div>
      </body>
</html>