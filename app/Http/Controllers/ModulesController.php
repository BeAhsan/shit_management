<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\RedirectResponse;

class ModulesController extends Controller
{
    public function index()
    {
        $modules = Modules::all();
        return view('settings.modules.list', compact('modules'));
    }

    public function changeStatus(Modules $module): RedirectResponse
    {
        Modules::findOrFail($module->id)->update(['is_active' => $module->is_active ? 0 : 1]);
        return redirect()->route('modules.index');
    }

    public function makeItDefault(Modules $module): RedirectResponse
    {
        Modules::query()->update(['is_landing_dashboard' => false]);
        Modules::findOrFail($module->id)->update(['is_landing_dashboard' => true]);
        return redirect()->route('modules.index');
    }
}
