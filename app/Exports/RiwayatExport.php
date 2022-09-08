<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RiwayatExport implements FromCollection,WithMapping, WithHeadings
{
    use Exportable;

    private $transaksi;

    public function __construct(Transaksi $transaksi)
    {
        $this->transaksi = $transaksi;
    }


    public function collection()
    {
        return $this->transaksi->with(['User', 'Teknisi', 'Layanan', 'Ulasan'])
                               ->where('status', '=', 'selesai')->get();
        
    }

    public function map($transaksi): array
    {
        return [
            $transaksi->User->nama_lengkap,
            $transaksi->penerima_layanan,
            $transaksi->nomor_hp,
            $transaksi->alamat,
            $transaksi->Layanan->nama_layanan,
            $transaksi->biaya_jasa,
            $transaksi->metode_pembayaran,
            $transaksi->tanggal_kedatangan,
            $transaksi->waktu_kedatangan,
            $transaksi->Teknisi->nama_teknisi,
            $transaksi->Ulasan->rating,
            $transaksi->Ulasan->comment
        ];
    }

    public function headings(): array
    {
        return [
            'Nama User',
            'Nama Penerima Layanan',
            'Nomor Hp Penerima Layanan',
            'Alamat ',
            'Nama Layanan',
            'Biaya Jasa',
            'Metode Pembayaran',
            'Tanggal Kedatangan',
            'Waktu Kedatangan',
            'Nama Teknisi',
            'Rating',
            'Comment',
        ];
    }
}
