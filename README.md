<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



APPUNTI


## Clonazione Progetto Laravel Già avviato

1. Clonare sul pc il progetto da github
2. Apriamo il progetto con VS Code
3. Creiamo dentro il progetto un nuovo file 📃 .env
4. Copiamo e incolliamo dentro il file 📃 .env il contenuto di .env.example
5. Apriamo il terminale nel progetto e lanciamo il comando: ```composer install``` ( Se escono errori passiamo al comando: ```composer update``` )
6. Lanciamo poi il comando: ```php artisan key:generate```
7. Installiamo le dipendenze di Node con il comando: ```npm install```
8. Al termine possiamo attivare il server con il comando: ```php artisan serve```

## Creare file fake database nella cartella config e richiamarlo nella rotta

1. Creare un array multidimensionale con dentro array associativi
2. Inserire l'array nella 📁 config e anzichè nominare l'array muldimensionale mettere un "return" all'inizio
```
//config/pasta.php
<?php
return [
    [
        "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
        "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
        "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
        "titolo" => "N.4 Spaghetto Quadrato Bucato",
        "tipo" => "lunga",
        "cottura" => "6 min",
        "peso" => "500g",
        "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
    ],
...
];
?>
```

3. Nel 📃web.php importare il file in una variabile: ``` $pasta = config('pasta'); ```
4. Impostare il return della rotta get così per associazione chiave => valore: ``` return view('prodotti', ['products' => $pasta] ); ```

## Iniziare progetto laravel 7 da zero

1. Aprire vs code, entrare nella cartella dove lanciare il progetto e lanciare da terminale il comando:
```composer create-project --prefer-dist laravel/laravel:^7.0 [NOME PROGETTO]```
2. Entriamo nella cartella progetto e lanciamo i comandi per creare la repository:
   1. Creare una Repository direttamente sul profilo personale di Github
   2. Aprire il terminale preferito e spostarsi nella cartella di lavoro che si vuole inizializzare come repository
   3. Utilizzare il comando ``` git init ```
   4. Poi il comando ```git add -A ```
   5. Poi il comando ```git commit -m " Testo del commit " ```
   6. Poi il comando ```git remote add origin .........URL DELLA REPO........```
   7. Poi il secondo comando ```git push -u origin master```
3. Se vogliamo utilizzare Sass:
    1. Lanciamo da terminale il comando: ```npm i```
    2. Poi il comando: ```npm run dev```
    3. Poi il comando: ```npm run watch```
    4. Per gestire gli url delle immagini caricate in sass, modificare il file 📃 webpack.mix.js aggiungendo le options in questo modo:
    ```
    mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/app.scss', 'public/css')
        .options({
        processCssUrls: false});
    ```
4. Per attivare il progetto lanciare il comando: ```php artisan serve```
## Installare node_modules per usare dipendenze NPM
1. Lanciare il comando da terminale: ```npm install```
## Pulire la cache della cartella config
1. Se modifichiamo i file della cartella config dobbiamo lanciare il comando: ```php artisan config:clear```
## Creare la tabella con le rotte create in laravel
1. Lanciamo il comando da terminale: ```php artisan route:list```
## Pulire la cache di laravel
1. lanciamo il comando da terminale: ```php artisan cache:clear```
## Pulire la cache di npm
1. lanciamo il comando da terminale: ```npm cache clear --force``` (utile se ```npm install``` non funziona)
## fontawesome
1. Lanciare d aterminale il comando: ```npm install @fortawesome/fontawesome-free```
2. Inserire l'import nel file 📃app.scss : ```@import '~@fortawesome/fontawesome-free/css/all.css';```
3. Lanciare d aterminale il comando: ```npm run dev```
4. Inserire un icona free di prova
## importare bootstrap 5 in laravel 7
A. Lanciare il comando se non ancora fatto: ```npm i```
1. Lanciare il comando da terminale: ```npm install bootstrap```
2. Lanciare il comando da terminale: ```npm i @popperjs/core```
3. Aprire il file 📃app.scss e inserire:
```
@import '~bootstrap/dist/css/bootstrap.min.css';
```
4. Andare nel file app.js nella cartella resources e inserire:
```
import '../../node_modules/@popperjs/core/dist/umd/popper.min.js';
import 'bootstrap/js/dist/dropdown';
```
5. Lanciare da terminale il comando (per generare files css e js nella cartella public): ```npm run dev```
6. Creare nella view del layout il collegamento ai file compilati da webpack.mix.js:
```
<link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

<script src=" {{ asset('js/app.js') }} "></script>
```
7. Rilanciare d azero il comando da terminale: ```npm run watch```
8. Usare le classi di bootstrap 5 nelle views
## Creare e gestire la prima rotta
1. aprire il file web.php
2. Da terminale lanciare il comando: ```php artisan make:controller [NomeCOntroller]```
2. creiamo la struttura della rotta sulla base del controller:
```
Route::get('/', 'PageController@index' )->name('home');
```
## Stampare tabella nel terminale per leggere le liste
1. lanciare da terminale il comando: ```php artisan route:list```
## creare un model
1. aprire il terminale e lanciare il comando: ```php artisan make:model Models/[NomeModello]```