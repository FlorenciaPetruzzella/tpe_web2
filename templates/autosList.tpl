{include file="header.tpl"}

<!-- lista de autos -->
<h1>TALLER MECÁNICO</h1>
<ul>
    {foreach from=$autos item=$auto}
        <li>
            <span> <b>{$auto->patente}</b> - {$auto->duenio}</span>
            {*{foreach from=$services item=$service}
                <li>
                    <span> {$service->fecha} - {$service->km} - {$service->km_prox_service} - 
                            {$service->gastos_service} - {$service->gastos_mo} - {$service->descripcion}</span>
                </li>
            {/foreach}*}
        </li>
    {/foreach}
</ul>

<p><small>Mostrando {$count} autos</small></p>

{include file="footer.tpl"}