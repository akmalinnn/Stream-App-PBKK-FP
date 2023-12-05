<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\Favorites;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use App\Providers\NewFavoriteAdded;

class FavoritesController extends Controller
{
  /**
   * @param  mixed  $id
   * @return mixed
   */
  private function getContentDetails($id, $type)
  {
    $apiUrl = $type == 'movie'
      ? 'https://api.themoviedb.org/3/movie/'
      : 'https://api.themoviedb.org/3/tv/';

    $response = Http::withToken(config('services.tmdb.token'))
      ->get($apiUrl . $id)
      ->json();

    // dump($response);

    if ($type == 'movie') {
      $contentDetails = [
        'title' => $response['title'],
        'overview' => $response['overview'],
        'release_date' => $response['release_date']
      ];
    } else if ($type == 'tv') {
      $contentDetails = [
        'title' => $response['name'],
        'overview' => $response['overview'],
        'release_date' => $response['first_air_date']
      ];
    }

    return $contentDetails;
  }

  public function store(Request $request)
  {
    $favorite = new Favorites;
    $favorite->user_id = auth()->user()->id;
    $favorite->content_id = $request->content_id;
    $favorite->type = $request->content_type;

    if ($request->content_type == 'movie') {
      $contentDetails = $this->getContentDetails($request->content_id, 'movie');
      $favorite->title = $contentDetails['title'];
      $favorite->release_date = $contentDetails['release_date'];
    } else if ($request->content_type == 'tv') {
      $contentDetails = $this->getContentDetails($request->content_id, 'tv');
      $favorite->title = $contentDetails['title'];
      $favorite->release_date = $contentDetails['release_date'];
    }

    $favorite->overview = $contentDetails['overview'];

    $favorite->save();

    event(new NewFavoriteAdded($favorite->title));

    return redirect()->action([FavoritesController::class, 'show']);
  }

  public function show(Request $request): View|Factory
  {
    $sort = $request->query('sort', 'title');
    $direction = $request->query('direction', 'asc');
    $favorites = Favorites::where('user_id', auth()->user()->id)
      ->orderBy($sort, $direction)
      ->get();

    return view('components.favorites.show', ['favorites' => $favorites]);
  }
}
