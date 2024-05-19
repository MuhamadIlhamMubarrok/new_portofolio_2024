<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
class ArtikelService
{
    public function create($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/article_images', $image->hashName());
        $data['gambar'] = $image->hashName();

        $dataArticle = [
           'gambar' => $data['gambar'],
            'judul' => $data['judul'],
            'author' => $data['author'],
            'content' => $data['content'],
            'status' => $data['status'],
        ];

        return Article::create($dataArticle);
    }

     public function getAll()
    {
        return Article::all();
    }

     public function update($id, $data)
    {
        $article = Article::findOrFail($id);

        if (isset($data['gambar'])) {
            $image = $data['gambar'];
            $image->storeAs('public/article_images', $image->hashName());
            Storage::delete('public/article_images/' . $article->gambar);
            $data['gambar'] = $image->hashName();
        }

        $dataArticle = [
            'gambar' => $data['gambar'] ?? $article->gambar,
            'judul' => $data['judul'],
            'author' => $data['author'],
            'content' => $data['content'],
            'status' => $data['status'],
        ];

        $article->update($dataArticle);

        return $article;
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        Storage::delete('public/article_images/' . $article->gambar);
        return $article->delete();
    }

    public function searchByTitle($title)
    {
        return Article::where('judul', 'like', '%' . $title . '%')->get();
    }
}
