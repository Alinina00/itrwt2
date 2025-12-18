<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Autoloader.php';

use App\Models\User;
use App\Models\Article;
use App\Models\Comment;
use Faker\Factory;

$faker = Factory::create();

$user = new User(1, $faker->firstName(), $faker->lastName());
$article = new Article(1, $user->id, $faker->sentence(), $faker->text());
$comment = new Comment(1, $user->id, $article->id, $faker->sentence());

var_dump($user, $article, $comment);
