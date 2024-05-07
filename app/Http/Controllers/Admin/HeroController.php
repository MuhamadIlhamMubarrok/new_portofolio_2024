<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function indexHero()
    {
        $hero = Hero::all();
        return view('pages.admin.hero.index', compact('hero'));
    }

    public function editHero($id)
    {
        $hero = Hero::findOrFail($id);
        return view('pages.admin.hero.edit', compact('hero'));
    }

    public function updateHero(Request $request, $id)
    {
        try {

            $request->validate([
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

            $hero = Hero::findOrFail($id);
            $hero->update($request->all());


            $notification = array(
                'message' => 'Hero Updated Successfully!',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.dashboard.hero', $id)->with($notification);
        } catch (\Exception $e) {

            $notification = array(
                'message' => 'Hero Updated Successfully!',
                'alert-type' => 'error',
            );

            return redirect()->route('admin.dashboard.hero', $id)->with($notification);
        }
    }
}
