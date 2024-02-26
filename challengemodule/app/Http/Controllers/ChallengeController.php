<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index(): View
    {
        $challenges = Challenge::all();

        $viewData = [
            "title" => "Challenges - Online Store",
            "subtitle" => "List of Challenges",
            "challenges" => $challenges,
        ];

        return view('challenge.index')->with("viewData", $viewData);
    }

    public function show(string $id): View
    {
        $challenge = Challenge::findOrFail($id);

        $viewData = [
            "title" => $challenge->name . " - Online Store",
            "subtitle" => $challenge->name . " - Challenge information",
            "challenge" => $challenge,
        ];

        return view('challenge.show')->with("viewData", $viewData);
    }

    public function create(): View 
    { 
        $viewData = [
            "title" => "Create product"
        ]; 

        return view('challenge.create')->with("viewData", $viewData); 
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "reward_coins" => "required",
            "max_users" => "required",
            "expiration_date" => "required",
            "product_name" => "required",
            "product_quantity" => "required"
        ]);

        $challenge = new Challenge($request->only([
            'name',
            'description',
            'reward_coins',
            'max_users',
            'expiration_date',
            'product_name',
            'product_quantity'
        ]));

        $challenge->current_users = 0;
        $challenge->checked = false;
        $challenge->save();

        return redirect()->back()->with('success', 'Challenge created successfully!');
    }

    public function delete($id)
    {
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();

        return redirect()->route('challenge.index')->with('success', 'Challenge deleted successfully!');
    }
}
