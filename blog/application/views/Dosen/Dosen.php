<div class="col-md-12">
    <h3>
        Daftar Dosen
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($list_mhs as $mhs) {
                ?>
                    <tr>
                        <td><?= $nomor ?></td>                      
                        <td><?= $mhs->nama ?></td> 
                        <td><?= $mhs->gender ?></td> 
                        <td><?= $mhs->ipk ?></td>  
                        <td><?= $mhs-> ?>predikat() </td> 

                    </tr>
                }
            
        </tbody>
    </table>
</div>
    