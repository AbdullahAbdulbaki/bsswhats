@extends('layouts.admin')

@section('page-title')
  {{ __('Affiliate Earnings') }}
@endsection

@section('title')
  {{ __('Affiliate Earnings') }}
@endsection

@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ __('Home') }}</a></li>
  <li class="breadcrumb-item active" aria-current="page">{{ __('Earnings') }}</li>
@endsection

@section('content')
  <div class="row">
    <!-- [ basic-table ] start -->
    <div class="col-xl-12">
      <div class="card">
        <div class="card-body table-border-style">
          <div class="table-responsive">
            <table class="table pc-dt-simple">
              <thead>
                <tr>
                  <th> {{ __('S/L') }}</th>
                  <th> {{ __('User') }}</th>
                  @if (auth()->user()->user_type != 'customer')
                    <th data-breakpoints="xs sm">{{ __('Referred By') }}</th>
                  @endif
                  <th> {{ __('Package') }}</th>
                  <th> {{ __('Rate') }}</th>
                  <th> {{ __('Earning') }}</th>
                  <th> {{ __('Date') }}</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($earningHistories as $key => $history_user)
                  <tr>
                    <td>{{  $loop->iteration  + ($earningHistories->currentPage() - 1) * $earningHistories->perPage() }}</td>
                    <td>{{ $history_user->name }}</td>
                    @if (auth()->user()->user_type != 'customer')
                      <td>{{ $history_user->referredBy->name }}</td>
                    @endif
                    <td>{{ $history_user->currentPlan->name }}</td>
                    <td>{{ $history_user->commission_rate }}</td>
                    <td>{{ $history_user->amount }}</td>
                    <td>
                        {{ date('d M, Y', strtotime($history_user->created_at)) }}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- [ basic-table ] end -->
  </div>
@endsection
