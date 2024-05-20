<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ArtikelService;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ArticleController extends Controller
{
    protected $articleService;
    public function __construct(ArtikelService $articleService){
        $this->articleService = $articleService;
    }
   public function index(Request $request)
    {
        try {
            $search = $request->input('search');
            if ($search) {
                $articles = $this->articleService->searchByTitle($search);
            } else {
                $articles = $this->articleService->getAll();
            }
            return view('admin.articles.index', compact('articles'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Articles: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.articles.index')->with($notification);
        }
    }

    public function edit(Request $request): View
    {
        return view('admin.articles.edit', [
            'user' => $request->user(),
        ]);
    }

   
    public function store(Request $request)
    {
        try {
            $this->articleService->create($request->all());
             $notification = [
                'message' => 'Article created successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.articles.index')->with($notification);
        }catch(\Exception $e){
            $notification = [
                'message' => 'Failed to create Article: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.articles.index')->with($notification);
        }
    }

   
    public function update(Request $request, string $id)
    {
        try {
            $this->articleService->update($id, $request->all());

            $notification = [
                'message' => 'Article updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.articles.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Article: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.articles.index')->with($notification);
        }
    }

    
    public function destroy(string $id)
    {
        try {
            $this->articleService->delete($id);

            $notification = [
                'message' => 'Article deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.articles.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Article: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.articles.index')->with($notification);
        }
    }
}
