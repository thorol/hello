<?php

/**
 * @var rex_addon $this
 */

 if (rex_addon::get('cronjob')->isAvailable()) {
    rex_cronjob_manager::registerType('rex_cronjob_hello');
}