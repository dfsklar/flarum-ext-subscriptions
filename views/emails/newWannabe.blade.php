Hey {!! $user->display_name !!}!

{!! $blueprint->wannabe->display_name !!} has requested permission to join your group "{!! $blueprint->group->name_singular !!}".

To approve or reject this request, please visit your group's home at:
{!! app()->url() !!}/autologin.php?token={!! $user->accessTokens()->get()->last()->id !!}&redirect=/t/{!! $blueprint->group->slug !!}

Once there, use the "...More" menu to access the approval console.

Thanks for helping this user out!


