@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- Notifikasi -->
                        @if (session('success'))
                            <div class="alert alert-success" id="success-alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" id="error-alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h6 class="card-title">Messages</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($messages as $index => $message)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $message->firstName }}</td>
                                            <td>{{ $message->lastName }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ Str::limit($message->message, 50) }}..</td>
                                            <td>
                                                <button class="btn btn-info btn-detail"
                                                    data-firstname="{{ $message->firstName }}"
                                                    data-lastname="{{ $message->lastName }}"
                                                    data-email="{{ $message->email }}"
                                                    data-message="{{ $message->message }}">
                                                    Detail
                                                </button>
                                                <form action="{{ route('admin.message.destroy', $message->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
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

        <!-- Message Detail Modal -->
        <div id="messageDetailModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Message Detail</h5>

                    </div>
                    <div class="modal-body custom-modal-body">
                        <p><strong>From:</strong> <span id="fromName"></span></p>
                        <p><strong>To:</strong> PT. Aditya Mandiri Konstruksi</p>
                        <p><strong>Email:</strong> <span id="fromEmail"></span></p>
                        <p><strong>Message:</strong></p>
                        <p id="detailMessage"></p>
                        <p>Terima kasih.</p>
                        <p>Salam hangat, <span id="warmRegards"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                $(this).slideUp(500);
            });
            $("#error-alert").fadeTo(2000, 500).slideUp(500, function() {
                $(this).slideUp(500);
            });

            $('.btn-detail').on('click', function() {
                var firstName = $(this).data('firstname');
                var lastName = $(this).data('lastname');
                var email = $(this).data('email');
                var message = $(this).data('message');

                $('#fromName').text(firstName + ' ' + lastName);
                $('#fromEmail').text(email);
                $('#detailMessage').text(message);
                $('#warmRegards').text(firstName + ' ' + lastName);
                $('#messageDetailModal').modal('show');
            });

            $('.close, .modal').on('click', function() {
                $('#messageDetailModal').modal('hide');
            });
        });
    </script>
@endpush
