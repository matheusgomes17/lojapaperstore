<?php

use Faker\Generator;
use Snaketec\Models\Access\Role\Role;
use Snaketec\Models\Access\User\User;
use Snaketec\Models\Catalog\Product\Product;
use Snaketec\Models\Catalog\Budget\Budget;
use Snaketec\Models\Catalog\Budget\BudgetItem;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(User::class, function (Generator $faker) {
    static $password;

    return [
        'name'              => $faker->name,
        'email'             => $faker->safeEmail,
        'password'          => $password ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
        'confirmation_code' => md5(uniqid(mt_rand(), true)),
    ];
});

$factory->state(User::class, 'active', function () {
    return [
        'status' => 1,
    ];
});

$factory->state(User::class, 'inactive', function () {
    return [
        'status' => 0,
    ];
});

$factory->state(User::class, 'confirmed', function () {
    return [
        'confirmed' => 1,
    ];
});

$factory->state(User::class, 'unconfirmed', function () {
    return [
        'confirmed' => 0,
    ];
});

/*
 * Roles
 */
$factory->define(Role::class, function (Generator $faker) {
    return [
        'name' => $faker->name,
        'all'  => 0,
        'sort' => $faker->numberBetween(1, 100),
    ];
});

$factory->state(Role::class, 'admin', function () {
    return [
        'all' => 1,
    ];
});

$factory->define(Product::class, function (Generator $faker) {

    return [
        'name' => $faker->name,
        'code' => rand(1, 12),
        'user_id' => rand(1, 26),
        'category_id' => 2,
        'description' => $faker->text(1000),
        'status' => (bool) 1,
    ];
});

$factory->define(Budget::class, function (Generator $faker) {

    return [
        'client_id' => rand(1, 3),
        'status' => 0,
        'height' => rand(3),
        'width' => rand(3),
    ];
});

$factory->define(BudgetItem::class, function (Generator $faker) {

    return [
        //
    ];
});

$factory->define(\Artesaos\Attacher\AttacherModel::class, function (Generator $faker) {

    return [
        
        'subject_id' => rand(1, 50),
        'subject_type' => 'product',
        'file_extension' => 'jpg',
        'file_name' => str_random(56),
        'file_size' => rand(10000, 99999),
        'mime_type' => $faker->mimeType(),
        'image_updated_at' => $faker->dateTimeBetween(),
    ];
});
