
<section id="contact-page" class="pt-30 pb-60 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep Aspiration</h2>
                        </div> <!-- section title -->
                        @if (session()->has('message'))
                        <div class="alert alert-success" style="margin-top:30px;">
                          {{ session('message') }}
                        </div>
                    @endif
                        <div class="main-form pt-45">
                            <form enctype="multipart/form-data" wire:submit.prevent="sendMessage" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" placeholder="Your name" wire:model="name">
                                        </div> <!-- singel form -->
                                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="email" placeholder="Email" wire:model="email">
                                        </div> <!-- singel form -->
                                         @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" placeholder="Subject" wire:model="subject">
                                        </div> <!-- singel form -->
                                        @error('subject') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input type="text" placeholder="Phone" wire:model="tlp">
                                        </div> <!-- singel form -->
                                        @error('tlp') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea placeholder=",leave us a message."  wire:model="pesan"></textarea>
                                        </div> <!-- singel form -->
                                        @error('pesan') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button type="submit" class="main-btn">Send</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-20">
                        @foreach ($contacs as $contac)
                        <img src="{{asset('assets/images/artikel')}}/{{$contac->image }}" style="align-content: center;">
                        <ul>
                             
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{$contac->alamat }}</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{$contac->tlp}}</p>
                                        <p>+1 222 345 342</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>{{$contac->email }}</p>
                                        <p>info@yourmail.com</p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                             
                        </ul>
                        @endforeach
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <div id="contact-map"></div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>