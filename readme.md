Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan make:migration create_articles_table --create=articles
Created Migration: 2018_08_30_063355_create_articles_table

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan make:seeder ArticlesTableSeeder
Seeder created successfully.

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan make:factory ArticleFactory
Factory created successfully.

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan make:model Articles
Model created successfully.

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan migrate

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan db:seed

Gil@GZID MINGW64 /c/xampp/htdocs/larticles (master)
$ php artisan make:controller ArticlesController --resource