php artisan make:auth // autentifikacijos kodo sukurimui
php artisan make:migration create_product_table // sukuria migracijos faila /database/migrations folderyje
php artisan migrate // Paleisti duombazes migracijas ir sukurti duomenu bazes struktura pagal aprasytas migracijas
php artisan make:controller TestController // kontrolerio sukurimas, TestController - musu kontrolerio pavadinimas.
failai sukuriami /app/Http/controllers folderyje
php artisan make:controller TestController --resource // kontrolerio sukurimas su pradiniais funkcijus aprasais, TestController - musu kontrolerio pavadinimas

php artisan make:model Product // sukuria modeli Product - musu modelio pavadinimas. Modeliai sukuriami /app folderyje

pries naudojant sukurta modeli kontroleryje reikia parasyti failo virsuje: use Product;


// Route aprasymas
Route::post('/apie-mus', 'HomeController@apieMus')->name('aboutUs');
