<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bstext','components.form.text',['name','value' => null,'attributes' => []]);

        Form::component('bstextarea','components.form.textarea',['name','value' => null,'attributes' => []]);

        Form::component('bshidden','components.form.hidden',['name','value' => null,'attributes' => []]);

        Form::component('bssubmit','components.form.submit',['value' => null,'attributes' => []]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
