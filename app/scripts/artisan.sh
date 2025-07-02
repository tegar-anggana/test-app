php artisan make:controller SimpleController

php artisan make:component Alert

php artisan migrate

php artisan tinker

\App\Models\User::create([
    'name' => 'Demo User',
    'email' => 'demo@example.com',
    'password' => bcrypt('password')
]);
