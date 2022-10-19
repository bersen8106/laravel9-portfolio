<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
              'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
              'title' => 'Full Stack app with Laravel, Tailwindcss and Vue3',
              'image' => url('/img/survey.jpg'),
              'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'E-commerce website with Yii2',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'REST API with Laravel 8 and Sanctum',
                'image' => url('/img/laravel-rest-api.jpg'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/php-mvc-framework.jpg'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'YouTube clone with Yii2',
                'image' => url('/img/yii2-youtube-clone.jpg'),
                'github' => 'https://github.com'
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 + Vue3 Notes application',
                'image' => url('/img/yii2-vue-notes.png'),
                'github' => 'https://github.com'
            ],
        ];

        $this->tabs = Arr::flatten(Arr::pluck($this->items, 'category'));

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
