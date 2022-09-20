
@foreach ($komentars as $komentar)
<ul class="comment-list">
  <li>
    <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="{{asset('assets/images/artikel')}}/{{$komentar->user->profile_photo_path}}" alt="{{ $komentar->user->name }}:" width="45" height="auto"></a>
      <div class="media-body">
        <h5 class="media-heading comment-heading">{{ $komentar->user->name }}:</h5>
        <div class="comment-date">{{ $komentar->created_at->isoFormat('ddd, D MMM Y') }}</div>
        <p>{{ $komentar->komentar }}...</p>
        <!-- <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>  -->
      </div>
    </div>
  </li>
</ul>

@endforeach 

