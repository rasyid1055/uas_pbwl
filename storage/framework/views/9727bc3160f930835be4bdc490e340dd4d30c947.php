<script>
		window.print();
	</script>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-light"><?php echo e(__('Data Keterlambatan')); ?></div>

                <div class="card-body">
<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Guru Piket</th>
        <th>Tanggal Terlambat</th>
        <th>Tanggal Masuk</th>
        <th>Jam Terlambat</th>
        <th>Jam Masuk</th>
        <th>Hukuman</th>
        <th>Alasan</th>
    </tr>
    <?php $no=0;?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $no++; ?>
    <tr>
        <td><?php echo e($no); ?></td>
        <td><?php echo e($s->nama_siswa); ?></td>
        <td><?php echo e($s->nama_guru); ?></td>
        <td><?php echo e($s->tgl_terlambat); ?></td>
        <td><?php echo e($s->tgl_masuk); ?></td>
        <td><?php echo e($s->jam_terlambat); ?></td>
        <td><?php echo e($s->jam_masuk); ?></td>
        <td><?php echo e($s->hukuman); ?></td>
        <td><?php echo e($s->alasan); ?></td>
        
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-laravel\resources\views/terlambat/cetak.blade.php ENDPATH**/ ?>