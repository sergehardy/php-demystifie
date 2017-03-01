# Faire du PHP en 2017

<!-- .slide: class="page-title" -->

* Création d'un projet avec Composer

	```html
<img src="https://getcomposer.org/img/logo-composer-transparent.png"/>
```

	```bash
 composer create-project symfony/framework-standard-edition my_project
```
* Routing + Contrôleur

	```php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

	class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

	        return new Response(
            'Lucky number: '.$number.''
        );
    }
}
```f
* Service

	```
 app/config/services.yml
services:
    app.mailer:
        class:        AppBundle\Mailer
        arguments:    [sendmail]
```
* Vue

	Example de Twig
* Démo Symfony

