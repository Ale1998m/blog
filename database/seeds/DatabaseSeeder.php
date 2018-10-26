<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $users = collect();
        $users->push(["username" => "Alessandro", "email" => "ale98.martinoli@gmail.com", "password" => md5("eldrazi")]);
        $users->push(["username" => "Giorgetto", "email" => "ale98@gmail.com", "password" => md5("eldrazi")]);
        $users->push(["username" => "Marco", "email" => "ale@gmail.com", "password" => md5("eldrazi")]);

        foreach($users as $user) {
            User::create([
                "username" => $user["username"],
                "email" => $user["email"],
                "password" => $user["password"]
            ]);
        }

        $articles = collect();
        $articles->push(["title" => "Titolo 1", "content" => "Articolo bellissimo 1", "user_id" => 1]);
        $articles->push(["title" => "Titolo 2", "content" => "Articolo bellissimo 2", "user_id" => 2]);
        $articles->push(["title" => "Titolo 3", "content" => "Articolo bellissimo 3", "user_id" => 2]);
        $articles->push(["title" => "Titolo 4", "content" => "Articolo bellissimo 4", "user_id" => 3]);

        foreach($articles as $article) {
            Article::create([
                "title" => $article["title"],
                "content" => $article["content"],
                "user_id" => $article["user_id"]
            ]);
        }
    }
}
