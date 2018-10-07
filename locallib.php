<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This file contains the definition for the library class for gradeqr submission plugin
 *
 * This class provides all the functionality for the new assign module.
 *
 * @package   assignsubmission_gradeqr
 * @copyright 2018 Michael Backus {@link http://gradeqr.akrobotnerd.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * library class for gradeqr submission plugin extending submission plugin base class
 *
 * @package assignsubmission_gradeqr
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class assign_submission_gradeqr extends assign_submission_plugin {

    /**
     * Get the name of the gradeqr submission plugin
     * @return string
     */
    public function get_name() {
        return get_string('gradeqr', 'assignsubmission_gradeqr');
    }


    /**
     * Get gradeqr submission information from the database
     *
     * @param  int $submissionid
     * @return mixed
     */
     
     /*
    private function get_gradeqr_submission($submissionid) {
        global $DB;

        return $DB->get_record('assignsubmission_gradeqr', array('submission'=>$submissionid));
    }
    */
    
    /**
     * Get the settings for gradeqr submission plugin
     *
     * @param MoodleQuickForm $mform The form to add elements to
     * @return void
     */
     
     /*
    public function get_settings(MoodleQuickForm $mform) {
        global $CFG, $COURSE;

        //$defaultwordlimit = $this->get_config('wordlimit') == 0 ? '' : $this->get_config('wordlimit');
        //$defaultwordlimitenabled = $this->get_config('wordlimitenabled');

        //$options = array('size' => '6', 'maxlength' => '6');
        //$name = get_string('wordlimit', 'assignsubmission_gradeqr');

        // Create a text box that can be enabled/disabled for gradeqr word limit.
        //$wordlimitgrp = array();
        //$wordlimitgrp[] = $mform->createElement('text', 'assignsubmission_gradeqr_wordlimit', '', $options);
        //$wordlimitgrp[] = $mform->createElement('checkbox', 'assignsubmission_gradeqr_wordlimit_enabled',
                '', get_string('enable'));
        //$mform->addGroup($wordlimitgrp, 'assignsubmission_gradeqr_wordlimit_group', $name, ' ', false);
        //$mform->addHelpButton('assignsubmission_gradeqr_wordlimit_group',
                              'wordlimit',
                              'assignsubmission_gradeqr');
        //$mform->disabledIf('assignsubmission_gradeqr_wordlimit',
                           'assignsubmission_gradeqr_wordlimit_enabled',
                           'notchecked');

        // Add numeric rule to text field.
        //$wordlimitgrprules = array();
        //$wordlimitgrprules['assignsubmission_gradeqr_wordlimit'][] = array(null, 'numeric', null, 'client');
        //$mform->addGroupRule('assignsubmission_gradeqr_wordlimit_group', $wordlimitgrprules);

        // Rest of group setup.
        //$mform->setDefault('assignsubmission_gradeqr_wordlimit', $defaultwordlimit);
        //$mform->setDefault('assignsubmission_gradeqr_wordlimit_enabled', $defaultwordlimitenabled);
        //$mform->setType('assignsubmission_gradeqr_wordlimit', PARAM_INT);
        //$mform->disabledIf('assignsubmission_gradeqr_wordlimit_group',
                           'assignsubmission_gradeqr_enabled',
                           'notchecked');
    }
    */

    /**
     * Save the settings for gradeqr submission plugin
     *
     * @param stdClass $data
     * @return bool
     */
     
     /*
    public function save_settings(stdClass $data) {
        if (empty($data->assignsubmission_gradeqr_wordlimit) || empty($data->assignsubmission_gradeqr_wordlimit_enabled)) {
            $wordlimit = 0;
            $wordlimitenabled = 0;
        } else {
            $wordlimit = $data->assignsubmission_gradeqr_wordlimit;
            $wordlimitenabled = 1;
        }

        $this->set_config('wordlimit', $wordlimit);
        $this->set_config('wordlimitenabled', $wordlimitenabled);

        return true;
    }
    */

    /**
     * Add form elements for settings
     *
     * @param mixed $submission can be null
     * @param MoodleQuickForm $mform
     * @param stdClass $data
     * @return true if elements were added to the form
     */
     
     /*
    public function get_form_elements($submission, MoodleQuickForm $mform, stdClass $data) {
        $elements = array();

        $editoroptions = $this->get_edit_options();
        $submissionid = $submission ? $submission->id : 0;

        if (!isset($data->gradeqr)) {
            $data->gradeqr = '';
        }
        if (!isset($data->gradeqrformat)) {
            $data->gradeqrformat = editors_get_preferred_format();
        }

        if ($submission) {
            $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);
            if ($gradeqrsubmission) {
                $data->gradeqr = $gradeqrsubmission->gradeqr;
                $data->gradeqrformat = $gradeqrsubmission->onlineformat;
            }

        }

        $data = file_prepare_standard_editor($data,
                                             'gradeqr',
                                             $editoroptions,
                                             $this->assignment->get_context(),
                                             'assignsubmission_gradeqr',
                                             ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                             $submissionid);
        $mform->addElement('editor', 'gradeqr_editor', $this->get_name(), null, $editoroptions);

        return true;
    }
    */
    
    /**
     * Editor format options
     *
     * @return array
     */
     
     /*
    private function get_edit_options() {
        $editoroptions = array(
            'noclean' => false,
            'maxfiles' => EDITOR_UNLIMITED_FILES,
            'maxbytes' => $this->assignment->get_course()->maxbytes,
            'context' => $this->assignment->get_context(),
            'return_types' => (FILE_INTERNAL | FILE_EXTERNAL | FILE_CONTROLLED_LINK),
            'removeorphaneddrafts' => true // Whether or not to remove any draft files which aren't referenced in the text.
        );
        return $editoroptions;
    }
    
    */

    /**
     * Save data to the database and trigger plagiarism plugin,
     * if enabled, to scan the uploaded content via events trigger
     *
     * @param stdClass $submission
     * @param stdClass $data
     * @return bool
     */
     
     /*
    public function save(stdClass $submission, stdClass $data) {
        global $USER, $DB;

        $editoroptions = $this->get_edit_options();

        $data = file_postupdate_standard_editor($data,
                                                'gradeqr',
                                                $editoroptions,
                                                $this->assignment->get_context(),
                                                'assignsubmission_gradeqr',
                                                ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                                $submission->id);

        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);

        $fs = get_file_storage();

        $files = $fs->get_area_files($this->assignment->get_context()->id,
                                     'assignsubmission_gradeqr',
                                     ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                     $submission->id,
                                     'id',
                                     false);

        // Check word count before submitting anything.
        $exceeded = $this->check_word_count(trim($data->gradeqr));
        if ($exceeded) {
            $this->set_error($exceeded);
            return false;
        }

        $params = array(
            'context' => context_module::instance($this->assignment->get_course_module()->id),
            'courseid' => $this->assignment->get_course()->id,
            'objectid' => $submission->id,
            'other' => array(
                'pathnamehashes' => array_keys($files),
                'content' => trim($data->gradeqr),
                'format' => $data->gradeqr_editor['format']
            )
        );
        if (!empty($submission->userid) && ($submission->userid != $USER->id)) {
            $params['relateduserid'] = $submission->userid;
        }
        $event = \assignsubmission_gradeqr\event\assessable_uploaded::create($params);
        $event->trigger();

        $groupname = null;
        $groupid = 0;
        // Get the group name as other fields are not transcribed in the logs and this information is important.
        if (empty($submission->userid) && !empty($submission->groupid)) {
            $groupname = $DB->get_field('groups', 'name', array('id' => $submission->groupid), MUST_EXIST);
            $groupid = $submission->groupid;
        } else {
            $params['relateduserid'] = $submission->userid;
        }

        $count = count_words($data->gradeqr);

        // Unset the objectid and other field from params for use in submission events.
        unset($params['objectid']);
        unset($params['other']);
        $params['other'] = array(
            'submissionid' => $submission->id,
            'submissionattempt' => $submission->attemptnumber,
            'submissionstatus' => $submission->status,
            'gradeqrwordcount' => $count,
            'groupid' => $groupid,
            'groupname' => $groupname
        );

        if ($gradeqrsubmission) {

            $gradeqrsubmission->gradeqr = $data->gradeqr;
            $gradeqrsubmission->onlineformat = $data->gradeqr_editor['format'];
            $params['objectid'] = $gradeqrsubmission->id;
            $updatestatus = $DB->update_record('assignsubmission_gradeqr', $gradeqrsubmission);
            $event = \assignsubmission_gradeqr\event\submission_updated::create($params);
            $event->set_assign($this->assignment);
            $event->trigger();
            return $updatestatus;
        } else {

            $gradeqrsubmission = new stdClass();
            $gradeqrsubmission->gradeqr = $data->gradeqr;
            $gradeqrsubmission->onlineformat = $data->gradeqr_editor['format'];

            $gradeqrsubmission->submission = $submission->id;
            $gradeqrsubmission->assignment = $this->assignment->get_instance()->id;
            $gradeqrsubmission->id = $DB->insert_record('assignsubmission_gradeqr', $gradeqrsubmission);
            $params['objectid'] = $gradeqrsubmission->id;
            $event = \assignsubmission_gradeqr\event\submission_created::create($params);
            $event->set_assign($this->assignment);
            $event->trigger();
            return $gradeqrsubmission->id > 0;
        }
    }
    */

    /**
     * Return a list of the text fields that can be imported/exported by this plugin
     *
     * @return array An array of field names and descriptions. (name=>description, ...)
     */
     
    /*
    public function get_editor_fields() {
        return array('gradeqr' => get_string('pluginname', 'assignsubmission_gradeqr'));
    }
    */

    /**
     * Get the saved text content from the editor
     *
     * @param string $name
     * @param int $submissionid
     * @return string
     */
    
    /*
    public function get_editor_text($name, $submissionid) {
        if ($name == 'gradeqr') {
            $gradeqrsubmission = $this->get_gradeqr_submission($submissionid);
            if ($gradeqrsubmission) {
                return $gradeqrsubmission->gradeqr;
            }
        }

        return '';
    }
    */
    
    /**
     * Get the content format for the editor
     *
     * @param string $name
     * @param int $submissionid
     * @return int
     */
    
    /*
    public function get_editor_format($name, $submissionid) {
        if ($name == 'gradeqr') {
            $gradeqrsubmission = $this->get_gradeqr_submission($submissionid);
            if ($gradeqrsubmission) {
                return $gradeqrsubmission->onlineformat;
            }
        }

        return 0;
    }
    */

     /**
      * Display gradeqr word count in the submission status table
      *
      * @param stdClass $submission
      * @param bool $showviewlink - If the summary has been truncated set this to true
      * @return string
      */
      
      
    public function view_summary(stdClass $submission, & $showviewlink) {
        global $CFG;

        /*
        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);
        // Always show the view link.
        $showviewlink = true;

        if ($gradeqrsubmission) {
            // This contains the shortened version of the text plus an optional 'Export to portfolio' button.
            $text = $this->assignment->render_editor_content(ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                                             $gradeqrsubmission->submission,
                                                             $this->get_type(),
                                                             'gradeqr',
                                                             'assignsubmission_gradeqr', true);

            // The actual submission text.
            $gradeqr = trim($gradeqrsubmission->gradeqr);
            // The shortened version of the submission text.
            $shorttext = shorten_text($gradeqr, 140);

            $plagiarismlinks = '';

            if (!empty($CFG->enableplagiarism)) {
                require_once($CFG->libdir . '/plagiarismlib.php');

                $plagiarismlinks .= plagiarism_get_links(array('userid' => $submission->userid,
                    'content' => $gradeqr,
                    'cmid' => $this->assignment->get_course_module()->id,
                    'course' => $this->assignment->get_course()->id,
                    'assignment' => $submission->assignment));
            }
            // We compare the actual text submission and the shortened version. If they are not equal, we show the word count.
            if ($gradeqr != $shorttext) {
                $wordcount = get_string('numwords', 'assignsubmission_gradeqr', count_words($gradeqr));

                return $plagiarismlinks . $wordcount . $text;
            } else {
                return $plagiarismlinks . $text;
            }
        }
        */
        return 'Put QR Code here.';
    }

    /**
     * Produce a list of files suitable for export that represent this submission.
     *
     * @param stdClass $submission - For this is the submission data
     * @param stdClass $user - This is the user record for this submission
     * @return array - return an array of files indexed by filename
     */
     
     /*
    public function get_files(stdClass $submission, stdClass $user) {
        global $DB;

        $files = array();
        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);

        if ($gradeqrsubmission) {
            $finaltext = $this->assignment->download_rewrite_pluginfile_urls($gradeqrsubmission->gradeqr, $user, $this);
            $formattedtext = format_text($finaltext,
                                         $gradeqrsubmission->onlineformat,
                                         array('context'=>$this->assignment->get_context()));
            $head = '<head><meta charset="UTF-8"></head>';
            $submissioncontent = '<!DOCTYPE html><html>' . $head . '<body>'. $formattedtext . '</body></html>';

            $filename = get_string('gradeqrfilename', 'assignsubmission_gradeqr');
            $files[$filename] = array($submissioncontent);

            $fs = get_file_storage();

            $fsfiles = $fs->get_area_files($this->assignment->get_context()->id,
                                           'assignsubmission_gradeqr',
                                           ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                           $submission->id,
                                           'timemodified',
                                           false);

            foreach ($fsfiles as $file) {
                $files[$file->get_filename()] = $file;
            }
        }

        return $files;
    }
    */

    /**
     * Display the saved text content from the editor in the view table
     *
     * @param stdClass $submission
     * @return string
     */
     
     
    public function view(stdClass $submission) {
        global $CFG;
        /*
        $result = '';

        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);

        if ($gradeqrsubmission) {

            // Render for portfolio API.
            $result .= $this->assignment->render_editor_content(ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                                                $gradeqrsubmission->submission,
                                                                $this->get_type(),
                                                                'gradeqr',
                                                                'assignsubmission_gradeqr');

            $plagiarismlinks = '';

            if (!empty($CFG->enableplagiarism)) {
                require_once($CFG->libdir . '/plagiarismlib.php');

                $plagiarismlinks .= plagiarism_get_links(array('userid' => $submission->userid,
                    'content' => trim($gradeqrsubmission->gradeqr),
                    'cmid' => $this->assignment->get_course_module()->id,
                    'course' => $this->assignment->get_course()->id,
                    'assignment' => $submission->assignment));
            }
        }

        return $plagiarismlinks . $result;
        */
        return 'Put QR Code here too.';
    }
    

    /**
     * Return true if this plugin can upgrade an old Moodle 2.2 assignment of this type and version.
     *
     * @param string $type old assignment subtype
     * @param int $version old assignment version
     * @return bool True if upgrade is possible
     */
    public function can_upgrade($type, $version) {
        return false;
    }


    /**
     * Upgrade the settings from the old assignment to the new plugin based one
     *
     * @param context $oldcontext - the database for the old assignment context
     * @param stdClass $oldassignment - the database for the old assignment instance
     * @param string $log record log events here
     * @return bool Was it a success?
     */
     
     /*
    public function upgrade_settings(context $oldcontext, stdClass $oldassignment, & $log) {
        // No settings to upgrade.
        return true;
    }
    */

    /**
     * Upgrade the submission from the old assignment to the new one
     *
     * @param context $oldcontext - the database for the old assignment context
     * @param stdClass $oldassignment The data record for the old assignment
     * @param stdClass $oldsubmission The data record for the old submission
     * @param stdClass $submission The data record for the new submission
     * @param string $log Record upgrade messages in the log
     * @return bool true or false - false will trigger a rollback
     */
     
     /*
    public function upgrade(context $oldcontext,
                            stdClass $oldassignment,
                            stdClass $oldsubmission,
                            stdClass $submission,
                            & $log) {
        global $DB;

        $gradeqrsubmission = new stdClass();
        $gradeqrsubmission->gradeqr = $oldsubmission->data1;
        $gradeqrsubmission->onlineformat = $oldsubmission->data2;

        $gradeqrsubmission->submission = $submission->id;
        $gradeqrsubmission->assignment = $this->assignment->get_instance()->id;

        if ($gradeqrsubmission->gradeqr === null) {
            $gradeqrsubmission->gradeqr = '';
        }

        if ($gradeqrsubmission->onlineformat === null) {
            $gradeqrsubmission->onlineformat = editors_get_preferred_format();
        }

        if (!$DB->insert_record('assignsubmission_gradeqr', $gradeqrsubmission) > 0) {
            $log .= get_string('couldnotconvertsubmission', 'mod_assign', $submission->userid);
            return false;
        }

        // Now copy the area files.
        $this->assignment->copy_area_files_for_upgrade($oldcontext->id,
                                                        'mod_assignment',
                                                        'submission',
                                                        $oldsubmission->id,
                                                        $this->assignment->get_context()->id,
                                                        'assignsubmission_gradeqr',
                                                        ASSIGNSUBMISSION_GRADEQR_FILEAREA,
                                                        $submission->id);
        return true;
    }
    */
    /**
     * Formatting for log info
     *
     * @param stdClass $submission The new submission
     * @return string
     */
     
     /*
    public function format_for_log(stdClass $submission) {
        // Format the info for each submission plugin (will be logged).
        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);
        $gradeqrloginfo = '';
        $gradeqrloginfo .= get_string('numwordsforlog',
                                         'assignsubmission_gradeqr',
                                         count_words($gradeqrsubmission->gradeqr));

        return $gradeqrloginfo;
    }
    */

    /**
     * The assignment has been deleted - cleanup
     *
     * @return bool
     */
     
     /*
    public function delete_instance() {
        global $DB;
        $DB->delete_records('assignsubmission_gradeqr',
                            array('assignment'=>$this->assignment->get_instance()->id));

        return true;
    }
    */

    /**
     * No text is set for this plugin
     *
     * @param stdClass $submission
     * @return bool
     */
     
     /*
    public function is_empty(stdClass $submission) {
        $gradeqrsubmission = $this->get_gradeqr_submission($submission->id);

        return empty($gradeqrsubmission->gradeqr);
    }
    */
    
    /**
     * Copied from comments plugin
     Always return true because the qr code is not part of the submission form.
     *
     * @param stdClass $submission
     * @return bool
     */
    public function is_empty(stdClass $submission) {
        return true;
    }

    /**
     * Determine if a submission is empty
     *
     * This is distinct from is_empty in that it is intended to be used to
     * determine if a submission made before saving is empty.
     *
     * @param stdClass $data The submission data
     * @return bool
     */
     
     /*
    public function submission_is_empty(stdClass $data) {
        if (!isset($data->gradeqr_editor)) {
            return true;
        }
        return !strlen((string)$data->gradeqr_editor['text']);
    }
    */

    /**
     * Get file areas returns a list of areas this plugin stores files
     * @return array - An array of fileareas (keys) and descriptions (values)
     */
     
     /*
    public function get_file_areas() {
        return array(ASSIGNSUBMISSION_GRADEQR_FILEAREA=>$this->get_name());
    }
    */

    /**
     * Copy the student's submission from a previous submission. Used when a student opts to base their resubmission
     * on the last submission.
     * @param stdClass $sourcesubmission
     * @param stdClass $destsubmission
     */
     
     /*
    public function copy_submission(stdClass $sourcesubmission, stdClass $destsubmission) {
        global $DB;

        // Copy the files across (attached via the text editor).
        $contextid = $this->assignment->get_context()->id;
        $fs = get_file_storage();
        $files = $fs->get_area_files($contextid, 'assignsubmission_gradeqr',
                                     ASSIGNSUBMISSION_GRADEQR_FILEAREA, $sourcesubmission->id, 'id', false);
        foreach ($files as $file) {
            $fieldupdates = array('itemid' => $destsubmission->id);
            $fs->create_file_from_storedfile($fieldupdates, $file);
        }

        // Copy the assignsubmission_gradeqr record.
        $gradeqrsubmission = $this->get_gradeqr_submission($sourcesubmission->id);
        if ($gradeqrsubmission) {
            unset($gradeqrsubmission->id);
            $gradeqrsubmission->submission = $destsubmission->id;
            $DB->insert_record('assignsubmission_gradeqr', $gradeqrsubmission);
        }
        return true;
    }
    */

    /**
     * Return a description of external params suitable for uploading an gradeqr submission from a webservice.
     *
     * @return external_description|null
     */
     
     /*
    public function get_external_parameters() {
        $editorparams = array('text' => new external_value(PARAM_RAW, 'The text for this submission.'),
                              'format' => new external_value(PARAM_INT, 'The format for this submission'),
                              'itemid' => new external_value(PARAM_INT, 'The draft area id for files attached to the submission'));
        $editorstructure = new external_single_structure($editorparams, 'Editor structure', VALUE_OPTIONAL);
        return array('gradeqr_editor' => $editorstructure);
    }
    */

    /**
     * Compare word count of gradeqr submission to word limit, and return result.
     *
     * @param string $submissiontext Onlinetext submission text from editor
     * @return string Error message if limit is enabled and exceeded, otherwise null
     */
     
     /*
    public function check_word_count($submissiontext) {
        global $OUTPUT;

        $wordlimitenabled = $this->get_config('wordlimitenabled');
        $wordlimit = $this->get_config('wordlimit');

        if ($wordlimitenabled == 0) {
            return null;
        }

        // Count words and compare to limit.
        $wordcount = count_words($submissiontext);
        if ($wordcount <= $wordlimit) {
            return null;
        } else {
            $errormsg = get_string('wordlimitexceeded', 'assignsubmission_gradeqr',
                    array('limit' => $wordlimit, 'count' => $wordcount));
            return $OUTPUT->error_text($errormsg);
        }
    }
    */

    /**
     * Return the plugin configs for external functions.
     *
     * @return array the list of settings
     * @since Moodle 3.2
     */
    public function get_config_for_external() {
        return (array) $this->get_config();
    }
}


