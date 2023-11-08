@extends('layouts.app')

@section('title', 'Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User Management</h1>
                
            </div>
            <div class="section-body">
                <h2 class="section-title">All Users</h2>
                <p class="section-lead">
                    You can manage all users, such as editing, deleting and more.
                </p>

                
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
                            </div>
                            <div class="card-body">
                               
                                <div class="float-right">
                                    <form method="GET">
                                        <div class="input-group">
                                            <input type="text"
                                                name='search'
                                                class="form-control"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                        </tr>
                                        @foreach  ($users as $index => $user)
                                            <tr>
                                            
                                                <td>
                                                    1{{$index + $users->firstItem() }}
                                                </td>
                                                <td>
                                                    {{$user->name}}
                                                </td>
                                                <td>
                                                    {{$user->email}}
                                                </td>
                                                <td>{{$user->phone}}</td>
                                                <td>
                                                    <div class="badge badge-primary">@if ($user->email_verified_at !=null)
                                                        Active
                                                    @else
                                                        Pending
                                                    @endif
                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                alfio
                                            </td>
                                            <td>
                                                alfiooatmaja@gmail.com
                                            </td>
                                            <td>628400831900</td>
                                            <td>
                                                <div class="badge badge-primary">Active</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox"
                                                        data-checkboxes="mygroup"
                                                        class="custom-control-input"
                                                        id="checkbox-3">
                                                    <label for="checkbox-3"
                                                        class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Laravel 5 Tutorial: Installing
                                                <div class="table-links">
                                                    <a href="#">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#"
                                                        class="text-danger">Trash</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#">Web Developer</a>,
                                                <a href="#">Tutorial</a>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img alt="image"
                                                        src="{{ asset('img/avatar/avatar-5.png') }}"
                                                        class="rounded-circle"
                                                        width="35"
                                                        data-toggle="title"
                                                        title="">
                                                    <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                                </a>
                                            </td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <div class="badge badge-primary">Published</div>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            {{ $users->withQueryString()->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
