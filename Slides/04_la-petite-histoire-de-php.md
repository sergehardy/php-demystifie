# La petite histoire de PHP

<!-- .slide: class="page-title" -->



## Personal Home Page Tools

Créé en 1994 par Rasmus Lerdorf pour suivre les visites de son CV en ligne.

![Rasmus](https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Wikirl.jpg/220px-Wikirl.jpg)



## Message original
```
	Announce: Personal Home Page Tools (PHP Tools)

	Announcing the Personal Home Page Tools (PHP Tools) version 1.0.

	These tools are a set of small tight cgi binaries written in C.
They perform a number of functions including:

	. Logging accesses to your pages in your own private log files
. Real-time viewing of log information
. Providing a nice interface to this log information
. Displaying last access information right on your pages
. Full daily and total access counters
. Banning access to users based on their domain
. Password protecting pages based on users' domains
. Tracking accesses ** based on users' e-mail addresses **
. Tracking referring URL's - HTTP_REFERER support
. Performing server-side includes without needing server support for it
. Ability to not log accesses from certain domains (ie. your own)
. Easily create and display forms
. Ability to use form information in following documents
```



## Message original

```
	Here is what you don't need to use these tools:

	. You do not need root access - install in your ~/public_html dir
. You do not need server-side includes enabled in your server
. You do not need access to Perl or Tcl or any other script interpreter
. You do not need access to the httpd log files

	The only requirement for these tools to work is that you have
the ability to execute your own cgi programs.  Ask your system
administrator if you are not sure what this means.
  The tools also allow you to implement a guestbook or any other
form that needs to write information and display it to users
later in about 2 minutes.

	The tools are in the public domain distributed under the GNU
Public License.  Yes, that means they are free!

	For a complete demonstration of these tools, point your browser
at: http://www.io.org/~rasmus

	--
Rasmus Lerdorf
ras...@io.org
http://www.io.org/~rasmus

```



## PHP-FI

	1996

```
<!--include /text/header.html-->

<!--getenv HTTP_USER_AGENT-->
<!--ifsubstr $exec_result Mozilla-->
  Hé, vous utilisez Netscape !<p>
<!--endif-->

<!--sql database select * from table where user='$username'-->
<!--ifless $numentries 1-->
  Désolé, cette ligne n'existe pas<p>
<!--endif exit-->
  Bienvenue <!--$user--> !<p>
  Vous avez <!--$index:0--> crédits sur votre compte.<p>

<!--include /text/footer.html-->
```



## PHP 3

Deux étudiants israëliens contactent RL pour réécrire le code

C'est la première mouture avec la syntaxe actuelle


## PHP 4

* Nouveau moteur **Zend Engine** <!-- .element: class="fragment" -->
* Plus d'intégration de 3rd parties <!-- .element: class="fragment" -->
* Meilleures performances <!-- .element: class="fragment" -->



## PHP 5

* Couche OOP conséquente <!-- .element: class="fragment" -->
* Performances améliorées <!-- .element: class="fragment" -->

## 5.3+ 

(2009-)

* Namespaces <!-- .element: class="fragment" -->
* Traits, Générateurs <!-- .element: class="fragment" -->
* Opcache <!-- .element: class="fragment" -->



## PHP 6

![](https://i.ytimg.com/vi/KXSJNBGUH_o/maxresdefault.jpg)



## :fail

Support d'unicode natif n'a jamais pu aboutir

2010: abandon
2012: sortie de PHP de 5.4

![](https://images-na.ssl-images-amazon.com/images/I/51IhWpS3%2BkL._AC_UL320_SR254,320_.jpg)

Un mal pour un bien?

Note : PHP 7 => marketing, (suite à un vote) pour éviter la confusion et mettre un terme au débat

