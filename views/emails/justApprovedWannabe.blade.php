Hey {!! $user->display_name !!}!

You have just been approved for membership in the "{!! $blueprint->group->name_singular !!}" community group.

To get started on your participation, simply use this convenient link:

{!! app()->url() !!}/autologin.php?token={!! $user->accessTokens()->get()->last()->id !!}&redirect=/t/{!! $blueprint->group->slug !!}

Enjoy!



