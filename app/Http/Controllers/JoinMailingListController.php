<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Subscriber;

class JoinMailingListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $map = config('app.topics');

        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers',
            'topics' => 'required',
            'topics.*' => [Rule::in(array_keys($map))]
        ]);

        Subscriber::create($validated);

        $chosen = collect($validated['topics'])->map(fn ($t) => $map[$t])->toArray();
        return redirect()->back()->with('success', "We have you down for " . implode(', ', $chosen) . "! We'll send updates to <strong>" . $validated['email'] . "</strong> about getting your books!");
    }
}
