<?php
namespace SocialiteProviders\Yammer;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YammerExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'yammer', __NAMESPACE__.'\Provider'
        );
    }
}
