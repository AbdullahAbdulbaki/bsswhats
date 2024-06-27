@extends('layouts.admin')
@section('page-title')
    {{ __('Manage Blogs') }}
@endsection
@section('page-breadcrumb')
    {{ __('Blogs') }}
@endsection

@section('action-btn')
    <div>

            <a data-url="{{ route('blog_backend.create') }}" data-ajax-popup="true"
                data-bs-toggle="tooltip" title="{{ __('Create') }}" title="{{ __('Create') }}"
                data-title="{{ __('Create New Blog') }}" class="btn btn-sm btn-primary">
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
                                    <th scope="col">{{ __('Title') }}</th>
                                    <th scope="col">{{ __('Category') }}</th>
                                    <th scope="col">{{ __('Short Des.') }}</th>
                                    <th scope="col">{{ __('Long Des.') }}</th>
                                    <th scope="col">{{ __('Lang') }}</th>
                                    <th scope="col">{{ __('Img') }}</th>
                                    <th scope="col">{{ __('Created At') }}</th>
                                    <th class="text-end">{{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $index => $blog)
                                    <tr>
                                        <th scope="row">{{ ++$index }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->short_description, 30) }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($blog->long_description, 30) }}</td>
                                        <td>{{ $blog->language->fullname }}</td>
                                        <td><img src="{{ asset('landing/blogs_super_admin/' . $blog->img) }}" height="200" width="200" alt="Blog Image"></td>
                                        <td>{{ $blog->created_at }}</td>

                                            <td>
                                                <span>

                                                        <div class="action-btn bg-danger ms-2 float-end">
                                                            <form method="POST"
                                                                action="{{ route('blog_backend.destroy', $blog->id) }}"
                                                                id="user-form-{{ $blog->id }}">
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
                                                                data-url="{{ route('blog_backend.edit', $blog->id) }}"
                                                                data-ajax-popup="true"
                                                                data-title="{{ __('Edit Blog') }}"
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
