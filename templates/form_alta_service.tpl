<!-- formulario de alta de services -->

{if isset($smarty.session.USER_ID)}

<div class="item-body">
    <h1 class="list-unstyled">Formulario de alta de services</h1>

    <form action="addService/{$service->id_auto}" method="POST" class="my-4">
        <div class="row">
            <div class="col-9 container-fluid" >
                <div class="form-group">
                    <input name="id_auto" type="hidden" class="form-control" value="{$service->id_auto}">
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Fecha</b></label>
                    <input name="fecha" type="date" class="form-control">
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Kilometraje</b></label>
                    <input name="km" type="text" class="form-control">
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Kilometraje del próximo service</b></label>
                    <input name="km_prox_service" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Gastos repuestos</b></label>
                    <input name="gastos_repuestos" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Gastos mano de obra</b></label>
                    <input name="gastos_mo" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Descripción</b></label>
                    <input name="descripcion" type="text" style="height:150px;" class="form-control" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary btn-sm">Agregar</button>
    </form>
</div>

{/if}