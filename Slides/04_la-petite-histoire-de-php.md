# La petite histoire de PHP

<!-- .slide: class="page-title" -->



## Personal Home Page Tools

Créé en 1994 par Rasmus Lerdorf pour suivre les visites de son CV en ligne.

![Rasmus](https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Wikirl.jpg/220px-Wikirl.jpg)

Message original
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

	Inclure du code de http://php.net/manual/fr/history.php.php
* PHP 3

	Deux étudiants israëliens contactent RL pour réécrire le code

	C'est la première mouture avec la syntaxe actuelle

	

	1.3 Competition : ASP, mod_perl, JSP

	ASP is quite popular and I've written some applications in ASP since January 2000. Microsoft's arguments for ASP include availability of tools like Visual Interdev, language independence and easy learning curve. I have used VIM to code ASP, so I can't say much about the tools. Language independence is also not that much of an issue, just because in its default configuration it supports VBScript and JScript. You can also get extensions which makes it possible to write ASP in PerlScript making it a good choice for folks who are used to mod_perl and Apache. At least for a simple directory listing code, PHP3.0 on a P133 with 32MB RAM ran circles around ASP code on an NT4 machine with dual P500 with 600MB RAM! I tend to prefer PHP3. Also, VBScript's string functions are a pain to use (IMHO) - though it has REGEX capability now.

	JSP has a very unique advantage that you need to know Java alone. From what I've seen, most people would prefer to work in one language and use that for as many purposes as possible. This, and the training costs involved will make Java an attractive option for companies. Additionally, there are already a number of tools out there for Java. Architecture-wise JSP+Servlets are comparable to VBScript+COM. For quick web-site building JSP may not be worth the trouble. For businesses, this would make more sense, especially since a number of Java based application servers are already in the market. From my personal experience, both Java and ASP need elite hardware, whereas PHP3 with Apache on Linux will perform adequately with your old P133 :-)

	mod_perl is as powerful as Perl is. It is also quite fast. PHP4 with Zend engine will probably be as fast as mod_perl. However, Perl code can get unmaintainable quickly - this is just my opinion and goes well with Perl's idea of being a language for the lazy.



## PHP 4

* Nouveau moteur **Zend Engine**
* Plus d'intégration de 3rd parties
* Meilleures performances



## PHP 5

* Couche OOP conséquente
* Performances améliorées

## 5.3+ 

(2009-)

* Namespaces
* Traits, Générateurs
* Opcache



## PHP 6

![](https://i.ytimg.com/vi/KXSJNBGUH_o/maxresdefault.jpg)



## :fail

Support d'unicode natif n'a jamais pu aboutir

2010: abandon
2012: sortie de PHP de 5.4

![](https://images-na.ssl-images-amazon.com/images/I/51IhWpS3%2BkL._AC_UL320_SR254,320_.jpg)

Un mal pour un bien?

