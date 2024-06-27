@extends('layouts.admin')

@section('page-title')
  {{ __('Affiliate Program') }}
@endsection

@section('title')
  {{ __('Affiliate Program') }}
@endsection

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Affiliate') }}</a></li>
  <li class="breadcrumb-item active" aria-current="page">{{ __('Affiliate Program') }}</li>
@endsection

@section('content')
  <!-- [ Main Content ] start -->
  <div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
      <div class="row mb-5 gy-4">
        <div class="row gy-4">
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card shadow-none mb-0">
              <div class="card-body border rounded p-3">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">{{ __('Available Balance') }}</h6>
                  <span>
                    <i data-feather="arrow-up-right"></i>
                  </span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <span class="f-30 f-w-600">{{ \App\Models\Utility::priceFormat($user->user_balance) }}</span>
                  <span class="badge rounded bg-light-success f-w-600">
                    <div class="text-center rounded bg-soft-warning">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-dollar-sign">
                          <line x1="12" y1="1" x2="12" y2="23"></line>
                          <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg></span>
                    </div>
                  </span>
                </div>
                <div class="chart-wrapper">
                  <div id="TotalProducts" class="remove-min"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card shadow-none mb-0">
              <div class="card-body border rounded  p-3">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">{{ __('Total Subscriptions') }}</h6>
                  <span>
                    <i data-feather="arrow-up-right"></i>
                  </span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <span class="f-30 f-w-600">{{ $user->referredUserEarnings()->count() }}</span>
                  <span class="badge rounded bg-light-success f-w-600">
                    <div class="text-center rounded bg-soft-primary">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-credit-card">
                          <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                          <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg></span>
                    </div>
                  </span>
                </div>
                <div class="chart-wrapper">
                  <div id="TotalSales" class="remove-min"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card shadow-none mb-0">
              <div class="card-body border rounded  p-3">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">{{ __('Total Clicks') }}</h6>
                  <span>
                    <i data-feather="arrow-up-right"></i>
                  </span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <span class="f-30 f-w-600">{{ $user->num_of_clicks }}</span>
                  <span class="badge rounded bg-light-success f-w-600">
                    <div class="text-center rounded bg-soft-danger">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-link">
                          <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                          <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg></span>
                    </div>
                  </span>
                </div>
                <div class="chart-wrapper">
                  <div id="TotalOrders" class="remove-min"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card shadow-none mb-0">
              <div class="card-body border rounded  p-3">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">{{ __('Referral Signups') }}</h6>
                  <span>
                    <i data-feather="arrow-up-right"></i>
                  </span>
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-between">
                  <span class="f-30 f-w-600">{{ $user->referredUsers()->count() }}</span>
                  <span class="badge rounded bg-light-success f-w-600">
                    <div class="text-center rounded bg-soft-warning">
                      <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="feather feather-dollar-sign">
                          <line x1="12" y1="1" x2="12" y2="23"></line>
                          <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg></span>
                    </div>
                  </span>
                </div>
                <div class="chart-wrapper">
                  <div id="TotalOrders" class="remove-min"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5>{{ __('Configure Payout Accounts') }}</h5>
            </div>
            <div class="card-body">
              @if (count($activePayments))
                @php
                  $userPaymentData = $user->load('affiliatePayoutAccounts');
                @endphp
                <form method="POST" action="{{ route('affiliate.payout.configureStore') }}">
                  @csrf
                  <div class="row">
                    @foreach ($activePayments as $p)
                      <div class="form-group col-md-6">
                        <label for="{{ $p }}"
                          class="col-form-label">{{ str_replace(['is_', '_enabled'], '', $p) }}</label>
                        <input type="text" class="form-control" id="{{ $p }}"
                          name="{{ $p }}" placeholder="{{ __('type payment details') }}"
                          value="{{ old('$p', $transformedData[$p] ?? '') }}">
                        @error('{{ $p }}')
                          <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    @endforeach
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">{{ __('Save Configuration') }}</button>
                  </div>
                </form>
              @else
                <div class="form-group  text-center">
                  <span class="col-form-label">{{ __('No Data') }}</span>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ sample-page ] end -->
  </div>
  <!-- [ Main Content ] end -->
@endsection
