<?php

namespace App\Controllers\Pdf;

use Dompdf\Dompdf;
use Dompdf\Options;

use App\Controllers\BaseController;
use App\Models\DocumentCategorieModel;
use App\Models\SubmissionModel;
use CodeIgniter\HTTP\ResponseInterface;

class PdfController extends BaseController
{
    public function pertanggal()
    {
        return view('cetak/tanggal');
    }
    public function perkategori()
    {
        $modelKategori = new DocumentCategorieModel();
        $documents = $modelKategori->findAll();
        return view('cetak/perkategori', compact('documents'));
    }

    public function tanggal()
    {

        $tanggal = $this->request->getPost('tanggal');
        $dompdf = new Dompdf();
        $modelSubmision = new SubmissionModel();

        $submission = $modelSubmision->getWithDocuments()
            ->where('submissions.created_at >=', $tanggal . ' 00:00:00')
            ->where('submissions.created_at <=', $tanggal . ' 23:59:59')
            ->findAll();

        // dd($submission);

        // $uri = service('uri');
        // $lastSegment = $uri->getSegment($uri->getTotalSegments());

        // Opsional: setting kertas dan orientasi
        $options = new Options();
        $options->set('isRemoteEnabled', true); // kalau pakai gambar dari URL
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'landscape');

        // Ambil HTML dari view
        $html = view('cetak/pdfTanggal', ['title' => 'Laporan Pengajuan Pertanggal', 'data' => $submission]);

        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("laporanPertanggal.pdf", ["Attachment" => false]); // true = download, false = tampilkan
    }

    public function kategori()
    {

        $kategori = $this->request->getPost('document_id');
        $dompdf = new Dompdf();
        $modelSubmision = new SubmissionModel();

        $submission = $modelSubmision->getWithDocuments()
            ->where('submissions.document_id', $kategori)
            ->findAll();

        // dd($submission);

        // Opsional: setting kertas dan orientasi
        $options = new Options();
        $options->set('isRemoteEnabled', true); // kalau pakai gambar dari URL
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'landscape');

        // Ambil HTML dari view
        $html = view('cetak/pdfKategori', ['title' => 'Laporan Pengajuan Perkategori', 'data' => $submission]);

        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("laporanPertanggal.pdf", ["Attachment" => false]); // true = download, false = tampilkan
    }
}
