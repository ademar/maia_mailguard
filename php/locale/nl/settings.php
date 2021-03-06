<?php
    /*
     * $Id$
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
    $lang['banner_subtitle'] =  "Mail Filter Instellingen";

    // Table headers
    $lang['header_addresses'] =  "E-mail Adressen";
    $lang['header_miscellaneous'] =  "Verscheidene instellingen";
    $lang['header_address'] =  "Adres";
    $lang['header_login_info'] =  "Login Gegevens";

    // Text messages
    $lang['text_username'] =  "Gebruikersnaam";
    $lang['text_email_address'] =  "E-mail adres";
    $lang['text_password'] =  "Wachtwoord";
    $lang['text_reminders'] =  "Zend quarantaine herinnerings e-mail?";
    $lang['text_charts'] =  "Toon grafische overzichten?";
    $lang['text_yes'] =  "Ja";
    $lang['text_no'] =  "Nee";
    $lang['text_virus_scanning'] =  "Virusscanner";
    $lang['text_enabled'] =  "Ingeschakeld";
    $lang['text_disabled'] =  "Uitgeschakeld";
    $lang['text_quarantined'] =  "Geplaatst in quarantaine";
    $lang['text_labeled'] =  "Gemarkeerd";
    $lang['text_discarded'] =  "Weggegooid";
    $lang['text_detected_viruses'] =  "Berichten met virussen moeten worden...";
    $lang['text_spam_filtering'] =  "Spamfilter";
    $lang['text_detected_spam'] =  "Vermeende spam moet worden...";
    $lang['text_prefix_subject'] =  "Voeg spam identificatietext aan onderwerp toe";
    $lang['text_add_spam_header'] =  "Voeg 'X-Spam:' headers toe bij score";
    $lang['text_consider_mail_spam'] =  "Beschouw bericht 'Spam' bij score";
    $lang['text_quarantine_spam'] =  "Plaats Spam in quarantaine als score";
    $lang['text_kill_spam'] =  "Verwijder Spam (zonder quarantaine) als score";
    $lang['text_attachment_filtering'] =  "Bijlage-type Filter";
    $lang['text_mail_with_attachments'] =  "Berichten met gevaarlijke bijlagen moeten worden...";
    $lang['text_bad_header_filtering'] =  "Filteren op Malifide headers";
    $lang['text_mail_with_bad_headers'] =  "Berichten met malafide headers moeten worden...";
    $lang['text_settings_updated'] =  "Uw mail filter instellingen zijn geupdate.";
    $lang['text_address_added'] =  "Adres %s is aan uw adres gekoppeld.";
    $lang['text_login_failed'] =  "Authenticatie mislukt voor '%s'.";
    $lang['text_primary'] =  "Primair Adres";
    $lang['text_no_addresses_linked'] =  "Geen adressen zijn aan dit account gekoppeld.";
    $lang['text_new_primary_email'] =  "%s is nu uw primaire e-mail adres.";
    $lang['text_language'] =  "Gebruikte taal";
    $lang['text_charset'] =  "Gebruikte Karakterset";
    $lang['text_theme']	= "Thema";
    $lang['text_spamtrap'] =  "Is dit een spam-trap account?";
    $lang['text_auto_whitelist'] =  "Voeg zenders van herstelde mail toe aan uw whitelist?";
    $lang['text_items_per_page'] =  "Aantal berichten per pagina?";
    $lang['text_digest_interval'] = "Interval tussen overzichten? (0 om uit te schakelen, in timen)";
    $lang['text_domain_digest_interval'] = "Standaard interval tussen overzichten? (0 om uit te schakelen, in timen)";
    $lang['text_new_login_name'] =  "Nieuwe gebruikernaam";
    $lang['text_new_password'] =  "Nieuw wachtwoord";
    $lang['text_confirm_new_password'] =  "Bevestig Nieuw wachtwoord";
    $lang['text_login_name_empty'] =  "Een gebruikersnaam is vereist.";
    $lang['text_login_name_not_allowed'] =  "Gebruikersnaam kan niet beginnen met '@'.";
    $lang['text_password_empty'] =  "Een wachtwoord bevestiging moet opgegeven worden.";
    $lang['text_password_mismatch'] =  "De opgegeven wachtwoorden zijn niet gelijk.";
    $lang['text_login_name_exists'] =  "Deze gebruikersnaam is reeds in gebruik.";
    $lang['text_password_updated'] =  "Uw wachtwoord is gewijzigd.";
    $lang['text_credentials_updated'] =  "Uw gebruikersnaam en wachtwoord zijn gewijzigd.";
    $lang['text_password_updated'] =  "Uw wachtwoord is aangepast.";
    $lang['text_credentials_updated'] =  "Uw gebruikersnaam en wachtwoord zijn aangepast.";

    // Buttons
    $lang['button_add_email_address'] =  "Voeg E-Mail adres toe";
    $lang['button_reset'] =  "Herstel";
    $lang['button_update_misc'] =  "Update Verscheidene Instellingen";
    $lang['button_update_address'] =  "Update instellingen voor dit adres";
    $lang['button_update_all_addresses'] =  "Update instellingen voor ALLE Adressen";
    $lang['button_make_primary'] =  "Maak Primair";
    $lang['button_change_login_info'] =  "Update Login Gegevens";

    // Links
    $lang['link_settings'] =  "Keer terug naar uw instellingen pagina";
?>
