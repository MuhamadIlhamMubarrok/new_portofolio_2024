@extends('layouts.app')

@section('title', 'Daftar Messages')

@section('content')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Messages</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Messages</h6>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nama Instansi</th>
                                        <th>Status</th>
                                        <th>Whatssapp</th>
                                        <th>Pesan</th>
                                        <th>Tanggal Pembuatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $index => $message)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $message->nama }}</td>
                                            <td>{{ $message->nama_instansi }}</td>
                                            <td>{{ $message->status }}</td>
                                            <td>{{ $message->nomer }}</td>
                                            <td>{{ Str::limit($message->deskripsi, 50) }}..</td>
                                            <td>{{ $message->created_at }}</td>
                                            <td>
                                                <div class="d-flex flex-wrap gap-2">
                                                    <button class="btn btn-info btn-sm btn-detail"
                                                        data-nama="{{ $message->nama }}" data-nomer="{{ $message->nomer }}"
                                                        data-instansi="{{ $message->nama_instansi }}"
                                                        data-status="{{ $message->status }}"
                                                        data-deskripsi="{{ $message->deskripsi }}"
                                                        data-date="{{ $message->created_at }}">
                                                        <i class="fa fa-eye"></i> Detail
                                                    </button>
                                                    <form
                                                        action="{{ route('dashboard.message.destroy', $message->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-start mt-4">
                                {{ $messages->links('vendor.pagination.simple-bootstrap-5') }}
                            </div>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>From:</strong> <span id="fromName"></span></p>
                        <p><strong>Instansi:</strong> <span id="fromInstansi"></span></p>
                        <p><strong>Status:</strong> <span id="fromStatus"></span></p>
                        <p><strong>No Whatssapp:</strong> <span id="fromTelp"></span></p>
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
    <script>
        $(document).ready(function() {
            $('.btn-detail').on('click', function() {
                const nama = $(this).data('nama');
                const noTelp = $(this).data('nomer');
                const status = $(this).data('status');
                const instasi = $(this).data('instansi');
                const message = $(this).data('deskripsi');
                const created_at = $(this).data('date');

                $('#fromName').text(nama);
                $('#fromInstansi').text(instasi);
                $('#fromStatus').text(status);
                $('#fromTelp').text(noTelp);
                $('#detailMessage').text(message);

                $('#messageDetailModal').modal('show');
            });
        });
    </script>
@endpush
