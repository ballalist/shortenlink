<?php

namespace App\Http\Livewire;

use Livewire\Component;
use URL;

use App\Models\Link;

class Shortform extends Component
{
    public  $url,
            $success = false,
            $shortUrl = "",
            $error = false;

    public function render()
    {
        return view('livewire.shortform');
    }

    public function shortUrl()
    {
        
        $validatedDate = $this->validate([
            'url' => 'required|url',
        ]);

        try {

            $user = auth()->user();
            $slug = generateRandomString(5);
            $link = Link::create([
                                    'user_id' => $user->id, 
                                    'url' => $this->url, 
                                    'slug' => $slug, 
                                    'stats' => 0
                                ]);

            $this->success = true;
            $this->shortUrl = URL::to('/'.$link->slug);

        } catch (\Throwable $th) {
            $error = true;
        }

    }

    public function goToThirdStep()
    {   
        $this->success = false;
    }
}
