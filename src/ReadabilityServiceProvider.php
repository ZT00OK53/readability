<?php 
namespace Zehntech\Readability;
 
use Illuminate\Support\ServiceProvider;
use Masterminds\HTML5;
class ReadabilityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->register(HTML5::class);
    }
 
    public function register()
    {
    }
}

?>