
<?php $__env->startSection('content'); ?>
<style>
    .card{
        opacity: 0.9;
    }
    form{
        width: 100%;
        color: white;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card bg-dark">
                <div class="card-header text-light"><?php echo e(__('Edit Data Siswa')); ?></div>
                <div class="card-body">
                <form action="/siswa/<?php echo e($siswa->id_siswa); ?>" method="POST">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="siswa">Nama Siswa <span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="<?php echo e($siswa->nama_siswa); ?>">
                </div> <br>
                <div class="row">
                    <div class="col">
                    <label for="siswa">Kelas</label> <span style="color: red;">*</span></label>    
                    <select class="form-select" name="kelas" id="kelas">
                      <option value="">-Pilih Kelas-</option>
                      <option value="X-1" <?php if($siswa->kelas == "X-1"): ?> selected <?php endif; ?>>X-1</option>
                      <option value="X-2" <?php if($siswa->kelas == "X-2"): ?> selected <?php endif; ?>>X-2</option>
                      <option value="X-3" <?php if($siswa->kelas == "X-3"): ?> selected <?php endif; ?>>X-3</option>
                      <option value="X-4" <?php if($siswa->kelas == "X-4"): ?> selected <?php endif; ?>>X-4</option>
                      <option value="X-5" <?php if($siswa->kelas == "X-5"): ?> selected <?php endif; ?>>X-5</option>
                      <option value="XI-1" <?php if($siswa->kelas == "XI-1"): ?> selected <?php endif; ?>>XI-1</option>
                      <option value="XI-2" <?php if($siswa->kelas == "XI-2"): ?> selected <?php endif; ?>>XI-2</option>
                      <option value="XI-3" <?php if($siswa->kelas == "XI-3"): ?> selected <?php endif; ?>>XI-3</option>
                      <option value="XII-1" <?php if($siswa->kelas == "XII-1"): ?> selected <?php endif; ?>>XII-1</option>
                      <option value="XII-2" <?php if($siswa->kelas == "XII-2"): ?> selected <?php endif; ?>>XII-2</option>
                      <option value="XII-3" <?php if($siswa->kelas == "XII-3"): ?> selected <?php endif; ?>>XII-3</option>
                    </select>
                    </div>
                    <div class="col">
                    <label for="siswa">Jurusan</label> <span style="color: red;">*</span></label>   
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                      <option selected>-Pilih Jurusan-</option>
                      <option value="IPS" <?php if($siswa->jurusan == "IPS"): ?> selected <?php endif; ?>>IPS</option>
                      <option value="IPA" <?php if($siswa->jurusan == "IPA"): ?> selected <?php endif; ?>>IPA</option>
                    </select>
                    </div>
                    <div class="col">
                    <label for="siswa">Jenis Kelamin</label> <span style="color: red;">*</span></label>    
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                      <option selected>-Pilih Jenis Kelamin-</option>
                      <option value="Laki-Laki" <?php if($siswa->jenis_kelamin == "Laki-Laki"): ?> selected <?php endif; ?>>Laki-Laki</option>
                      <option value="Perempuan" <?php if($siswa->jenis_kelamin == "Perempuan"): ?> selected <?php endif; ?>>Perempuan</option>
                    </select>
                    </div> 
                    
                    <div class="mb-3">
                    <br>
                    <label for="alamat" class="form-label">Alamat</label> <span style="color: red;">*</span></label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo e($siswa->alamat); ?></textarea>
                </div>
                </div>
                <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-up"></i> Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uas-laravel\resources\views/siswa/edit.blade.php ENDPATH**/ ?>