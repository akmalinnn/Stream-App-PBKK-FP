<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
  /**
   * @param  mixed  $genreId
   * @return mixed
   */
  private function getShowsByGenre($genreId)
  {
    return Cache::remember('shows_genre_' . $genreId, 60 * 60, function () use ($genreId) {
      return Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/discover/tv', [
          'with_genres' => $genreId,
        ])->json()['results'];
    });
  }

  public function index(): View|Factory
  {
    $popular = Cache::remember('shows_popular', 60 * 60, function () {
      return Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/popular')
        ->json()['results'];
    });

    $trending = Cache::remember('shows_trending', 60 * 60, function () {
      return Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/tv/day')
        ->json()['results'];
    });

    $tvgenres = Cache::remember('shows_genres', 60 * 60, function () {
      return Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/tv/list')
        ->json()['genres'];
    });

    $comedies = $this->getShowsByGenre(35);
    $action = $this->getShowsByGenre(10759);
    $western = $this->getShowsByGenre(37);
    $mystery = $this->getShowsByGenre(9648);
    $scifi = $this->getShowsByGenre(10765);
    $animation = $this->getShowsByGenre(16);

    /** @psalm-suppress UndefinedClass **/
    $genres = collect($tvgenres)->mapWithKeys(function ($genre) {
      /** @phpstan-ignore-line */
      return [$genre['id'] => $genre['name']];
    });

    return view('tv', [
      'popular' => $popular,
      'genres' => $genres,
      'trending' => $trending,
      'comedies' => $comedies,
      'western' => $western,
      'action' => $action,
      'mystery' => $mystery,
      'scifi' => $scifi,
      'animation' => $animation,
    ]);
  }

  public function show($id): View|Factory
  {
    $playShow = Cache::remember('show_' . $id, 3600, function () use ($id) {
      return Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/tv/' . $id . '?append_to_response=credits,videos,images')
        ->json();
    });

    return view('components.tv.show', [
      'shows' => $playShow,
    ]);
  }
}
