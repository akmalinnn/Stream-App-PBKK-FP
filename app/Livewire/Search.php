<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
  public ?string $search = '';

  public $initialRouteName;

    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */

     public function mount()
    {
        $this->initialRouteName = request()->route()->getName();
    }

    public function render()
    {
      $searchResults = [];

      // dump($this->search);
      // dump($this->initialRouteName);
      // @phpstan-ignore-next-line
      if (strlen($this->search) >= 3) {
        if ($this->initialRouteName === 'stream.index') {
          $searchResults = Http::withToken(config('services.tmdb.token'))
              ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
              ->json()['results'];
      }
      elseif ($this->initialRouteName === 'shows.index') {
        $searchResults = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/search/tv?query='.$this->search)
            ->json()['results'];
      }
    }

      // dump($searchResults);

      return view('livewire.search', [
          // @phpstan-ignore-next-line
          'searchResults' => collect($searchResults)->take(5),
          'initialRouteName' => $this->initialRouteName,
      ]);
    }
}
