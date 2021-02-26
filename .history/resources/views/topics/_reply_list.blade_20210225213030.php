{{ $replies }}

<ul class="list-unstyled">
  @foreach ($replies as $index => $reply)
    <li class=" media" name="reply{{ $reply->id }}" id="reply{{ $reply->id }}">
      <div class="media-left">
        <a href="{{ route('users.show', [$reply->user_id]) }}">
          {{-- <img class="media-object img-thumbnail mr-3" alt="{{ $reply->user->name }}" src="{{ $reply->user->avatar }}" style="width:48px;height:48px;" /> --}}
        </a>
      </div>

    </li>

  @endforeach
</ul>
