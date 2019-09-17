<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class ConditionServiceProvider extends CommonServiceProvider
{  
	/**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Template\TemplateServiceProvider::class);
    }
}
