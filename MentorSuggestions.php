<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 8:34 PM
 */

require_once 'Konnect/functions/Database.class.php';
require_once 'Konnect/mappers/MentorSuggestions.php';

$ms = new MentorSuggestions();

var_dump($ms->GetMentorsByFilters('Technology','city'));

?>