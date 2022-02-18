
@foreach ($komentars as $komentar)
<div class="display-comment">
    <div class="comment-replay" style="border-bottom: 1px solid #d2d2d2;">
        <a href="javascript:void(0)" onclick="balasKomentar({{ $komentar->id }}, '{{ $komentar->komentar }}')" style="float: right;">Reply</a>                                      
        <strong>{{ $komentar->user->name }}</strong> <b>|</b>
        <a>{{ $komentar->created_at->diffForHumans() }}</a>
        <p>{{ $komentar->komentar }}</p>      
    </div>
    
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
                        <!-- <input type="text" name="komentar" class="form-control" /> -->
            <input type="hidden" name="artikel_id" value="{{ $artikel_id }}" />
            <input type="hidden" name="komentar_id" value="{{ $komentar->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" hidden="btn">
        </div>
    </form>
    @include('livewire.pertials.replys', ['komentars' => $komentar->replies])
</div>
@endforeach 


 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function balasKomentar(id, komentar) {
            $('#formReplyComment').show();
            $('#parent_id').val(id)
            $('#replyComment').val(title)
        }
    </script>