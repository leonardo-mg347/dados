<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Settings\GeneralSettings;


class GeneralSettingsController extends Controller
{
    public function show(GeneralSettings $settings)
    {
        Gate::authorize('admin');

        return view('settings.show', [
            'criacao_pedido_mail' => $settings->criacao_pedido_mail
        ]);
    }
}
