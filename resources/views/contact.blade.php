@extends('layouts.app')

@section('content')
<div class="container pt-3">
    <div class="row pb-4">
        <div class="col-lg-12">
            <div class="pt-5">
                <h3 class="pt-4"><b>Contact Us</b></h3>
            </div>
            <small class="pl-2">We are here for you.</small>
        </div>
    </div>

    <div class="abtgrid auto-fit pt-4 ">
        <div class="card border-0 ">
            <div class="card-body justify-content-center text-align-center ">
                <h5 class="card-title"><i class="fa fa-envelope pl-4 pr-2 " style="font-size:16px;color:#f47a60; vertical-align:baseline;"></i> Email</h5>
                <div class="hr-color-1a pb-3 pt-0"></div>
                <p class="card-text pl-4">info@cput-wil.com</p>

            </div>
        </div>
        <div class="card border-0 ">
            <div class="card-body justify-content-center text-align-center">
                <h5 class="card-title"> <i class="fa fa-phone pl-4 pr-2 " style="font-size:20px;color:#7fe7dc; vertical-align:baseline;"></i> Phone Number</h5>
                <div class="hr-color-1b pb-3 pt-0"></div>
                <span class="card-text pl-4">(+27) 671 0000 000012</span>

            </div>
        </div>
        <div class="card border-0">
            <div class="card-body justify-content-center text-align-center  ">
                <h5 class="card-title"><i class="fa fa-map-marker pl-4 pr-2 " style="font-size:20px;color:#ced7d8; vertical-align:baseline;"></i> Physical Address</h5>
                <div class="hr-color-1c pb-3 pt-0"></div>
                <p class="card-text pl-4"> We are virtual
                </p>
            </div>
        </div>

    </div>
    <div class="row pt-4">

        <div class="col-lg-5 align-self-center">
            <img src="https://res.cloudinary.com/daiey6vt0/image/upload/v1636049790/wil/undraw_email_campaign_re_m6k5_lgs5bh.svg" class="borderradius3" style="width: 100%; max-width:100vw;max-height:unset;" alt="...">

        </div>

        <div class="col-lg-7">
            <div class="card border shadow-sm mb-5 bg-white rounded align-self-center">
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-group">
                            <h4 class="card-title pt-2 pb-2"><b>Contact us</b></h4>
                            <small>Due to the need to ask questions of you to obtain the information needed to provide an effective diagnosis or response to your query, we ask you please to submit Technical Support questions to us via the following form or support email.</small>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="nom" class="form-control" placeholder="Saisissez ici ...">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Saisissez ici ...">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message" placeholder="Saisissez ici ...." rows="3"></textarea>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="btn text-white btnsend disabled"> Send <i class="fa fa-send-o pl-1" style="font-size:14px;color:whitesmoke"> </i> </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection