<form action="/mp/store" method="post" class="col-11 col-sm-9 col-md-7 col-lg-5 mx-auto border bg-light p-4 mt-4">
    <h2>New MP</h2>
    <div class="mb-3">
        <label for="num_mp" class="form-label">Num MP</label>
        <input type="number" class="form-control" name="num_mp" id="num_mp" aria-describedby="helpId" placeholder="Número del MP" />
    </div>
    <div class="mb-3">
        <label for="nom_mp" class="form-label">Nom MP</label>
        <input type="text" class="form-control" name="nom_mp" id="nom_mp" aria-describedby="helpId" placeholder="Nom de l'MP..." />
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</form>

<div class="llista col-11 mx-auto mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID MP</th>
                <th scope="col">Número MP</th>
                <th scope="col">Nom MP</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>

        <?php foreach($params['llista'] as $mp) : ?>
            <tr>
                <td><?php echo $mp['id'] ?></td>
                <td><?php echo $mp['num_mp'] ?></td>
                <td><?php echo $mp['nom_mp'] ?></td>
            </tr>
        <?php endforeach; ?>


        </tbody>
    </table>
</div>