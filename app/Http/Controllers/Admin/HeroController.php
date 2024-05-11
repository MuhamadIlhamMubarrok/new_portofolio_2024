<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

            $request->validate([
                'marquee_text' => 'required|string',
                'title' => 'required|string',
                'text' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png',
                'cta_1' => 'required|string',
                'cta_2' => 'required|string',
                'whatsapp' => 'required|string',
                'instagram' => 'required|string',
                'youtube' => 'required|string',
                'facebook' => 'required|string',
            ]);

            $hero = Hero::find($id);

            $data = [
                'marquee_text' => $request->marquee_text,
                'title' => $request->title,
                'text' => $request->text,
                'cta_1' => $request->cta_1,
                'cta_2' => $request->cta_2,
                'whatsapp' => $request->whatsapp,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'facebook' => $request->facebook,
            ];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image->storeAs('public/hero_image', $image->hashName());
                Storage::delete('public/hero_image/' . $hero->image);
                $data['image'] = $image->hashName();
            }

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
