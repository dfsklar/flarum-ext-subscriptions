Hi {!! $user->display_name !!},

Your request to join the group called "{!! $blueprint->group->name_singular !!}" has just been approved!

You are now able to interact with other members.  To begin participating now, simply use the following link:

{!! app()->url() !!}/autologin.php?token={!! $user->accessTokens()->get()->last()->id !!}&redirect=/t/{!! $blueprint->group->slug !!}

We hope you enjoy sharing your faith with others.

May God Richly Bless You




