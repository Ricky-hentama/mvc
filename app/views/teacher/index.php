<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Guru</h3>
            <ul>
                <?php foreach ($data['guru'] as $gr) : ?>

                    <li><?= $gr['Nama']; ?></li>
                    <li><?= $gr['Mapel'] ?></li>
                    <li><?= $gr['Umur']; ?></li>
                    <br>
                <?php endforeach; ?>
            </ul>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>