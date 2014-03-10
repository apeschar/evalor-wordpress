<form method="POST" action="">
    <div class="wrap">
        <?php screen_icon(); ?>
        <h2><?php _e('eValor'); ?></h2>
        <?php
        if($updated)
            echo "<div class=updated><p>", _e('Uw wijzigingen zijn opgeslagen.'), "</p></div>";
        foreach($errors as $error)
            echo "<div class=error><p>", $error, "</p></div>";
        ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="wwk-shop-id"><?php _e('ID de la tienda online'); ?></label></th>
                <td><input name="webwinkelkeur_wwk_shop_id" type="text" id="wwk-shop-id" value="<?php echo esc_html($config['wwk_shop_id']); ?>" class="regular-text" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="wwk-api-key"><?php _e('Clave API'); ?></label></th>
                <td><input name="webwinkelkeur_wwk_api_key" type="text" id="wwk-api-key" value="<?php echo esc_html($config['wwk_api_key']); ?>" class="regular-text" />
                <p class="description">
                <?php _e('Estos datos los encontrará al ingresar en <a href="https://www.evalor.es/tienda/" target="_blank">eValor.es</a>.<br />Haz click en "Colocar sello". Encontrará estos datos en la parte inferior de la página.'); ?>
                </p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-sidebar"><?php _e('Mostrar sidebar'); ?></label></th>
                <td>
                    <label>
                        <input type="checkbox" id="webwinkelkeur-sidebar" name="webwinkelkeur_sidebar" value="1" <?php if($config['sidebar']) echo 'checked'; ?> />
                        <?php _e('Si, añadir el sidebar de eValor a mi web.'); ?>
                    </label>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row"><?php _e('Posición sidebar'); ?></th>
                <td>
                    <fieldset>
                        <label>
                            <input type="radio" name="webwinkelkeur_sidebar_position" value="left" <?php if($config['sidebar_position'] == 'left') echo 'checked'; ?> />
                            <?php _e('Izquierda'); ?>
                        </label><br>
                        <label>
                            <input type="radio" name="webwinkelkeur_sidebar_position" value="right" <?php if($config['sidebar_position'] == 'right') echo 'checked'; ?> />
                            <?php _e('Derecha'); ?>
                        </label>
                    </fieldset>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-sidebar-top"><?php _e('Altura sidebar'); ?></label></th>
                <td><input name="webwinkelkeur_sidebar_top" type="text" id="webwinkelkeur-sidebar-top" value="<?php echo esc_html($config['sidebar_top']); ?>" class="small-text" />
                <p class="description">
                <?php _e('Aantal pixels vanaf de bovenkant.'); ?>
                </p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><?php _e('Enviar invitaciones'); ?></th>
                <td>
                    <fieldset>
                        <label>
                            <input type="radio" name="webwinkelkeur_invite" value="1" <?php if($config['invite'] == 1) echo 'checked'; ?> />
                            Ja, na elke bestelling.
                        </label><br>
                        <label>
                            <input type="radio" name="webwinkelkeur_invite" value="2" <?php if($config['invite'] == 2) echo 'checked'; ?> />
                            Ja, alleen bij de eerste bestelling.
                        </label><br>
                        <label>
                            <input type="radio" name="webwinkelkeur_invite" value="0" <?php if(!$config['invite']) echo 'checked'; ?> />
                            Nee, geen uitnodigingen versturen.
                        </label>
                    </fieldset>
                    <?php if(!$this->woocommerce): ?>
                    <p class="description"><?php _e('Instale y active WooCommerce para poder utilizar esta función.'); ?></p>
                    <?php endif; ?>
                    <p class="description"><?php _e('Esta función solo está disponible para socios PLUS.'); ?></p>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-invite-delay"><?php _e('Plazo para la invitación'); ?></label></th>
                <td><input name="webwinkelkeur_invite_delay" type="text" id="webwinkelkeur-invite-delay" value="<?php echo esc_html($config['invite_delay']); ?>" class="small-text" />
                <p class="description">
                <?php _e('La invitación se envía una vez hayan pasado el número de días indicados después de enviar el pedido.'); ?>
                </p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-tooltip"><?php _e('Tooltip weergeven'); ?></label></th>
                <td>
                    <label>
                        <input type="checkbox" id="webwinkelkeur-tooltip" name="webwinkelkeur_tooltip" value="1" <?php if($config['tooltip']) echo 'checked'; ?> />
                        <?php _e('Ja, voeg de WebwinkelKeur Tooltip toe aan mijn website.'); ?>
                    </label>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-javascript"><?php _e('JavaScript-integratie'); ?></label></th>
                <td>
                    <label>
                        <input type="checkbox" id="webwinkelkeur-javascript" name="webwinkelkeur_javascript" value="1" <?php if($config['javascript']) echo 'checked'; ?> />
                        <?php _e('Ja, voeg de WebwinkelKeur JavaScript toe aan mijn website.'); ?>
                    </label>
                </td>
            </tr> 
            <tr valign="top">
                <th scope="row"><label for="webwinkelkeur-javascript"><?php _e('Rich snippet sterren'); ?></label></th>
                <td>
                    <label>
                        <input type="checkbox" id="webwinkelkeur-rich-snippet" name="webwinkelkeur_rich_snippet" value="1" <?php if($config['rich_snippet']) echo 'checked'; ?> />
                        <?php _e('Ja, voeg een rich snippet toe aan de footer.'); ?>
                    </label>
                    <p class="description">
                        Google kan hiermee uw waardering in de zoekresultaten tonen. Gebruik op eigen risico.
                        <a target="_blank" href="https://support.google.com/webmasters/answer/99170?hl=nl">Meer informatie.</a>
                    </p>
                </td>
            </tr> 
        </table>
        <?php submit_button(); ?>
    </div>
</form>
