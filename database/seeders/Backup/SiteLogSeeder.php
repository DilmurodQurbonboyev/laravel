<?php

namespace Database\Seeders\Backup;

use App\Models\SiteLog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class SiteLogSeeder extends Seeder
{
    public function run()
    {
        $json = File::get("database/backups/site_logs.json");
        $siteLogs = json_decode($json);
        foreach ($siteLogs as $log) {
            SiteLog::query()->create([
                "id" => $log->id,
                "model" => $log->model,
                "type" => $log->type,
                "row_id" => $log->row_id,
                "user_id" => $log->user_id,
                "authority_id" => $log->authority_id,
                "user_ip" => $log->user_ip,
                "url" => $log->url,
                "action" => $log->action,
                "user_agent" => $log->user_agent,
                "created_at" => $log->created_at,
                "updated_at" => $log->updated_at,
            ]);
        }
    }
}
