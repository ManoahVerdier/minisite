<div class=" container-fluid mb-5 muli" id="clients">
    {{--<div class="container">--}}
        <div class="row pl-0 pl-md-5 pr-md-1 pt-5 justify-content-center h-100">
            <div class="px-5 col-12 col-md-6 bg-light-grey" id="clients-left">
                <div class='h1 yellow w-100 mb-0 muli-bold'>Nos</div>
                <div class='h2  w-100  mb-0 pretty'>clients</div>
                <div class='h1 yellow w-100 font-weight-bold  mb-0'>-</div>
            </div>
            <div class="col-12 col-md-6 bg-yellow" id="clients-right">
                <div class="d-flex h-100">
                    <div class="pl-md-5 pl-1 my-auto d-inline-block dark-grey align-center font-weight-bold">
                        {{$hp->clients}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row pl-5 pr-1 justify-content-center h-100 d-none d-md-flex">
            <div class="col-12 bg-light-grey p-5"></div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-0 m-0" id="clients-left">
                <img class="w-100 h-auto" src="{{asset('/img/home/HP_BMW.webp')}}"/>
                <div class='position-absolute w-100 h-100 clients-text'>
                    <div class='d-inline-block w-100 h-60 mb-1'></div>
                    <h5 class='yellow h5 font-weight-bold mt-md-5 mt-4 mb-0 ml-4 pl-1 pt-2 pt-md-1'><span class='ml-3 pl-1'>{{$hp->clients_certif_1}}</span></h5>
                </div>
            </div>
            <div class="col-12 col-md-4 p-0 m-0" id="clients-left">
                <img class="w-100 h-auto" src="{{asset('/img/home/HP_Carrefour.webp')}}"/>
                <div class='position-absolute w-100 h-100 clients-text'>
                    <div class='d-inline-block w-100 h-60 mb-1'></div>
                    <h5 class='yellow h5 font-weight-bold mt-md-5 mt-4 mb-0 ml-5 pl-2 pt-2 pt-md-1'>{{$hp->clients_certif_2}}</h5>
                </div>
            </div><div class="col-12 col-md-4  p-0 m-0" id="clients-left">
                <img class="w-100 h-auto" src="{{asset('/img/home/HP_Ricard.webp')}}"/>
                <div class='position-absolute w-100 h-100 clients-text'>
                    <div class='d-inline-block w-100 h-60 mb-1'></div>
                    <h5 class='yellow h5 font-weight-bold mt-md-5 mt-4 mb-0 ml-5 pt-2 pt-md-1'>{{$hp->clients_certif_3}}</h5>
                </div>
            </div><div class="col-12 col-md-4  p-0 m-0" id="clients-left">
                <img class="w-100 h-auto" src="{{asset('/img/home/HP_Ministère.webp')}}"/>
                <div class='position-absolute w-100 h-100 clients-text'>
                    <div class='d-inline-block w-100 h-60 mb-1'></div>
                    <h5 class='yellow h5 font-weight-bold mt-md-5 mt-4 mb-0 ml-5 pl-1 pt-2 pt-md-1'><span class='ml-1'>{{$hp->clients_certif_4}}</span></h5>
                </div>
            </div><div class="col-12 col-md-4 p-0 m-0" id="clients-left">
                <img class="w-100 h-auto" src="{{asset('/img/home/HP_clients.webp')}}"/>
                <div class='position-absolute w-100 h-100 clients-text'>
                    <div class='d-inline-block w-100 h-60 mb-1'></div>
                </div>
            </div>
        </div>
    {{--</div>--}}
</div>