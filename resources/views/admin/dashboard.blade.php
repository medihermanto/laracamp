@include('components.navbar')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-2">
            <div class="card">
                <div class="container">
                    <div class="card-title">My Camps</div>
                </div>
                <div class="card-body">
                    @include('components.alert')
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Camp</th>
                                <th>Price</th>
                                <th>Register Date</th>
                                <th>Paid Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @forelse ($checkouts as $checkout)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $checkout->User->name }}</td>
                                    <td>{{ $checkout->Camp->title }}</td>
                                    <td>{{ $checkout->Camp->price }}</td>
                                    <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                    <td>
                                        @if ($checkout->is_paid == '0')
                                            <span class="badge bg-warning">Not Paid</span>
                                        @else
                                            <span class="badge bg-success">Paid</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($checkout->is_paid == '0')
                                        <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="post">
                                            @csrf
                                            <button class="btn-primary btn-sm">Set to Paid</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
