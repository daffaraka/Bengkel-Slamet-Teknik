@extends('dashboard.layout-dashboard')
@section('content')
    <table id="data-table-list" class="table table-striped table-bordered text-start shadow">
        <thead>
            <tr>
                <th class="px-2">#</th>
                <th class="px-2">Nama Layanan</th>
                <th class="px-2 w-25">Rating Ulasan</th>
                <th class="px-2">Commentar</th>
            </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        $(document).ready(function() {
            var i = 1;
            $('#data-table-list').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('ulasan') }}",
                    type: 'GET'
                },
                columns: [{
                        data: 'id_review',

                    },
                    {
                        data: 'layanan.nama_layanan'
                    },
                    {
                        data: 'rating',
                        render: function(data, type, row, meta) {
                            return data + '/5';
                        }
                    },
                    {
                        data: 'comment',
                    },
                ],
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
@endpush
