<a href="javascript:;">
    <strong id="following" class="stat">
        {{ count($user->followings) }}
    </strong>
    关注
</a>

<a href="javascript:;">
    <strong id="followers" class="stat">
        {{ count($user->followers) }}
    </strong>
    粉丝
</a>

<a href="javascript:;">
    <strong id="statuses" class="stat">
        {{ count($user->statuses) }}
    </strong>
    微博
</a>
