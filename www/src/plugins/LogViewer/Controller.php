<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\LogViewer;

use Piwik\Common;
use Piwik\Piwik;

/**
 * A controller let's you for example create a page that can be added to a menu. For more information read our guide
 * http://developer.piwik.org/guides/mvc-in-piwik or have a look at the our API references for controller and view:
 * http://developer.piwik.org/api-reference/Piwik/Plugin/Controller and
 * http://developer.piwik.org/api-reference/Piwik/View
 */
class Controller extends \Piwik\Plugin\ControllerAdmin
{
    public function index()
    {
        Piwik::checkUserHasSuperUserAccess();

        $limit = Common::getRequestVar('limit', 100, 'int');

        // Render the Twig template templates/index.twig and assign the view variable answerToLife to the view.
        return $this->renderTemplate('index', array(
            'limit' => $limit
        ));
    }
}
