@extends('backend.templates.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Beranda /</span> Daftar {{ $pages }}</h4>

        <div class="card">
            <h5 class="card-header d-flex justify-content-between">
                Tabel {{ $pages }}
                <button type="button" class="btn btn-secondary btn-sm" id="copyButton">
                    <i class='bx bxs-copy-alt'></i>
                </button>
            </h5>
            <div class="card-body table-responsive text-nowrap">
                <table class="table" id="dataTable">
                    <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Rating</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Ulasan</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($result as $index => $res)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @php
                                        $rating = '';
                                        for ($i = 0; $i < $res->rating; $i++) {
                                            $rating .= '&#9733;'; // Menambahkan karakter bintang
                                        }
                                        echo $rating;
                                    @endphp
                                </td>
                                <td>{{ $res->nama_lengkap }}</td>
                                <td>{{ $res->jabatan }}</td>
                                <td>{{ $res->text_ulasan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#copyButton').click(function() {
                // Buat elemen input
                var input = $('<input>');
                // Salin URL route 'tulis-ulasan' ke dalam input
                input.val(
                    "Terima kasih atas kepercayaan Anda memilih Ladang Padi Resor sebagai tempat berinvestasi. Kami sangat menghargai setiap ulasan dan masukan dari Anda. Mohon luangkan waktu sejenak untuk memberikan ulasan di {{ route('tulis-ulasan') }}. Ulasan Anda akan membantu kami meningkatkan layanan kami lebih baik lagi."
                );
                // Tambahkan elemen input ke dalam dokumen
                $('body').append(input);
                // Pilih teks dalam elemen input
                input.select();
                // Salin teks yang dipilih
                document.execCommand('copy');
                // Hapus elemen input dari dokumen
                input.remove();
                // Tampilkan SweetAlert bahwa URL telah disalin
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'URL telah disalin ke clipboard. Silakan paste untuk memberikan ulasan.',
                    timer: 2000, // Menampilkan pesan selama 2 detik
                    timerProgressBar: true, // Menambahkan progress bar
                    showConfirmButton: false // Menyembunyikan tombol OK
                });
            });
        });
    </script>
@endsection
