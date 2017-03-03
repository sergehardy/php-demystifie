# Oui mais?
<img style="margin-top: -250px" src="https://media.giphy.com/media/l3vRc58uoxr5v7LEY/giphy.gif"/>
<!-- .slide: class="page-title" -->



## Manque de cohérence de la core lib

Confusion OOP / Procédurale

<pre><code>
$date = new DateTime();
echo $date->format('Y-m-d');
</code></pre>

<pre><code>
$handle = fopen("some-file.txt", "r");
fclose($handle);
</code></pre><!-- .element: class="fragment" -->


Signatures (parfois) incohérentes<!-- .element: class="fragment" -->
<pre><code>
bool array_key_exists ( mixed $key , array $array )
</code></pre><!-- .element: class="fragment" -->

<pre><code>
bool property_exists ( mixed $class , string $property )
</code></pre><!-- .element: class="fragment" -->



## Cycle de vie déstructif

* Processus courts, qui meurent dès la fin du traitement<!-- .element: class="fragment" -->
* Thread safe<!-- .element: class="fragment" -->
* Pénalisant pour les gros framework<!-- .element: class="fragment" -->


## Configuration complexe<!-- .element: class="fragment" -->

* Cache d'opcode<!-- .element: class="fragment" -->
* Gestion des process<!-- .element: class="fragment" -->


