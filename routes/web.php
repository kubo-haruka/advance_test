<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contacts', [ContactController::class, 'contacts']);
Route::post('/contacts/confim', [ContactController::class, 'confim'])->name('contacts.confim');
Route::post('/contacts/tanks', [ContactController::class, 'tanks'])->name('contacts.tanks');
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/find', [ContactController::class, 'find']);

Route::get('/', function () {
  $faker = Faker\Factory::create('ja_JP');
  $dummyData = [
    'fullname' => $faker->name(),
    'gender' => $faker->randomElement($array = ['男性', '女性']),
    'email' => $faker->unique()->safeEmail,
    'postcode' => $faker->regexify('[1-9]'),
    'address' => $faker->address,
    'building_name' => $faker->buildingNumber,
    'opinion' => $faker->realtext(120),
  ];
  var_dump($dummyData);
  exit();
});