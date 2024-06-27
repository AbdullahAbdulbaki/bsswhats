@extends('layouts.admin')

@section('page-title')
  @if (Auth::user()->type == 'super admin')
    {{ __('Affiliate') }}
  @else
    {{ __('Store Affiliate') }}
  @endif
@endsection
@section('title')
  @if (Auth::user()->type == 'super admin')
    {{ __('Affiliate') }}
  @else
    {{ __('Store Affiliate') }}
  @endif
@endsection
@section('breadcrumb')
  @if (Auth::user()->type == 'super admin')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Affiliate configurations') }}</li>
  @else
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('Store Affiliate') }}</li>
  @endif
@endsection

@section('filter')
@endsection

@section('content')
  <!-- [ Main Content ] start -->
  <div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="tab-content" id="pills-tabContent">
        @if (Auth::user()->type == 'super admin')
          <div class="tab-pane fade active show" id="brand_affiliate" role="tabpanel"
            aria-labelledby="brand_settings-tab">
            <div class="active card" id="brand_settings">
              <div class="card-header">
                <h5>{{ __('Brand Affiliats') }}</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('affiliate.configurations.store') }}">
                  @csrf
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label for="commission" class="col-form-label">{{ __('Affiliate Commission %') }}</label>
                      <input type="text" class="form-control" id="commission" name="commission"
                        placeholder="{{ __('Affiliate Commission %') }}"
                        value="{{ old('commission', $affiliate?->commission) }}">
                      @error('commission')
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger">{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="minimum_withdrawal_amount"
                        class="col-form-label">{{ __('Minimum Withdrawal Amount $') }}</label>
                      <input type="text" class="form-control" id="minimum_withdrawal_amount"
                        name="minimum_withdrawal_amount" placeholder="{{ __('Minimum Withdrawal Amount $') }}"
                        value="{{ old('minimum_withdrawal_amount', $affiliate?->minimum_withdrawal_amount) }}">
                      @error('minimum_withdrawal_amount')
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger">{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                      <label for="payout_payment_methods"
                        class="col-form-label">{{ __('Payout Payment Methods') }}</label>
                      <div class="changePayment">
                        <select name="payout_payment_methods" id="payout_payment_methods"
                          class="form-control custom-select" data-toggle="select">
                          <option value="Paypal" @if ($affiliate?->payout_payment_methods == '$code') selected @endif>
                            Paypal
                          </option>
                        </select>
                      </div>
                      @error('payout_payment_methods')
                        <span class="invalid-feedback" role="alert">
                          <strong class="text-danger">{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    {{-- @foreach (\App\Models\Utility::languages() as $code => $language) --}}
                    {{-- <option @if ($lang == $code) selected @endif value=""> --}}
                    {{-- @endforeach --}}
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label for="allow_commission_continuously"
                        class="col-form-label">{{ __('Allow Commission Continuously') }}</label>
                      <div class="col-md-4">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" name="allow_commission_continuously"
                            data-toggle="switchbutton" id="allow_commission_continuously"
                            {{ old('allow_commission_continuously', $affiliate?->allow_commission_continuously) ? 'checked' : '' }}>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="enable_affiliate_system"
                        class="col-form-label">{{ __('Enable Affiliate System') }}</label>
                      <div class="col-md-4">
                        <div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" name="enable_affiliate_system"
                            data-toggle="switchbutton" id="enable_affiliate_system"
                            {{ old('enable_affiliate_system', $affiliate?->enable_affiliate_system) ? 'checked' : '' }}>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
@endsection

@push('script-page')
  <script src="{{ asset('custom/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
@endpush
