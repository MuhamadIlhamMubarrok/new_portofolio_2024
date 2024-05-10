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

    public function updateHero(Request $request, string $id)
    {
        try {

            $data = $request->validate([
                'marquee_text' => 'required|string',
                'title' => 'required|string',
                'text' => 'required|string',
                'image' => 'required|string',
                'cta_1' => 'required|string',
                'cta_2' => 'required|string',
                'whatsapp' => 'required|string',
                'instagram' => 'required|string',
                'youtube' => 'required|string',
                'facebook' => 'required|string',
            ]);

            $hero = Hero::find($id);
            $hero->update($data);

            $notification = array(
                'message' => 'Hero Updated Successfully!',
                'alert-type' => 'success',
            );

            return redirect()->route('admin.hero.index')->with($notification);
        } catch (\Exception $e) {

            $notification = array(
                'message' => 'Failed to Update Hero',
                'alert-type' => 'error',
            );

            return redirect()->route('admin.hero.index')->with($notification);
        }
    }
}
