<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <h5 class="card-title">Tambah Front Office</h5>

                <!-- Vertical Form -->
                <form class="row g-3" action="<?= base_url() ?>penduduk/pengajuan/store" method="post">
                    <?= csrf_field(); ?>
                    <div class="col-12">
                        <label for="document_id" class="form-label">Pilih Kategori</label>
                        <select name="document_id" id="document_id" class="form-control" required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($documents as $document) : ?>
                                <option value="<?= $document['id'] ?>"><?= esc($document['category']) ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Requirements</label>
                        <div id="requirements-list"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="reset" href="/admin" class="btn btn-secondary">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('document_id').addEventListener('change', function() {
        let documentId = this.value;
        let requirementsContainer = document.getElementById('requirements-list');

        requirementsContainer.innerHTML = '';

        if (documentId) {
            fetch("<?= base_url('penduduk/pengajuan/get-requirements') ?>", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "document_id=" + documentId
                })
                .then(response => response.json())
                .then(requirements => {
                    requirements.forEach(req => {
                        let checkbox = document.createElement("div");
                        checkbox.innerHTML = `<input type="checkbox" name="requirements[]" value="${req}"> ${req}`;
                        requirementsContainer.appendChild(checkbox);
                    });
                });
        }
    });
</script>
<?= $this->endSection() ?>