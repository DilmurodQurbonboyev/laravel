<?php

namespace App\Providers;

use App\Models\Authority;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('super-admin', function () {

            $authority = session()->get('current_authority');

            $admins = Authority::query()
                ->select('id', 'code')
                ->where('id', 1)
                ->get();

            foreach ($admins as $admin) {
                if ($authority->code == $admin->code) {
                    return true;
                }
            }
            return true;
        });

        Gate::define('admin', function () {

            $authority = session()->get('current_authority');

            $admins = Authority::query()
                ->select('id', 'code')
                ->whereIn('id', [1, 2])
                ->get();

            foreach ($admins as $admin) {
                if ($authority->code == $admin->code) {
                    return true;
                }
            }
            return true;
        });

        Gate::define('content-manager', function () {

            $authority = session()->get('current_authority');

            $contentManager = Authority::query()
                ->select('id', 'code')
                ->whereIn('id', [1, 3])
                ->get();

            foreach ($contentManager as $manager) {
                if ($authority->code == $manager->code) {
                    return true;
                }
            }
            return true;
        });
    }
}
