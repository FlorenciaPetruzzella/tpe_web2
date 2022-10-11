{include file="header.tpl"}

<!-- lista de services -->
<div class="item-body">
    <ul class="list-group">
        {foreach from=$services item=$service}
            <li class="list-group-item justify-content-between align-items-center">
                <div><b>Fecha:</b> {$service->fecha}</div>
                <div><b>Kilometraje:</b> {$service->km}</div>
                <div><b>Kilometraje-Prox-Service:</b> {$service->km_prox_service}</div>
                <div><b>Gastos Service:</b> {$service->gastos_repuestos}</div>
                <div><b>Gastos Mano Obra:</b> {$service->gastos_mo}</div>
                <div><b>Descripción:</b> {$service->descripcion}</div>
                {if isset($smarty.session.USER_ID)}
                    <a href='editService/{$service->id_service}' type='button' class='btn btn-success btn-sm'>Editar</a>
                    <a href='deleteService/{$service->id_service}' type='button' class='btn btn-danger btn-sm'>Borrar</a>
                {/if}
            </li>
        {/foreach}
    </ul>
    <p><small>Mostrando {$count} services</small></p>
</div>

</div>

{include file="form_alta_service.tpl"}

{include file="footer.tpl"}