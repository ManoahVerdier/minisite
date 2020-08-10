<div class="container position-fixed d-md-none bg-white" id="mobile-main">
    <div class="row">
        <div class="col-5 px-0">
            <div id="devis-btn" class="mt-md-4 mt-2 text-center">
                <a href="{{route('contact')}}">
                    <span class="yellow"> UN DEVIS ?</span>
                    <span class="devis-icon btn btn-circle btn-yellow ml-2"><i class="fas fa-euro-sign"></i></span>
                </a>
            </div>
        </div>
        <div class="col-6 px-0">
            <div id="contact-btn" class="mt-md-4 mt-1 mb-1 text-center">
                <a href="tel:0482534478" class='btn btn-blue rounded-pill font-weight-bold px-2'>
                    <span>04 82 53 44 78</span>
                    <span class="ml-1 contact-icon text-white"><img height="20px" width="20px" src="{{asset('img/header/headset.png')}}"/></span>
                </a>
            </div>
        </div>
        <div class="col-1 px-0">
            <button class="navbar-toggler px-0 py-2 mr-1" type="button" aria-label="Menu mobile">
                <span class="navbar-toggler-icon" onclick="$('#menu').toggleClass('hidden')"></span>
            </button>
        </div>
    </div>
</div>
