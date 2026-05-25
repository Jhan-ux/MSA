<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="/msa_pagina/css/pages.css">
<link rel="stylesheet" href="/msa_pagina/css/contacto.css">

<!-- HERO CONTACTO -->
<div class="page-hero" style="background-image: url('/msa_pagina/img/localprueba.jpg');">
    <div class="page-hero__overlay"></div>
    <div class="page-hero__content">
        <span class="page-hero__badge">MSA Automotriz</span>
        <h1 class="page-hero__title"> CONT&Aacute;CTANOS</h1>
        <p class="page-hero__sub">Estamos aqu&iacute; para ayudarte. Escr&iacute;benos o ll&aacute;manos y te atendemos de inmediato.</p>
    </div>
</div>

<!-- BREADCRUMB -->
<nav class="page-breadcrumb">
    <a href="/msa_pagina/index.php">Inicio</a>
    <span>/</span>
    Contacto
</nav>

<!-- CONTACTO: FORMULARIO + INFO -->
<div class="contacto-wrap">

    <!-- Formulario -->
    <div>
        <h2 class="contacto-form__title">Env&iacute;anos un mensaje</h2>
        <p class="contacto-form__sub">Completa el formulario y nos pondremos en contacto contigo a la brevedad posible.</p>

        <form class="contacto-form" action="#" method="post">

            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre completo *</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Tel&eacute;fono / Celular *</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Ej: 987 654 321" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Correo electr&oacute;nico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@email.com">
            </div>

            <div class="form-group">
                <label for="marca">Marca de inter&eacute;s</label>
                <select id="marca" name="marca">
                    <option value="">-- Selecciona una marca --</option>
                    <option value="baic">BAIC</option>
                    <option value="chevrolet">Chevrolet</option>
                    <option value="dongfeng">Dongfeng</option>
                    <option value="forland">Forland</option>
                    <option value="foton">Foton</option>
                    <option value="honda_autos">Honda Autos</option>
                    <option value="honda_motos">Honda Motos</option>
                    <option value="isuzu_camiones">Isuzu Camiones</option>
                    <option value="isuzu_pickups">Isuzu Pick-Ups</option>
                    <option value="omoda_jaecoo">Omoda &amp; Jaecoo</option>
                    <option value="otro">Otro / Servicio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="asunto">Asunto *</label>
                <input type="text" id="asunto" name="asunto" placeholder="&iquest;En qu&eacute; podemos ayudarte?" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escribe tu consulta aqu&iacute;..." required></textarea>
            </div>

            <button type="submit" class="form-submit">
                 Enviar mensaje
            </button>

        </form>
    </div>

    <!-- Info de contacto -->
    <aside class="contacto-info">
        <h3 class="contacto-info__title">Informaci&oacute;n de Contacto</h3>

        <ul class="contacto-info__list">
            <li>
                
                <div>
                    <strong>Tel&eacute;fono</strong>
                    (076) 123-456 &nbsp;|&nbsp; (076) 789-012
                </div>
            </li>
            <li>
                
                <div>
                    <strong>WhatsApp</strong>
                    +51 986 339 369
                </div>
            </li>
            <li>
                
                <div>
                    <strong>Correo</strong>
                    contacto@msaautomotriz.com
                </div>
            </li>
            <li>
                
                <div>
                    <strong>Sede Cajamarca</strong>
                    Av. Independencia 1234, Cajamarca
                </div>
            </li>
            <li>
                
                <div>
                    <strong>Sede Ba&ntilde;os del Inca</strong>
                    Carretera Ba&ntilde;os del Inca km 3.5
                </div>
            </li>
            <li>
                
                <div>
                    <strong>Horario de Atenci&oacute;n</strong>
                    Lun &ndash; Vie: 8:00 am a 6:00 pm<br>
                    S&aacute;b: 8:00 am a 1:00 pm
                </div>
            </li>
        </ul>

        <a href="https://wa.me/51986339369?text=Hola,%20me%20comunico%20desde%20la%20p%C3%A1gina%20web%20y%20quisiera%20m%C3%A1s%20informaci%C3%B3n" class="contacto-info__wa" target="_blank" rel="noopener">
             Escribir por WhatsApp
        </a>
    </aside>

</div>

<!-- Botón flotante WhatsApp -->
<a href="https://wa.me/51986339369" class="whatsapp-btn" target="_blank" rel="noopener" aria-label="Contactar por WhatsApp">
    
</a>

<?php include '../includes/footer.php'; ?>
