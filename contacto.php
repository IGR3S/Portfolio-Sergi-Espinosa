<?php
$pageTitle = 'Contacto | Sergi Espinosa';
$status = null;
$form = ['empresa' => '', 'email' => '', 'asunto' => '', 'direccion' => '', 'localidad' => '', 'postal' => '', 'mensaje' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($form as $field => $value) {
        $form[$field] = trim($_POST[$field] ?? '');
    }
    $email = filter_var($form['email'], FILTER_VALIDATE_EMAIL);
    if (!$form['empresa'] || !$email || !$form['asunto'] || !$form['direccion'] || !$form['localidad'] || !$form['postal'] || !$form['mensaje']) {
        $status = ['type' => 'error', 'text' => 'Completa todos los campos con información válida.'];
    } elseif (preg_match('/[\r\n]/', $form['empresa'] . $form['email'] . $form['asunto'])) {
        $status = ['type' => 'error', 'text' => 'Los datos enviados no son válidos.'];
    } else {
        $body = "Nueva solicitud de contacto\n\nEmpresa: {$form['empresa']}\nCorreo de respuesta: {$email}\nAsunto: {$form['asunto']}\nDirección: {$form['direccion']}\nLocalidad: {$form['localidad']}\nCódigo postal: {$form['postal']}\n\nMensaje:\n{$form['mensaje']}";
        $headers = "From: Portfolio Sergi Espinosa <no-reply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . ">\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";
        $sent = @mail('sergiesbe@gmail.com', 'Portfolio: ' . $form['asunto'], $body, $headers);
        $status = $sent
            ? ['type' => 'success', 'text' => 'Gracias. Tu mensaje se ha enviado correctamente.']
            : ['type' => 'error', 'text' => 'No se ha podido enviar el mensaje. Escríbeme directamente a sergiesbe@gmail.com.'];
        if ($sent) $form = array_fill_keys(array_keys($form), '');
    }
}
require_once 'templates/header.php';
?>

<section class="contact-page container">
    <div class="contact-intro">
        <p class="eyebrow eyebrow-purple">Contacto</p>
        <h1>Hagamos algo<br>que importe.</h1>
        <p>Cuéntame un poco sobre tu empresa y me pondré en contacto contigo lo antes posible.</p>
        <a href="mailto:sergiesbe@gmail.com" class="contact-email">sergiesbe@gmail.com <span aria-hidden="true">↗</span></a>
    </div>
    <form class="contact-form" action="contacto.php" method="post" novalidate>
        <?php if ($status): ?><p class="form-message <?= $status['type'] ?>" role="status"><?= htmlspecialchars($status['text'], ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        <label>Nombre de la empresa<input name="empresa" type="text" value="<?= htmlspecialchars($form['empresa'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="organization"></label>
        <label>Correo para responderte<input name="email" type="email" value="<?= htmlspecialchars($form['email'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="email"></label>
        <label>Asunto<input name="asunto" type="text" value="<?= htmlspecialchars($form['asunto'], ENT_QUOTES, 'UTF-8') ?>" required></label>
        <fieldset><legend>Localización</legend>
            <label>Dirección<input name="direccion" type="text" placeholder="Nombre de la calle y número" value="<?= htmlspecialchars($form['direccion'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="street-address"></label>
            <div class="form-row"><label>Localidad<input name="localidad" type="text" value="<?= htmlspecialchars($form['localidad'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="address-level2"></label><label>Código postal<input name="postal" type="text" value="<?= htmlspecialchars($form['postal'], ENT_QUOTES, 'UTF-8') ?>" required autocomplete="postal-code"></label></div>
        </fieldset>
        <label>Mensaje<textarea name="mensaje" rows="3" required><?= htmlspecialchars($form['mensaje'], ENT_QUOTES, 'UTF-8') ?></textarea></label>
        <button class="button button-dark" type="submit">Enviar solicitud <span aria-hidden="true">→</span></button>
    </form>
</section>

<?php require_once 'templates/footer.php'; ?>
