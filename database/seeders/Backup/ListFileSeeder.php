<?php

namespace Database\Seeders\Backup;

use App\Models\ListFile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ListFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/list_files.json");
        $users = json_decode($json);

        foreach ($users as $user) {
            ListFile::query()->create([
                "id" => $user->id,
                "title" => $user->title,
                "path" => $user->path,
                "image" => $user->image,
                "created_at" => $user->created_at,
                "updated_at" => $user->updated_at
            ]);
        }
    }
}
