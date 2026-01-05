

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Mahasiswa</h2>
    <div>
        <a href="/mahasiswa/cetak" class="btn btn-danger shadow-sm" target="_blank">📄 Cetak Laporan PDF</a>
        <a href="/mahasiswa/create" class="btn btn-primary shadow-sm">+ Tambah Mahasiswa Baru</a>
    </div>
</div>

<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <form action="/mahasiswa" method="GET" class="row g-2">
            <div class="col-md-10">
                <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM..." value="<?php echo e(request('search')); ?>">
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-secondary">Cari</button>
            </div>
        </form>
    </div>
</div>

<table class="table table-bordered table-striped bg-white shadow-sm">
    <thead class="table-dark">
        <tr>
            <th>No</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($mhs->nim); ?></td>
            <td><?php echo e($mhs->nama); ?></td>
            <td><?php echo e($mhs->jurusan); ?></td>
            <td>
                <a href="/mahasiswa/<?php echo e($mhs->id); ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                <form action="/mahasiswa/<?php echo e($mhs->id); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\hp\nama-simasis\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>