<?php

namespace Database\Seeders\Backup;

use App\Models\MenusCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MenusCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/menus_categories.json");
        $menusCategories = json_decode($json);

        foreach ($menusCategories as $menusCategory) {
            MenusCategory::query()->create([
                "id" => $menusCategory->id,
                "status" => $menusCategory->status,
                "creator_id" => $menusCategory->creator_id,
                "created_at" => $menusCategory->created_at,
                "updated_at" => $menusCategory->updated_at
            ]);
        }
    }
}
