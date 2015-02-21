<?php
namespace SocialiteProviders\Yammer;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YammerExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('yammer', __NAMESPACE__.'\Provider');
    }
}
