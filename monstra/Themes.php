<?php
namespace Monstra;

use Url;
use Response;

/**
 * This file is part of the Monstra.
 *
 * (c) Romanenko Sergey / Awilum <awilum@msn.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Themes
{
    /**
     * @var Monstra
     */
    protected $monstra;

    /**
     * __construct
     */
    public function __construct(Monstra $c)
    {
        $this->monstra = $c;
    }

    public function renderTemplate($page)
    {
        if (empty($page['template'])) {
            $template_name = 'index';
        } else {
            $template_name = $page['template'];
        }

        $template_ext = '.php';

        include THEMES_PATH . '/' . $this->monstra['config']->get('site.theme') . '/' . $template_name . $template_ext;
    }

}