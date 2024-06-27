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
            <div class="card-body">
              <div class="row">
                <div class="col-xl-6">
                  <h5>{{__('How to use Referral Program')}}</h5>
                  <p>
                    {{__('Our affiliate program commission rate for subscriptions is:')}}
                    <strong>10%</strong>
                  </p>
                  <ul class="list-unstyled">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-check-circle me-2 text-success icon-16">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                      </svg>
                      1. {{__('Copy referral link')}}</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-check-circle me-2 text-success icon-16">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                      </svg>
                      2. {{__('Share with your friends &amp; others')}}</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-check-circle me-2 text-success icon-16">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                      </svg>
                      3. {{__('Make money on their subscriptions')}}</li>
                  </ul>
                </div>

                <div class="col-xl-6">
                  <h5 class="text-gray-800">
                    {{__('Your Referral Link')}}
                  </h5>

                  <p>
                    {{__('Invite your friends &amp; others and earn commissions from their subscriptions.')}}
                  </p>

                  <div class="d-flex">
                    <input type="text" readonly class="form-control" id="referral_code_url"
                      value="{{ route('register') }}/{{ $user->ref_code }}">

                    <a href="#!" class="btn btn-light-primary cp_link"
                      data-link="{{ route('register') }}/{{ $user->ref_code }}" data-bs-toggle="tooltip"
                      data-bs-placement="bottom" data-bs-original-title="{{ __('Click to copy link') }}">
                      {{ __('Copy Link') }}
                      <i class="ms-3" data-feather="copy"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h3 class="f-w-900 m-3">{{ __('Recent Affiliate Earnings') }}</h3>
        </div>
        <div class="col-12">
          <div class="card mb-0 shadow-none">
            <div class="card-body border border-bottom-0 overflow-hidden rounded pb-0 table-border-style">
              <div class="table-responsive">
                <table class="table mb-0">
                  <thead>
                    <tr>
                      <th class="bg-transparent">{{ __('S/L') }}</th>
                      <th class="bg-transparent">{{ __('User') }}</th>
                      <th class="bg-transparent">{{ __('Package') }}</th>
                      <th class="bg-transparent">{{ __('Rate') }}</th>
                      <th class="bg-transparent">{{ __('Earning') }}</th>
                      <th class="bg-transparent">{{ __('Date') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $earningHistories = auth()->user()->referredUserEarnings()->latest()->take(10)->paginate(5);
                    @endphp
                    @foreach ($earningHistories as $key => $history)
                      <tr>
                        <td class="text-center">
                          {{ $key + 1 + ($earningHistories->currentPage() - 1) * $earningHistories->perPage() }}
                        </td>
                        <td>
                          <a href="javascript:void(0);" class="d-flex align-items-center">
                            <h6 class="fs-sm mb-0 ms-2">{{ $history->user->name }}
                            </h6>
                          </a>
                        </td>
                        <td>
                          <div>
                            {{ optional($history->currentPlan)->name }}
                          </div>
                          <span class="fw-bold">
                            {{ \App\Models\Utility::priceFormat($history->currentPlan ? $history->currentPlan->price : 0) }}
                          </span>
                        </td>
                        <td>
                          {{ $history->commission_rate }}%
                        </td>

                        <td>
                          {{ \App\Models\Utility::priceFormat($history->amount) }}
                        </td>

                        <td class="text-center">
                          {{ date('d M, Y', strtotime($history->created_at)) }}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ sample-page ] end -->
  </div>
  <!-- [ Main Content ] end -->
@endsection

@push('script-page')
  <script>
    $(document).ready(function() {
      $('.cp_link').on('click', function() {
        var value = $(this).attr('data-link');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(value).select();
        document.execCommand("copy");
        $temp.remove();
        show_toastr('Success', '{{ __('Link copied') }}', 'success')
      });
    });
  </script>
@endpush
