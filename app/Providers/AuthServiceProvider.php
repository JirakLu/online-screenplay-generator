<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Script;
use App\Policies\ScriptPolicy;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
		// 'App\Models\Model' => 'App\Policies\ModelPolicy',
		Script::class => ScriptPolicy::class,
	];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Ověření emailové adresy')
                ->line('Kliknutím na tlačítko dole, ověříte svojí emailovou adresu.')
                ->action('Ověřit email', $url);
        });
    }
}
