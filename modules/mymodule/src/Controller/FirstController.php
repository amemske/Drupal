<?php
/**
 * @file
 * Contains \Drupal\mymodule\Controller\FirstController.
 */

 namespace Drupal\mymodule\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class FirstController extends ControllerBase {
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => t('This is a custom page created using a mymodule'),
        );
    }
 }