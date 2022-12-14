<?php
// +------------------------------------------------------------------------+
// | class.upload.sk_SK.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Bryan 2008. All rights reserved.                         |
// | Version       0.25                                                     |
// | Last modified 2008-12-01                                               |
// | Email         bryan@bryan.sk                                           |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 as      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them as well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload Slovak translation
 *
 * @version   0.25
 * @author    Bryan (bryan@bryan.sk)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2008 - Bryan
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Chyba s??boru. Pros??m sk??ste znova.';
    $translation['local_file_missing']          = 'Lok??lny s??bor neexistuje.';
    $translation['local_file_not_readable']     = 'Lok??lny s??bor je ne??itate??n??.';
    $translation['uploaded_too_big_ini']        = 'Chyba odosielania s??boru (odosielan?? s??bor presahuje nasteven?? hodnotu upload_max_filesize v php.ini).';
    $translation['uploaded_too_big_html']       = 'Chyba odosielania s??boru (odosielan?? s??bor presahuje hodnotu MAX_FILE_SIZE, kter?? bola nastaven?? v HTML formul??ri).';
    $translation['uploaded_partial']            = 'Chyba odosielania s??boru (odoslan?? iba ??as?? s??boru).';
    $translation['uploaded_missing']            = 'Chyba odosielania s??boru (nebol odoslan?? ??iaden s??bor).';
    $translation['uploaded_unknown']            = 'Chyba odosielania s??boru (nezn??my chybov?? k??d).';
    $translation['try_again']                   = 'Chyba odosielania s??boru. Pros??m sk??ste znova.';
    $translation['file_too_big']                = 'S??bor je pr??li?? ve??k??.';
    $translation['no_mime']                     = 'Nie je mo??n?? zisti?? MIME typ.';
    $translation['incorrect_file']              = 'Nespr??vny typ s??boru.';
    $translation['image_too_wide']              = 'Obr??zok je ve??mi ??irok??.';
    $translation['image_too_narrow']            = 'Obr??zok je ve??mi ??zky.';
    $translation['image_too_high']              = 'Obr??zok je ve??mi vysok??.';
    $translation['image_too_short']             = 'Obr??zok je ve??mi n??zky.';
    $translation['ratio_too_high']              = 'Chybn?? proporcia obr??zku (obr??zok je ve??mi ??irok??).';
    $translation['ratio_too_low']               = 'Chybn?? proporcia obr??zku (obr??zok je ve??mi vysok??).';
    $translation['too_many_pixels']             = 'Obr??zok m?? pr??li?? ve??a pixelov.';
    $translation['not_enough_pixels']           = 'Obr??zok nem?? dostatok pixelov.';
    $translation['file_not_uploaded']           = 'S??bor nebol odoslan??. V procese sa ned?? pokra??ova??.';
    $translation['already_exists']              = '%s u?? existuje. Pros??m zme??te n??zov s??boru.';
    $translation['temp_file_missing']           = 'Nespr??vny do??asn?? s??bor. V procese sa ned?? pokra??ova??.';
    $translation['source_missing']              = 'Nespr??vny zdrojov?? s??bor. V procese sa ned?? pokra??ova??.';
    $translation['destination_dir']             = 'Nepodarilo sa vytvori?? cie??ov?? adres??r. V procese sa ned?? pokra??ova??.';
    $translation['destination_dir_missing']     = 'Cie??ov?? adres??r neexistuje. V procese sa ned?? pokra??ova??.';
    $translation['destination_path_not_dir']    = 'Cie??ov?? cesta nieje adres??r. V procese sa ned?? pokra??ova??.';
    $translation['destination_dir_write']       = 'Cie??ov?? adres??r sa ned?? zmeni?? na zapisovate??n??. V procese sa ned?? pokra??ova??.';
    $translation['destination_path_write']      = 'Do cie??ovej cesty sa ned?? zapisova??. V procese sa ned?? pokra??ova??.';
    $translation['temp_file']                   = 'Nie je mo??n?? vytvori?? do??asn?? s??bor. V procese sa ned?? pokra??ova??.';
    $translation['source_not_readable']         = 'Zdrojov?? s??bor sa ned?? ????ta??. V procese sa ned?? pokra??ova??.';
    $translation['no_create_support']           = 'Nie je zapnut?? podpora z??pisu %s.';
    $translation['create_error']                = 'Chyba pri vytv??ran?? %s obr??zku zo zdroja.';
    $translation['source_invalid']              = 'Nepodarilo sa pre????ta?? zdroj obr??zku. Je s??bor obr??zok?.';
    $translation['gd_missing']                  = 'Pravdepodobne ch??ba GD kni??nica.';
    $translation['watermark_no_create_support'] = 'Nie je zapnut?? podpora z??pisu %s, vodoznak sa ned?? pre????ta??.';
    $translation['watermark_create_error']      = 'Nie je zapnut?? podpora ????tania %s, vodoznak sa ned?? pre????ta??.';
    $translation['watermark_invalid']           = 'Nezn??my form??t obr??zku, vodoznak sa ned?? pre????ta??.';
    $translation['file_create']                 = 'Nie je zapnut?? podpora pre vytv??ranie %s.';
    $translation['no_conversion_type']          = 'Nedefinovan?? typ konverzie.';
    $translation['copy_failed']                 = 'Chyba kop??rovania s??boru na serveri. Funkcia copy() zlyhala.';
    $translation['reading_failed']              = 'Chyba ????tania s??boru.';   
