

<?php $__env->startSection('title', 'Coba Ravael | Daftar Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
<div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>
            </div>
        </div>

        <table class="table table-responsive table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Vhunakoshi</td>
                    <td>2016140611</td>
                    <td>vhunakoshi@gmail.com</td>
                    <td>Teknik Informatika</td>
                    <td>
                        <a href="" class="badge bg-success">edit</a>
                        <a href="" class="badge bg-danger">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH B:\Application\latihanravael\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>