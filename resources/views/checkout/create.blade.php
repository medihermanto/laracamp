@include('components.navbar')
@extends('layouts.app')

   @section('content')
   <section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    YOUR FUTURE CAREER
                </p>
                <h2 class="primary-header">
                    Start Invest Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="/assets/images/item_bootcamp.png" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{ $camp->title }}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.create', $camp->id) }}" class="basic-form" method="post">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Full Name</label>
                            <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"  value="{{ Auth::user()->name }}"  required/>
                                @if ($errors->has('name'))
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Email Address</label>
                                <input name="email" type="email" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ Auth::user()->email }}" required/>
                                @if ($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Occupation</label>
                                <input name="occupation" type="text" class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" value="{{ old('occupation') ?: Auth::user()->occupation }}" required/>
                                @if ($errors->has('occupation'))
                                <small class="text-danger">{{ $errors->first('occupation') }}</small>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Card Number</label>
                                <input name="card_number" type="number" class="form-control {{ $errors->has('card_number') ? 'is-invalid' : '' }}" value="{{ old('card_number') ?: '' }}" required/>
                                @if ($errors->has('card_number'))
                                <small class="text-danger">{{ $errors->first('card_number') }}</small>
                                @endif
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Expired</label>
                                        <input name="expired" type="month" class="form-control {{ $errors->has('expired') ? 'is_invalid' : '' }}" value="{{ old('expired') ?: '' }}" required />
                                        @if ($errors->has('expired'))
                                        <small class="text-danger">{{ $errors->first('expired') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">CVC</label>
                                        <input name="cvc" type="number" maxlength="3" class="form-control {{ $errors->has('cvc') ? 'is_invalid' : '' }}" value="{{  old('cvc') ?: '' }}" required />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="/assets/images/ic_secure.svg" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   @endsection
