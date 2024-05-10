<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function indexHero()
    {
        $hero = Hero::first();
        return view('pages.admin.hero.index', compact('hero'));
    }

    public function updateHero(Request $request)
    {
        try {

            $hero = Hero::first();
            if (!$hero) {
                return redirect()->route('hero.index')->with('error', 'No hero data found!');
            }

            $validatedData = $request->validate([
                'marquee_text' => 'nullable|string',
                'title' => 'nullable|string',
                'text' => 'nullable|string',
                'image' => 'nullable|string',
                'cta_1' => 'nullable|string',
                'cta_2' => 'nullable|string',
                'whatsapp' => 'nullable|string',
                'instagram' => 'nullable|string',
                'youtube' => 'nullable|string',
                'facebook' => 'nullable|string',
            ]);

            $hero->update($validatedData);

            $notification = array(
                'message' => 'Hero Updated Successfully!',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.hero.index')->with($notification);
        } catch (\Exception $e) {

            $notification = array(
                'message' => 'Hero Failed to Update ',
                'alert-type' => 'error',
            );

            return redirect()->route('admin.hero.index')->with($notification);
        }
    }
}
