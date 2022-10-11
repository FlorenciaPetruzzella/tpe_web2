<!-- formulario de alta de autos -->

{if isset($smarty.session.USER_ID)}

    <div class="item-body">
        <h1>Agregar nuevo vehículo</h1>

        <form action="add" method="POST" class="my-4">
            <div class="row">
                <div class="col-9  container-fluid">
                    <div class="form-group">
                        <label><b>Patente</b></label>
                        <input name="patente" type="text" class="form-control" placeholder="AAA000 ó AA000AA" required>
                    </div>
                </div>

                <div class="col-9  container-fluid">
                    <div class="form-group">
                        <label><b>Dueño</b></label>
                        <input name="duenio" type="text" class="form-control" placeholder="" required>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-sm">Agregar auto</button>

        </form>
    </div>

{/if}