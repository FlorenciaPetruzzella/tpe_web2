{include file="header.tpl"}

<div class="item-body">
    <h1>Modificando auto...</h1>
    <form action="updateAuto/{$auto->id_auto}" method="POST" class="my-4">
        <div class="row">

            <input name="id_auto" type="hidden" class="form-control" value="{$auto->id_auto}" required>

            <div class="col-9 container-fluid">
                <div class="form-group">
                    <label><b>Patente</b></label>
                    <input name="patente" type="text" class="form-control" value="{$auto->patente}" required>
                </div>
            </div>

            <div class=" col-9 container-fluid">
                <div class="form-group">
                    <label><b>Dueño</b></label>
                    <input name="duenio" type="text" class="form-control" value="{$auto->duenio}" required>
                </div>
            </div>
           
        </div>
        <input value="Modificar" type="submit" class="btn btn-secondary btn-sm">
    </form>
</div>

{include file="footer.tpl"}