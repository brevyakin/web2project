<?php
/**
 * Class for testing Web2project\Field\Percent functionality
 *
 * @author      Keith Casey <contrib@caseysoftware.com>
 * @package     web2project
 * @subpackage  unit_tests
 * @license     Clear BSD
 * @link        http://www.web2project.net
 */

// NOTE: This path is relative to Phing's build.xml, not this test.
include_once 'unit_tests/CommonSetup.php';

class Web2project_Fields_PercentTest extends CommonSetup
{
    protected function setUp()
    {
        parent::setUp();

        $this->obj = new \Web2project\Fields\Percent();
    }

    public function testView()
    {
        $output = $this->obj->view('38.7');
        $this->assertEquals('39%', $output);
    }
}