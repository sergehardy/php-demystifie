# Faire du PHP en 2017

<!-- .slide: class="page-title" -->

* Création d'un projet avec Composer

```html
<img src="https://getcomposer.org/img/logo-composer-transparent.png"/>
```

```bash
 composer create-project symfony/framework-standard-edition my_project
```



## Exemple Symfony
```php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyCoyntroller
{
    /**
     * @Route("/lucky/number")
     * @Template()
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return [ 'number' => $number ];
    }
}
```

```twig
Lucky number: {{ number }}
```
