@component('mail::message')
# Welcome to InstaDeck!

This is one of the portfolio websites made by Decki Herdiawan Soepandi and I thank you for checking this one out.<br>
Click the button below to login to InstaDeck.

@component('mail::button', ['url' => '/instadeck'])
Click me!
@endcomponent

Best regards,<br>
Decki Herdiawan Soepandi, A.Md.Kom
@endcomponent
