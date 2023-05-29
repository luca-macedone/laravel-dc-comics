<footer>
    <div id="top">
        <div class="container">
            <div class="row py-4" id="footer-top">
                <div class="col-12 col-lg-5">
                    <div class="row">
                        <div class="col-4">
                            <h4>DC Comics</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Characters</a></li>
                                <li><a href="{{ route('comics') }}">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                            </ul>
                            <h4>Shop</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h4>DC</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy policy (New)</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshops</a></li>
                                <li><a href="#">CSPC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h4>Sites</h4>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                        <div class="col-12 ms-text-secondary ms-text-xs">
                            All Site Content TM and 
                            <i class="fa fa-copyright" aria-hidden="true"></i>
                            2023 DC Entertainment, unless otherwise noted here. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <div class="container">
            <div class="row" id="footer-bottom">
                <div class="col d-flex justify-content-between align-items-center">
                    <button class="btn rounded-0 fw-regular">
                        Sign-up now!
                    </button>
                    <div class="contacts d-flex gap-3 align-items-center">
                        <span class="fw-bold me-3">Follow Us</span>
                        {{-- @foreach($footer_links['socials_list'] as $social)
                        <a class="d-none d-md-inline-flex" href="#">
                            <img class="" src="{{ Vite::asset('resources/img/'.$social['img_path']) }}" alt="{{ $social['name'] }}">
                        </a>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>