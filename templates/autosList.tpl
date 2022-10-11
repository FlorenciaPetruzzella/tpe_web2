{include file="header.tpl"}

{include file="form_alta_auto.tpl"}

<!-- lista de autos -->
<div class="item-body">
    <p><small>Mostrando {$count} autos...</small></p>
    <ul class="list-group text-center">
        {foreach from=$autos item=$auto}
            <li class="list-group-item justify-content-between align-items-center">
                <span> <b>{$auto->patente}</b> - {$auto->duenio}</span>
                <a href='showServices/{$auto->id_auto}' type='button' class='btn btn-secondary btn-sm'>Mostrar/Agregar Service</a>
                {if isset($smarty.session.USER_ID)}
                <a href='editAuto/{$auto->id_auto}' type='button' class='btn btn-success btn-sm'>Editar</a>
                <a href='delete/{$auto->id_auto}' type='button' class='btn btn-danger btn-sm'>Borrar</a>
                {/if}
            </li>
        {/foreach}
    </ul>
</div>

</div>

{include file="footer.tpl"}