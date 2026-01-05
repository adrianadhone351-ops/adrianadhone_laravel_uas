<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Mahasiswa</title>
    <style>
        /* Pengaturan gaya untuk dokumen PDF */
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12pt;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 10px;
        }
        th, td { 
            border: 1px solid #000; 
            padding: 8px; 
            text-align: left; 
        }
        th { 
            background-color: #f2f2f2; 
            text-align: center;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>LAPORAN DATA MAHASISWA SIMASIS</h2>
        <p>Dicetak pada tanggal: <?php echo e(date('d-m-Y H:i:s')); ?></p>
        <hr>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="25%">NIM</th>
                <th>Nama Mahasiswa</th>
                <th width="30%">Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($mhs->nim); ?></td>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->jurusan); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\Users\hp\nama-simasis\resources\views/mahasiswa/laporan_pdf.blade.php ENDPATH**/ ?>