# What's next?
<!-- .slide: class="page-title" -->



## Vers plus de performances

* Just-in time compilation
<!-- .element: class="fragment" -->

* ReactPHP<!-- .element: class="fragment" -->
<pre><code data-trim>
    $loop = React\EventLoop\Factory::create();
    $socket = new React\Socket\Server($loop);
    $http = new React\Http\Server($socket);
    
    $callback = function ($request, $response) {
        $statusCode = 200;
        $headers = array(
            'Content-Type: text/plain'
        );
        $content = 'Hello World!';
    
        $response->writeHead($statusCode, $headers);
        $response->end($content);
    };

    $http->on('request', $callback);
    $socket->listen(1337);
    $loop->run();
</code></pre><!-- .element: class="fragment" -->

* PHP-PM : process manager<!-- .element: class="fragment" -->