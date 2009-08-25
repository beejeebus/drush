<?php
// $Id$

/**
 * @file
 * Documentation for Drush.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Take action before any command is run. Logging an error stops command execution.
 */
function hook_drush_init() {

}

/**
 * Run before a specific command executes. 
 * 
 * Logging an error stops command execution, and the rollback function (if any)
 * for each hook implementation is invoked - hook_COMMAND_validate_rollback().
 */
function hook_COMMAND_validate() {

}

/**
 * Run before a specific command executes. Logging an error stops command execution.
 *
 * Logging an error stops command execution, and the rollback function (if any)
 * for each hook implementation is invoked - hook_pre_COMMAND_rollback().
 */
function hook_pre_COMMAND() {

}

/**
 * Run after a specific command executes. Logging an error stops command execution.
 * 
 * Logging an error stops command execution, and the rollback function (if any)
 * for each hook implementation is invoked - hook_post_COMMAND_rollback().
 */
function hook_post_COMMAND() {

}

/**
 * Take action after any command is run.
 */
function hook_drush_exit() {

}

/**
 * Take action after a project has been downloaded.
 */
function hook_drush_pm_post_install($project, $release, $destination) {

}

/**
 * Take action after a project has been updated.
 */
function hook_pm_post_update($release_name, $release_candidate_version, $project_parent_path) {

}





/**
 * @} End of "addtogroup hooks".
 */
