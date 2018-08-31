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

Naujo projekto sukurimas:
1. Susikuriam folderi kur saugosim projekto failus
2. nueinu i direktorija kuria sukuriau cd "Folderis/kuri/sukuriau";
3. paleidziu is terminalo komanda: composer create-project --prefer-dist laravel/laravel cars
4. susikuriu duomenu baze
5. susivedu duomenu bazes prisijungimus i .env failiuka IR 
config/database.php 
6. susikuriame duombazes migracija: php artisan make:migration create_cars_table
7. aprasau reikalingus stulpelius migracijoje 
8. paleidziu migracija: php artisan migrate
9. Sukuriu Car modeli: php artisan make:model Car
10. app/Car.php pridedu: protected $table = "cars";
11. Sukuriu controlleri masinu: php artisan make:controller CarsController --resource
12. Sukuriu route'a routes/web.php faile.
13. Aprasau masinu atvaizdavimo funkcija controlleryje (pvz: index)
14. Jei noriu naudoti Car modeli controlleryje, reikia virsuje parasyti: use App\Car;
15. Atavaizdavimo funkcijoje pasiemu visu auto duomenis ir nusiunciu i view.
16. Susikuriu view faila resources/views/cars.blade.php
17. view faile aprasau masinu atvaidavima (pageidautina graziai)
18. Sukurti repozitorija ir pasidalinti su destyoju ir draugais
