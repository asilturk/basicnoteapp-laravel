<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(Request $request, $id) {
        $user = User::query()->find($id);

        if (!$user) {
            return response()->error(__('error.message.user-not-found'), __('error.code.not-found'));
        }

        return response()->success($user);
    }
}
