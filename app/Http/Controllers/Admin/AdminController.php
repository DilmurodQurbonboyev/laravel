<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthLog;
use App\Services\M;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function getRole(): Factory|View|Application
    {
        $authorities = auth()->user()->userRoleLink;
        return view('admin.roles', compact('authorities'));
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function setRole(Request $request): RedirectResponse
    {
        foreach (auth()->user()->userRoleLink as $data) {
            if ($data->id == $request->authority_id) {
                session()->put('current_authority', $data);
                session()->put('current_user', auth()->user());

                AuthLog::query()->create([
                    'authority_id' => session()->get('current_authority')->id,
                    'user_id' => auth()->user()->id,
                    'description' => 'authenticated via oneid',
                    'user_ip' => $request->ip(),
                ]);
            }
        }
        return redirect()->route('admin.dashboard')->with('welcome', M::t('Welcome to the Dashboard'));
    }

    public function changeRole(Request $request): RedirectResponse
    {
        $request->session()->forget('current_authority');
        $request->session()->forget('current_user');
        return redirect()->route('getRole');
    }
}
