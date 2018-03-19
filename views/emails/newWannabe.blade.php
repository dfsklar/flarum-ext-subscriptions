Hi {!! $user->display_name !!},

{!! $blueprint->wannabe->display_name !!} has requested permission to join the group named "{!! $blueprint->group->name_singular !!}".

To approve or reject this request, please visit your group home at:
{!! app()->url() !!}/autologin.php?token={!! $user->accessTokens()->get()->last()->id !!}&redirect=/t/{!! $blueprint->group->slug !!}

Once there, use the "...More" menu to access the approval console.

May God Richly Bless You

