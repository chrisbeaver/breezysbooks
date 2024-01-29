<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Hash;

class ConfirmSubscriptionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Subscriber $subscriber, string $hash)
    {
        $decoded = base64_decode($hash);
        if (Hash::check($subscriber->id, $decoded)) {
            $subscriber->update(['confirmed' => true]);
            return view('confirmed');
        }

        return abort(404);
    }
}
