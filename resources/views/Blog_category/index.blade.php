@extends('layouts.admin')
@section('page-title')
    {{ __('Manage Blog Category') }}
@endsection
@section('page-breadcrumb')
    {{ __('Categories') }}
@endsection

@section('action-btn')
    <div>

            <a data-url="{{ route('blog_categories.create') }}" data-ajax-popup="true"
                data-bs-toggle="tooltip" title="{{ __('Create') }}" title="{{ __('Create') }}"
                data-title="{{ __('Create New Category') }}" class="btn btn-sm btn-primary">
                <i class="ti ti-plus"></i>
            </a>

    </div>

@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table mb-0 pc-dt-simple" id="helpdesk-ticketcategory">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Created At') }}</th>
                                    <th class="text-end">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blog_categories as $index => $category)
                                    <tr>
                                        <th scope="row">{{ ++$index }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->created_at }}</td>
                                            <td>
                                                <span>
                                                    
                                                        <div class="action-btn bg-danger ms-2 float-end">
                                                            <form method="POST"
                                                                action="{{ route('blog_categories.destroy', $category->id) }}"
                                                                id="user-form-{{ $category->id }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="button"
                                                                    class="mx-3 btn btn-sm d-inline-flex align-items-center show_confirm"
                                                                    data-bs-toggle="tooltip" title='Delete'>
                                                                    <span class="text-white"> <i class="ti ti-trash"></i></span>
                                                                </button>
                                                            </form>
                                                        </div>


                                                        <div class="action-btn bg-info ms-2 float-end">
                                                            <a class="mx-3 btn btn-sm align-items-center"
                                                                data-url="{{ route('blog_categories.edit', $category->id) }}"
                                                                data-ajax-popup="true"
                                                                data-title="{{ __('Edit Blog Category') }}"
                                                                data-bs-toggle="tooltip" title="{{ __('Edit') }}"
                                                                data-original-title="{{ __('Edit') }}">
                                                                <i class="ti ti-pencil text-white"></i>
                                                            </a>
                                                        </div>

                                                </span>
                                            </td>
                                    </tr>
                                @empty
                                    @include('layouts.nodatafound')
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
