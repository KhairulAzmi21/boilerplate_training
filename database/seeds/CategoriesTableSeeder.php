<?php

use Illuminate\Database\Seeder;
use App\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name' => 'World'],
            [ 'name' => 'Technology'],
            [ 'name' => 'Design'],
            [ 'name' => 'Culture'],
            [ 'name' => 'Business'],
            [ 'name' => 'Politics'],
            [ 'name' => 'Opinion'],
            [ 'name' => 'Religious'],
            [ 'name' => 'Science'],
            [ 'name' => 'Health'],
            [ 'name' => 'Style'],
            [ 'name' => 'Travel'],
        ];

		Category::insert($data);

    }
}
