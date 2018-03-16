Hey {!! $user->display_name !!}!

{!! $blueprint->wannabe->display_name !!} has requested permission to join your group called {!! $blueprint->group->name_singular !!}.

{!! app()->url() !!}/autologin.php?token={!! $user->accessTokens()->get()->last()->id !!}&redirect=/fffffffff/{!! $blueprint->group->id !!}
