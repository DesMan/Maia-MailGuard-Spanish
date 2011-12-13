<?php
    /*
     * $Id: adminusers.php,v 1.1.1.1.4.3 2004/09/07 17:34:55 jleaver Exp $
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */

    // Page subtitle
    $lang['banner_subtitle'] =  "Administración: Usuarios";

    // Table headers
    $lang['header_users_menu'] =  "Usuarios";
    $lang['header_add_email'] =  "Agregar nueva dirección/alias de Email";
    $lang['header_link_email'] =  "Link E-mail Address/Alias";
    $lang['header_delete_email'] =  "Borrar dirección/alias de Email";
    $lang['header_delete_user'] =  "Borrar Usuarios";

    // Text messages
    $lang['text_lookup_user'] =  "Lookup user";
    $lang['text_wildcard'] =  "wildcard";
    $lang['text_new_email'] =  "New E-mail address/alias";
    $lang['text_email'] =  "E-mail address/alias";
    $lang['text_user'] =  "Cuenta de usuario";
    $lang['text_delete_email'] =  "E-mail address/alias";
    $lang['text_address_linked'] =  "Linked %s to user %s.";
    $lang['text_address_not_linked'] =  "Unable to link one or more addresses to user accounts.";
    $lang['text_address_added'] =  "Address %s has been added.";
    $lang['text_address_not_added'] =  "Address %s could NOT be added.";
    $lang['text_address_deleted'] =  "The selected e-mail addresses have been deleted.";
    $lang['text_address_not_deleted'] =  "Una o más de las direcciones seleccionadas NO serán borradas.";
    $lang['text_user_found'] =  "%ld Usuarios encontrados";
    $lang['text_user_not_found'] =  "No users matching your query were found.";
    $lang['text_user_deleted'] =  "El usuario seleccionado ha sido borrado.";
    $lang['text_user_not_deleted'] =  "Uno o más de los usuarios seleccionados NO pueden ser borrados.";
    $lang['text_email_subject'] =  "Bienvenido a Maia Mailguard";
    $lang['text_email_from'] =  "Maia Mailguard";
    $lang['text_no_users'] =  "No hay usuarios disponibles";
    $lang['text_no_addresses'] =  "No hay direcciones de correo disponibles.";

    // Buttons
    $lang['button_lookup'] =  "Encontrar Usuarios";
    $lang['button_add_email'] =  "Add New E-mail Address/Alias";
    $lang['button_link_email'] =  "Link E-mail Address/Alias";
    $lang['button_delete_email'] =  "Borrar dirección de correo/Alias";
    $lang['button_delete_user'] =  "Borrar Usuarios";
    
    // Links
    $lang['link_admin_menu'] =  "Volver al Menú de Adminstración";
    $lang['link_users_menu'] =  "Volver al menu de Usuarios";
?>