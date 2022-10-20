{include file="header.tpl"}<br>

<div  class="item-body">
    <p>Mostrando services de <b>{$auto->duenio}</b> - <b>{$auto->patente}</b> - <b>{$auto->modelo}</b> </p>
</div>

<div class="item-body">
  <ul class="list-group">
    <li class="list-group-item justify-content-between align-items-center">
        <div><b>Fecha:</b> {$service->fecha}</div>
        <div><b>Kilometraje:</b> {$service->km}</div>
        <div><b>Kilometraje-Prox-Service:</b> {$service->km_prox_service}</div>
        <div><b>Gastos Service:</b> {$service->gastos_repuestos}</div>
        <div><b>Gastos Mano Obra:</b> {$service->gastos_mo}</div>
        <div><b>Descripción:</b> {$service->descripcion}</div>
        {if isset($smarty.session.USER_ID)}
            <a href='editService/{$service->id_service}' type='button' class='btn btn-success btn-sm'>Editar</a>
            <a href='deleteService/{$service->id_service}/{$service->id_auto}' type='button'
              class='btn btn-danger btn-sm'>Borrar</a>
        {/if}
      </li>
  </ul>
</div>

{include file="footer.tpl"}