@foreach ($kategoris as $kategori)
<div class="display-comment">
    <div class="comment-replay" style="border-bottom: 1px solid #d2d2d2;">
       Reply</a>                                      
        <strong>{{ $kategori->name }}</strong> <b>|</b>
    </div>
    <div>
            <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="/">Copy Right @ReogIO</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                           <img src="{{asset('assets/images/artikel')}}/{{$artikel->image }}">
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
</div>
    </form>
    @include('layouts.admin', ['kategoris' => $kategori->replies])
</div>
@endforeach 