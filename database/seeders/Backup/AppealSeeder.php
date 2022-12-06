<?php

namespace Database\Seeders\Backup;

use App\Models\Appeal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AppealSeeder extends Seeder
{
    public function run()
    {
        $json = File::get("database/backups/appeals.json");
        $appeals = json_decode($json);
        foreach ($appeals as $appeal) {
            Appeal::query()->create([
                "fullname" => $appeal->fullname,
                "organization" => $appeal->organization,
                "phone" => $appeal->phone,
                "email" => $appeal->email,
                "appeal_type" => $appeal->appeal_type,
                "address" => $appeal->address,
                "region_id" => $appeal->region_id,
                "code" => $appeal->code,
                "photo" => $appeal->photo,
                "file" => $appeal->file,
                "status" => $appeal->status,
                "message" => $appeal->message,
                "answer_file" => $appeal->answer_file,
                "display" => $appeal->display,
                "answer" => $appeal->answer,
                "user_ip" => $appeal->user_ip,
                "browser_agent" => $appeal->browser_agent,
            ]);
        }
    }
}
