<?php

namespace Database\Seeders\Backup;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/backups/contacts.json");
        $contacts = json_decode($json);

        foreach ($contacts as $contact) {
            Contact::query()->create([
                "id" => $contact->id,
                "phone" => $contact->phone,
                "phone2" => $contact->phone2,
                "chancellery" => $contact->chancellery,
                "fax" => $contact->fax,
                "hr_department" => $contact->hr_department,
                "email" => $contact->email,
                "longitude" => $contact->longitude,
                "latitude" => $contact->latitude,
                "created_at" => $contact->created_at,
                "updated_at" => $contact->updated_at
            ]);
        }
    }
}
